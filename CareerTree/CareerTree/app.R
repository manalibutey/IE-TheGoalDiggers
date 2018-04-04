require("RPostgreSQL")
# create a connection
# save the password that we can "hide" it as best as we can by collapsing it
pw <- {
  "careertree2018"
}

# loads the PostgreSQL driver
drv <- dbDriver("PostgreSQL")
# creates a connection to the postgres database
# note that "con" will be used later in each connection to the database
con <- dbConnect(drv, dbname = "ctdb_test",
                 host = "careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com", port = 5432,
                 user = "careertreetest", password = pw)
rm(pw) # removes the password
dbExistsTable(con, "percentage")

require(shiny)
require(visNetwork)

server <- function(input, output,session) {

  output$network <- renderVisNetwork({
    
    # Reading Table From PostgreSQL
    #########################################################################################################
       query <- parseQueryString(session$clientData$url_search)
       percentage <- dbGetQuery(con, paste("SELECT * from percentage where id = ", query))
      # percentage <- dbGetQuery(con, "SELECT * from percentage where id = 3656")
      #dbDisconnect(con)
      #dbUnloadDriver(drv)
        
      # split lacking skills value into different rows, and save to dataframe
      lacking_skill <- strsplit(percentage$lackingskill, split = ",")
      lacking_skill <- data.frame(relatedtitle = rep(percentage$relatedtitle, sapply(lacking_skill, length)), lackingskill = unlist(lacking_skill))
      # remove old lackingskill columns and merge with original table
      percentage <- within(percentage, rm(lackingskill))
      percentage <- merge(percentage, lacking_skill, by = c("relatedtitle"), all = TRUE)
      # change lackingskill column value from factor to character and delete missing rows
      percentage$lackingskill <- gsub('[[:digit:]]+', '', as.character(percentage$lackingskill))
      percentage <- na.omit(percentage)
      
        if (input$full_network01 == TRUE) {
          
          # create variable use for dataframe
          allNodes = unique(c(percentage$title,percentage$relatedtitle, percentage$lackingskill))
          # create repeating times for nodes
          related_title_times = length(unique(percentage$relatedtitle))
          lack_skills_times = length(unique(percentage$lackingskill))
          # create nodes values
          related_title_value = percentage$percentage[which(!(duplicated(percentage$relatedtitle)))]
          # create edge distance
          related_title_dist = (100 - related_title_value)*2.4
          skills_dist = rep(45*2.6, times = length(percentage$lackingskill))
          total_dist = c(related_title_dist, skills_dist)
          
          test_nodes01 <- data.frame(id = allNodes,
                                     label = paste(allNodes,c("", paste0(related_title_value,"%"), rep("Skill", times = lack_skills_times))),
                                     value = c(80, paste0(related_title_value,"%"), rep(80, times = lack_skills_times)),
                                     shape = c("star", rep("dot", times = related_title_times), rep("diamond", times = lack_skills_times)),
                                     color = c("lightslateblue", rep("lightskyblue", times = related_title_times), rep("pink", times = lack_skills_times)),
                                     group = c("Previous", rep("Related", times = related_title_times), rep("Lacking_Skills", times = lack_skills_times)),  
                                     title = c("Previously Occupation", paste0(related_title_value,"%"), rep("Skill", times = lack_skills_times)), stringsAsFactors = FALSE
          )
          
          test_edges01 <- data.frame( from = c(rep(unique(percentage$title), times = related_title_times), percentage$relatedtitle),
                                      to = c(unique(percentage$relatedtitle), percentage$lackingskill),
                                      #label = paste("Edge", 1:nodeTimes),
                                      length = total_dist
          )
          
          visNetwork(test_nodes01, test_edges01, height = "20px", width = "100%") %>% 
            visEdges(arrows = "to", color = list(color = "lightblue", highlight = "black")) %>%
            visPhysics(stabilization = FALSE) %>%
            visGroups(groupname = "Previous", color = "lightslateblue") %>%
            visGroups(groupname = "Related", color = "lightskyblue") %>%
            visGroups(groupname = "Lacking_Skills", color = "pink") %>%
            visLegend(width = 0.1, position = "left", main = "Group") %>%
            visOptions(highlightNearest = list(enabled = T, degree = 2, hover = T), selectedBy = "group", collapse = TRUE)
          
        }
        
        else{
          # create variable use for dataframe
          allNodes = unique(c(percentage$title,percentage$relatedtitle))
          # create repeating times for nodes
          related_title_times = length(unique(percentage$relatedtitle))
          # lack_skills_times = length(unique(percentage$lackingskill))
          # create nodes values
          related_title_value = percentage$percentage[which(!(duplicated(percentage$relatedtitle)))]
          # create edge distance
          related_title_dist = (100 - related_title_value)*2.4
          # skills_dist = rep(45*2.6, times = length(percentage$lackingskill))
          total_dist = c(related_title_dist)
          
          test_nodes01 <- data.frame(id = allNodes,
                                     label = paste(allNodes,c("", paste0(related_title_value,"%"))),
                                     value = c(80, paste0(related_title_value,"%")),
                                     shape = c("star", rep("dot", times = related_title_times)),
                                     color = c("lightslateblue", rep("lightskyblue", times = related_title_times)),
                                     group = c("Previous", rep("Related", times = related_title_times)),  
                                     title = c("Previously Occupation", paste0(related_title_value,"%")), stringsAsFactors = FALSE
          )
          
          test_edges01 <- data.frame( from = c(rep(unique(percentage$title), times = related_title_times)),
                                      to = c(unique(percentage$relatedtitle)),
                                      #label = paste("Edge", 1:nodeTimes),
                                      length = total_dist*2
          )
          
          visNetwork(test_nodes01, test_edges01, height = "20px", width = "100%") %>% 
            visEdges(arrows = "to", color = list(color = "lightblue", highlight = "black")) %>%
            visPhysics(stabilization = FALSE) %>%
            visGroups(groupname = "Previous", color = "lightslateblue") %>%
            visGroups(groupname = "Related", color = "lightskyblue") %>%
            # visGroups(groupname = "Lacking_Skills", color = "pink") %>%
            visLegend(width = 0.1, position = "left", main = "Group") %>%
            visOptions(highlightNearest = list(enabled = T, degree = 2, hover = T), selectedBy = "group", collapse = TRUE)
          # visInteraction(hover = TRUE) %>%
          
        }
  })
  
  output$network_now <- renderVisNetwork({
    
    # Reading Table From PostgreSQL
    #########################################################################################################
    query <- parseQueryString(session$clientData$url_search)
    percentage <- dbGetQuery(con, paste("SELECT * from percentage where id = ", query))
    #percentage <- dbGetQuery(con, "SELECT * from percentage where id = 3656")
    #dbDisconnect(con)
    #dbUnloadDriver(drv)
    
    # split lacking skills value into different rows, and save to dataframe
    lacking_knowledge <- strsplit(percentage$lackingknowledge, split = ",")
    lacking_knowledge <- data.frame(relatedtitle = rep(percentage$relatedtitle, sapply(lacking_knowledge, length)), lackingknowledge = unlist(lacking_knowledge))
    # remove old lackingskill columns and merge with original table
    percentage <- within(percentage, rm(lackingknowledge))
    percentage <- merge(percentage, lacking_knowledge, by = c("relatedtitle"), all = TRUE)
    # change lackingskill column value from factor to character and delete missing rows
    percentage$lackingknowledge <- gsub('[[:digit:]]+', '', as.character(percentage$lackingknowledge))
    percentage <- na.omit(percentage)
    
    if (input$full_network02 == TRUE) {
      
      # create variable use for dataframe
      allNodes = unique(c(percentage$title,percentage$relatedtitle, percentage$lackingknowledge))
      # create repeating times for nodes
      related_title_times = length(unique(percentage$relatedtitle))
      lack_knowledge_times = length(unique(percentage$lackingknowledge))
      # create nodes values
      related_title_value = percentage$percentage[which(!(duplicated(percentage$relatedtitle)))]
      # create edge distance
      related_title_dist = (100 - related_title_value)*2.4
      knowledge_dist = rep(45*2.6, times = length(percentage$lackingknowledge))
      total_dist = c(related_title_dist, knowledge_dist)
      
      test_nodes01 <- data.frame(id = allNodes,
                                 label = paste(allNodes,c("Previously Occupation", paste0(related_title_value,"%"), rep("Knowledge", times = lack_knowledge_times))),
                                 value = c(80, paste0(related_title_value,"%"), rep(80, times = lack_knowledge_times)),
                                 shape = c("star", rep("dot", times = related_title_times), rep("diamond", times = lack_knowledge_times)),
                                 color = c("lightslateblue", rep("lightskyblue", times = related_title_times), rep("pink", times = lack_knowledge_times)),
                                 group = c("Previous", rep("Related", times = related_title_times), rep("lacking_knowledge", times = lack_knowledge_times)),  
                                 title = c("Previously Occupation", paste0(related_title_value,"%"), rep("Knowledge", times = lack_knowledge_times)), stringsAsFactors = FALSE
      )
      
      test_edges01 <- data.frame( from = c(rep(unique(percentage$title), times = related_title_times), percentage$relatedtitle),
                                  to = c(unique(percentage$relatedtitle), percentage$lackingknowledge),
                                  #label = paste("Edge", 1:nodeTimes),
                                  length = total_dist
      )
      
      visNetwork(test_nodes01, test_edges01, height = "20px", width = "100%") %>% 
        visEdges(arrows = "to", color = list(color = "lightblue", highlight = "black")) %>%
        visPhysics(stabilization = FALSE) %>%
        visGroups(groupname = "Previous", color = "lightslateblue") %>%
        visGroups(groupname = "Related", color = "lightskyblue") %>%
        visGroups(groupname = "lacking_knowledge", color = "pink") %>%
        visLegend(width = 0.1, position = "left", main = "Group") %>%
        visOptions(highlightNearest = list(enabled = T, degree = 2, hover = T), selectedBy = "group")%>%
        visInteraction(tooltipStay = 600, dragView = TRUE)
    }
    
    else{
      # create variable use for dataframe
      allNodes = unique(c(percentage$title,percentage$relatedtitle))
      # create repeating times for nodes
      related_title_times = length(unique(percentage$relatedtitle))
      # lack_skills_times = length(unique(percentage$lackingskill))
      # create nodes values
      related_title_value = percentage$percentage[which(!(duplicated(percentage$relatedtitle)))]
      # create edge distance
      related_title_dist = (100 - related_title_value)*2.4
      # skills_dist = rep(45*2.6, times = length(percentage$lackingskill))
      total_dist = c(related_title_dist)
      
      test_nodes01 <- data.frame(id = allNodes,
                                 label = paste(allNodes,c("Previously Occupation", paste0(related_title_value,"%"))),
                                 value = c(80, paste0(related_title_value,"%")),
                                 shape = c("star", rep("dot", times = related_title_times)),
                                 color = c("lightslateblue", rep("lightskyblue", times = related_title_times)),
                                 group = c("Previous", rep("Related", times = related_title_times)),  
                                 title = c("Previously Occupation", paste0(related_title_value,"%")), stringsAsFactors = FALSE
      )
      
      test_edges01 <- data.frame( from = c(rep(unique(percentage$title), times = related_title_times)),
                                  to = c(unique(percentage$relatedtitle)),
                                  #label = paste("Edge", 1:nodeTimes),
                                  length = total_dist*2
      )
      
      visNetwork(test_nodes01, test_edges01, height = "20px", width = "100%") %>% 
        visEdges(arrows = "to", color = list(color = "lightblue", highlight = "black")) %>%
        visPhysics(stabilization = FALSE) %>%
        visGroups(groupname = "Previous", color = "lightslateblue") %>%
        visGroups(groupname = "Related", color = "lightskyblue") %>%
        # visGroups(groupname = "Lacking_Skills", color = "pink") %>%
        visLegend(width = 0.1, position = "left", main = "Group") %>%
        visOptions(highlightNearest = list(enabled = T, degree = 2, hover = T), selectedBy = "group")%>%
        visInteraction(tooltipStay = 600, dragView = TRUE)
      
      # visInteraction(hover = TRUE) %>%
      
    }
  })
  
  
}

#                                             Implement Shiny 
#########################################################################################################
ui <- fluidPage(

  titlePanel("According to your previous occupation, you can be:"),
  
  tags$div(class = "header", checked = NA,
           tags$p("Click on suggested occupation to see what you're still lacking:")
  ),
  
  navbarPage(
    "",
  # Application title
  tabPanel(
    "Lacking Skills",
    # Sidebar with controls to select the variable to plot against
    sidebarLayout(
      sidebarPanel(
        # provide option to choose different data source
        # checkboxInput("lacking_skills", "Show lacking skills of Each occupation", FALSE),
        checkboxInput("full_network01", "Show full network with lacking skills", FALSE)
      ),
      # Show the caption and plot of the requested variable against mpg
      mainPanel(
        # applhy caption funtion into main palel
        helpText(
          "By default, the visulization shows only related notes. By clicking check box - lacking_skills,
          the graph shows each related occupation with related lacking skills. By clicking 
          check box - full_network or both check box, it will display the whole network."
        ),
        # h3(textOutput("caption")),
        # output cbplot in main panel
        visNetworkOutput("network", height = "700px")
        # actionButton("goCol", "Collapsed !"),
        # actionButton("goUC", "uncollapse !")
        )
      )
  ),
  # Application title
  tabPanel(
    "Lacking Knowledge",
    # Sidebar with controls to select the variable to plot against
    sidebarLayout(
      sidebarPanel(
        # provide option to choose different data source
        # checkboxInput("lacking_skills", "Show lacking skills of Each occupation", FALSE),
        checkboxInput("full_network02", "Show full network with lacking Knowledge", FALSE)
      ),
      # Show the caption and plot of the requested variable against mpg
      mainPanel(
        # applhy caption funtion into main palel
        helpText(
          "By default, the visulization shows only related notes. By clicking check box - lacking_skills,
          the graph shows each related occupation with related lacking skills. By clicking 
          check box - full_network or both check box, it will display the whole network."
        ),
        # h3(textOutput("caption")),
        # output cbplot in main panel
        visNetworkOutput("network_now", height = "700px")
        # actionButton("goCol", "Collapsed !"),
        # actionButton("goUC", "uncollapse !")
        )
      )
  )
  
))

# Run Shiny APP
shinyApp(ui = ui, server = server)



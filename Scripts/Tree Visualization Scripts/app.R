#                                                           Connection to Database
######################################################################################################################################
require("RPostgreSQL")
# user: careertreetest  
# careertree2018
# host: careertreetest.cytukzawpi8t.ap-southeast-2.rds.amazonaws.com
# port: 5432
# dbname = "ctdb_test"

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

# check for the cartable
dbExistsTable(con, "percentage")

# Disconnect the connection from Database
# dbDisconnect(con)
# dbUnloadDriver(drv)

######################################################################################################################################
#                                                          Shiny APP
######################################################################################################################################
#install.packages("RPostgreSQL")
#install.packages("collapsibleTree")
require(shiny)
require(collapsibleTree)
library(dplyr)

ui <- fluidPage(
  #titlePanel("According to your previous occupation, you can be:"),
  
  #tags$div(class = "header", checked = NA,
  # tags$p("Clicking on node to see further expanding of suggested occupation and continoue clicking to see what you're still lacking:")
  #),
  fluidRow(
    column(6,div(style = "height:40px; width:150px; line-height: 40px;text-align:center; background-color:#BFFF00;", "Best Recommend"))),
   # column(7,div(style = "height:40px; width:200px; line-height: 40px;text-align:center; background-color:red;", "Least Recommend"))),
  mainPanel(
    collapsibleTreeOutput("treeNet", height = "400px", width="1300px")
  )
  
)

server <- function(input, output, session){
  output$treeNet <- renderCollapsibleTree(
    {
      # percentage <- dbGetQuery(con, "SELECT a.title,b.abs_name as relatedtitle,a.percentage,a.id,a.matchingskill,a.lackingskill,
       #                        a.matchingknowledge,a.lackingknowledge,a.relatedoccid
       #                        from percentage a
       #                        INNER JOIN occupation_abs b on a.relatedoccid = b.occid
       #                        where id = (select id from percentage limit 1) limit 3 ")

      query <- parseQueryString(session$clientData$url_search)
      percentage <- dbGetQuery(con, paste("SELECT a.title,b.abs_name as relatedtitle,a.percentage,a.id,a.matchingskill,a.lackingskill,a.matchingknowledge,a.lackingknowledge,a.relatedoccid 
                                            from percentage a
                                          INNER JOIN occupation_abs b on a.relatedoccid = b.occid 
                                           where id = ", query))
      
      if(length(unique(percentage$relatedtitle))>3){
        percentage <- percentage[order(percentage$percentage, decreasing=TRUE), ]
        percentage <- percentage[1:3,]
      }
      else{
        percentage <- percentage[order(percentage$percentage, decreasing=TRUE), ]
      }

      # View(percentage)
      percentage$lackingskill <- paste(percentage$lackingskill, ",", percentage$lackingknowledge)
      percentage = subset(percentage, select = -lackingknowledge)
      # filter out unused columns 
      percentage <- percentage[c("title", "relatedtitle", "percentage", "lackingskill" )]
      
      skillCleanFun <- function(percentage){
        # set NA to empty value
        percentage[which(percentage$lackingskill==" "|percentage$lackingskill==""), "lackingskill"] <- NA
        # split lacking skills value into different rows, and save to dataframe
        lacking_skill <- strsplit(percentage$lackingskill, split = ",")
        lacking_skill <- data.frame(relatedtitle = rep(percentage$relatedtitle, sapply(lacking_skill, length)), lackingskill = unlist(lacking_skill))
        # remove old lackingskill columns and merge with original table
        percentage <- within(percentage, rm(lackingskill))
        percentage <- merge(percentage, lacking_skill, by = c("relatedtitle"), all = TRUE)
        # change lackingskill column value from factor to character and delete missing rows
        percentage$lackingskill <- gsub('[[:digit:]]+', '', as.character(percentage$lackingskill))
        #percentage <- na.omit(percentage)
        percentage <- percentage[order(percentage$percentage, decreasing=TRUE), ]
        # assign NV value to empty column in case
        percentage[which(percentage$lackingskill==" "|percentage$lackingskill==""), "lackingskill"] <- NA
        # remove duplicated values 
        percentage$lackingskill <- trimws(percentage$lackingskill, which = c("both"))
        percentage <- percentage[!duplicated(percentage), ]
        percentage <- percentage[order(percentage$percentage, decreasing=TRUE), ]
      }
        
      #View(percentage)
      
        # 1 Big Condition.
        ##################################################################################################################################
        if(length(unique(percentage$relatedtitle)) == 1){
          if(percentage$lackingskill==" "|percentage$lackingskill==""){

            percentage$desReTitle = paste(rep("Skill Match", length(unique(percentage$relatedtitle))), paste0(percentage$percentage, "%"))

            collapsibleTree(
              percentage,
              hierarchy = c("title", "desReTitle", "relatedtitle"),
              root = "You are Here",
              fill = c("#EBEBF0", "#E5E5E5",
                       "#BFFF00",
                       "#BFFF00"),
              attribute = "percentage",
              aggFun = mean,
              tooltip = TRUE,
              fontSize = 11,
              width= "100%",
              height= "700px",
              collapsed = FALSE,
              zoomable = FALSE
            )
          }
          else{

            percentage <- skillCleanFun(percentage)

            percentage$desReTitle = paste(rep("Skill Match", length(unique(percentage$relatedtitle))), paste0(percentage$percentage, "%"))
            percentage$desSkill <- paste(rep("Required Skills", length(unique(percentage$relatedtitle))), paste0((100-percentage$percentage), "%"))

            skill_full <- percentage$lackingskill
            # get length of full lackingskill
            skill_full_len <- length(percentage$lackingskill)
            # get length of full lackingskill is na
            skill_full_na <- sum(is.na(skill_full))

            collapsibleTree(
              percentage,
              hierarchy = c("title", "desReTitle", "relatedtitle", "desSkill","lackingskill"),
              root = "You are Here",
              fill = c("#EBEBF0", "#E5E5E5",
                       "#BFFF00",
                       "#BFFF00",
                       "#BFFF00",
                       rep("#BFFF00", skill_full_len-skill_full_na)),
              attribute = "percentage",
              aggFun = mean,
              tooltip = TRUE,
              fontSize = 11,
              width= "100%",
              height= "700px",
              collapsed = FALSE,
              zoomable = FALSE
            )
          }
        }
        # 2. Big Condition
        ###################################################################################################################################
        else if(length(unique(percentage$relatedtitle)) == 2){
          # lackingskill is empty
          if(percentage$lackingskill==" "|percentage$lackingskill==""){

            percentage$desReTitle = paste(rep("Skill Match", length(unique(percentage$relatedtitle))), paste0(percentage$percentage, "%"))

            if(length(unique(percentage$percentage)) ==1){
              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle","relatedtitle"),
                root = "You are Here",
                fill = c("#EBEBF0", "#E5E5E5",
                         "#BFFF00",
                         rep("#BFFF00", 2)),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
              )
            }
            else{
              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle","relatedtitle"),
                root = "You are Here",
                fill = c("#EBEBF0", "#E5E5E5",
                         "#BFFF00", "red",
                         "#BFFF00", "red"),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
              )
            }
          }
          # lackingskill is not empty
          else{
            percentage <- skillCleanFun(percentage)

            percentage$desReTitle = paste(rep("Skill Match", length(unique(percentage$relatedtitle))), paste0(percentage$percentage, "%"))

            percentage$desSkill <- paste(rep("Required Skills", length(unique(percentage$relatedtitle))), paste0((100-percentage$percentage), "%"))

            skill_full <- percentage$lackingskill
            # get length of full lackingskill
            skill_full_len <- length(percentage$lackingskill)
            # get length of full lackingskill is na
            skill_full_na <- sum(is.na(skill_full))

            # get lacking skills in top percentage
            top_skill <- percentage[percentage$percentage == max(percentage$percentage), "lackingskill"]
            top_skill_len <- length(percentage[percentage$percentage == max(percentage$percentage), "lackingskill"])
            top_skill_na <- sum(is.na(top_skill))

            # get lacking skills in min percentage
            min_skill <- percentage[percentage$percentage == min(percentage$percentage), "lackingskill"]
            min_skill_len <- length(percentage[percentage$percentage == min(percentage$percentage), "lackingskill"])
            min_skill_na <- sum(is.na(min_skill))

            if(length(unique(percentage$percentage)) ==1){
              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle", "relatedtitle", "desSkill","lackingskill"),
                root = "You are Here",
                fill = c("#EBEBF0", "#E5E5E5",
                         "#BFFF00",
                         rep("#BFFF00", 2),
                         rep("#BFFF00", 2),
                         rep("#BFFF00", skill_full_len-skill_full_na)),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
              )
            }
            else{
              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle", "relatedtitle", "desSkill", "lackingskill"),
                root = "You are Here",
                fill = c("#EBEBF0", "#E5E5E5",
                         "#BFFF00", "red",
                         "#BFFF00", "red",
                         "#BFFF00", "red",
                         rep("#BFFF00", top_skill_len-top_skill_na), rep("red", min_skill_len-min_skill_na)),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
              )
            }
          }
        }
        # 3. Big condition
        ###################################################################################################################################
         else if(length(unique(percentage$relatedtitle)) == 3){
          # lackingskills is empty
          if(percentage$lackingskill==" "|percentage$lackingskill==""){

            percentage$desReTitle = paste(rep("Skill Match", length(unique(percentage$relatedtitle))), paste0(percentage$percentage, "%"))

            # all three node same color
            if(length(unique(percentage$percentage)) ==1){
              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle", "relatedtitle"),
                root = "You are Here",
                fill = c("#EBEBF0", "#E5E5E5",
                         "#BFFF00",
                         rep("#BFFF00", 3)),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
              )
            }
            #
            else if(length(unique(percentage$percentage)) ==2){
              # calculate how many top percentage for relatedtitle
              top_reTitle_len <- length(unique(percentage[percentage$percentage == max(percentage$percentage), "relatedtitle"]))
              # calculate how many lowest percentage for relatedtitle
              min_reTitle_len <- length(unique(percentage[percentage$percentage == min(percentage$percentage), "relatedtitle"]))

              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle","relatedtitle"),
                root = "You are Here",
                fill = c("#EBEBF0", "#E5E5E5",
                         "#BFFF00", "red",
                         rep("#BFFF00", top_reTitle_len), rep("red", min_reTitle_len)),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
              )
            }
            else if(length(unique(percentage$percentage)) ==3){
              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle", "relatedtitle"),
                root = "You are Here",
                fill = c("#EBEBF0", "#E5E5E5",
                         "#BFFF00", "orange", "red",
                         "#BFFF00", "orange", "red"),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
              )
            }

          }
          # lackingskill is not empty, 3 different relatedtitle
          else{
            
            percentage <- skillCleanFun(percentage)
            
            percentage$desReTitle = paste(rep("Skill Match", length(unique(percentage$relatedtitle))), paste0(percentage$percentage, "%"))
            
            percentage$desSkill <- paste(rep("Required Skills", length(unique(percentage$relatedtitle))), paste0((100-percentage$percentage), "%"))
            
            # View(percentage)
            
            # get length of full lackingskill
            skill_full <- percentage$lackingskill
            skill_full_len <- length(percentage$lackingskill)
            # get length of full lackingskill is na
            skill_full_na <- sum(is.na(skill_full))
            
            # calculate how many top percentage for relatedtitle
            top_reTitle_len <- length(unique(percentage[percentage$percentage == max(percentage$percentage), "relatedtitle"]))
            # calculate how many lowest percentage for relatedtitle
            min_reTitle_len <- length(unique(percentage[percentage$percentage == min(percentage$percentage), "relatedtitle"]))
            
            # get lacking skills in top percentage
            top_skill <- percentage[percentage$percentage == max(percentage$percentage), "lackingskill"]
            top_skill_len <- length(percentage[percentage$percentage == max(percentage$percentage), "lackingskill"])
            top_skill_na <- sum(is.na(top_skill))
            
            # get lacking skills in min percentage
            min_skill <- percentage[percentage$percentage == min(percentage$percentage), "lackingskill"]
            min_skill_len <- length(percentage[percentage$percentage == min(percentage$percentage), "lackingskill"])
            min_skill_na <- sum(is.na(min_skill))
                      
            
            # all same color 
            if(length(unique(percentage$percentage)) ==1){
              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle","relatedtitle", "desSkill","lackingskill"),
                root = "                    ",
                fill = c("#EBEBF0", "#E5E5E5", 
                         "#BFFF00", 
                         rep("#BFFF00", 3),
                         rep("#BFFF00", 3),
                         rep("#BFFF00", skill_full_len-skill_full_na)),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
              )
              
            }
            # 2 different color
            else if(length(unique(percentage$percentage)) ==2){
              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle","relatedtitle", "desSkill", "lackingskill"),
                root = "You are Here",
                fill = c("#EBEBF0", "#E5E5E5", 
                         "#BFFF00", "red",
                         rep("#BFFF00", top_reTitle_len), rep("red", min_reTitle_len),
                         rep("#BFFF00", top_reTitle_len), rep("red", min_reTitle_len),
                         rep("#BFFF00", top_skill_len-top_skill_na), rep("red", min_skill_len-min_skill_na)),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
              ) 
              
            }
            # 3 different color 
            else if(length(unique(percentage$percentage)) ==3){
              
              middle_skill <- percentage$lackingskill[-pmatch(c(top_skill, min_skill),percentage$lackingskill)]
              middle_skill_len <- length(middle_skill)
              middle_skill_na <- sum(is.na(percentage$lackingskill[-pmatch(c(top_skill, min_skill),percentage$lackingskill)]))
              
              collapsibleTree(
                percentage,
                hierarchy = c("title", "desReTitle","relatedtitle", "desSkill", "lackingskill"),
                root = "You are Here",
                fill = c("pink1", "#E5E5E5", 
                         "#BFFF00", "orange","red",
                         "#BFFF00", "orange","red",
                         "#BFFF00", "orange","red", 
                         rep("#BFFF00", top_skill_len-top_skill_na), rep("orange", middle_skill_len-middle_skill_na), rep("red", min_skill_len-min_skill_na)),
                attribute = "percentage",
                aggFun = mean,
                tooltip = TRUE,
                fontSize = 11,
                width= "100%",
                height= "700px",
                collapsed = FALSE,
                zoomable = FALSE
		#linkLength =170
              ) 
              
            }
            
          }
          
        }
        
      }
  )
  
}

shinyApp(ui = ui, server = server)

  
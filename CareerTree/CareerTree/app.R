# install.packages("RPostgreSQL")
require("RPostgreSQL")
# ui <- bootstrapPage(
#   h3("Parsed query string"),
#   verbatimTextOutput("queryText")
# )
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
dbExistsTable(con, "cartable")
# TRUE
#########################################################################################################
# query the data from postgreSQL 
#percentage <- dbGetQuery(con, "SELECT * from percentage")


# Delete table
#emptyTable<- dbGetQuery(con, "DELETE FROM percentage")


## close the connection
#dbDisconnect(con)

#dbUnloadDriver(drv)

## create variable use for dataframe
# distance = 100 - percentage$percentage
# nodeTimes = length(percentage$title)
# allNodes = c(unique(percentage$title),percentage$relatedtitle)

# Implement Shiny 
require(shiny)
require(visNetwork)

server <- function(input, output,session) {
#-------------------------------------------
  # output$queryText <- renderText({
  #   query <- parseQueryString(session$clientData$url_search)
  #   #paste(query)
  #   paste("SELECT * from percentage where id = ", query)
  # })
  # percentage <- dbGetQuery(con, paste("SELECT * from percentage where id = ", query))
  # #percentage <- dbGetQuery(con, "SELECT * from percentage")
  # dbDisconnect(con)
  # dbUnloadDriver(drv)
  #  distance = 100 - percentage$percentage
  #  nodeTimes = length(percentage$title)
  #  allNodes = c(unique(percentage$title),percentage$relatedtitle)  
#-------------------------------------------
  output$network <- renderVisNetwork({
    
#-------------------------------------------
    
      query <- parseQueryString(session$clientData$url_search)
      #paste(query)
      #paste("SELECT * from percentage where id = ", query)

    percentage <- dbGetQuery(con, paste("SELECT * from percentage where id = ", query))
    #percentage <- dbGetQuery(con, "SELECT * from percentage")
    #dbDisconnect(con)
    #dbUnloadDriver(drv)
    distance = 100 - percentage$percentage
    nodeTimes = length(percentage$title)
    allNodes = c(unique(percentage$title),percentage$relatedtitle)  
#-------------------------------------------
    
    test_nodes01 <- data.frame(id = allNodes,
                               label = allNodes,
                               value = c(0, percentage$percentage),
                               shape = c("star", rep("dot", times = nodeTimes)),
                               color = c("lightslateblue", rep("lightskyblue", times = nodeTimes)),
                               title = c(0, percentage$percentage), stringsAsFactors = FALSE
    )
    
    test_edges01 <- data.frame( from = percentage$title, 
                                to = percentage$relatedtitle,
                                #label = paste("Edge", 1:nodeTimes),
                                length = distance
    )
    
    visNetwork(test_nodes01, test_edges01, height = "700px", width = "100%")%>% 
      visOptions(highlightNearest = list(enabled = T, degree = 2, hover = T), selectedBy = "value")%>%
      visEdges(arrows = "to", color = list(color = "lightblue", highlight = "orange"))%>%
      visInteraction(hover = TRUE)%>%
      visPhysics(stabilization = FALSE)
  })
}

ui <- fluidPage(
  visNetworkOutput("network")
)

# Run Shiny APP
shinyApp(ui = ui, server = server)



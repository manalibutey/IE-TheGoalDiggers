
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
dbExistsTable(con, "percentage")

##################################

percentage <- dbGetQuery(con, "SELECT * from percentage where id = (select id from percentage limit 1)")
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

percentage <- percentage[order(percentage$percentage, decreasing=TRUE), ]

# View(percentage)
###################################################################################################33

require(shiny)
require(collapsibleTree)

ui <- fluidPage(
  titlePanel("According to your previous occupation, you can be:"),
  
  tags$div(class = "header", checked = NA,
           tags$p("Click on suggested occupation to see what you're still lacking:")
  ),
  mainPanel(
    collapsibleTreeOutput("treeNet", height = "700px")
  )
)

server <- function(input, output, session){
  output$treeNet <- renderCollapsibleTree(
    {
      collapsibleTree(
        percentage,
        hierarchy = c("title", "relatedtitle", "lackingskill" ),
        root = "Previously Occupation",
        fill = c("seashell", "darkviolet", "lightgreen", rep("lightskyblue", c(length(unique(percentage$relatedtitle))-2)),
                 "tomato", rep("lightpink",length(percentage$lackingskill))),
        # fillByLevel = TRUE,
        attribute = "percentage",
        aggFun = mean,
        tooltip = TRUE,
        fontSize = 15,
        width = 2000,
        height = 1500
      )
    }
  )
}
  

shinyApp(ui = ui, server = server)





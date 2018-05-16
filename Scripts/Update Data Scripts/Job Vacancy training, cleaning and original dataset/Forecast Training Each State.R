# install.packages("forecast", dependencies = TRUE)
# install.packages("quantmod")
# library(ggplot2)
# library(plotly)

library(xlsx)
library(forecast)
library(dplyr)

# Load data from file

jobVacancy <- read.csv(file="C:/Users/yiran/Google Drive/2018 S1/Cleaning Data/Material Data/VACANCY NEW 03.csv",header=TRUE)

# dim(jobVacancy)
# View(jobVacancy)


# Now use data come from NSW only, because use whole data set it will run too long
jobVacancy <- jobVacancy[which(jobVacancy$STATES== "NSW"), ]

# let's reformat data first
reformatFore <- data.frame(do.call('rbind', strsplit(as.character(jobVacancy$Time),'-',fixed=TRUE)))
reformatFore <- paste0(reformatFore$X1, "-", reformatFore$X2, "-20", reformatFore$X3)
jobVacancy$Time <- as.Date(reformatFore, format ="%d-%m-%Y")

###########################################################################################################################
#                                                               RUN DATA
# initialize the continue saving dataframe
dfFore = ""

# Sace a initial dataframe at first
occup_selected <- jobVacancy[which(jobVacancy$OCCUPATIONS== "Chief Executives And Managing Directors"), ]
jobVacancy_ts <- ts(occup_selected$Vacancy, start=c(2006,3), end = c(2018, 2), frequency=12)
# use Arima model to train our data
predArima <- forecast(auto.arima(jobVacancy_ts, stepwise = TRUE),h=24)
# save forecast for this occupation into dataframe
dfPredArima <- as.data.frame(predArima)
dfPredArima <- add_rownames(dfPredArima, "Time")
colnames(dfPredArima)[2] <- "Vacancy"
dfPredArima <- dfPredArima[c("Time", "Vacancy")]
# View(dfPredArima)
# reformat time and convert to date format
reformatFore <- data.frame(do.call('rbind', strsplit(as.character(dfPredArima$Time),' ',fixed=TRUE)))
reformatFore$X1 <- match(reformatFore$X1, month.abb)
reformatFore <- paste0("01-", reformatFore$X1, "-", reformatFore$X2)
dfPredArima$Time <- as.Date(reformatFore, format ="%d-%m-%Y")
dfPredArima$OCCUPATIONS <- rep(unique(occup_selected$OCCUPATIONS, nrow(dfPredArima$Time))) 
dfFore <-  dfPredArima
# View(dfFore)

occ_range <- unique(jobVacancy$OCCUPATIONS)
occ_range<- occ_range[2:length(occ_range)]
# View(occ_range)

# use for loop to save forecast results for all occupations into one dataframe
for (occ in occ_range){
  
  occup_selected <- jobVacancy[which(jobVacancy$OCCUPATIONS== occ), ]
  jobVacancy_ts <- ts(occup_selected$Vacancy, start=c(2006,3), end = c(2018, 2), frequency=12)
  predArima <- forecast(auto.arima(jobVacancy_ts, stepwise = TRUE),h=24)
  # save forecast for this occupation into dataframe  
  dfPredArima <- as.data.frame(predArima)
  dfPredArima <- add_rownames(dfPredArima, "Time")
  colnames(dfPredArima)[2] <- "Vacancy"
  dfPredArima <- dfPredArima[c("Time", "Vacancy")]
  # View(dfPredArima)
  # reformat time and convert to date format  
  reformatFore <- data.frame(do.call('rbind', strsplit(as.character(dfPredArima$Time),' ',fixed=TRUE)))
  reformatFore$X1 <- match(reformatFore$X1, month.abb)
  reformatFore <- paste0("01-", reformatFore$X1, "-", reformatFore$X2)
  dfPredArima$Time <- as.Date(reformatFore, format ="%d-%m-%Y")
  dfPredArima$OCCUPATIONS <- rep(unique(occup_selected$OCCUPATIONS, nrow(dfPredArima$Time))) 
  df_change <- dfPredArima
  # culmulate all dataframes
  dfFore <- rbind(dfFore, df_change)
}

# View(dfFore)

# Save all forecast results into file 
write.csv(dfFore, file="C:/Users/yiran/Google Drive/2018 S1/Cleaning Data/Material Data/JOB VACANCY NSW FORECAST.csv")



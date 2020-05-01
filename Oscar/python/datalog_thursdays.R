df <- read.csv('datalog_thursdays.csv')

#Objectives

#Filter Inverter, 
#string combiner box, 
#data, 
#time, 
#series of dates and times


my.date <- as.Date(df$DATE ,format = "%d-%b-%y")

sorted <- order(my.date, df$HOUR, df$INVERTER)

df.date <- df$DATE
df.date

df2 <- df[sorted, ]
df1 <- df[sorted, ]

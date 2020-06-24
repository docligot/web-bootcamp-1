import pandas as pd

df = pd.read_csv('../data/all_keywords_google_trend_data.csv')

output = pd.DataFrame(list(df)).to_json(orient='values')
output1 = df.to_json(orient='values')

print('Content-type:text/html \r\n\r\n')
#print('[' + str(output) + ',' + output1 + ']')
text_file = open("extractTrend.json", "w")
n = text_file.write('[' + str(output) + ',' + output1 + ']')
text_file.close()
import pandas as pd
csv = pd.read_csv('data.csv')
json = csv.to_json(orient='values')
print('Content-type:text/html \r\n\r\n')
print(json)
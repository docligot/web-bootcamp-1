import cgi
import pandas as pd

# read csv
df = pd.read_csv('tessa.csv')

data = cgi.FieldStorage()

# column names of relevant variables
var1 = data.getvalue('var1')
var2 = data.getvalue('var2')
var3 = data.getvalue('var3')
# outputs var1, var2, count ['CaseCode']
table = pd.pivot_table(df, values='CaseCode', index=[var1, var2], aggfunc= 'count')

# checks if var3 is empty string
if not var3:
    table3 = table.reset_index()
else:
    # outputs var2, var3, count ['CaseCode']
    table2 = pd.pivot_table(df, values='CaseCode', index=[var2, var3], aggfunc= 'count')
    # appends both tables, result of which needs to get fed to JS
    # uses table's columns => var1, var2, 'CaseCode'
    table3 = table.append(table2).reset_index()

scol1 = table3[var1].to_list()
scol2 = table3[var2].to_list()
scol3 = table3['CaseCode'].to_list()

import json
data = {'scol1': scol1, 'scol2': scol2, 'scol3' : scol3}

# To print out the JSON string (which you could then hardcode into the JS)
response = json.dumps(data)
print('Content-type:text/html \r\n\r\n')
print(response)

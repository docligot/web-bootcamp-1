import cgi
import pandas as pd
data = cgi.FieldStorage()
variable1 = data.getvalue('variable1')
variable2 = data.getvalue('variable2')
variable3 = data.getvalue('variable3')

df = pd.read_csv('../data/transaction.csv')

def generateSankey(variable1, variable2, variable3):
    output = df.groupby([variable1,variable2]).sum().reset_index()
    output = output.rename(columns={variable1:'from', variable2:'to', 'Amount':'value'})
    output1 = df.groupby([variable2,variable3]).sum().reset_index()
    output1 = output1.rename(columns={variable2:'from', variable3:'to', 'Amount':'value'})
    output = output.append(output1).reset_index()
    output = output.drop(['index'], axis=1)
    return output

def generateTable(variable1, variable2, variable3):
    output = df.groupby([variable1,variable2,variable3]).sum().reset_index()
    return output

output = generateSankey(variable1, variable2, variable3).to_json(orient='values')
output += ', ' + generateTable(variable1, variable2, variable3).to_json(orient='values')
print('Content-type:text/html \r\n\r\n')
print('[' + output + ']')
import cgi
import pandas as pd

df = pd.read_csv("tessa4.csv")
agegrp = []
gender =[]
count = []
for line in df.to_numpy():
    agegrp.append(line[0])
    gender.append(line[1])
    count.append(line[2])

import json
data = {'agegrp': agegrp, 'gender': gender, 'count' : count}

# To write to a file:
#with open("output.json", "w") as f:
#    json.dump(data, f)

# To print out the JSON string (which you could then hardcode into the JS)
response = json.dumps(data)
print('Content-type:text/html \r\n\r\n')
print(response)

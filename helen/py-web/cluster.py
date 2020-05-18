import cgi
import pandas as pd
import sklearn
from sklearn.cluster import KMeans
from sklearn.metrics import silhouette_score

data = cgi.FieldStorage()
clusters = data.getvalue('clusters')

xl = pd.ExcelFile(r"clustering_data.xlsx")
df = xl.parse("Sheet1")
train = df.drop(['record_id'], axis = 1)
km = KMeans(n_clusters=int(clusters))
km.fit(train)
print('Content-type:text/html \r\n\r\n')
print(silhouette_score(km.fit_transform(train), km.labels_))




import cgi
import pandas as pd
import sklearn
from sklearn.cluster import KMeans
from sklearn.metrics import silhouette_score

data = cgi.FieldStorage()
clusters = data.getvalue('clusters')

## clustering_data.xlsx
xl=pd.ExcelFile(r"")
df = xl.parse("Sheet1")

train=df.drop([record_id],axis=1)

km = KMeans(n_clusters=3)
km.fit(train)
print('Content-type:text/html \r\n\r\n')
silhouette_score(km.fit_transform(train),km.labels_)


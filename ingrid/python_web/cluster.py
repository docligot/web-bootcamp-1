import pandas as pd
import sklearn
from sklearn.cluster import KMeans
from sklearn.metrics import silhouette_score

xl = pd.ExcelFile(r"") #put file path/file name
df = xl.parse("Sheet1")

train = df.drop(['record_id'], axis = 1)

km = KMeans(n_clusters=3)
km.fit(train)
print('Content-type/html \r\n\r\n')
print(silhouette_score(km.fit_transform(train), km.labels_))


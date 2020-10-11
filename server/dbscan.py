#!/usr/bin/env python
# coding: utf-8

# In[111]:


import pandas as pd
import numpy as np
import scipy.stats as sts

import matplotlib.pyplot as plt
import seaborn as sns

import sklearn as sk
from sklearn.cluster import DBSCAN
# from sklearn.cluster import KMeans
# from scipy.stats import wilcoxon
from sklearn.metrics import silhouette_samples, silhouette_score

from data_fixer import DataFixer


# In[115]:


import pymysql
from contextlib import closing

from pymysql.cursors import DictCursor
connection = pymysql.connect(
    host='217.107.34.61',
    user='046557107_team',
    password='API318528',
    db='misty-nebula_apps',
    charset='utf8mb4',
    cursorclass=DictCursor
)


# In[124]:


with connection.cursor() as cursor:
    cursor.execute('SELECT * FROM data')
    for row in cursor:
        data = pd.DataFrame([i for i in cursor.execute('SELECT * FROM data')])


# In[199]:


data = pd.read_csv('data.csv', index_col=0)
data = data.drop(['globalTimeStamp'], axis=1)
data = data.drop(['userAgentOnChange'], axis=1)
data = pd.get_dummies(data)


# In[200]:


# DBSCAN

sils = []
for j in range(20,80):
    
    labels = DBSCAN(eps=j, min_samples=3).fit(data).labels_
    
    if max(labels) >= 0:
        sil_avg = silhouette_score(data, labels)
        sils.append(sil_avg)
    else: sils.append(0)

eps = sils.index(max(sils))

dmodel = DBSCAN(eps=eps, min_samples=2).fit(data)
data['Class'] = dmodel.labels_

data['Class'] = data['Class'].apply(lambda x: 1 if x == -1 else 0)


# In[201]:


data.to_csv('data2.csv')


# In[212]:


for col in data.columns:
    data[col] = data[col].apply(str)


# In[219]:


with connection.cursor() as cursor:
    #query = 'INSERT INTO * (data) VALUES (%s)'
    #cursor.executemany(query, data.values.tolist())
    
    for i,row in data.iterrows():
        cols = data.columns
        sql = "INSERT INTO `data` (`" +cols + "`) VALUES (" + "%s,"*(len(row)-1) + "%s)"
        cursor.execute(sql, tuple(row))


# In[12]:


# color = ['r','b','g','y','k','c','m']

# plt.figure(figsize=(30,60))  # Посмотреть на плотности распределения кластеров
# n = 0
# for i in data:
#     n += 1
#     plt.subplot(20,4,n)
#     for j in range(0, max(model.labels_)+1):
#         sns.distplot(data[data['dbscan']==j][i], color=color[j])


# In[31]:


#import imblearn

# labeled_data = []
# for i in range(0,max(model.labels_)+1):
#     sub_data = data[data['dbscan']==i]
#     labeled_data.append(sub_data)

# dict_subs = dict()    Можно показать, чем отличаются кластеры и в какую сторону (пример / не адаптированный).
#Проверяем по критеорию Вилкоксона на отсутствие сдвига двух выборок
# for sub_data in labeled_data:
#     feature_list = []
#     sme = imblearn.over_sampling.SMOTE()
#     X = sub_data[X]
#     y = sub_data[y]
#     X_res, y_res = sme.fit_resample(X, y)
#     X_res[target] = y_res
#
#     for col in X_res:
#         if wilcoxon(X_res[col].values, data[col].values, 'less').pvalue < 0.05:
#             print('left')
#         elif wilcoxon(X_res[col].values, data[col].values, 'greater').pvalue < 0.05:
#             print('right')
#         else: print('no diff')


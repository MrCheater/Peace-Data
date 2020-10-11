#!/usr/bin/env python
# coding: utf-8

# In[11]:


from sklearn.model_selection import train_test_split
from sklearn.model_selection import GridSearchCV
import copy
import pickle
import random
import numpy as np
import pandas as pd
from sklearn.preprocessing import StandardScaler
from sklearn.ensemble import RandomForestClassifier


# In[15]:


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

data = []
with connection.cursor() as cursor:
    cursor.execute('SELECT * FROM data')
    for row in cursor:
        data = pd.DataFrame([i for i in cursor.execute('SELECT * FROM data')])


# In[16]:


data


# In[21]:


features = np.array([i for i in data.columns[:-1]])
target = np.array([data.columns[-1]])


# In[ ]:


X = data[features]
y = data[target]

X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.33)


# In[19]:


params = {'n_estimators': (100,200,300), 'max_depth':(3,5,7,None),'min_samples_split':(1,2,3)}

m = RandomForestClassifier()
cv = GridSearchCV(m, params)
pms = cv.fit(X_train, y_train).best_params_


# In[19]:


clf = RandomForestClassifier().set_params(**pms)
clf.fit(X_train, y_train)
prediction = clf.predict(X_test)


# In[143]:


#save state
with open('model.h5', 'w+b') as f:
    pickle.dump(clf,f)


#!/usr/bin/env python
# coding: utf-8

# In[2]:


import pickle

def prediction(self,X):
    with open('model.h5', 'rb') as f:
        c = pickle.load(f)
    self.pred = c.predict(X)
    return self.pred


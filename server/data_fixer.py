#!/usr/bin/env python
# coding: utf-8

# In[3]:


import pandas as pd
import numpy as np

class DataFixer:
    
    def __init__(self):
        pass
        
    def get_fix(self, data):

        self.data = data
        self.data = self.data.drop(['Номер магазина'], axis=1)
        
        cat_cols = [i for i in self.data.columns if i.startswith('категория')]
        
        for i in cat_cols: self.data[i] = self.data[i].apply(lambda x: str(x[:-1]).replace(',','.'))
        self.data[cat_cols] = self.data[cat_cols].apply(pd.to_numeric)
        
        num_cols = [i for i in self.data.columns if self.data[i].dtype != 'object']
        obj_cols = [i for i in self.data.columns if self.data[i].dtype != 'object']
        
        self.data = pd.get_dummies(self.data)
        
        return self.data


# In[ ]:





import pandas as pd
import numpy as np

class DataFixer:
    
    def __init__(self):
        pass
        
    def get_fix(self, data):

        self.data = data
        
        self.data = pd.get_dummies(self.data)
        
        return self.data





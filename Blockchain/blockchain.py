#   Copyright (c) 2021 Eternity Devs

import hashlib
import json

from time import time

class Blockchain(object):
    def __init__(self):
        self.chain = []
        self.current_transactions = []

        self.new_block(previous_hash = 1)   # Create Genesis Block
    
    def new_block(self, previous_hash = None):
        """
        Create a new Block and add it to the chain
        :param previous_hash: (opt) <str> Hash of the previous Block
        :return: <dict> New Block
        """
        block = {
            'index' : len(self.chain) + 1,
            'timestamp' : time(),
            'transactions' : self.current_transactions,
            'previous_hash' : previous_hash or self.hash(self.last_block),
        }
        self.current_transactions = []      # Clear transactions
        self.chain.append(block)            # Add Block to the chain
        return block
    
    @staticmethod
    def hash(block):
        """
        ! Subject to change: used hash algoritm !
        Create SHA256 Hash of given Block
        :param block: <dict> Block
        :return: <str> Hash
        """
        block_str = json.dumps(block,sort_keys = True).encode()
        return hashlib.sha256(block_str).hexdigest()
    
    @property
    def last_block(self):
        return self.chain[-1]

    def __str__(self):
        return str(self.chain)
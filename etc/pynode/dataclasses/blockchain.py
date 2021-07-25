#   Copyright (c) 2021 Eternity Devs

from dataclasses import dataclass
from collections import defaultdict

import json
from hashlib import sha256

from time import time

@dataclass
class Blockchain:
    chain: list # Chain of blocks
    balances: dict = defaultdict(lambda:0) # Maps addresses to their balances, default is 0
    
    def new_block(self, block, previous_hash):
        self.chain.append(block) # Add Block to the chain
    
    @staticmethod
    def hash(block):
        return sha256(block_str).hexdigest()
    
    @property
    def last_block(self):
        return self.chain[-1]

    def __str__(self):
        return str(self.chain)
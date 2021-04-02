#   Copyright (c) 2021 Eternity Devs

from dataclasses import dataclass
from collections import defaultdict

from time import time
from hashlib import sha256

@dataclass
class Transaction:
    sender: str
    to: str
    amount: int
    signature: int
    timestamp : int

    def __init__(self, sender, recipient, amount, signature):
        self.sender = sender
        self.to = to
        self.amount = int(amount) # Don't use floats
        self.signature = signature
        self.timestamp = time()

    """
    :return: Hash of the transaction
    """
    def __str__(self):
        return sha256(
            f"{self.sender}{self.to}{self.amount}{self.timestamp}"
        )

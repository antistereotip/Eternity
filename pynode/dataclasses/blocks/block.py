
#   Copyright (c) 2021 Eternity Devs

from dataclasses import dataclass
from collections import defaultdict

from Transaction import transaction
from ...helpers.signatures import verify_signature

@dataclass
class Block:
    transactions : list
    hash: str
    nonce: int

    def new_transaction(self, sender, recipient, amount, signature):
        transaction = Transaction(sender, recipient, amount)
        if not verify_signature(sender, signature, str(transaction)):
            return
        self.transactions.append(transaction)

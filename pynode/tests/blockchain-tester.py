#   Copyright (c) 2021 Eternity Devs

from blockchain import Blockchain   # Refer to ./blockchain.py

test_chain = Blockchain()           # Create Blockchain object

for i in range(10):
    test_chain.new_block()
    print(test_chain.chain)
    print('\n--------\n')
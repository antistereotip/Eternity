import ecdsa

def verify_signature(pub_key, signature, message):
    return pub_key.verify(signature, message)

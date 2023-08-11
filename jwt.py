import jwt
import json

# Define the payload for the JWT tokens
payload = {
    'user_id': 1234,
    'username': 'test_possible'
}

# Define the secret key for signing the JWT tokens
secret_key = 'my_secret_key'


jwt_token = jwt.encode(payload, secret_key, algorithm='HS256')

with open('jwt_tokens.json', 'w') as file:
    json.dump({'jwt_token': jwt_token.decode('utf-8')}, file)

import requests

# x = requests.get('https://w3schools.com/')
# x = requests.get('https://linhvucmang.000webhostapp.com/')
x = requests.get('http://127.0.0.1:8000/polls/')


print(x.text)

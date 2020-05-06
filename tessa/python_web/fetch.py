import time
import cgi
data=cgi.FieldStorage()
box=data.getvalue('box')

time.sleep(3)

def switch(arg):
    switcher = {
        'a': 'You clicked Button A',
        'b': 'You clicked Button B',
        'c': 'You clicked Button C'
    }
    return switcher.get(arg, 'Default')

response = switch(box)

print('Content-type:text/html \r\n\r\n')
print(response)

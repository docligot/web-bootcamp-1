import time
import cgi
data = cgi.FieldStorage()
variable = data.getvalue('box')

time.sleep(3)

def switch(arg):
	switcher = {
	'a': 'You clicked button A',
	'b': 'You clicked button B',
	'c': 'You clicked button C'
	}
	return switcher.get(arg,'Default')

response = switch(box)

print('Content-type:text/html \r\n\r\n')
print(response)
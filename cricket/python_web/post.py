import cgi
data = cgi.FieldStorage()
textstring = data.getvalue('textString')
numberentry = data.getvalue('numberEntry')

def add10(x):
	y = x + 10
	return y

print('Content-type:text/html \r\n\r\n')
print('Hello World')
print('<!DOCTYPE HTML>')
print('<html>')
print('<head>')
print('<title>The Python Responses</title>')
print('</head>')
print('<body>')
print('<p1>You Entered:', textstring, '</p1>')
print('<p1>Your number plus 10 is:', y, '</p1>')
print('</body></html>')
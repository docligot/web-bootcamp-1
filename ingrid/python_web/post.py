import cgi
data = cgi.FieldStorage()
textstring = data.getvalue('textString')
numberentry = data.getvalue('numberentry')


def add10(x):
	y = x + 10
	return y
	
print('Content-type/html \r\n\r\n')
print('Hello World')
print('<!DOCTYPE HTML>')
print('<html>')
print('<head>')
print('<title>The Python response</title></head>')
print('<body>')
print('<p>You entered:', textstring, '</p>')
print('<p>This is the number you entered:</p>')
print('<p>', numberentry, '</p>')
print('<p>This is the number with the function applied:</p>')
print('<p>', add10(int(numberentry)), '</p>')
print('</body></html>')

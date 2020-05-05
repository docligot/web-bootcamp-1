import cgi
data = cgi.FieldStorage()
textvalue= data.getvalue('textString')
numberentry=data.getvalue('numberEntry')

def add10(x):
    y = x+10
    return y
	

print('Content-type:text/html \r\n\r\n')
print('<!DOCTYPE HTML>')
print('<html>')
print('<head>')
print('<title>The Python Response</title></head>')
print('<body>')

print('<p>You entered', textvalue, '</p>')
print('<p>This is the number you entered:</p>')
print('<p>', numberentry, '</p>')
print('<p>Number with function applied to it</p>')
print('<p>',add10(int(numberentry)), '</p>')
print('</body><html>')

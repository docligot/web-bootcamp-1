import cgi
data = cgi.FieldStorage()
variable = data.getvalue('variable')

print('Content-type:text/html \r\n\r\n')
print('Hello World')
print('<!DOCTYPE HTML>')
print('<html>')
print('<head>')
print('<title>The Python response</title></head>')
print('<body>')
print('<h1>You selected:', variable, '</h1>')
print('</body></html>')

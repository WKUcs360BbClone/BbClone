import sys
sys.path.insert('/var/www/'
from sqlhandler import app

@app.route('/')
@app.route('/index')
def index():
	return "Hello World!"

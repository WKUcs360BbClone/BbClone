import sys
sys.path.insert(0, '/var/www/')
activate_this = '/var/www/sqlhandler/flask3.4/bin/activate_this.py'
exec(compile(open(activate_this, "rb").read(), activate_this,'exec'))
from sqlhandler import app as application

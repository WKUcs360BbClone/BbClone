#!/usr/bin/python3
# -*- coding:UTF-8 -*-#
import cgitb
import cgi

cgitb.enable()

form = cgi.FieldStorage()
test = form.getvalue('testvalue')

print("Content-Type: text/html;charset=utf-8")
print()

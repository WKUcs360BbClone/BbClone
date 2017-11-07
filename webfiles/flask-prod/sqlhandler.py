from flask import Flask

app = Flask(__name__)

@app.route("/hello")
def hello():
	return "Hello World!"

@app.route("/test", methods=["POST"])
def test():
	test_value = request.form['test']
	return test_value

if __name__ == "__main__":
	app.run()

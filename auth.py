from flask import Flask, render_template
from flask_sqlalchemy import SQLAlchemy
from flask_login import UserMixin

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///auth.db'
app.config['SECRET_KEY'] = 'Satoshi_Kalmin_Aview_Id'


db = SQLAlchemy(app)

class User(db.Model, UserMixin):
	id = db.Column(db.Integer, primary_key=True)
	username = db.Column(db.String(20), nullable=False)
	password = db.Column(db.String(80), nullable=False)



@app.route('/')
def home():
	return render_template('web_static/home.html') 

@app.route('/login')
def login():
	return render_template('web_static/login.html')

@app.route('/register')
def register():
	return render_template('web_static/register.html')


if __name__ == '__main__':
	app.run(debug=True)
	with app.app_context():
		db.create_all()
	print("Success")
	db.create_all()

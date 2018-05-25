# Project Title
**Link Saver**:- This project will help you to save your links at one place.
# Prerequisites
You should have **LAMP** or **WAMP** installed in your pc

* Php
* MySql
* Apache

# How to set up the project 
1. Clone the project in var/www/html/linkSaver
2. Create a mysql database named "linkSaver"
3. Create a table "login" in the database linkSaver
4. Edit the following credentials according to your setup

   - $servername="localhost";
   - $usrname="root";
   - $passwrd="";
 ## Database table "login" design
 ```
+----------+-----------------+------+-----+---------+----------------+
| Field    | Type            | Null | Key | Default | Extra          |
+----------+-----------------+------+-----+---------+----------------+
| id       | int(7) unsigned | NO   | PRI | NULL    | auto_increment |
| name     | varchar(30)     | NO   |     | NULL    |                |
| username | varchar(30)     | NO   |     | NULL    |                |
| email    | varchar(30)     | NO   |     | NULL    |                |
| mobile   | varchar(30)     | NO   |     | NULL    |                |
| password | varchar(30)     | NO   |     | NULL    |                |
+----------+-----------------+------+-----+---------+----------------+
```
# Running the project
 Go to http://localhost/linkSaver/  and enjoy :smile: .
 
 # Contributors
 Please read [CONTRIBUTING.md](https://github.com/shreyanshjn/link-Saver/graphs/contributors) for details.

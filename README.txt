# Club`s Mangement System

How To Install -
---------

1. Create Database cms.
2. Run cms.sql script provided in folder.
3. Go to localhost/cms/ in Browser and try out our application. 

Note -
---------
1. The adminname and password of admin users are stored in table `admin`. 
		or
| club_name      | user_name  | password |
+--------------+-------------+-------------+ 
| ISTE            | admin     | admin      |
| ROTARACT  | admin2   | admin      |
| GEON          | admin4   | admin      |
| GLUE           | admin5   | admin      \
-------------------------------------------------

Prerequisites-
-----------------
1. Mysql/Maria DataBase
2. Apache2 server
3. Any Text Editor /IDE(like atom,vscode,sublime,...)


Procedure
 After download this project, place the project Directory in /var/www/html/ (ubuntu) or C://Xampp/htdocs/ (windows ) Dump the cms.sql file to database.
 Change the password of database with your database password in config.php admin name and admin password u can get it in the sqldump(database).

# Orbital-team7259
Orbital Project by Team Deepsick (7259)


How to Run This Project
1. Download and install XAMPP
2. Move the project folder
	- Copy the entire Canteam folder into the "htdocs" directory inside your XAMPP installation folder 
3. Start necessary XAMPP modules
	- Open the XAMPP Control Panel and click "Start" for both Apache and MySQL
4. Access the project in your browser
	- Open a web browser and enter the following: localhost/Canteam/Register and Login
5. Done!
	- The project should now be up and running

How to Import the Database via phpMyAdmin
1. Start the MySQL module in XAMPP
	- Make sure MySQL is running in the XAMPP Control Panel (as stated before)
2. Open phpMyAdmin
	- Go to your browser and enter the following: localhost/phpmyadmin
3. Create a new database
	- Click on the "Databases" tab at the top
	- In the Database name field, enter "user_db" (this is the database name required for the project)
	- Click the "Create" button
4. Import the SQL file
	- After the database is created, click on the newly created "user_db" from the left sidebar
	- Then click the "Import" tab at the top
	- Click Choose File, then locate and select the ".sql" file you want to import (here use "user_db.sql")
	- Click the "Import" button
5. Done!
	- The database should now be successfully imported

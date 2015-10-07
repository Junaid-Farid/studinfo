Readme!
Instructions on how to set-up the system:

Software needed:
	XAMPP	=>local server;
				Apache
				Mysql
				PHP
				Filezilla
+-----To set up site----+
1. Copy the studinfo folder inside the htdocs folder. ex:C:\xampp\htdocs\
2. Open a browser ex:Google,IE,Mozilla
3. type localhost/phpmyadmin/
4. to set-up the database
5. look for the database file insaide the studinfo folder
6. the file namely studinfosms.sql
7. then on the phpmyadmin create a database namely studinfosms
8. import the file studinfosms.sql
9. if successfully installed
10. then test the site
11. by openning localhost/studinfo/


				ODBC Connector	
		
	OZEKI	=>local SMS Server;
	-->Install OZEKI NG Server
	-->Create accounts
		-->go to users and applications
		-->Add user ex:Joken
		-->select Database user Interface
				-->Configure accounts by setting database connection
				-->connection string type ODBC
				-->connection String: Driver={MySQL ODBC 5.1 Driver};Server=localhost;Database=studinfosms;UID=root;PWD=;Option=4;
				-->click OK
				
	-->On the Service Provider
	-->click add service provider connection
	-->Click Autodetect to detect find the modem used
	-->leave the sms centre 
	-->but set a phone Number used.
	-->click OK
	-->click connect

	
	
	

How to set up the KangarooBanking Web App

1.	Install XAMPP (Windows) or MAMP (Mac)
2.	Download the KangarooBanking root folder
3.	Go to the folder where XAMPP or MAMP is installed
4.	Find the folder ‘htdocs’ and place the KangarooBanking root folder there
5.	Set up the KangarooBanking database through phpmyadmin

    a.	Go to your browser (preferably Google Chrome) and type:
    
        i.	http://localhost/phpmyadmin (for Windows users) or
        
        ii.	http://localhost:8888/phpmyadmin (for mac users)
    
    b.	Create an admin user with database-wide privileges:
    
        i.	Locate the ‘User accounts’ tab on the main page
        
        ii.	Click the ‘Add user account’ link under the ‘new’ section of the main page
        
        iii.	For Username, enter admin
        
        iv.	For Hostname, select ‘Local’ in the drop-down menu
        
        v.	For the Password enter admin, then reenter
        
        vi.	Under the ‘Global privileges’ section, check the ‘check all’ checkbox
        
        vii.	Press the ‘Go’ button located in the bottom of the page   
    
    c.	To set up the tables necessary to run the web app:
    
        i.	Locate the SQL tab on top of the main page
        
        ii.	In the ‘Run SQL query/queries on server "localhost":’ field, run the following queries to create the tables for the web app:

            CREATE TABLE users (
              user_ssn INT(9) NOT NULL PRIMARY KEY,
              user_first VARCHAR(32) NOT NULL,
              user_last VARCHAR(32) NOT NULL,
              user_email VARCHAR(256) NOT NULL,
              user_uid VARCHAR(32)NOT NULL,
              user_pwd VARCHAR(256) NOT NULL,
              user_street VARCHAR(256) NULL,
              user_city VARCHAR(256) NULL,
              user_state VARCHAR(2) NULL,
              user_zip INT(5) NULL,
              user_phone INT(10) NULL,
              user_dob DATE NULL
            );

            CREATE TABLE checking_acct (
              user_ssn INT(9) NOT NULL PRIMARY KEY,
              c_acct_num INT(8) NOT NULL,
              balance DECIMAL(13,2) NOT NULL
            );

            CREATE TABLE savings_acct (
              user_ssn INT(9) NOT NULL PRIMARY KEY,
              svg_acct_num INT(8) NOT NULL,
              balance DECIMAL(13,2) NOT NULL
            );


        iii. Insert the test cases into the Checking and Savings account with the following SQL queries:

            INSERT INTO checking_acct (`user_ssn`, `c_acct_num`, `balance`) VALUES (123456789, 88421233, 0); 
            INSERT INTO checking_acct (`user_ssn`, `c_acct_num`, `balance`) VALUES (111111111, 88239984, 15003.21);
            INSERT INTO checking_acct (`user_ssn`, `c_acct_num`, `balance`) VALUES (622130993, 88213309, 5002.55);

            INSERT INTO savings_acct (`user_ssn`, `svg_acct_num`, `balance`) VALUES (123456789, 89923221, 1600.21);
            INSERT INTO savings_acct (`user_ssn`, `svg_acct_num`, `balance`) VALUES (111111111, 89110229, 0);
            INSERT INTO savings_acct (`user_ssn`, `svg_acct_num`, `balance`) VALUES (622130993, 89653321, 5002.55);             
            
6.	Edit each test case user’s profile through the web app. (i.e. add the user’s address, phone number, etc.)

7.	Run the web app via localhost:8888 for MAMP or localhost:8000 for XAMPP.

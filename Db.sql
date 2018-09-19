insert into UserLogin (LastName, FirstName, Password) values ('Jones', 'Michael', 'pass!23');

####### Create UserLogin database #########
MySql
CREATE TABLE UserLogin (
    UserLoginID int NOT NULL AUTO_INCREMENT,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    Password varchar(255) NOT NULL,
    PRIMARY KEY (UserLoginID)
);


https://www.w3schools.com/php/php_mysql_connect.asp
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>
SQLite
create table UserLogin (userlogin_pk integer primary key autoincrement, userlogin_date datetime, userlogin_title text, userlogin_firstname text, userlogin_lastname text, userlogin_password text, 
    when_created datetime default (strftime('%Y-%m-%d %H:%M:%f', 'now')), is_deleted bool default (0), user_modified int default (0));

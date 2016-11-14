<html>
<head>
<title>Creating MySQL Tables</title>
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db ='pegasus';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Unable to connect");
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully<br />';
$USERNAME = $_POST['username'];
$PASSWORD = $_POST['password'];
$EMAIL = $_POST['email'];
mysqli_query($conn,"INSERT INTO usertable (username,password,email) 
VALUES ($USERNAME,$PASSWORD,$EMAIL)");
if(! $mysqli_query )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysqli_close();
?>
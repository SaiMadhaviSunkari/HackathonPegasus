<html>
<head>
<title>Creating MySQL Tables</title>
</head>
<body>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
 die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
#$sql = "";
#mysql_select_db( 'pegasus' );
#$retval = mysql_query( $sql, $conn );
#if(! $retval )
#{
 # die('Could not create table: ' . mysql_error());
#}
echo "Table created successfully\n";
#mysql_close($conn);
?>
</body>
</html>
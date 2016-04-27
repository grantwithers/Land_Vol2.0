
<?php

define('HOST','ilab.engr.utk.edu:3306');
define('USER','gwither1';
define('PASSWORD',‘gwither1gwither1’);
define('DATABASE','users');

$conn = mysql_connect(HOST, USER, PASSWORD, DATABASE);

if (!$conn) {
    die('Could not connect: ' . mysql_error());
}

if (!mysql_select_db($dbname))
    die("Can't select database");
    if (!$result) {

    die("Query to show fields from table failed");

}

$username = $_POST('username');
$password = $_POST('password');

$sql = "Insert  d $username, $password"

sql_excute()

if(){
	redirect
}

check

session
?>

</body></html>
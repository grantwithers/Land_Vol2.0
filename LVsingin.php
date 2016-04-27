
<?php

define('HOST','ilab.engr.utk.edu:3306');
define('USER','gwither1';
define('PASSWORD',‘gwither1gwither1’);
define('DATABASE','users');

$conn = mysql_connect(HOST, USER, PASSWORD, DATABASE);

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}
echo "Connected Successfully";

//if (!mysqli_select_db($dbname))
//    die("Can't select database");
//    if (!$result) {
//    die("Query to show fields from table failed");
//
//}
//echo "Failed Database Connection: Retry!"

$username = $_POST('u_name');
$password = $_POST('u_password');

$sql = "INSERT INTO users(u_name, u_password) VALUES ('$username','$userpassword')";


sql_excute()

if(){
	redirect
}

check

session
?>

</body></html>
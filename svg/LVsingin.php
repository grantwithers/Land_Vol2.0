<html>

<head><title>LandVol</title></head><body>

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

$num_row = mysql_num_rows($result);
echo "<h1>Choose one table:<h1>"; 
echo "<form action=\"showtable.php\" method=\"POST\">";
echo "<select name=\"table\" size=\"1\" Font size=\"+2\">";
for($i=0; $i<$num_row; $i++) {

$tablename=mysql_fetch_row($result);
	
	echo "<option value=\"{$tablename[0]}\" >{$tablename[0]}</option>";
	}
	echo "</select>";
	echo "<div><input type=\"submit\" value=\"submit\"></div>";
	echo "</form>";

mysql_free_result($result);
mysql_close($conn);
?>

</body></html>
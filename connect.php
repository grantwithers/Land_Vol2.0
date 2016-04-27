<html>

<head><title>LandVol</title></head><body>

<?php

define('HOST','ilab.engr.utk.edu:3306');
define('USER','gwither1';
define('PASSWORD',‘gwither1gwither1’);
define('DATABASE','users');

$conn = mysql_connect(HOST, USER, PASSWORD, DATABASE);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$fname = $_POST('First_name');
$lname = $_POST('Last_name');
$email = $_POST('email_add');
$uname = $_POST('u_name');
$upass = $_POST('u_password');

if (empty($fname)){echo"First name cannot be blank. Please go back and correct the issue")
	die();
}
if (empty($lname)){echo"Last name cannot be blank. Please go back and correct the issue")
	die();
}
if (empty($email){echo"Email Address cannot be blank. Please go back and correct the issue")
	die();
}
if (empty($uname)){echo"User name cannot be blank. Please go back and correct the issue")
	die();
}
if (empty($upass)){echo"Password cannot be blank. Please go back and correct the issue")
	die();
}

$sql = "INSERT INTO users(First_name, Last_name, email_add, u_name, u_password)
VALUES ('$fname','$lname','$email','$uname','$upass')";

if ($conn->query($sql) == TRUE) {
	echo "Thank you! Your info has been entered into the database, you may close this tab."
} else { echo "Error: ". $sql . "<br>" . $conn->errror;
}

$conn->close();

?>
</body></html>
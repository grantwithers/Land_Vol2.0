
<h1>Post a Room</h1>

<?php
define('HOST', 'ilab.engr.utk.edu:3306'); // The host you want to connect to.
define('USER', 'gwither1'); // The database username.
define('PASSWORD', 'gwither1gwither1');    // The database password.
define('DATABASE', 'gwither27');    // The database name.

$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_POST['room_name'] != '' && $_POST['location'] != '' && $_POST['room_capacity'] != '' && $_POST['room_price'] != '' && $_POST['room_description'] != '') {

$roomname = $_POST['room_name'];
$location = $_POST['location'];
$capacity = $_POST['room_capacity'];
$ppn = $_POST['room_price'];
$description = $_POST['room_description']

    $sql = "INSERT INTO room (room_name, location, room_capacity, room_price, room_description) VALUES ('$roomname', '$location', '$capacity', '$ppn', '$description')";

    mysqli_close($conn);
    ?>

<?php header('Location: http://webmaster.iu.edu/'); ?>

<?php
$con = new mysqli('DBHost', 'UserName', 'Password', 'DBName');
if (!$con) {
    die(mysqli_error($con));
}
?>
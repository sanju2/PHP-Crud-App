<?php
$con = new mysqli('Endpoint', 'UserName', 'Password', 'DatabaseName');
if (!$con) {
    die(mysqli_error($con));
}

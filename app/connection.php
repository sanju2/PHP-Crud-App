<?php
$con = new mysqli('Host', 'UserName', 'Password', 'DatabaseName');
if (!$con) {
    die(mysqli_error($con));
}

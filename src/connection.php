<?php
$con = new mysqli('php-crud-app.cfvufltihmhv.us-east-2.rds.amazonaws.com', 'admin', 'Pa$$w0rd1996test', 'crudoperation');
if (!$con) {
    die(mysqli_error($con));
}
?>
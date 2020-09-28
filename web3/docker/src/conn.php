<?php
$conn=mysqli_connect("mysqltest","root","root","jkba");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

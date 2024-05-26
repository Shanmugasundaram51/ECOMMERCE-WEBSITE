<?php
$con=mysqli_connect("localhost","root","","onlinesale");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "demo";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
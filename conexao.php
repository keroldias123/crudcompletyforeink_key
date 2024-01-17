<?php
$Host = "localhost";
$db = "crud2";
$User = "root";
$Pass = "";
$conn = mysqli_connect($Host, $User, $Pass, $db);
if (!$conn) {
    die("Something went wrong");
}
?>
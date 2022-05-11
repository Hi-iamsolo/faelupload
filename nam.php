<?php

include "conn.php";
$cok=$_COOKIE["card"];
$sel=mysqli_query($conn,"select * from register where card='$cok'");

$fetch=mysqli_fetch_array($sel);


echo $fetch["Name"];

?>
<?php

include "conn.php";


$y=$_POST["d"];
$cok=$_COOKIE["card"];

$del=mysqli_query($conn,"delete from Fael where rand='$y' && card='$cok'");
$fdel=unlink("store/".$y);
if($del && $fdel){
echo "deleted successfully";
}else{
echo "failed to delete";
}
?>
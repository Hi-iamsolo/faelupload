<?php

include "conn.php";


$y=$_POST["d"];
$cok=$_COOKIE["card"];

$del=mysqli_query($conn,"delete from share where faelname='$y' && card='$cok'");
$fdel=unlink("share/".$y);
if($del && $fdel){
echo "deleted successfully";
}else{
echo "failed to delete";
}
?>
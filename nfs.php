<?php


include "conn.php";



$nfs=$_POST["sha"];

$sel=mysqli_query($conn,"select * from register where card='$nfs'");

$fetch=mysqli_fetch_array($sel);

$n=$fetch["Name"];

$cok=$_COOKIE["share"];
$sel2=mysqli_query($conn,"select * from Fael where rand='$cok'");
$fetch2=mysqli_fetch_array($sel2);
$og=$fetch2["faelname"];
$cok2=$_COOKIE["card"];
$sel3=mysqli_query($conn,"select * from register where card='$cok2'");

$fetch3=mysqli_fetch_array($sel3);
$xx=$fetch3["Name"];

$goa=rand(11111,999999).$cok;
$fl="store/".$cok;
$fd="share/".$goa;

$date=date("Y/m/d");
$ins=mysqli_query($conn,"insert into share(date,faelname,card,ff,sedr) value('$date','$goa','$nfs','$og','$xx')");

if(copy($fl,$fd) && $ins){
echo " File Sucessfully shared.";
}
else{
echo "fail to share file.";
}




?>
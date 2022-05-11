<?php



include "conn.php";


$us=$_POST["username"];
$pass=$_POST["pass"];



$sel=mysqli_query($conn,"select * from register where email='$us'");

$check=mysqli_num_rows($sel);

if ($check==1){

$fetch=mysqli_fetch_assoc($sel);

$fetch_pas=$fetch["password"];
if(strcmp($fetch_pas,$pass)==0){
setcookie("card", $fetch["card"], time() + (10000), "/");

echo "yes";

}else{
echo "passw";
}
}else{

echo "eme";
}




?>
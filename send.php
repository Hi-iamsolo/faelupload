<?php
include "conn.php";
$fname=$_FILES["any"]["name"];
$ftname=$_FILES["any"]["tmp_name"];
$date=date("Y/m/d");

$cok=$_COOKIE["card"];
if($cok!=null){

foreach($fname as $key=>$val){
$ra=rand(0,800000);
$path=pathinfo("$val", PATHINFO_EXTENSION);
$lo=strtolower($path);
$ra=$ra.$val;
$raa=$ra.".txt";

if(strcmp($lo,"html")==0 || strcmp($lo,"php")==0){



$move=move_uploaded_file($ftname[$key],'store/'.$raa);

$ins=mysqli_query($conn,"insert into Fael (faelname,card,date,rand) values('$val','$cok','$date','$raa')");
if($move && $ins){

echo "$val uploaded <br>";


}
else{
echo "$val file failed to upload because its size is larger than 10MB <br>";
}

}
else{


$move=move_uploaded_file($ftname[$key],'store/'.$ra);

$ins=mysqli_query($conn,"insert into Fael (faelname,card,date,rand) values('$val','$cok','$date','$ra')");
if($move && $ins){

echo "$val uploaded <br>";


}
else{
echo "$val file failed to upload because its size is larger than 10MB <br>";
}


}

}


}else{

echo "Session expired.Login again";
}

?>
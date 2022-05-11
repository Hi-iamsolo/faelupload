<?php

include "conn.php";

$ee=$_POST["senn"];


$sd=setcookie("share", $ee, time() + (10000), "/");
if($sd){

echo "yes";
}else{
echo "failed";

}
?>
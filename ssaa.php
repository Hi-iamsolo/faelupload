<?php



include "conn.php";


$cok=$_COOKIE["card"];
$sel=mysqli_query($conn,"select * from share where card='$cok'");
?>
<tr>
  <th>Date</th>
  <th>Filename</th>
  
  <th>Delete</th>
  <th>Look</tr>
  

</tr>
<?php

while($fetch=mysqli_fetch_array($sel)){
?>

  
  
  <tr>
  <td><?php echo $fetch["date"] ;?></td>
  <td><?php echo $fetch["ff"]."(".$fetch["sedr"].")" ;?></td>
  
  <td><button data-date="<?php echo $fetch["date"];?>"  data-del="<?php echo $fetch["faelname"];?>"  class="dell">Delete</button></td>
  <td><button data-date="<?php echo $fetch["date"];?>"  data-doww="<?php echo $fetch["faelname"];?>"  class="doww">Look</button></td>
  
  
  
  </tr>


<?php
}




?>
<?php


include "conn.php";

$cok=$_COOKIE["card"];
$sel=mysqli_query($conn,"select * from Fael where card='$cok'");
?>
<tr>
  <th>Date</th>
  <th>Filename</th>
  <th>Delete</th>
  <th>Look</th>
  <th>Send</th>

</tr>
<?php

while($fetch=mysqli_fetch_array($sel)){
?>

  
  
  <tr>
  <td><?php echo $fetch["date"] ;?></td>
  <td><?php echo $fetch["faelname"] ;?></td>
  <td><button data-date="<?php echo $fetch["date"];?>"  data-del="<?php echo $fetch["rand"];?>"  class="del">Delete</button></td>
  <td><button data-date="<?php echo $fetch["date"];?>"  data-dow="<?php echo $fetch["rand"];?>"  class="dow">Look</button></td>
  <td><button data-date="<?php echo $fetch["date"];?>"  data-send="<?php echo $fetch["rand"];?>"  class="send">Share</button></td>
  
  
  </tr>


<?php
}



?>
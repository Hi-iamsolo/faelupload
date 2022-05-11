<?php


include "conn.php";


$sel=mysqli_query($conn,"select * from register");
?>
<tr>
  <th>Share file to</th>
  <th>Share</th>
  
</tr>
<?php

while($fetch=mysqli_fetch_array($sel)){
?>
  
  <tr>
  <td><?php echo $fetch["Name"] ;?></td>
  
  <td><button data-share="<?php echo $fetch["card"];?>"  class="shaar">Share</button></td>
  
  </tr>


<?php


}


?>
<?php
   echo "What products are you looking for";
   echo "<br>";
   $query = "SELECT * FROM products";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   while ($row = mysqli_fetch_assoc($result))
  {
	echo '<input type="radio" name = "product" value = "';
	echo $row["proID"];
        echo '">' . $row["description"] . "<br>";
  }	
   mysqli_free_result($result);
  
?>

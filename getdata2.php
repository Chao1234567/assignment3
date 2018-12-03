<?php
   $query = "SELECT * FROM customers";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="customer" value="';
        echo $row["cusID"];
        echo '">' . $row["fname"] . " " . $row["lname"] . "--with phone Number--" . $row["phoneNum"] ."<br>";
   }
   mysqli_free_result($result);
   mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Products information displaying</title>
</head>
<body>
<?php
include 'connection.php';
?>
<h1>-----------------------------------------</h1>
<ol>
<?php
   $whichOrder= $_POST["choice"];
   echo $whichOrder;
   if($whichOrder == "Asending")
   {
	$query = 'SELECT * FROM products ORDER BY cost ASC';
   }
   else
   {
        $query = 'SELECT * FROM products ORDER BY cost DESC';
   }
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["proID"] . "--" . $row["description"] . "--" . $row["cost"] . "--" . $rowp["numInstock"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

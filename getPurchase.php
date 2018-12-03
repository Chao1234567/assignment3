<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Purchase information displaying</title>
</head>
<body>
<?php
include 'connection.php';
?>
<h1>Here are your purchase sheet:</h1>
<ol>
<?php
   $which= $_POST["customer"];
   $query = 'SELECT products.description, purchase.quantity FROM products,purchase WHERE products.proID = purchase.procID AND purchase.cusID = "' . $which . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo $row["description"] . "--" . $row["quantity"];
	echo "</li>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

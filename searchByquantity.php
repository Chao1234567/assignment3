<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Search specific information by quantity</title>
</head>
<body>
<?php
include 'connection.php';
?>
<h1>Here is the result</h1>
<ol>
<?php
   $quantity = $_POST["quantity"];
   echo $quantity;
   $query = 'SELECT * FROM customers,products,purchase WHERE customers.cusID = purchase.cusID AND products.proID = purchase.procID AND purchase.quantity > '.$quantity.'';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
     }
     while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["fname"] . "--" . $row["lname"] . "--" .$row["description"] . "--" . $row["quantity"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

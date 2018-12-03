<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Profits display</title>
</head>
<body>
<?php
include 'connection.php';
?>
<h1>Here is the result:</h1>
<ol>
<?php
   $product = $_POST["product"];
   $query = 'SELECT SUM(purchase.quantity) AS NumberPurchased,products.description, products.cost*SUM(purchase.quantity) AS Profits FROM products,purchase WHERE products.proID = purchase.procID AND products.proID = "'.$product.'" GROUP BY products.description';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"] . "--NumberPurchased: " . $row["NumberPurchased"] . "--Profits: " . $row["Profits"] ;
     }
     mysqli_free_result($result);
?>
<?php
   mysqli_close($connection);
?>
</body>
</html>

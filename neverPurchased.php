<?php
$query = "SELECT * FROM products WHERE proID NOT IN(SELECT procID FROM purchase)";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
     echo "<li>";
     echo $row["description"];
     echo "</li>";
}
mysqli_free_result($result);
?>


<?php
$query = "SELECT * FROM customers Group BY lname";
$result = mysqli_query($connection,$query);
if (!$result) {
    die("databases query failed.");
}
while ($row = mysqli_fetch_assoc($result)) {
     echo "<li>";
     echo $row["cusID"] . "--". $row["fname"] . "--". $row["lname"] . "--" . $row["city"] . "--" . $row["phoneNum"] . $row["servD"];
     echo "</li>";
}
mysqli_free_result($result);
?>

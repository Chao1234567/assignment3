<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
</head>
<body>
<?php
   include 'connection.php';
?>
<h1>Here is the result:</h1>
<ol>
<?php
   $whichCustomer = $_POST["customer"];
   $query = 'DELETE FROM customers WHERE cusID = "'.$whichCustomer.'"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Target is removed";
   mysqli_close($connection);
?>
</body>
</html>

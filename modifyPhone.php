
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
<?php
   $NewPhone = $_POST["phone"];
   $whichCustomer = $_POST["customer"];
   echo $NewPhone;
   echo $whichCustomer;
   $query= 'UPDATE customers SET phoneNum = "'.$NewPhone.'" WHERE cusID = "'.$whichCustomer.'"';
   echo "Phone number is changed";
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
?>
<?php
   mysqli_close($connection);
?>
</body>
</html>

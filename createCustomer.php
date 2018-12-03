<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Create Customer</title>
</head>
<body>
<?php
include 'connection.php';
?>
<h1>Here are your pets:</h1>

<?php
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $city = $_POST["city"];
  $phone = $_POST["phone"];
  echo "data inserted are :";
  echo "<br>";
  echo $fname . "--" . $lname . "--" . $city . "--" . $phone;
  $serveID = 0;
  $query1 = 'SELECT MAX(cusID) as maxid FROM customers';
  $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database max query failed.");
   }
  $row=mysqli_fetch_assoc($result);
  echo '<br>';
  $cusID = $row["maxid"];
  $cusID = $cusID +1;
  $query = 'INSERT INTO customers VALUE("'.$cusID.'","'.$fname.'" , "'.$lname.'","'.$city.'","'.$phone.'","33")';  
  if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
  echo "New Customer is added!!";
?>

<?php
   mysqli_close($connection);
?>
</body>
</html>


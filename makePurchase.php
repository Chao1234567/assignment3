<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Purchase update</title>
</head>
<body>

<h1>Here are results</h1>
<?php
   include 'connection.php';
?>
<?php
  $query = 'SELECT * FROM purchase';
  $result = mysqli_query($connection,$query);
  $exists = 0;
  if(!$result)
  {
    die("database query failed");
   }
  $whichCus = $_POST["customer"];
  $whichProduct = $_POST["product"];
  $quantity = $_POST["num"];
  while($row = mysqli_fetch_assoc($result))
  {
    if($whichCus == $row["cusID"] and $whichProduct == $row["procID"] )
    {
       $exists = 1; 
       $quantity = $quantity + $row["quantity"];

    }
  }
  if($exists == 0)
  {
    $query1 = 'INSERT INTO purchase values("'.$whichProduct.'","'.$whichCus.'",'.$quantity.')';
    echo "new tuple is added";
  }
  else
  {
    echo $quantity;
    $query1 = 'UPDATE purchase SET quantity = '.$quantity.' WHERE cusID = "'.$whichCus.'" AND procID = "'.$whichProduct.'"';
  }
  if (!mysqli_query($connection, $query1)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   mysqli_close($connection);
?>
</body>
</html>


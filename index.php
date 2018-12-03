<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment3--Workshop--mainpage</title>
</head>
<body>
<?php
include 'connection.php';
?>
<h1>Welcome to assignment3 database manage page</h1>
<h2>Below are all the options for employees of the company</h2>
<h3>Under title of oprions there is a breif description of option</h>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<h3>Customer Information displaying</h3>
<?php
include 'getCustomer.php';
?>
<h7>Cutomer purchase information displaying</h7>
<form action="getPurchase.php" method="post">
<?php 
   include 'getdata1.php';
?>
<input type="submit" value="Get purchase info">
</form>
<?php
mysqli_close($connection);
?> 
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<br>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<h3>Display product info: Asending or Desending</h3>
<form action="getProduct.php" method="post">
<input type="radio" name="choice" value="Asending" checked>Asending <br>
<input type="radio" name="choice" value="Desending">Desending <br>
<input type="submit" value="Get Order Choice"><br>
</form>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<br>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<br>
<?php
include 'connection.php';
?>
<form action="makePurchase.php" method="post">
<?php
   include 'getdata1.php';
?>
<br>
<?php
   include 'selectPurchase.php';
?>
How many :<input type="text" name="num"><br>
<input type="submit" value="Get purchase">
</form>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<br>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<?php
include 'connection.php'; 
?>
<h3>Create new Customer</h3>
<form action = "createCustomer.php" method = "post">
New Customer First Name<input type="text" name="fname" >
<br>
New Customer Last Name<input type="text" name="lname" >
<br>
New Customer City<input type="text" name="city">
<br>
New Customer Phone#<input type="text" name="phone">
<input type="submit" value="create new customer">
</form>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<br>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<?php
include 'connection.php';
?>
<h3>Modify Phone Number of Customer</h3>
<form action = "modifyPhone.php" method="post">
<?php
   include 'getdata2.php';
?>
New Phone:<input type="text" name="phone">
<input type="submit" value="change phone number">
</form>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<br>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<h3>Delete Customer</h3>
<?php
include 'connection.php';
?>
<h3>Delete Customer</h3>
<form action = "deleteCustomer.php" method = "post" >
<?php
include 'getdata1.php';
?>
<input type="submit" value="delete customer">
</form>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<br>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<h3>Search Information By Quantity</h3>
<form action = "searchByquantity.php" method = "post">
Quantity<input typt="text" name="quantity">
<input type ="submit" value ="search">
</form>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<br>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<?php
include 'connection.php'
?>
<h3>Products never been purchased</h3>
<?php
include 'neverPurchased.php'
?>

<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<br>
<h4>-------------------------------------------------------------------</h4>
<h4>-------------------------------------------------------------------</h4>
<?php
include 'connection.php'
?>
<h3>Overall information relate to products</h3>
<form action = "overallProduct.php" method = "post">
<?php
include 'selectPurchase.php'
?>
<input type = "submit" value="search">
</form>
</body>
</html>

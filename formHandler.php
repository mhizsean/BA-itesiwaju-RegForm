<?php

$db = mysqli_connect('localhost','root','esther001','itesiwaju');

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
	$email    = $_POST['email'];
	$phone	  = $_POST['phone'];
	$ministry = $_POST['ministry'];

  	$query = "INSERT INTO event (FirstName, LastName, Email, Ministry, Phone) 
  			  VALUES('$firstname', '$lastname', '$email', '$ministry', '$phone')";
  	$done = mysqli_query($db, $query);
  	
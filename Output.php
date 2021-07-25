<?php
	session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="petadoption";
	$conn=mysqli_connect($host,$user,$pass,$db);
	//echo "<script>alert('connect succesfully')</script>";
	
	//if button pressed
	if(isset($_post['search'])){
	$query = mysqli_query($conn,"SELECT * FROM upload ");
	while($row = mysqli_fetch_array($query)){
	
	echo $row['sex'];
	echo $row['breed'];
	echo $row['age'];
	echo $row['cost'];
	echo $row['status'];

	}}
		
	
?>

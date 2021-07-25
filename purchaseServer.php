

<?php
	session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="petadoption";
	$conn=mysqli_connect($host,$user,$pass,$db);
	//echo "<script>alert('connect succesfully')</script>";

	
if(isset($_POST['purchase1'])){	
	$username=$_POST['username'];
	$email=($_POST['email']);
	$number=($_POST['number']);
	$addres=($_POST['addres']);
	
	$sql="INSERT INTO `purchase` (`username`, `email`, `number`, `addres`) VALUES ('$username', '$email', '$number', '$addres')";
	$query=mysqli_query($conn,$sql);
	echo "<script>alert('Submitted succesfully')</script>";
	

}	
						
?>
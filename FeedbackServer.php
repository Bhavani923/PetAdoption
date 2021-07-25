<?php
	session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="petadoption";
	$conn=mysqli_connect($host,$user,$pass,$db);
	
	
	if(isset($_POST['feedbackPost'])){
	
		
		$username=($_POST['username']);
		$feedback=($_POST['give_feedback']);
			
			
		$sql="INSERT INTO `feedback` (`username`,`give_feedback`) VALUES ('$username','$feedback')";
		$query=mysqli_query($conn,$sql);
			
	
	}
	
?>
<?php
   
   session_start();
    $host="localhost";
    $user="root";
    $pass="";
    $db="petadoption";
	$conn=mysqli_connect($host,$user,$pass,$db);
	//echo "<script>alert('connect succesfully')</script>";
	$msg="";
	
	if (isset($_POST['upload1'])) {
		$filename = $_FILES["image"]["name"];
		$tempname = $_FILES["image"]["tmp_name"];   
			$folder ="upload/".$filename($_FILES['image']['name']);
	//		$filename = $_FILES["image"]["name"];
		//$tempname = $_FILES["image"]["tmp_name"]; 
			
		$sex=$_POST['sex'];
		$breed=$_POST['breed'];
		$age=$_POST['age'];
		$cost=$_POST['cost'];
		$status=$_POST['status'];
		
		$sql = "INSERT INTO `upload` (`image`, `sex`, `breed`, `age`, `cost`, `status`) VALUES ('$filename','$sex','$breed','$age','$cost','$status')";
		mysqli_query($conn, $sql);
		
		if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	}
?>

<!DOCTYPE html> 
<head>
    <title>Image Upload</title>
    
</head>
 
<body>
    <div id="content">
 
        <form method="POST"
              action="inserting.php"
              enctype="multipart/form-data">
			  
			  
            <input type="file"
                   name="image"
                   value="" />
			<input type="text" name="sex" placeholder="Sex" />
			<input type="text" name="breed" placeholder="Sex" />
			<input type="text" name="age" placeholder="Sex" />
			<input type="text" name="cost" placeholder="Sex" />
			<input type="text" name="status" placeholder="Sex" />
			
 
            <div>
                <button type="submit"
                        name="upload1">
                  UPLOAD
                </button>
            </div>
        </form>
    </div>
</body>
</html>
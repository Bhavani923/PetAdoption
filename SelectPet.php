<?php include('Output.php') ?>

<!DOCTYPE html>
<head>
	<title>SelectPet</title>
	 <link rel="shortcut icon" href="imageL.png">
	<link rel="stylesheet" type="text/css" href="SelectPet.css?v=<?php echo time(); ?>">
	
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Emblema+One&family=Festive&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
</head>
<body>
		<div class="logo">
			<ul>
				<li><img src="imageL.png" ></li>
				<li>.</li>
				<li class="a"><a href="#">Adopt and Adore</a></li>
				<li class="ab"><a href="#">Akshata</a></li>
			</ul>
		</div>
		

	

	<div class="wrapper">
		<h1>I'm here Adopt me<h1>
		
	</div>
	
	<div class="selectPet1">
		
	
		<ul>
		<li><button>Find your dog</button>
		
		<!--<li><label for="formate1">Select Sex</label><br/></br>-->
		<select class="format" id="formate1" width="100px">
			<option value="select">Select Sex </option>
			<option class="yes" value="png">Male</option>
			<option class="yes" value="png">Female</option>
			
		</select></li>
		
		<li>
	<!--	<label for="formate2">Select Age</label><br/></br>-->
		<select class="format" id="formate2" >
			<option value="2">Select Age </option>
			<option class="yes" value="png">2</option>
			<option class="yes" value="jpeg">4</option>
			<option class="yes" value="jpg">5</option>
		</select></li>
		
		<li>
	<!--	<label for="formate3">Select Age</label><br/></br>-->
		<select class="format" id="formate3">
			<option value="3">Select Breed </option>
			<option class="yes" value="png">PNG</option>
			<option class="yes" value="jpeg">JPEG</option>
			<option class="yes" value="jpg">JPG</option>
		</select></li>
		
	<!--	<li>
		<label for="formate4">Select Age</label><br/></br> 
		<select class="format" id="formate4">
			<option value="4">select  </option>
			<option class="yes" value="png">PNG</option>
			<option class="yes" value="jpeg">JPEG</option>
			<option class="yes" value="jpg">JPG</option>
		</select></li> -->
		
			
	<!--	<li> 
			<button >Search</button>
			
		</li>-->
		
		</ul>
	</div>
	<div class="search_btn">
		<button type="button" name="search"  onclick="dislay()">Search</button>
	</div>
	<br/>
	</br>
	
	
	 
	
		
			<?php
				$db=mysqli_connect("localhost","root","","petadoption");
				$sql="SELECT * FROM upload";
				$result=mysqli_query($db,$sql);
				$im="It's a puppy dog";
				$sex="SEX :";
				$breed="BREED :";
				$age="AGE :";
				$cost="COST :";
				$status="STATUS :";
				
				
				
			?>
			<!--	<table style=width:100%>;
					<tr>  ;
					
						<table class='table_name' width=100%>";
						 <th class='head'></th>;
							</br>;
							<tr>  ;
								<th class='type'>SEX</th>;
								
								<td class='sex' > <div id="sex1"></div></td> ;
								
							</tr>;
							<tr>  ;
								<th class='type'>SEX</th>;
								
								<td class='sex' > <div id="breed1"></div></td> ;
								
							</tr>;
							<tr>  ;
								<th class='type'>SEX</th>;
								
								<td class='sex' > <div id="age1"></div></td> ;
								
							</tr>;
							<tr>  ;
								<th class='type'>SEX</th>;
								
								<td class='sex' > <div id="cost1"></div></td> ;
								
							</tr>;
							<tr>  ;
								<th class='type'>SEX</th>;
								
								<td class='sex' > <div id="status1"></div></td> ;
								
							</tr>;
							
						
							
						</table>;
				
				
				</tr>;
				</table>; -->
				
				
	<!--	</div>
	</div>-->
	 
	 <script type='text/javascript'>
		function display(){
			<?php
			
			echo "<div class='container1'>";
				while($row= mysqli_fetch_array($result)){
					echo "<div class='container2'>";
						echo "<p class='text_p'>".$row['image']."</p>";
						echo "<p class='text_p'>".$row['sex']."</p>";
						echo "<p class='text_p'>".$row['breed']."</p>";
						echo "<p class='text_p'>".$row['age']."</p>";
						echo "<p class='text_p'>".$row['cost']."</p>";
						echo "<p class='text_p'>".$row['status']."</p>";
					echo "</div>";	
			
				}
				echo "</div>";	
						
			
			?>
			
		}
	 </script>
	
	
</body>

</html>
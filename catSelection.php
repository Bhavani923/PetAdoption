<!DOCTYPE html>
<head>
	<title>SELECTPET</title>
	<link rel="stylesheet" type="text/css" href="catSelection.css?v=<?php echo time(); ?>">
	
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Emblema+One&family=Festive&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/imageL.png">
</head>
<body">
    <div class="bodyt">
		<div class="logo">
			<ul>
				<li><h1 style=><img src="imageL.png" ></h1></li>
				<li></li>
				<li class="a"><a href="#">
                    <h3 style="color: rgb(14, 11, 11);font-family: Brush Script MT; text-decoration: underline;">ADOPT AND ADORE</h3>
                </a></li>
			</ul>
		</div>
	<div class="wrapper">
		<h1 style="font-style: italic; font-size: 1.5rem;">I'm here Adopt me:)!!<h1>	
	</div>

	<div class="selectPet1">
		<ul>
		<li><button>
            <div class="header"><h5 style=" font-size: 25px; color: rgb(240, 215, 215); "> your cat</h5></div>
        </button>
		
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
			<option class="yes" value="number">2</option>
			<option class="yes" value="number">4</option>
			<option class="yes" value="number">5</option>
		</select></li>
		
		<li>
	<!--	<label for="formate3">Select Age</label><br/></br>-->
		<select class="format" id="formate3">
			<option value="3">Select Breed </option>
			<option class="yes" value="name">cat</option>
			<option class="yes" value="name">Kitten</option>
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
	<div class="search_btn" >
	<!--	<button type="button" class="my"> -->
			<a href="http://localhost:8081/petAdoption/toSelectCat.php">Search</a>
		
	</div>
</div>
</body>

</html>
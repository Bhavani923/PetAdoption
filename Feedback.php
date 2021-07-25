
<?php include('FeedbackServer.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FEEDBACK FORM</title>
    <link rel="stylesheet" href="Feedback.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="shortcut icon" href="imageL.png">
  </head>
  <body>
    <div class="container">
      <div class="post">
        <div class="text"></div>
        <h2 style="font-family: serif;color: rgb(60, 226, 212);"> Thanks for rating us!</h2>
        <div class="edit">
            <h5 style="text-decoration: underline; color: tomato;">EDIT</h5>
        </div>
      </div>
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
		
        <form action="Feedback.php" method="post">
          <header></header>
		  <div class="textarea1">
            <textarea cols="30" placeholder="USERNAME"  name="username" text-align= "center"></textarea>
          </div>
          <div class="textarea">
            <textarea cols="30" placeholder="Give us your feedback.." name="give_feedback" ></textarea>
          </div>
          <div class="btn">
            <button type="submit" name="feedbackPost">
                <h3 style="color: navy;font-family: serif;">Post</h3>
            </button>
          </div>
        </form>
      </div>
    </div>
    <script>
      const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
    </script>
	
	<?php
	$h="FEEDBACK";
	$db=mysqli_connect("localhost","root","","petadoption");
	$sql="SELECT * FROM feedback";
	$query = mysqli_query($conn,"SELECT * FROM `feedback` ");
		while($row = mysqli_fetch_array($query)){
				$row['username'];
				 $row['give_feedback'];
		}
	
		$result=mysqli_query($db,$sql);
				
				echo "<div class='container1'>";
					while($row= mysqli_fetch_array($result)){
						echo "<div class='container2'>";
						echo "<p class='text_n'>"."Username:  ".$row['username']."</p>";
						echo "<p class='text_p'>".$row['give_feedback']."</p>";
						echo "</br>";
						echo "</div>";	
					}
				echo "</div>";	
	?>
	

  </body>
</html>
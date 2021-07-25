<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SELECT PET CAT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font awesome icon -->
    <link rel="stylesheet" href="toSelectCat.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="images/imageL.png">
  </head>
  <body>

    <!-- header -->
    <header>
      <nav class = "navbar">
        <div class = "container">
          <a href = "toselectcat.html" class = "navbar-brand">Select Cat</a>
          <div class = "navbar-nav">
            <a href = "http://localhost:8081/PetAdoption/home.php">home</a>
            <a href = "help.php">help</a>
            <a href = "http://localhost:8081/petAdoption/catSelection.php">select pet</a>
            <a href = "aboutUs.php">about</a>
          </div>
        </div>
      </nav>
      <div class = "banner">
        <div class = "container">
          <h1 class = "banner-title">
            <span>Adopt.</span> And Adore
          </h1>
          <p>Happiness is a cute KITTEN:)</p>
          <form>
            <input type = "text" class = "search-input" placeholder="find your pet cat . . .">
            <button type = "submit" class = "search-btn">
              <i class = "fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
    </header>
    <!-- end of header -->
    
   
    <section class = "blog" id = "blog">
      <div class = "container">
        <div class = "title">
          <h2>Latest pets</h2>
          <p>recent photos of Cats and Kittens</p>
        </div>
        <div class = "blog-content">
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/cat9.jpeg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
              <span>It's a CAT</span>
              <h3 style="font-family: serif;">Name:Guffy</h3>
              <h3 style="font-family: serif;">Age:4 years</h3>
              <h3 style="font-family: serif;">Gender:male</h3>
              <h3 style="font-family: serif;">Breed:persian cat</h3>
              <a href = "Purchase.php">Click here to Adopt</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/cat6.jpeg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
                <span>It's a CAT</span>
                <h3 style="font-family: serif;">Name:maggie</h3>
                <h3 style="font-family: serif;">Age:3.5 years</h3>
                <h3 style="font-family: serif;">Gender:Female</h3>
                <h3 style="font-family: serif;">Breed:Bobtails</h3>
                <a href = "Purchase.php">Click here to Adopt</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/cat10.jpeg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
                <span>It's a CAT</span>
                <h3 style="font-family: serif;">Name:Jyo</h3>
                <h3 style="font-family: serif;">Age:5 years</h3>
                <h3 style="font-family: serif;">Gender:male</h3>
                <h3 style="font-family: serif;">Breed:Bengal cat</h3>
                <a href = "Purchase.php">Click here to Adopt</a>
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/cat3.jpeg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
                <span>It's a kitten</span>
                <h3 style="font-family: serif;">Name:Honey</h3>
                <h3 style="font-family: serif;">Age:2 years</h3>
                <h3 style="font-family: serif;">Gender:Female</h3>
                <h3 style="font-family: serif;">Breed:American Shorthair</h3>
                <a href = "Purchase.php">Click here to Adopt</a>
                
                
            </div>
          </div>
          <!-- end of item -->
          <!-- item -->
          <div class = "blog-item">
            <div class = "blog-img">
              <img src = "images/cat5.jpeg" alt = "">
              <span><i class = "far fa-heart"></i></span>
            </div>
            <div class = "blog-text">
                <span>It's a cat</span>
                <h3 style="font-family: serif;">Name:candy</h3>
                <h3 style="font-family: serif;">Age:5 years</h3>
                <h3 style="font-family: serif;">Gender:Female</h3>
                <h3 style="font-family: serif;">Breed:Normal cat</h3>
                <a href = "Purchase.php">Click here to Adopt</a>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <!-- end of blog -->

    <!-- about -->
    <section class = "about" id = "about">
      <div class = "container">
        <div class = "about-content">
          <div>
            <img src = "images/petcat.jpg" alt = "">
          </div>
          <div class = "about-text">
            <div class = "title">
              <h2>Importance of adopting pets</h2>
              
            </div>
            <p>Each year, it's estimated that more than one million adoptable dogs and cats are euthanized in the United States, simply because too many pets come into shelters and too few people consider adoption when looking for a pet.)</p>

             <p>
                The number of euthanized animals could be reduced dramatically if more people adopted pets instead of buying them. When you adopt, you save a loving animal by making them part of your family and open up shelter space for another animal who might desperately need it.And so u have Adopt and Adore;>
             </p>   

          </div>
        </div>
      </div>
    </section>
    <!-- end of about -->

    <!-- footer -->
    <footer>
      <div class = "social-links">
        <a href = "dropdown.html"><i class = "fab fa-facebook-f"></i></a>
      </div>
      <span>ADOPT and ADORE</span>
    </footer>
    <!-- end of footer -->
    
    
  </body>
</html>
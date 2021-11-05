<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3658ab6f9c.js" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/media.css">
  

  <title>TINTYONE</title>
    <style>
  .footer{
	  background-color:#F5F5F5;
	  color:#8a8a8a;
	  font-size:16px;
	  padding:60px 0 20px;
	
  }
  
  .column1 h3
  {
	  margin-bottom:20px;
  }
  .app-logo img
  {
	  margin-bottom:20px;
  }

  .column2 img
  {  width:160px;
    
  }
  .column3 ul,.column4 ul
  {
	  padding:0;
	  
  }
  .column3 ul li,.column4 ul li 
  {
	  list-style:none;
	  
  }
  .column4 ul li 
  {
	  display:inline;
	  padding: 0 5px;
  }
  .hr
  {
	  margin:20px 0;
	  
  }
  .copyright{
	  text-align:center;
  }
  @media (max-width: 575.98px) {

  .position
  {
	 margin-bottom:20px; 
  }
  .column1
  {
	  margin-bottom:30px;
  }
  .column1
  {
	  
  }
}
</style>
  

 </head>
 

 <body>

       <header>
   <div class="container">
   <h1 class="span">Flower Bouquet</h1>
    <hr>
 <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid g-0">
    <!--<a class="navbar-brand" href="#">Navbar</a>-->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="allproduct.php">Shop</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="team.php">Meet the Team</a>
        </li>
         <li class="nav-item">
          <?php
          if(isset($_SESSION['loggedin'] )&& $_SESSION['loggedin'] == true){
          echo '<a class="nav-link" href="profile.php">My Profile</a>';
        }else{
          echo '<a class="nav-link" href="#">New Collection</a>';
        }
        ?>
        </li>
    </ul>
     <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
       <li class="nav-item">
          <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-bell"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-caret-down"></i></a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fas fa-user-alt"></i></a>
        </li>
		

   </ul>

</div>
</div>
</nav>
<!--menu end-->
</div>
</header>
 <section class="origin position-relative">
  <div class="container">
   <div class="row">
     <div class="col-lg-6 col-md-6">
     <div class="origin-img">
        <img src="images/origin.jpg" alt="bouquet">
'         </div>
          </div>
    <div class="col-lg-4  col-md-6 position-absolute top-50 start-50">
   <div class="origin-desc  ">
     <span><b>The Best Shopping Experience</b></span>
     <h1>Our Origins</h1>
     <p>Flower Bouquet is a trendsetting online store, offering our first-rate products and exceptional customer service to shoppers from the comfort of their own homes. We’re a business made up of innovators and forward-thinkers, with the drive and wherewithal to constantly update and improve the online shopping experience.</p>
    <p>Our online store has become synonymous with quality, and we ensure a continuous variety of fantastic merchandise that fit any budget. Check it out and start shopping today.</p>
   </div>
   </div>
        
      </div>
    </div>





    </section>
    <!--policies start-->
   <section class="policies">
     <div class="container">
       <div class="row">
         <div class="col-lg-6">
          <div class="policiesDesc">
           <h1>Policies at Flower Bouquet</h1>
           <p>Services as It Should </p>
           <p>​In today’s online shopping market, we believe that honesty is the best policy. That’s why we designed the most generous, fair and transparent store policy for our customers. Read the following sections to find out more about how we ship or exchange products, or about how we secure your personal data. Please don’t hesitate to contact us if you have any questions!</p>
           </div>
        </div>
          <div class="col-lg-6">
          <div class="policies-image">
            <img src="images/aboutus.jpg" alt="flower shop">
          </div>


         </div>
       </div>
     </div>
   </section>
   <!--policies end-->
   
   
   <footer class="footer">
  <div class="container">
    <div class="row">
	<div class="col-lg-3 col-md-6 column1" >
	   <h3>Download Our App</h3>
	   <p>Download Our app for ios and android</p>
	  <div class="app-logo">
	   <img src="images/gplay.png">
	  </div>
	 
	</div>
	<div class="col-lg-3 col-md-6 column2">
	   <img src="images/logo.jpg">
	   <p>It is a long established fact that a reader will be distracted by the readable content </p>
	</div>
	
	
	
	
	<div class="col-lg-3 col-md-6 column3">
	  <h3>Useful links</h3>
	  <ul>
	  <li>Return Policy</li>
	  <li>Payment Details</li>
	  <li>Use Coupuns</li>
	  <li>Join Affiliate</li>
	  </ul>
	</div>
	
	<div class="col-lg-3 col-md-6 column4">
	  <h3>Follow us</h3>
	  <ul>
	  <li><i class="fab fa-facebook-f"></i></li>
	  <li><i class="fab fa-twitter"></i></li>
	  <li><i class="fab fa-instagram-square"></i></li>
	  <li><i class="fab fa-linkedin"></i></li>
	  </ul>
	</div>
	
  </div>
  
  <hr>
  <p class="copyright">&#169 Copyright 2021.All Rights Reserved</p>
  </div>

</footer>


   
  

    

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
   
<script src="js/script.js"></script>

</body>
</html>





 
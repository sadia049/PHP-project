<?php 
   session_start();
  include 'connection_open.php';
  if(isset($_POST['submit']))
  {
  	$name =  $_POST['user_name'];
  	$email =  $_POST['user_email'];
  	$country = $_POST['country'];
  	$message = $_POST['message'];
	 date_default_timezone_set('ASIA/DHAKA');
	 $current_time = date('Y-m-d H:i:s');

	 $sqlcheck = "INSERT INTO contact_table(Cname,Cemail,country,message,status,created_date,updated_date) 
	 VALUES('$name','$email','$country','$message',1,'$current_time','$current_time')";
	 $query_run = mysqli_query($link,$sqlcheck); 
   
    }
?>




<!DOCTYPE html>
<html>
	
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/contactstyle.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	 <script src="https://kit.fontawesome.com/3658ab6f9c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <title>Contact Page</title>
	 
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
	 	   <header style="color:white">
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
	 
	 
	 
	
        <div class="Container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h2 class="heading">Get In Touch</h2>
                     <p>Feel Free To Talk With Us</p>
                     <p>flowerBouquet@gmail.com</p>
                     <p>01948984316</p>
                </div>
                <div class="col-sm-12 col-md-4">
                <form action="contact.php" method="POST">
                <div class="form-group mb-3" data-validate="Name is required">
                    <label>Name</label>
                    <?php
                     if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                     echo '<input type="text" name="user_name" value="'.$_SESSION['username'].'" placeholder="Enter your name" class="form-control" required />';
                   }else{
                    echo '<input type="text" name="user_name" value="" placeholder="Enter your name" class="form-control" required />';
                   }
                    ?>
                  
                 

                </div>
                 <div class="form-group mb-3" data-validate = "Valid email is required: ex@abc.xyz">
                    <label>Email</label>
                    <?php
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                    echo '<input type="email" name="user_email" value="'.$_SESSION['email'].'" placeholder="Enter your Email" class="form-control" required/>';
                  }else{
                   echo  '<input type="email" name="user_email" value="" placeholder="Enter your Email" class="form-control" required/>';
                  }

                    ?>
                  
                  
                </div>
                 <div class="form-group mb-3" data-validate="Phone is required">
                    <label>Country</label>
                    <select id="country" name="country" style="text-align:center;">
                     <option value="australia">Australia</option>
                     <option value="canada">Canada</option>
                     <option value="usa">USA</option>
                     <option value="Bangladesh">Bangladesh</option>
                     <option value="UK">UK</option>
                     <option value="India">India</option>
                     <option value="Pakistan">Pakistan</option>
                    </select>
                </div>
                 <div class="form-group mb-3" data-validate = "Message is required">
                    <label>Message</label>
                    <textarea name="message" placeholder="Leave Your Message Here" class="form-control"></textarea>
                </div>
                   <div class="form-group mb-3">
                    <input type="submit" name="submit" value="submit" class="btn btn-success"/>
					<?php 
					  if(isset($_POST['submit']))
					  {
						   echo '<script type="text/javascript"> alert("Thanks for Submitting") </script>';
					  }
					
					
					?>
			
                </div>
            </form>
             <div>
                 <p style="font-weight: Bold;">Thanks for Submitting...</p>
             </div>
            </div>
         </div>
        </div>
		
		
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
		
		
		

    <script src="bootstrap-validate.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
     </body>

</html>
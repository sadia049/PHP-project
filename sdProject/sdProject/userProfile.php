
<?php
      session_start();
      include 'connection_open.php';
      date_default_timezone_set('ASIA/DHAKA');
      $current_time = date('Y-m-d H:i:s');

      if(isset($_POST['save']))
      {
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $country = $_POST['country'];
     $state   = $_POST['state'];
     $sql="UPDATE user_table SET user_name='$firstname',user_phone='$phone',lastname='$lastname',address='$address',country='$country',state='$state' WHERE user_email='$email'";
     $query_run = mysqli_query($link,$sql);
     
      if($query_run)
          {
           echo '<script type="text/javascript"> alert("Updated Successfully") </script>'; 
           //header('location:profile.php');
       }

 }
  


?>



<!DOCTYPE html>
<html>
	
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/userprofile.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	 <script src="https://kit.fontawesome.com/3658ab6f9c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <title>User Profile Page</title>
	 
	 
	 
	 
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
	 
	
<!--header strt-->
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
          <a class="nav-link" href="profile.php">My Profile</a>
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

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
     
                <form action="" method="POST" enctype="multipart/form-data">
                    <img class="rounded-circle mt-5" src="images/propic.png" onclick="triggerClick()" id="profileDisplay"><input type="file" name="file" onchange="displayImage(this)" class="form-control" id="profileImage" style="display: none;">
                  
                </form>

            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form method="POST" action="userProfile.php">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><?php echo '<input type="text" name= "firstname" class="form-control" placeholder="first name" value="'.$_SESSION['username'].'" required="">';?></div>
                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" name="lastname" class="form-control" value="" placeholder="Last Name"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Phone Number</label><?php echo '<input name="phone" type="text" class="form-control" placeholder="Enter phone number" value="'.$_SESSION['phone'].'">';?></div>
                    <div class="col-md-12"><label class="labels">Address</label><input name="address" type="text" class="form-control" placeholder="Enter Address" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><?php echo '<input type="text" name="email" class="form-control" placeholder="Enter Email id" value="'.$_SESSION['email'].'">';?></div required="">
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                    <label class="labels">Country</label>
                     <select id="country" name="country">
                     <option value="australia">Australia</option>
                     <option value="canada">Canada</option>
                     <option value="USA">USA</option>
                     <option value="Bangladesh">Bangladesh</option>
                     <option value="UK">UK</option>
                     <option value="India">India</option>
                     <option value="Pakistan">Pakistan</option>
                    </select></div>
                    <div class="col-md-6">
                    <label class="labels">State/Region</label>
                     <select id="country" name="state">
                     <option value="New York">NewYork</option>
                     <option value="California">California</option>
                     <option value="Los Angels">Los Angels</option>
                     <option value="Delhi">Delhi</option>
                     <option value="Lahore">Lahore</option>
                     <option value="Wales">Wales</option>
                     <option value="London">London</option>
                      <option value="Dhaka">Dhaka</option>
                    </select>
                </div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="save">Save Profile</button></div>
            </form>
            </div>
        </div>
        <div class="col-md-4">
           <img src="images/login.jpg"  class="img-fluid" alt="">
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


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>

</html> 
<script src="scripts.js"></script>
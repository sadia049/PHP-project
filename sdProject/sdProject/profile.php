<?php
 session_start();
 include 'connection_open.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/profile.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
	 <script src="https://kit.fontawesome.com/3658ab6f9c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <title>Profile Page</title>
	 
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
          <a class="nav-link" href="profile.php">My profile</a>
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
		  <form action="" method="post">
		  <button type="submit" name="logout" class="btn btn-secondary">
		  log out?
		  </button>
		  </form>
		  
		 </li>
		 
		 <?php 
		    if(isset($_POST['logout']))
			{    session_destroy(); 
				 echo '<script type="text/javascript"> alert("You are logged out") </script>';
				  header('location:index.php');
			}
		 
		 ?>
		 
		
		

   </ul>

</div>
</div>
</nav>
<!--menu end-->
</div>
</header>
 
 <div class="background">
  <div class="container">
    <div class="row about-me">
      
      <div class="col-md-4" >
      </div>
      <div class="col-md-4" >
        <div class="col-md-12"><img src="images/propic.png" class="center"></div>
         <div class="col-md-12"><div class="title" style="text-align: center; margin-top: 20px;"><h2>ABOUT ME</h2></div></div>
         <div class="col-md-12">
          <div class="table">
          <table >
             <tbody>
            <?php
                 $email = $_SESSION['email'];
                 $result = "SELECT * FROM user_table WHERE user_email = '$email'";
                 $query_run=mysqli_query($link,$result);
                 $row = mysqli_fetch_row($query_run);
            ?>
           
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
             
              
            
           </tr>
           <tr>
                <td> <?php echo $row[1];  ?> </td>
                 <td> <?php echo $row[9];  ?> </td>
                <td> <?php echo $row[2];  ?> </td>
                
               
              </tr>  
           
               <tr>
               <th>Phone</th> 
              <th>Address</th>
              <th>Country</th>
             
            </tr>
            
              <tr>
                

                  <td> <?php echo $row[3];  ?> </td>
                 <td> <?php echo $row[10];  ?> </td>
                 <td> <?php echo $row[11];  ?> </td>
                 
                     
              </tr>
			  
			  
			
          </tbody>
         

         </table>
        </div>
           
         </div>
        

      
        
      
      <div class="col-md-4" >
      </div>
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

      
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
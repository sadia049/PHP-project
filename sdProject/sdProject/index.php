
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
    <link rel="stylesheet" href="css/style.css">
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
  	
	   <?php
$data;
$row;
$host="localhost";
$user="root";
$password="";
$db="sdproject";
$link=mysqli_connect($host,$user,$password,$db);
// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


$sql="select * from banner";
$result=mysqli_query($link,$sql) or die(mysqli_error($link));
//print_r($result);
$noOfrows=mysqli_num_rows($result);
if($noOfrows)
{    for($k=0; $k<$noOfrows;  $k++)
	{
	   
	 $rs=mysqli_fetch_assoc($result);
     $points[$k][0]=$rs['b_image'];
     $points[$k][1]=$rs['b_heading'];
     $points[$k][2]=$rs['b_text'];
	
	 $data=$points;
	  
	  
	}
	 
   echo"<pre>";
   //print_r($data);
   echo"</pre>";
   
    echo"<pre>";
   //print_r($points[0][0]);
   echo"</pre>";
   
  
   
  
  
  
}

 ?>
	
	
	
	
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


   	<!--header end-->
 <section class="banner">
 <div class="container">

 	<div class="row">
	
 	<div class="col-lg-12">
     <div id="carouselExampleCaptions" class="carousel slide  carousel-fade" data-bs-ride="carousel">
   <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="<?php  echo $points[0][0];?>" class="d-block w-100" alt="Tulips">
     <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $points[0][1];?></h5>
        <p><?php echo $points[0][2];?></p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="<?php  echo $points[1][0];?>" class="d-block w-100" alt="Daria">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $points[1][1];?></h5>
        <p><?php echo $points[1][2];?></p>
      </div>
    </div>
    <div class="carousel-item">
     <img src="<?php  echo $points[2][0];?>" class="d-block w-100" alt="Roses"> 
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $points[2][1];?></h5>
        <p><?php echo $points[2][2];?></p>
      </div>
    </div>
  </div>
 
 
  </div>
 </div>
 
 </div>
</div>
</section>

<!----------how it works started------------>
<section class="howitworks">
 <div class="container">
 	<div class="row">
 		<div class="hiw">
 			<h1>How It Works</h1>
 			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
 		</div>
 	</div>
 </div>
</section>
<!----------how it works started------------>




<!--circle strt-->

 


<section class="circle">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="image-p">
       <img src="images/icon1.jpg" class="mx-auto"> 
       <h4>Free Delivery inside Dhaka and 80/- tk outside Dhaka</h4>
       </div>
      </div>


     <div class="col-md-4">
      <div class="image-p">
      <img src="images/icon2.jpg" class="mx-auto"> 
       <h4>Exchange possible within 24hours</h4>
       </div>
      </div>


      <div class="col-md-4">
       <div class="image-p">
       <img src="images/icon3.jpg" class="mx-auto"> 
       <h4>Free Delivery inside Dhaka and 80/- tk outside Dhaka</h4>
       </div>
      </div>



     
    
    </div>
  </div>
  </section>

  <!--image gallery-->
  <section class="image-gallery">
  	<div class="container">
  		<div class="row">
  	<!--single item strt-->
  		<div class="col-md-4 position">
  			<img src="images/gallery1.jpg" alt="Roses" class="gallery-image">
  
        <div class="middle">
        	
           <h4>Seasonal Flowers</h4>
        </div>
  		</div>
  	<!--single item end-->


  	<!--single item strt-->

  	<div class="col-md-4 position">
  			<img src="images/gallery3.jpg" alt="Roses" class="gallery-image">
  
        <div class="middle">
        	
           <h4>Our Anniversary Series</h4>
        </div>
  		</div>
  		
  	<!--single item end-->




  	<!--single item strt-->
  		<div class="col-md-4 position">
  			<img src="images/gallery2.jpg" alt="Roses" class="gallery-image">
  
        <div class="middle">
        	
           <h4>Up to 70% sale</h4>
        </div>
  		</div>
  	<!--single item end-->
  		</div>
  	</div>
  </section>




  		
  <section class="image-gallery">
  	<div class="container">
  		<div class="row">

<!--single item strt-->
  		<div class="col-md-4 position">
  			<img src="images/gallery4.jpg" alt="Roses" class="gallery-image">
  
        <div class="middle">
        	
           <h4>Home decorative flowers</h4>
        </div>
  		</div>
  	<!--single item end-->


	<!--single item strt-->
  		<div class="col-md-4 position">
  			<img src="images/gallery5.jpg" alt="Roses" class="gallery-image">
  
        <div class="middle">
        	
           <h4>Low mainatainance flowers</h4>
        </div>
  		</div>
  	<!--single item end-->




	<!--single item strt-->
  		<div class="col-md-4 position">
  			<img src="images/gallery6.jpg" alt="Roses" class="gallery-image">
  
        <div class="middle">
        	
           <h4>Up to 70% sale</h4>
        </div>
  		</div>
  	<!--single item end-->
  </div>
</div>
</section>

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

  
<!--circle end-->


   

    <!-- Optional JavaScript; choose one of the two! -->


    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <script src="js/script.js"></script>

   

    
  </body>
</html>

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
    <link rel="stylesheet" href="css/productdetails.css">
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
 if(isset($_GET["data2"]))
    {
        $data = $_GET["data2"];
        //echo  $data;
    }


$sql="select * from product where p_id='$data'";
$sqlsimilar="select * from mostrecent";
$resultsimilar=mysqli_query($link,$sqlsimilar) or die(mysqli_error($link));
$result=mysqli_query($link,$sql) or die(mysqli_error($link));
//print_r($result);
$noOfrows=mysqli_num_rows($result);
$noOfrowsSimilar=mysqli_num_rows($resultsimilar);

if($noOfrows)
{    for($k=0; $k<$noOfrows;  $k++)
	{
	   
	 $rs=mysqli_fetch_assoc($result);
     $points[$k][0]=$rs['image'];
     $points[$k][1]=$rs['p_name'];
     $points[$k][2]=$rs['p_price'];
	
	 $data=$points;
	  
	  
	}
	 
   //echo"<pre>";
   //print_r($data);
   //echo"</pre>";
   
 }
 
 
 
if($noOfrowsSimilar)
{    for($k=0; $k<$noOfrowsSimilar;  $k++)
	{
	   
	 $rs=mysqli_fetch_assoc($resultsimilar);
     $pointsSimilar[$k][0]=$rs['image'];
     $pointsSimilar[$k][1]=$rs['p_name'];
     $pointsSimilar[$k][2]=$rs['p_price'];
	
	 $data=$pointsSimilar;
	  
	  
	}
	 
  // echo"<pre>";
  // print_r($data);
  // echo"</pre>";
   
 }



   
?>



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
          <a class="nav-link" href="allproduct.php">shop</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
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

<!----------------product details---------------------->
<section class="single-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-7">
              <div class="deatil-image">
                <img src="<?php  echo $points[0][0];?>" alt="">
              </div>




</div>

<div class="col-lg-7 col-md-5">
  <p class="new-arrival text-center">NEW</p>
  <h2><?php echo $points[0][1];?></h2>
  <p>Product code:ICR2019</p>

     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>
     <i class="fas fa-star"></i>


     <p class="price">$<?php echo $points[0][2];?></p>
     
     <p><b>Availability</b>In Stock</p>
     <p><b>Condition</b>New</p>
     <p><b>Brand:</b>Flower Bouquet</p>
     <label>Quantity:</label>
     <input type="text" value="1">
	  
     <button type="submit" class="btn btn-primary" name="addtocart">Add to Cart</button>
	 

</div>
       


        </div>
    </div>
</section>

<section class="product-description">
    <div class="container">
        <h4>Product Details</h4>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing</p>
    </div>
</section>
<hr>


<!---------------Similar Product------------------------>


   <section class="Similar">
      <div class="container">
        <div class="title-box">
          <h2>Similar</h2>
        </div>
        <div class="row">
		<?php foreach($pointsSimilar as $rowdta){ ?>
          <div class="col-lg-3 col-md-6">
            <div class="product-top">
              <img src="<?php  echo $rowdta[0];?>" alt="">
              <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="quick shop"><i class="fas fa-eye"></i></button>
                <button type="button" class="btn btn-secondary" title="wishlist">
                  <i class="fas fa-heart"></i></button>
                <button type="button" class="btn btn-secondary" title="add-to-cart"><i class="fas fa-shopping-cart"></i></button>
              </div>
            </div>

        <div class="product-bottom text-center">
           <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <h3><?php echo $rowdta[1];?></h3>
          <h5>$<?php echo $rowdta[2];?></h5>
          
        </div>
          </div>
		 <?php }?>

      <!---2nd column-->
       <!-- <div class="col-md-3">
            <div class="product-top">
              <img src="images/product13.jpg" alt="">
              <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="quick shop"><i class="fas fa-eye"></i></button>
                <button type="button" class="btn btn-secondary" title="wishlist">
                  <i class="fas fa-heart"></i></button>
                <button type="button" class="btn btn-secondary" title="add-to-cart"><i class="fas fa-shopping-cart"></i></button>
              </div>
            </div>

        <div class="product-bottom text-center">
          <i class="far fa-star"></i> 
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <h3>Rose Bouquet</h3>
          <h5>$4.00</h5>
          
        </div>
          </div>

          <!--column 3 strt-->
            <!--<div class="col-md-3">
            <div class="product-top">
              <img src="images/product14.jpg" alt="">
              <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="quick shop"><i class="fas fa-eye"></i></button>
                <button type="button" class="btn btn-secondary" title="wishlist">
                  <i class="fas fa-heart"></i></button>
                <button type="button" class="btn btn-secondary" title="add-to-cart"><i class="fas fa-shopping-cart"></i></button>
              </div>
            </div>

        <div class="product-bottom text-center">
          <i class="far fa-star"></i> 
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <h3>Rose Bouquet</h3>
          <h5>$4.00</h5>
          
        </div>
          </div>
      <!--4th column strt-->
        <!--<div class="col-md-3">
            <div class="product-top">
              <img src="images/product12.jpg" alt="">
              <div class="overlay-right">
                <button type="button" class="btn btn-secondary" title="quick shop"><i class="fas fa-eye"></i></button>
                <button type="button" class="btn btn-secondary" title="wishlist">
                  <i class="fas fa-heart"></i></button>
                <button type="button" class="btn btn-secondary" title="add-to-cart"><i class="fas fa-shopping-cart"></i></button>
              </div>
            </div>

        <div class="product-bottom text-center">
          <i class="far fa-star"></i> 
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <h3>Rose Bouquet</h3>
          <h5>$4.00</h5>
          
        </div>
          </div>-->

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

  <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    <script src="js/script.js"></script>
      
  </body>
  </html>












   
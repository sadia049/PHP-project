<?php
  session_start();
  include 'connection_open.php';

?>
<!DOCTYPE html>
<html>
	
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	  <script src="https://kit.fontawesome.com/3658ab6f9c.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <title>Log In Page</title>
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
  {   width:180px;
      height:100px;
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
	 

	 
	 
	 
	 
	 
	 
	 
	 
<section class="Form">
         <div class="container">
             <div class="row no-gutters">
                <div class="col-lg-5">
                   <img src="images/login.jpg" class="img-fluid" alt=""> 
                </div> 
                <div class="col-lg-7  px-5 py-5">
                    <h1>Log In</h1>
                    <h3>Sign In to your account</h3>
                    <form method="POST" action="">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="logemail" placeholder="Email-Address" class="form-control" required="">
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" name="logpsw" placeholder="********" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                             <button name="login" type="submit" class="btn1 mt-3 mb-5" value="login">Login</button>
                            </div>
                        </div>
                        <a href="#">Forgot Password</a>
                        <p>Don't have an account?<a href="signUp.php">Register here</a></p>
                    </form>

                    <?php

                       if(isset($_POST['login']))
                       {
                          $email = $_POST['logemail'];
                          $password = $_POST['logpsw'];
                          $query = "SELECT * from user_table where user_email='$email' AND user_password='$password'";

                          $query_run = mysqli_query($link,$query);
                          if(mysqli_num_rows($query_run)>0)
                          {
                             
                               $_SESSION['username']=$username;
                               $_SESSION['email']=$email;
                               $_SESSION['phone']=$phone;
                               $_SESSION['loggedin']=true;
                               header('location:userProfile.php');

                             
                          }else{
                            echo '<script type="text/javascript">alert("Invalid Name and Password")</script>';
                          }
                       }


                    ?>
              
                </div> 

             </div>
         </div>
     </section>
	 
	 

    



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>

</html> 
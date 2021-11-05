<?php
  session_start();

?>
<!DOCTYPE html>
<html>
	
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/signUpstyle.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
     <title>Sign Up Page</title>
     </head>
     <body>

     
     <div class="container">
         <div class="row">
             <div class="col-md-7">
             <h1 class="text-left">welcome</h1>
             <h3 class="text-left">To</h3>
             <h2 class="text-left">Flower Bouquet</h2>
             <p class="text-left">The Way it should be</p>
             </div>
            <div class="col-md-5">
             <div class="row">
                <div class="col-md-6">
                 <h3 class="text-left">Registration Form</h3>
             </div>  
              <div class="col-md-6">
                 <span class="glyphicon glyphicon-pencil"></span>
             </div>  
            </div>
             <hr>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
             <div class="row">
                 <label class="label col-md-2 control-label">Name</label>
                 <div class="col-md-10">
                  <input type="text" name="user_name" value="" placeholder="Enter your name" class="form-control" required="Name is required">
                  <span class="error" style="color: #FF0001;"></span>  
                  
                 </div>
            </div>
                 <div class="row">
                 <label class="label col-md-2 control-label">E-mail</label>
                 <div class="col-md-10">
                  <input type="email" name="email" value="" placeholder="Enter your Email" class="form-control" required="Email is required">
                 
                 </div>
             </div>
            <div class="row">
            <label class="label col-md-2 control-label">Phone</label>
              <div class="col-md-10">
                <input type="text" class="form-control"  placeholder="Enter Phone Number" name="phone">
                </div>
             </div>
              <div class="row">
                 <label class="label col-md-2 control-label">Password</label>
                 <div class="col-md-10">
                <input type="password" class="form-control"  placeholder="Enter Password" name="psw" required="Password is required">
        
                 </div>
             </div> 
             <div class="row">
                 <label class="label col-md-2 control-label">Confirm Password</label>
                 <div class="col-md-10">
                 <input type="password" class="form-control"  placeholder="Confirm Password" name="psw_repeat">
                
                
                </div>
             </div> 

             <div class="terms"> 
              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a></p>
          </div>
				
				<a href="login.php">
					<input type="submit" class="btn btn-info" name="submit" value="submit">
				</a>
				<a href="#">
					<input type="cancel" class="btn btn-warning" name="cancel" value="cancel">
				</a>

				
             </form>
              <?php
 
                 include 'connection_open.php';
                 date_default_timezone_set('ASIA/DHAKA');
                 $current_time = date('Y-m-d H:i:s');


                   
                 if(isset($_POST['submit']))
                  {
                    $username = $_POST['user_name'];
                    $email = $_POST['email'];
                    $password = $_POST['psw'];
                    $confirmpass = $_POST['psw_repeat'];
                    $activation_code= "null";
                    $phone=$_POST['phone'];
                    if(strlen($password) < 6)
                     {
                    echo '<script type="text/javascript"> alert("Enter at least 6 characters") </script>';
                     }
                     if($password==$confirmpass)
                    {
                      $sql = "SELECT * from user_table where user_email='$email'";
                      $query_run = mysqli_query($link,$sql); 
                      if(mysqli_num_rows($query_run)>0)
                      {
                        echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';

                       }
                         else{
                        $sqlcheck = "INSERT INTO user_table(user_name,user_email,user_phone,user_password,status,created_date,updated_date) 
                        VALUES('$username','$email','$phone','$password',1,'$current_time','$current_time')";
                        $query_run = mysqli_query($link,$sqlcheck); 
                        if($query_run)
                            {
                               echo '<script type="text/javascript"> alert("User Registered") </script>';  
                               $_SESSION['username']=$username;
                               $_SESSION['email']=$email;
                               $_SESSION['phone']=$phone;
                               $_SESSION['loggedin']=true;
                               header('location:userProfile.php');
                            }
                            else{
                              echo '<script type="text/javascript"> alert("error") </script>';

                         }
                  
                  }
              }else{

                   echo '<script type="text/javascript"> alert("Password and Confirm Password is not matched") </script>';

              }
            }
            include 'connection_close.php'; 
            ?>

            </div>
         </div>

     </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>signin</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
    body{
        overflow-x: hidden;
        overflow-y: hidden;
         }

         .well{
            background-color: #187FAB; 
            margin: 0px;
            padding:0px;          
           }
          
           .main-container{
            width: 530px;
            height: -2px;
            margin: -12px  auto;
            background-color: #fff;
            border: 2px solid: #e6e6e6;
            padding: 0px 0px;
           }
           .header{
            border: 0px solid #000;
            margin-bottom: -4px;
            padding: 0px;
           }
           #signin{
            width: 60%;
            border-radius: 30px;
           
           }
           #footer{
            margin-top: 183px;
            padding-top: 3px;
           }
           
       </style>

   <body>
          
            <!-- Header -->
         <div class="row">
       	      <div class="col-sm-12">
       		       <div class="well">
       			       <center><h3 style="color:white;">User Signin 20bca1627</h3> </center>
                   </div><br><br>
       	     </div>
         </div>
         
        <div class="row">
            <div class="col-sm-12">
                <div class="main-container">
                   <div class="header">
                       <h3 style="text-align: center;"><strong>Join Meetup</strong></h3><br>
                   </div>
                    <div class="part-1">
                    <form action="" method="post">


                    <!-- entre your email -->
                    <div class="input-group">
          						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
					<input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"></div><br>
					

                    <!-- entre your password -->
                    <div class="input-group">
          						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
						<input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"></div><br>



                        <!-- forget password -->
						<a style="text-decoration:none;float: right;color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forget Password?</a><br>
					
                    
                        <!-- Don,t have an account -->
					<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Create Account!" href="signup.php">create a new account</a><br><br>
                      
                    
                    <!-- login button -->
					<center><button id="signin" class="btn btn-info btn-lg" name="login">Login</button></center>
					<?php include("login.php"); ?>
				</form>
                        

                    </div>

                                           
                </div>
                        
            </div>
                       
        </div>
         

       <!-- Footer -->
       <div class="row">
          <div class="col-sm-12">
               <div  id="footer" class="well">
                    <center><h5  style="color:white;">Powered by Aman dadhwal @copyright </h5> </center>
               </div>
          </div>
       </div>
    
   
   </body>
</html>



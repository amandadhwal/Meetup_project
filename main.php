<!DOCTYPE html>
<html>
<head>
	<title>Coding cafe login and signup </title>
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
	 #centred1{
	 	position: absolute;
	 	font-size: 10vw;
	 	top: 10%;
	 	left: 30%;
	 	transform: translate(-50% ,50%);
	 }
	 #centred2{
	 	position: absolute;
	 	font-size: 10vw;
	 	top: 30%;
	 	left: 40%;
	 	transform: translate(-50% ,50%);
          }
        #centred3{
	 	position: absolute;
	 	font-size: 10vw;
	 	top: 60%;
	 	left: 33%;
	 	transform: translate(-50% ,50%);
          }
          #signup{
          	width: 40%;
          	border-radius: 30px;
          }
          #login{
          	width: 40%;
          	background-color: #fff;
          	border: 4px solid #1da1f2;
          	color: #1da1f2;
          	border-radius: 30px;
          }
           #login:hover{
           	width: 40%;
           	background-color: #fff;
           	color: #1da1f2;
           	border: 2px solid #1da1f2;
           	border-radius: 30px;
           }
           .well{
           	background-color: #187FAB; 
           	margin: 0px;
           	padding: 0px;          
           }
           #footer{
           	margin-top: 33px;
           	padding-top: 4px;
           }
</style>
<body>

       <div class="row">
       	  <div class="col-sm-12">
       		   <div class="well">
       			    <center><h3 style="color:white;">Online Book store </h3> </center>
               </div>
       	  </div>
       </div>
       
       <div class="row">
           <div class="col-sm-6" style ="left:0.9%; top:19px">
         	 <img src="images/download (1).jfif" class="img-rounded" title="Coding cafe "  width="500px" height="450px">
         	 <div id="centred1" class="centred"> <h3 style="color:black;"> <span class="glyphicon glyphicon-search"></span>&nbsp&nbsp&nbsp<strong>         Follow your intrest </strong></h3></div>
         	 <div id="centred2" class="centred"> <h3 style="color:black;"> <span class="glyphicon glyphicon-search"></span>&nbsp&nbsp&nbsp<strong>         Here what people talk about you </strong></h3></div>
         	 <div id="centred3" class="centred"> <h3 style="color:black;"> <span class="glyphicon glyphicon-search"></span>&nbsp&nbsp&nbsp<strong>         join the conversation </strong></h3></div>
           </div>
           <div class="col-sm-6" style="left:2%;">
           	 <img src="images/download.png" class="img-rounded" title="Coding cafe "  width="100px" height="100px">
           	 <h2><strong>See Whats happening in <br> the world right now </strong></h2><br><br>
           	 <h4><strong>Join online book store today </strong></h4><br><br>
       </div>

         <form method="post" action="">
         	<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>

               <?php
                      if(isset($_POST['signup']))
                      	{  
                      		echo"<script>window.open('signup.php','_self')</script>";
                      	}
               ?>



         	<button id="login" class="btn btn-info btn-lg" name="login">login</button><br><br>

         	 <?php
                      if(isset($_POST['login']))
                      	{  
                      		echo"<script>window.open('signin.php','_self')</script>";
                      	}
               ?>

         </form>


		 <!-- Footer -->
         <div class="row">
       	  <div class="col-sm-12">
       		   <div  id="footer" class="well">
       			    <center><h5  style="color:white;">Powered by Aman dadhwal  Uid 20bca1627</h5> </center>
               </div>
       	  </div>
       </div>
       

        

</body>
</html>
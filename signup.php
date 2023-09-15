<!DOCTYPE html>
<html>
<head>

        

	<title>signup page </title>

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
            margin: -9px;
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
            margin-bottom: 0px;
            padding: 0px;
           }
           #signup{
            width: 60%;
            border-radius: 20px;
           }
           #footer{
            margin-top: 5px;
            padding-top: 2px;
           }
       </style>

<body>
       <div class="row">
       	  <div class="col-sm-12">
       		   <div class="well">
       			    <center><h3 style="color:white;">User Signup 20bca1627  </h3> </center>
               </div><br>
       	  </div>
          
       </div>
          <div class="row">
          	<div class="col-sm-12">
          		<div class="main-container">
                 <div class="header">
                     <h4 style="text-align: center;"><strong>Join Meetup</strong></h4>
                  </div>
          			
          			 <div class="1-part">
          				  <form action="" method="post">
          					  <div class="input-group">
          						   <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          						      <input type="text" class="form-control" placeholder="First Name"  name="first_name" required="required">
          					  </div><br>

          					<div class="input-group">
          						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          						<input type="text" class="form-control" placeholder="Last Name"  name="last_name" required="required">
          					</div><br>

          					<div class="input-group">
          						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          						<input id="email" type="email" class="form-control" placeholder="email"  name="u_email" required="required">
          					</div><br>

          					<div class="input-group">
          						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          						<input id="password" type="password" class="form-control" placeholder="password"  name="u_pass" required="required">
          					</div><br>

          					<div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                                <select class="form-control input-md" name="u_country" required="required">
                                     
                                    <option disabled>Select your Country </option>
                                    <option>India </option>
                                    <option>U.S.A</option>
                                    <option>Pakistan </option>
                                    <option>England</option>
                                    <option>Australia</option>
                                    <option>Iran</option>
                                    <option>Russia </option>
                                    <option>Shri Lanka</option>
                                    <option>Bhutan </option>
                                    <option>Afganistan</option>
                                    <option>China</option>
                                    <option>Japan</option>
                                    
                                </select>
                            </div><br>

                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                                <select class="form-control input-md" placeholder="Select_Gender"  name="u_gender" required="required">
                                      <option disabled>Select your gender </option>
                                    <option>Male</option>
                                    <option>Female</option>
                                     <option>Other</option>
                                    
                                </select>
                            </div><br>
                            
                             
                             <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                <input type="date" class="form-control input-md" placeholder="D.O.B"  name="u_birthday" required="required">
                            </div> 

                            <a style="text-decoration: none; color:#187FAB; float: right;"   data-toggle="tooltip" title="Signin"  href="signin.php ">Already  have an account ?</a><br><br>
                            <center><button id="signup" class="btn btn-info btn-lg " name="sign_up" >Signup</button></center><br>

                          <?php 

                                include("insert_user.php"); 
                                      
                          ?>
          				</form>

          			</div>
          		</div>
          	</div>
          </div>
    

          <!-- Footer -->
    <div class="row">
          <div class="col-sm-12">
               <div  id="footer" class="well">
                    <center><h5  style="color:white;">Powered by Aman dadhwal </h5> </center>
               </div>
          </div>
       </div>

</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
        <link rel="icon" href="images/icon.ico" type="image/x-icon">
    </head>
    <style>

    body{
        /* background-image: url('images/library.jpg')  */
        
    }


    .login-form-3 .btnSubmit {
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}

.login-form-3 h3 {
    text-align: center;
    color: #fff;
}

.login-form-1 h3 {
    text-align: center;
    color: #0062cc;
}
.login-form-3 {
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.admin-container {
    background-color:#0062cc;
    color: white;
    padding: 25px; 
    
}

.student-container {
    background-color: white;
    color: blue;
    padding: 25px;
    
}
.imglogo {
    margin:auto;
}


.row {
  display: flex;
  align-items: center;
  margin-top: -15px; 
}

.logo-container {
  margin-right: -350px; /* add some space between logo and photo */
  margin-left: 320px; /* move logo to the right */
  margin-bottom: -15px;
  margin-top:-70px;
}

.photo-container {
  flex-grow: 1; /* make photo container take up remaining space */
  margin-bottom: -5px;
  margin-top:-60px;
}

    </style>
    <body >

<?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>



<div class="container login-container">
<!-- <div class="row" ><img class="imglogo" src="images/logo01.jpg" width="150px" height="140px" /></div> -->
<div class="row">
    <div class="logo-container">
    <img class="imglogo" src="images/logo01.jpg" width="150px" height="120px" />
    </div>
    <div class="photo-container">
    <img class="imgphoto" src="images/name.jpg" width="320px" height="190px" />
    </div> 
</div>
<div class="row"><h4><?php echo $msg?></h4></div>
            <div class="row">
 
                <div class="col-md-6 login-form-3 admin-container ">
                    <h3>Admin Login</h3>
                    <form action="loginadmin_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Enter Email *" value="" />
                        </div>
                        <Label style="color:red"><?php echo $ademailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Enter Password *" value="" />
                        </div>
                        <Label style="color:red"><?php echo $adpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <!-- <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                    </form>
                </div>
                <div class="col-md-6 login-form-1 student-container">
                    <h3>Student Login</h3>
                    <form action="login_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Enter Email *" value="" />
                        </div>
                        <Label style="color:red"><?php echo $emailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Enter Password *" value="" />
                        </div>
                        <Label style="color:red"><?php echo $pasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <script src="" async defer></script>
    </body>
</html>
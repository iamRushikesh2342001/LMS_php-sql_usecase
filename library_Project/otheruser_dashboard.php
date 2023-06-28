<?php

session_start();

$userloginid=$_SESSION["userid"] = $_GET['userlogid'];
// echo $_SESSION["userid"];


?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
        <link rel="icon" href="images/icon.ico" type="image/x-icon">
    </head>
    <style>
            .innerright,label {
    color: rgb(16, 170, 16);
    font-weight:bold;
}
.container,
.row,
.imglogo {
    margin:auto;
}

.innerdiv {
    text-align: center;
    /* width: 500px; */
    margin: 100px;
    overflow: hidden;
}
input{
    margin-left:20px;
}
.leftinnerdiv {
    float: left;
    width: 25%;
    padding: 10px; /* add some padding to create a gap between the divs */
}

.rightinnerdiv {
    float: right;
    width: 75%;
    margin-top: 40px; /* add some margin to move the div up */
    overflow: hidden;
}
.bookrecordrightinnerdiv {
    float: right;
    width: 75%;
    margin-top: 10px; /* add some margin to move the div up */
    overflow: hidden;
}
.bookrequestrightinnerdiv {
    float: right;
    width: 75%;
    margin-top: -40px; /* add some margin to move the div up */
    overflow: hidden;
}


.innerright {
    background-color: #d8e9f3;
}

.greenbtn {
    background-color: #8dbdd8;
    color: black;
    width: 95%;
    height: 40px;
    margin-top: 8px;
}

.photo-container {
  flex-grow: 1; /* make photo container take up remaining space */
  margin-bottom: -20px;
  margin-top:5px;
  margin-right: -220px; /* add some space between logo and photo */
  margin-left: -190px;
}

.logo-container {
  margin-right: -220px; /* add some space between logo and photo */
  margin-left: 200px; /* move logo to the right */
  margin-bottom: -20px;
  margin-top:5px;
}

.row1 {
  display: flex;
  align-items: center;
  margin-top: -15px; 
}

.greenbtn,
a {
    text-decoration: none;
    color: black;
    font-size: large;
}

th{
    background-color: #8dbdd8;
    color: black;
}
td{
    background-color:#d8e9f3;
    /* #b1fec7; */
    color: black;
}
td, a{
    color:black;
}

 
body {
            font-family: 'Roboto';
            background-image: url('images/nbedit.png'); 
         
        }
    </style>
    <body>

    <?php
   include("data_class.php");
    ?>
           <div class="container">
            <div class="innerdiv">
            <div class="row1">   
            <!-- <div class="row"><img class="imglogo" src="images/name1.png"/></div> -->
            <div class="logo-container">
            <img class="imglogo" src="images/logo01.jpg" width="120px" height="100px" />
             </div>
            <div class="photo-container">
            <img class="imgphoto" src="images/name1.png" width="400px" height="100px" />
        </div>
    </div>
            <div class="leftinnerdiv">
                <br>
                <Button class="greenbtn" onclick="openpart('myaccount')"> <img class="icons" src="images/icon/profile.png" width="30px" height="30px"/>  My Account</Button>
                <Button class="greenbtn" onclick="openpart('requestbook')"><img class="icons" src="images/icon/book.png" width="30px" height="30px"/> Request Book</Button>
                <Button class="greenbtn" onclick="openpart('issuereport')"> <img class="icons" src="images/icon/monitoring.png" width="30px" height="30px"/> Book Record</Button>
                <a href="index.php"><Button class="greenbtn" ><img class="icons" src="images/icon/logout.png" width="30px" height="30px"/> Logout</Button></a>
            </div>


            <div class="rightinnerdiv">   
            <div id="myaccount" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo ""; }?>">
            <Button class="greenbtn" >My Account</Button>

            <?php

            $u=new data;
            $u->setconnection();
            $u->userdetail($userloginid);
            $recordset=$u->userdetail($userloginid);
            foreach($recordset as $row){

            $id= $row[0];
            $name= $row[1];
            $email= $row[2];
            $pass= $row[3];
            $type= $row[4];
            }               
                ?>
    
            <p style="color:black"><u>Student Name :</u> &nbsp&nbsp<?php echo $name ?></p>
            <p style="color:black"><u>Student Email :</u> &nbsp&nbsp<?php echo $email ?></p>
            <!-- <p style="color:black"><u>Account Type :</u> &nbsp&nbsp<?php echo $type ?></p> -->
        
            </div>
            </div>


            



            <div class="bookrecordrightinnerdiv">   
            <div id="issuereport" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ echo "display:none";} else {echo "display:none"; }?>">
            <Button class="greenbtn" >Book Record</Button>

            <?php

            $userloginid=$_SESSION["userid"] = $_GET['userlogid'];
            $u=new data;
            $u->setconnection();
            $u->getissuebook($userloginid);
            $recordset=$u->getissuebook($userloginid);

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr><th style='  
            padding: 8px;'>Name</th><th>Book Name</th><th>Issue Date</th><th>Return Date</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
                $table.="<td>$row[2]</td>";
                $table.="<td>$row[3]</td>";
                $table.="<td>$row[6]</td>";
                $table.="<td>$row[7]</td>";
                // $table.="<td>$row[8]</td>";
                // $table.="<td><a href='otheruser_dashboard.php?returnid=$row[0]&userlogid=$userloginid'><button type='button' class='btn btn-primary'>Return</button></a></td>";
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;
            ?>

            </div>
            </div>


            <div class="rightinnerdiv">   
            <div id="return" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ $returnid=$_REQUEST['returnid'];} else {echo "display:none"; }?>">
            <Button class="greenbtn" >Return Book</Button>

            <?php

            $u=new data;
            $u->setconnection();
            $u->returnbook($returnid);
            $recordset=$u->returnbook($returnid);
                ?>

            </div>
            </div>


            <div class="bookrequestrightinnerdiv ">   
            <div id="requestbook" class="innerright portion" style="<?php  if(!empty($_REQUEST['returnid'])){ $returnid=$_REQUEST['returnid'];echo "display:none";} else {echo "display:none"; }?>">
            <Button class="greenbtn" >Request Book</Button>

            <?php
            $u=new data;
            $u->setconnection();
            $u->getbookissue();
            $recordset=$u->getbookissue();

            $table="<table style='font-family: Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;'><tr>
            <th>Book Name</th><th>Author</th><th>Publication</th><th>Available Books</th></th><th>Request Book</th></tr>";

            foreach($recordset as $row){
                $table.="<tr>";
               "<td>$row[0]</td>";
            //    $table.="<td><img src='uploads/$row[1]' width='100px' height='100px' style='border:1px solid #333333;'></td>";
               $table.="<td>$row[2]</td>";
                $table.="<td>$row[4]</td>";
                $table.="<td>$row[5]</td>";
                $table.="<td>$row[9]</td>";
                $table.="<td><a href='requestbook.php?bookid=$row[0]&userid=$userloginid'><button type='button' class='btn btn-primary'>Request Book</button></a></td>";
           
                $table.="</tr>";
                // $table.=$row[0];
            }
            $table.="</table>";

            echo $table;


                ?>

            </div>
            </div>

        </div>
        </div>


        <script>
        function openpart(portion) {
        var i;
        var x = document.getElementsByClassName("portion");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
        document.getElementById(portion).style.display = "block";  
        }

   
 
        
        </script>
    </body>
</html>
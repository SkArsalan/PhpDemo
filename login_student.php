<?php
session_start();
// if($_SESSION['otpauthsuccessuser']!="true"){
//   header("location: login.php");
// }
// require 'session_admin.php';
$login=false;
$showError=false;

error_reporting(0);
date_default_timezone_set("Asia/kolkata");
$active="no";
$currentdate = date("Y-m-d");
  
if ($_SERVER["REQUEST_METHOD"]=="POST"){
   $curtime = date("H:i");
 
  // if($curtime >= "07:00" and $curtime<= "17:00" ){
    if(1==1 ){
    $username= $_POST["name"];
    $password= $_POST["psw"];
   
$num=1;

if($num==1){
    

    if( $username == '123' and $password = 'pass' ){     
       header("location: mainpage.php");
    }
    else{
        $showError="Invalid";
      }
    }else{
      $showError="Invalid";
    }

  }else{
    // echo"False for time";
    // $timeerror = true;
  }

    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <?php
 

 ?>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
    <style>
       
        }
        .aa {
            background: url(img/a.png) no-repeat center;
            height: 20px;
            width: 10px;
            display: block;
        }

        <?php include'css/style.css';

        ?>.section {
            justify-content: center;
        }

        .text-center {

            text-align: center;
            padding-top: 30px;
            font-family: 'Ubuntu', sans-serif;
            font-size: 35px;
            margin: auto;
            margin-bottom: 20px;
        }

        .boxmain {
            align-items: center;
            justify-content: center;
            
        }

        .loginfrm {
            display: flex;
            flex-direction: column;
            width: 70%;
            margin: auto;
            /* border: 2px solid red; */
            text-align: center;
            z-index: 10;
            box-shadow: 5px 25px 10px #c95f5f;
            background:   linear-gradient(
        174deg
        , #343a40, #63717a, #3c79a1,#2980b9 );
            

        }

        .loginfrm input {
            width: 80%;

        }
        
        .loginfrm:hover {
  animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }
/* 
  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  } */
}

        body{
            background: linear-gradient(
        174deg
        , #343a40, #6e3636, #570c0c, red ) no-repeat;

        background: linear-gradient(
        174deg
        , #535c68, #535c68, #535c68, #535c68 ) no-repeat;
        }

.btn{
    /* padding: 10px; */
    margin: auto;
    margin-top: 5px;
    margin-bottom: 10px;
}
        
    </style>
</head>

<body>

    <!-- <header class="site-header clearfix"> -->
    
    <!-- </header> -->
    <?php 
  
  if(isset($timeerror) and $timeerror == "true"){
    echo'<div class="alert warning" style="color : white">
     <span class="closebtn">&times;</span>  
      <strong>Warning!</strong>Login allowed only between 7am to 5pm!!!
    </div>';
    // $_SESSION['successins']= "";
        }
        
?>
    <div class="section">
        <!-- sidbar -->
        <div class="boxmain" style="height:100vh ">
            <div class="logincontainer" style="">
                <div class="loginfrm">
                <p class="paras text-center " style=" color:white; font-family: Arial, Helvetica, sans-serif;"><b>Student Login</b></p>
                    <form action="" method="POST">
                        <!-- <div class="form-s1"> -->
                        <!-- <label for="">Designation</label> -->
                        <input type="number" autofocus autocomplete="off"  class="form-input" id="username" name="name"
                          placeholder="Student ID No.">
                        <!-- </div> -->
                        <!-- <div class="form-s1"> -->
                        <!-- <label for="">Designation</label> -->
                        <input type="password"  autocomplete="off" class="form-input"  placeholder="Password" name="psw">
                        <!-- <button class="btn" name="submit" value="submit">ADD</button> -->
                        <!-- </div> -->
                        <div class="form-s1">
                        <!-- <label for="">Designation</label> -->
                        <!-- <button class="btn" name="submit" value="submit">ADD</button> -->
                        <button type="submit" class="btn" name='submit'>Login</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- footer  -->
    <?php
   include'externals/footer.php';
   ?>
    <!-- javascript -->
    

</body>

</html>

<?php
    include "../App/init.php";
    use Twilio\Rest\Client;
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home | Texxty</title>
<!-- <link rel="stylesheet" href="bootstrap4/css/">-->
   <link rel="stylesheet" href="/Texxty/Public/css/materialize.min.css">
    <link rel="stylesheet" href="/Texxty/Public/css/demos.css">
    <link rel="stylesheet" href="/Texxty/Public/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/Texxty/Public/iconfont/material-icons.css">
    <link rel="icon" href="/Texxty/Public/image/sms.png" />
    <script src="/Texxty/Public/javascript/jquery-2.1.3.min.js"></script>
    <script src="/Texxty/Public/javascript/materialize.min.js"></script>
    <script src="/Texxty/Public/javascript/main.js"></script>
     <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
     <script type="text/javascript" src="/Texxty/Public/javascript/script.js"></script>
</head>
<body>
  <div class="navbar-fixed">
    <nav>

        <div class="nav-wrapper white">
            <a href="" class="brand-logo"><i class="material-icons hide-on-med-and-down">close</i><img width="100" src="/Texxty/Public/image/text.png" /></a>
          <a class="button-collapse waves-effect waves-light  black-text" data-activates="mobile"><i class="material-icons">menu</i></a>    
            
            <div class="container">
                <ul class="right hide-on-med-and-down black-text" id="list">
                    <li class="list active nav_list"><a class="list" href="index.php" >Texxty</a></li>
                    <li class="list  nav_list"><a class="list" href="start.php" >Send Message</a></li>
                    <li class="list  nav_list"><a class="list" href="verify.php" >Verify Contact</a></li>
                    <li class="list  nav_list"><a class="list">Get a Quote?</a></li>
                </ul>                
            </div>
            
            <ul class="side-nav" id="mobile">
                    <li class="list  nav_list"><a class="list" href="index.php" >Texxty</a></li>
                    <li class="list  nav_list"><a class="list" href="start.php" >Send Message</a></li>
                    <li class="list  nav_list"><a class="list" href="verify.php" >Verify Contact</a></li>
                    <li class="list  nav_list"><a class="list">Get a Quote?</a></li>

            </ul> 
    </div>
    
    </nav>

    

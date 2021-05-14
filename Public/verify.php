<?php
    include "../includes/conn.php";
    include "../App/init.php";
    use Twilio\Rest\Client;

?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Verify | Texxty</title>
<!-- <link rel="stylesheet" href="bootstrap4/css/">-->
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/demos.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="iconfont/material-icons.css">
    <link rel="icon" href="/Texxty/image/sms.png" />
    <script src="javascript/jquery-2.1.3.min.js"></script>
    <script src="javascript/materialize.min.js"></script>
    <script src="javascript/main.js"></script>
     <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
     <script type="text/javascript" src="javascript/script.js"></script>
</head>

<body id="body_register">



<div class="container">
 <div id="register_division">
    <div class="row">
        <div class="col l6 s12 hide-on-med-and-down  z-depth-1" id="log-text">

         </div>   

         <div class="col l6 s12 white reg-divss z-depth-1" id="log-input">
            <h5 class=" light-blue-text text-darken-1 center"><b><i class="fa fa-check-square-o"></i> VERIFY</b></h5>
            <p class="right-align grey-text text-lighten-1" style="font-family: monospace;"><i>Enter received code</i></p>

            <form method="post">
                
               <?php
                    if(isset($_POST['verify_btn'])){

                       $code = mysqli_real_escape_string($conn,$_POST['code']); 

                       if(!empty($code)){
   
                        $sql = mysqli_query($conn,"SELECT * FROM verification WHERE code = '$code' ");

                        while ($row = mysqli_fetch_assoc($sql))
                        {
                         
                        }

                        $count_code = mysqli_num_rows($sql);

                        if($count_code > 0){

                        $sql_del = mysqli_query($conn,"DELETE FROM verification WHERE code = '$code' ");

                        echo "<i class='green-text'><b><i class='fa fa-check-circle'></i> Success! Contact has been verified  </b></i>";

                        

                        }else{
                            echo "<i class='red-text'><b><i class='fa fa-times-circle-o'></i> Opps! Code not recognised.</b></i>";
                        }

                       
                       }else{
                        echo "<i class='red-text'><b><i class='fa fa-times-circle-o'></i> Opps! You certainly have to fill the field</b></i>";
                       }


                    }
               ?>     



            <div class="row">
                <div class="col l12 m12 s12">
                    

                     <div class="input-field">
                          <input type="text" class="validate" required=""  name="code" id="user" placeholder="Enter code. E.g 5e8e197266229">
                            <label class="lab" for="user"><i class="material-icons  light-blue-text text-darken-1" >spa</i></label> 
                        
                     </div>   


                    
                    <button class="btn btn-dark btn-block btn-lg" name="verify_btn" id="create_btn"><i class="material-icons right">check_circle</i> Verify</button>

                     <a href="index.php"><p class="grey-text text-lighten-1" id="para-reg-text">Go back home</p></a>  



                </div> 
             </div>   


               


                 


             </form> 
         </div>   
         Privacy policy & Term of service
    </div>  

  </div>  
</div>
</body>
</html>    


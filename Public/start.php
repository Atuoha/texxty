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
    
    <title>Send | Texxty</title>
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
            <h5 class=" light-blue-text text-darken-1 center"><b><i class="fa fa-envelope"></i> SEND SMS</b></h5>
            <p class="right-align grey-text text-lighten-1" style="font-family: monospace;"><i>Append country code always (E.g +234)</i></p>

            <form method="post">
                
               <?php
                    if(isset($_POST['sms_btn'])){

                       $phone = mysqli_real_escape_string($conn,$_POST['phone']); 
                       $message = mysqli_real_escape_string($conn,$_POST['message']); 

                       if(!empty($phone && $message)){
   
                        // SENDING USING TWILIO


                        // A Twilio number you own with SMS capabilities
                        $twilioPersonal_number = "+13148585035";

                        $client = new Client($config['account_id'], $config['auth_token']);

                        $client->account->messages->create($phone, ['from'=>$twilioPersonal_number, 'body'=>$message] );
                        

                        // END 

                        echo "<i class='green-text'><b><i class='fa fa-check-circle'></i> Success! Your message has been sent to $phone </b></i>";
                       }else{
                        echo "<i class='red-text'><b><i class='fa fa-times-circle-o'></i> Opps! You certainly have to fill the fields</b></i>";
                       }


                    }
               ?>     



            <div class="row">
                <div class="col l12 m12 s12">
                    

                     <div class="input-field">
                          <input type="number" class="validate" required="" value="<?php if(isset($phone)) echo $phone ?>" name="phone" id="user" placeholder="+23481-000-0000-000">
                            <label class="lab" for="user"><i class="material-icons  light-blue-text text-darken-1" >contact_phone</i></label> 
                        
                     </div>     

                </div> 
             </div>   


                <div class="row">
                 <div class="col l12 m12 s12">

                     <div class="input-field">
                         <textarea id="msg" type="text" name="message" required="" placeholder="Enter message contact here" ><?php if(isset($message)) echo $message ?></textarea>  
                        <label for="msg"><i class="material-icons  light-blue-text text-darken-1 ">question_answer</i></label>
                     </div> 

                     </div> 
                </div>  

            <button class="btn btn-dark btn-block btn-lg" name="sms_btn" id="create_btn"><i class="material-icons right">check_circle</i> Send sms</button>

            <a href="index.php"><p class="grey-text text-lighten-1" id="para-reg-text">Go back home</p></a>  
                 
             </form> 
         </div>   
         Privacy policy & Term of service
    </div>  

  </div>  
</div>
</body>
</html>    


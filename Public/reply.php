<?php
	include "../includes/conn.php";
    include "../App/init.php";
    use Twilio\TwiML\MessagingResponse;
    header("content-type:text/xml");
    echo '<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n';


    $people =  array(

    	'+2348143200267'=> 'Tony';
    	'+2349027248518'=> 'Tonio';
    );

    if(!$name = $people[$_REQUEST['From']]){

    	$name = 'no body';
    }

    $response = new MessagingResponse();
	$response->message('Hi $name, thanks for messaging');

?>
 
 <Response>
    <Message>
        <?php echo "Hi $name, thanks for messaging!" ;?>
    </Message>
</Response> 

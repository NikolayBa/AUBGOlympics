<?php 
    if(isset($_POST['fname1']) and isset($_POST['lname1']) and isset($_POST['mail1'])){
    $to1 = "aubgolympicscommittee@gmail.com"; // this is your Email address
    
    $from1 = $_POST['mail1']; // this is the sender's Email address
    $first_name1 = $_POST['fname1'];
    $last_name1 = $_POST['lname1'];

    
			if($from1 == '' or $first_name1 == '' or $last_name1 == '') {
  			 echo "Error";
   				exit();
   				} else {
   				 $subject = "100 Meters Dash";
  				  $message = $first_name1 . " " . $last_name1 . "\n";
   					 	$headers = "From:" . $from1;
  				  		$headers2 = "From:" . $to;
  				  		mail($to1,$subject,$message,$headers);
    					echo "Mail Sent. Thank you for registering!";
    					// You can also use header('Location: thank_you.php'); to redirect to another page.
    		}
    } else {
    echo "Empty Fields";
    }
   
?>
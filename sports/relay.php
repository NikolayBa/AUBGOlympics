<?php 
    if(isset($_POST['fname1']) and isset($_POST['lname1']) and isset($_POST['mail1']) and isset($_POST['fname2']) and isset($_POST['lname2']) and isset($_POST['fname3']) and isset($_POST['lname3']) and isset($_POST['fname4']) and isset($_POST['lname4'])){
    $to1 = "aubgolympicscommittee@gmail.com"; // this is your Email address
    
    $from1 = $_POST['mail1']; // this is the sender's Email address
    $first_name1 = $_POST['fname1'];
    $last_name1 = $_POST['lname1'];
    
    $first_name2 = $_POST['fname2'];
    $last_name2 = $_POST['lname2'];
    
    $first_name3 = $_POST['fname3'];
    $last_name3 = $_POST['lname3'];


    $first_name4 = $_POST['fname4'];
    $last_name4 = $_POST['lname4'];
    
			if($from1 == '' or $first_name1 == '' or $last_name1 == '' or $first_name2 == '' or $last_name2 == '' or $first_name3 == '' or $last_name3 == '' or $first_name4 == '' or $last_name4 == '') {
  			 echo "Error";
   				exit();
   				} else {
   				 $subject = "Relay 4x100 Meters";
  				  $message = $first_name1 . " " . $last_name1 . "\n" . $first_name2 . " " . $last_name2. "\n" . $first_name3 . " " . $last_name3. "\n" . $first_name4 . " " . $last_name4;

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
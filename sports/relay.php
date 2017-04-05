<?php 
    if(isset($_POST['fname1']) and isset($_POST['lname1']) and isset($_POST['mail1']) and isset($_POST['fname2']) and isset($_POST['lname2']) and isset($_POST['fname3']) and isset($_POST['lname3'])){
    $to = "aubgolympicscommittee@gmail.com"; // this is your Email address
    
    $team_name = $_POST['team_name'];
    
    $from1 = $_POST['mail1']; // this is the sender's Email address
    $first_name1 = $_POST['fname1'];
    $last_name1 = $_POST['lname1'];
    
    $first_name2 = $_POST['fname2'];
    $last_name2 = $_POST['lname2'];
    $from2 = $_POST['mail2'];
    
    $first_name3 = $_POST['fname3'];
    $last_name3 = $_POST['lname3'];
    $from3 = $_POST['mail3'];

   	$subject = "Relay";
  	$message = "Team: ".$team_name.PHP_EOL."Player 1: ". $first_name1 . " " . $last_name1 . " ". $from1. PHP_EOL."Player 2: " . $first_name2 . " " . $last_name2. " ". $from2.PHP_EOL."Player 3: " . $first_name3 . " " . $last_name3. " ". $from3.PHP_EOL;

    $headers = "From:" . $from1;
  	mail($to,$subject,$message,$headers);
    try{
    $file = fopen("/www/aubgolympics.com/signups/relay.txt", 'ab');
    fwrite($file, "===========START===========".PHP_EOL);
    fwrite($file, $message);
    fwrite($file, "============END============".PHP_EOL);
    fclose($file);
    }
    catch(Exception $e){
      
    }
    echo "Thank you for registering! You will now be redirected";
    echo "<script>";
    echo "window.location.href='http://www.aubgolympics.com/sports.html.com';</script>";
    die();
    } else {
    echo "Empty Fields";
    }
   
?>
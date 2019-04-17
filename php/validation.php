<?php
  if(isset($_POST["btnSubmit"])){
      $errors = [];
      $info = [];

    $firstName = $_POST["tbFirstName"];
    $reFirstLastName = "/^[A-Z][a-z]{2,14}(\s[A-Z][a-z]{2,14})*$/";
    if(!preg_match($reFirstLastName, $firstName)){
        array_push($errors, "First name is not ok");
    }

    $lastName = $_POST["tbLastName"];
    if(!preg_match($reFirstLastName, $lastName)){
        array_push($errors, "Last name is not ok");
    }

    $email = $_POST["tbEmail"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not ok");
    }

    $subject = $_POST["tbSubject"];
    $reSubject = "/^[A-Za-z0-9\s]{2,50}$/";
    if(!preg_match($reSubject, $subject)){
        array_push($errors, "Subject is not ok");
    }

    $message = $_POST["tbMessage"];
    $reMessage = "/^[A-Za-z0-9\s\.,?!]{2,}$/";
    if(!preg_match($reMessage, $message)){
        array_push($errors, "Your message is not in a good format");
    }

    if(count($errors) > 0){

		echo "<h4> GRESKE: </h4>";
		
		echo "<ol class='bold'>";
		
		foreach ($errors as $error) {
			echo "<li> $error </li>";
		}

        echo "</ol>";
    }

    else {

        $to = "jasminasevic@yahoo.com";
        $subject = "New Email Address for Website";
        $headers = "From: $email\n";
        $message = "A visitor to your site has sent the following email address.\n
        Email Address: $email";
        // $user = "$email";
        // $usersubject = "Thank You";
        // $userheaders = "From: you@youremailaddress.com\n";
        // $usermessage = "Thank you for your email. We'll get back to you as soon as possible.";
        mail($to,$subject,$message,$headers);
       // mail($user,$usersubject,$usermessage,$userheaders);

        //echo "sve kul";
        echo '<script>window.location.href = "index.php?page=submited";</script>';

        // header("Location: ../index.php?page=submited");
        
    }

   // var_dump($errors);

}



?>
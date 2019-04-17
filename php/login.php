<?php
    session_start();

    if(isset($_POST['btnLogin'])){

        $email = $_POST['logEmail'];
        $pass = $_POST['logPassword'];

        $logErrors = [];

        $rePass = "/^[\S]{5,}$/";

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $logErrors[] = "Email is not ok";
        }

        if(!preg_match($rePass, $pass)){
            $logErrors[]= "Password is not ok";
        }

        if(count($logErrors)>0){
            $_SESSION['errors'] = $logErrors;
            header("Location: ../index.php?page=register");
        }
    
    else{
       
        require_once "connection.php";
        $pass = md5($pass);
        

        $query = "SELECT id_user, first_name, last_name, email, role_name FROM user INNER JOIN roles 
        ON role_id = id_role WHERE active = 1 AND email = :email AND pass = :pass";


        $stmt = $conn->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pass", $pass);

        $stmt->execute();
        
        $user = $stmt->fetch();

        if($user){
            $_SESSION['user'] = $user;
            header("Location: ../index.php?page=admin");
        }
        else {
            $_SESSION['errors'] = "Wrong email or password";
            header("Location: ../index.php?page=register");
           }


        }   
        
                
    }


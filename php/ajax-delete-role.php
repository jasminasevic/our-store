<?php

    $statusCode = 404;
	
	if($_SERVER['REQUEST_METHOD'] != "POST"){
		echo "Ne mozete pristupiti ovoj stranici";
	}


    // echo $_POST['id'];
	    if(!empty($_POST['id'])){

        $id = $_POST['id'];
        //echo $id;
		include "connection.php";

		try{
            $upit = $conn->prepare("DELETE FROM roles WHERE id_role = :id ");
            $upit->bindParam(":id", $id);
            $rezultat = $upit->execute();
           // echo $rezultat;

			if($rezultat){
                $statusCode = 204;
			}
			else{
                $statusCode = 500;
            }

        }
		catch(PDOException $e){
            $statusCode = 500;
            echo $e->getMessage();
		}
	}
	// status_response_code($statusCode);

?>
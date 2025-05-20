<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $FullName    = $_POST["FullName"];
    $Emali    = $_POST["Emali"];
    $Message    = $_POST["Message"];

    try {
          include("database.php");
         
        if (empty($FullName) || empty($Emali) || empty($Message) ) {
           header("Location: Contact Me.php?x=This field can not be empty!");
           exit;
        }else if (strpos(trim($FullName)," ") == false) {
            header("Location: Contact Me.php?z=Please enter your fullname with a space between first name and last name.");   
           exit;
        }
        else if (!filter_var($Emali, FILTER_VALIDATE_EMAIL)) {
            header("Location: Contact Me.php?y=Your email is not valid!");   
           exit;
        }
           else {
            // the inclued here insert user into database 
            include("portfolio model.php");   
            // header("Location: Contact Me.php?n=All information Surcessfully accepted!");
            header("Location: Contact Me.php"); 
            exit; 
        }





        

        
        //   header("location: Contact Me.php");
    } catch (PDOException $e) {
        echo  "Connection Failed" ." ".$e->getMessage(); 
    }

}



?>
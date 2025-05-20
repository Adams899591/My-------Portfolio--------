<?php
          //  ----------------------DATABASE CONNECTION----------------------
          
    try {
        $sql = "INSERT INTO contact (fullname, email, message) VALUE (:fullname, :email, :message)";

        $value = $PDO->prepare($sql);
      
        $value->bindParam(":fullname",$FullName);
        $value->bindParam(":email",$Emali);
        $value->bindParam(":message",$Message);
       
        $value->execute(); 
      
     } catch (PDOException $e) {
        echo  "Field to insert details" ." ".$e->getMessage(); 
    }


?>
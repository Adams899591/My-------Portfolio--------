<?php

                // ----------------- DATABASE FOR LOCALHOST-------------------------

//  $db_server_database = "mysql:host=localhost;dbname=portfolio";
//  $db_name = "root";
//  $db_password = "";


//       $PDO = "";

//             try {
//                     $PDO = new PDO  ($db_server_database,
//                                      $db_name,
//                                      $db_password);
                
//                     $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                     echo"Connected";
//             } catch (PDOException $e) {
//                 echo  "Connection Failed" ." ".$e->getMessage(); 
//             }


?>


<?php

                // ----------------- DATABASE FOR INFINITY FREE-------------------------

 $db_server_database = "mysql:host=sql311.infinityfree.com;dbname=if0_38883938_portfolio";
 $db_name = "if0_38883938";
 $db_password = "tRT3ziMo72c81";


      $PDO = "";

            try {
                    $PDO = new PDO  ($db_server_database,
                                     $db_name,
                                     $db_password);
                
                    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    echo"Connected";
            } catch (PDOException $e) {
                echo  "Connection Failed" ." ".$e->getMessage(); 
            }


?>
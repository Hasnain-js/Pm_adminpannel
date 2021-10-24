<?php

    $servername = "localhost" ; 
    $username =  "root" ;
    $pass = "";
    $dbname = "pmhouse" ;
    $conection = new mysqli($servername , $username , $pass , $dbname ) ; 
    if($conection->connect_error){
        echo "error Ocurred" .$conection->connect_error ; 
    }

?>
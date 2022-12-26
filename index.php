<?php
 ob_start();

 require_once "db.php";
if(!isset($_GET["sayfa"])){
    $_GET["sayfa"]="index";
}


switch ($_GET["sayfa"]) {
        case 'index':
            require_once "login.php";
        break;
        case 'register':
            require_once "Register.php";
        break;
        case 'homepage':
            require_once "homepage.php";
            require_once "readcontent.php";
            
        break;  
        case 'write':
            require_once "homepage.php";
            require_once "write.php";
        break;  
        case 'read':
            require_once "homepage.php";
            require_once "read.php";
        break;  
        case 'readcontent':
            require_once "homepage.php";
            require_once "readcontent.php";
            
        break;  
   
}
?>
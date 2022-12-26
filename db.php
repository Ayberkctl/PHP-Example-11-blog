<?php
try{
    $db = NEW PDO ("mysql:host=localhost;dbname=blog","root");
   
} catch(PDOException $e){
   echo $e->getMessage();
}
?>
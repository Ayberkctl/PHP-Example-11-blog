<?php require_once "header.php"; ?>
<?php
include_once('db.php');

if(!isset($_SESSION["user"]) ){
    
    header("location:register.php");
}else{
    $usersname =$_SESSION["user"]["kulanici_adi"];
    $sorgu= $db->prepare("SELECT usersname, id , namesurname FROM users WHERE usersname =?");
    $bul=$sorgu->execute([$usersname]);
    $bul=$sorgu->fetch(PDO::FETCH_ASSOC);
    if(!$bul){
        header("location:login.php");
    }
    $id = $bul["id"];
    $name_surname = $bul["namesurname"];
    
}
?>



   

 



<style>
    h2{display:inline;}
</style>
<h2>
<?php
session_start();
if($_SESSION["user"]){
    $usersname =$_SESSION["user"]["kulanici_adi"];
     echo "Welcome ". $usersname ;
}
 ?></h2>
<a href="index.php?sayfa=homepage"><h2>[homepage]</h4></a>
<a href="index.php?sayfa=read"><h2>[Read blog]</h4></a>
<a href="index.php?sayfa=write"><h2>[write blog]</h4></a>
<a href="index.php?sayfa=index"><h2>[exit]</h4></a>

<hr>
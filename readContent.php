<?php 
if(!isset($_GET["blogid"])){
    $_GET["blogid"]=1;
}
 $blogid=$_GET["blogid"];

$sorgu=$db->prepare("SELECT * FROM  blogcontent WHERE blogid=?");
$bul=$sorgu->execute([$blogid]);
$bul=$sorgu->fetchAll(PDO::FETCH_ASSOC);

?>
<link rel="stylesheet" href="css.css">


<table id ="personel" >
    
        <tr style="background: #000; color:#fff">
            <td ><?php echo  $bul[0]["title"];?></td>
            <td style="text-align: right; padding-right:10%;" colspan="2" ><?php echo  $bul[0]["usersname"];?></td>
        </tr>
    
        <tr >
            <td style="padding: 3%;" colspan="2"><?php echo  $bul[0]["content"];?></td>
        </tr>

        <tr  style="background: #000; color:#fff">
            <td><?php echo  $bul[0]["nameSurname"];?></td>
            <td style="text-align: right; padding-right:10%;"><?php echo  $bul[0]["contentdate"];?></td>
        </tr>
      
</table>    





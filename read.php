<?php 
 $sorgu=$db->prepare("SELECT * FROM blogcontent");
 $read=$sorgu->execute([]);
 $read= $sorgu->fetchAll(PDO::FETCH_ASSOC);
 //var_dump($read);
?>
<h3>Blogs</h3>
<link rel="stylesheet" href="css.css">
<table id ="personel" >
    
        <tr style="background: #000; color:#fff">
            <td>NAME</td>
            <td>TİTLE</td>
            <td>NUMBER</td>
            <td>DATE</td>
            <td>read</td>
           
        </tr>
    <?php foreach($read as $blog):?>
        <a href="#">
       <tr>
            <td><?php echo $blog["nameSurname"];?></td>
            <td><?php echo $blog["title"];?></td>  
            <td><?php echo $blog["blogid"];?></td>    
            <td><?php echo $blog["contentdate"];?></td> 
            <td><a href="index.php?sayfa=readcontent&blogid=<?php echo $blog["blogid"];?>">read</a></td> 
            <?php ?>
           
        </tr>
        </a>
        
    <?php  endforeach; ?>
</table>    

 



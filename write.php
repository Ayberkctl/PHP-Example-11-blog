<?php
if(isset($_POST["submit"])){
    $title=$_POST["title"]?? null;
    $conntent=$_POST["conntent"]?? null;
    if(!$title){
        echo  " <br> should write title";
    }
    elseif(!$conntent){
        echo "<br> you didn't write conntent";
    }else{
        $sql=$db->prepare("INSERT INTO blogcontent SET id=?, namesurname=?, usersname=?, title=?, content=?");
        $read=$sql->execute([$id,$name_surname,$usersname,$title,$conntent]);
    }
   
}
?>

<form action="" method="post">
    Title: <br>
    <input type="text" name="title" id="" value="<?php $_POST["title"]?? null ?>"> <br><br>
    Conntent: <br>
    <textarea name="conntent" id="" cols="100" rows="8" value="<?php $_POST["conntent"]?? null ?>"></textarea>
    <input type="hidden" name="submit"> <br> <br>
    <button type="submit">Publish</button>
</form>
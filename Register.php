<?php

include_once('db.php');

if(isset($_POST["submit"])){
    $name = $_POST["nameSurname"] ?? null;
    $username = $_POST["username"] ?? null;
    $email = $_POST["email"] ?? null;
    $password = $_POST["userpassword"] ?? null;
    if(!$name){
        echo"pls write  your name ";}

    else if(!$username){
        echo"pls write  username ";}

    else if(!$email){
        echo"pls write your E-mail ";}

    else if(!$password){
        echo"pls write password ";}

    else{
        
        $sorgu = $db -> prepare("INSERT INTO users (nameSurname, usersname, email, userpassword) VALUES (?,?,?,?)");
        
        $ekle = $sorgu->execute([
            $name, $username, $email, $password
        ]);
        if($ekle){
            header("location:login.php");
        }
        else{
            print_r($sorgu->errorInfo());
        }
    }
}
    
?>
<form action="" method="post">
    Name: <br>
    <input type="text" name="nameSurname" value="<?php echo $_POST["nameSurname"] ?? "" ; ?>"id=""><br> <br>
    Users name: <br>
    <input type="text" name="username"value="<?php echo $_POST["username"] ?? "" ; ?>" id=""> <br> <br>
    E-mail: <br>
    <input type="email" name="email" value="<?php echo $_POST["email"] ?? "" ; ?>"id=""> <br> <br>
    Password: <br>
    <input type="userpassword" name="userpassword" value="<?php echo $_POST["userpassword"] ?? "" ; ?>"id=""><br>
    <input type="hidden" name="submit"><br>
    <button type="submit">Register</button> 
</form> <a href="login.php"><button>Go to Login</button></a>
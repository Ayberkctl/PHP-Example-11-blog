<?php
include_once('db.php');
session_start();
session_destroy();
if(isset($_POST["submit"])){
    $username= $_POST["username"]?? null;
    $password= $_POST["userpassword"];
    if(!$username){echo "kulanıcı adı girin";}
    else if(!$password){echo "şifre girin";}
    else{
        $sorgu=$db->prepare("SELECT usersname,userpassword FROM users WHERE usersname = ? && userpassword = ?");
        
        $sorgu->execute([
            $username, $password
        ]);
        $giris=$sorgu->fetch(PDO::FETCH_ASSOC);

        if($giris){
            session_start();

            $_SESSION["user"]=[
                "kulanici_adi"=>$_POST["username"]
            ];

            header("location:homepage.php");
        }else{
            echo "Hatalı Giriş";
        }
    }
}

?>


<form action="" method="post">
    Users name: <br>
    <input type="text" name="username" id="" value="<?php echo $_POST["username"]?? null; ?>"> <br> <br>
    Password: <br>
    <input type="password" name="userpassword" id=""><br>
    <input type="hidden" name="submit"><br>
    <button type="submit">Login</button> 
</form> <a href="Register.php"><button>Register</button></a>
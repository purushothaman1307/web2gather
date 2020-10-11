<?php
    session_start();
    $username = "";
    $email = "";

    $errors = array();

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = '2gather';

    $conn = mysqli_connect($host,$user,$password,$db);

    if(isset($_POST['register'])){

        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $conpassword = mysqli_real_escape_string($conn,$_POST['conpassword']);

    if($password != $conpassword){
        array_push($errors,"password does not match with confirm password");
    }

    if(count($errors) == 0){
        //$passwordsave = md5($password);
        $insert = "INSERT INTO signupreg (Name, Email ,Password) VALUES ('$username','$email','$password')";
        mysqli_query($conn,$insert);
        $_SESSION['username'] = $username;
        header('location:home.php');

    }
}

if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

if(count($errors) == 0){
    //$passwordsave = md5($password);
    $select = "SELECT * FROM signupreg WHERE Name='$username' && Password='$password'";
    $res = mysqli_query($conn,$select);
    $num = mysqli_num_rows($res);
    if($num == 1){
        $_SESSION['username'] = $username;
        header('location: home.php');
    }else{
        array_push($errors,"wrong username/password");
    }

}
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location : loginpage.php');
}
?>

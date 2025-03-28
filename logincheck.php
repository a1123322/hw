<?php
session_start();
?>
<h1>Login Result</h1>

<?php

$defaultName="nuk";
$defaultPwd="123456";

$adminUser = "admin";
$adminPwd = "654321";

$userName=$_POST["userName"];
$userPwd=$_POST["userPwd"];

if ($adminUser == $userName && $adminPwd == $userPwd) {
    $_SESSION["user"] = $adminUser;
    $_SESSION["role"] = "admin"; 
    setcookie("userName", $adminUser, time() + 10, "/");

    header("Location: https://youtu.be/xvFZjo5PgG0?si=x1oSKZNpbEwVINEK"); 
    exit;

}if($defaultName==$userName && $defaultPwd==$userPwd){
    echo "Login success";
    $_SESSION["check"]=1;
    $cookiedate=strtotime("+10 seconds",time());
    setcookie("userName",$defaultName,$cookiedate);
    header("Location:form.php");
}else{
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login.php'");
}
?>
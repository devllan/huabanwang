<?php
session_start();
$user = $_POST["username"];
$pwd = $_POST["password"];
$vcode = $_POST["vcode"];
if ($_SESSION["code"] != $vcode) {
    echo '验证码不正确';
} else {
    $con = mysqli_connect("localhost", "root", "root");
    if ($con == false) {
        die("连接失败");
    }
    //选择数据库
    mysqli_select_db($con, "flower");
    mysqli_set_charset($con, "utf8");
    $sql = "insert into users(username,user_password) values('$user','$pwd')";
    $result = mysqli_query($con, $sql);
    if ($result == false) {
        echo 'no';
    }else{
        echo 'ok';
    }
    mysqli_close($con);
}



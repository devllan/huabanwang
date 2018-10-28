<?php

session_start();
$user = $_POST["username"];
$pwd = $_POST["password"];

$con = mysqli_connect("localhost", "root", "root");
if ($con == false) {
    die("连接失败");
}
//选择数据库
mysqli_select_db($con, "flower");
mysqli_set_charset($con, "utf8");
$sql = "select * from users where username='$user'";
//此方法如果执行的是select语句，如果执行失败（比如表名写错了，字段名写错了，会返回false）,如果没有发生错误，则会返回结果集
$result = mysqli_query($con, $sql);
if ($result == false) {
    echo '查询出现意外错误';
} else {
    if (mysqli_num_rows($result)>0) {
        $row= mysqli_fetch_assoc($result);
        if ($row["user_password"]!=$pwd) {
            echo '密码错误';
        }else{
            $_SESSION["username"]=$user;
            echo '登录成功';
        }
    }else{
        echo '用户名错误';
    }
}
mysqli_close($con);


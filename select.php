<?php

session_start();
//获取图片id
$imageid = $_POST["imageid"];

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];

    $con = mysqli_connect("localhost", "root", "root");
    if ($con == false) {
        die("连接失败");
    }
    mysqli_select_db($con, "flower");
    mysqli_set_charset($con, "utf8");

    $sql = "select * from collection where username='$username' and imageid=$imageid";
    //echo $sql;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '已收藏';
    } else {
        $sql = "insert into collection(username,imageid) values('$username',$imageid)";
        $result = mysqli_query($con, $sql);
        if ($result == FALSE) {
            echo '收藏失败';
        } else {
            echo '收藏成功';
        }
    }
} else {
    echo '用户未登录';
}
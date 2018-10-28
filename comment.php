<?php
session_start();

//验证用户是否登录
if (isset($_SESSION["username"])) {
    $username=$_SESSION["username"];
    $conmment = $_POST["comment"];
    $imageid=$_POST["imageid"];
    $con = mysqli_connect("localhost", "root", "root");
    if ($con == false) {
        die("连接失败");
    }
    mysqli_select_db($con, "flower");
    mysqli_set_charset($con, "utf8");

    $sql = "insert into image_comment(content,comment_date,username,imageid) values('$conmment',CURRENT_DATE(),'$username',$imageid)";
//echo $sql;
    $result = mysqli_query($con, $sql);
    if ($result!=false) {
        echo json_encode(array("status"=>"success"));
    }else{
        echo json_encode(array("status"=>"error","msg"=> mysqli_error($con)));
    }
}else{
    //echo '{"status":"no","msg":"loginerror"}';
    echo json_encode(array("status"=>"error","msg"=>"notlogin"));
}



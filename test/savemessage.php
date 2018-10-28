<?php

$message = $_POST["message"];
//获取IP地址
$ip=$_SERVER["REMOTE_ADDR"];

$con = mysqli_connect("localhost", "root", "root");
if ($con == false) {
    die("连接失败");
}
mysqli_select_db($con, "flower");
mysqli_set_charset($con, "utf8");

$sql = "insert into message(msg,username,createdatetime) values('$message','$ip',CURRENT_DATE())";
//echo $sql;
$result = mysqli_query($con, $sql);
if ($result != false) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error", "msg" => mysqli_error($con)));
}
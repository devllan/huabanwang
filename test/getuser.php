<?php
$con= mysqli_connect("localhost", "root", "root");
if (!$con) {
    die("链接失败");
}
mysqli_select_db($con, "flower");
mysqli_set_charset($con, "utf8");
$sql="select username,user_password from users";
$result=mysqli_query($con, $sql);
if (!$result) {
    echo '查询失败';
}else{
    $row=mysqli_fetch_assoc($result);
    echo json_encode($row);
}
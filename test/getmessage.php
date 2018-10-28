<?php
$con = mysqli_connect("localhost", "root", "root");
if ($con == false) {
    die("连接失败");
}
mysqli_select_db($con, "flower");
mysqli_set_charset($con, "utf8");

$sql = "select * from message order by id desc";
//echo $sql;
$result = mysqli_query($con, $sql);
if ($result==false) {
    die("查询失败");
}
//创建空数组
$message=[];
if(mysqli_num_rows($result)>0){
    while($row= mysqli_fetch_assoc($result)){
       $message[]=$row;
    }
}
//echo '<pre>';
//print_r($message);
echo json_encode($message);

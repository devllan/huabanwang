<?php
//获取用户传递的类别名称
$classname=$_POST["classname"];
//连接数据库根据类型名称获取类型id
$con= mysqli_connect("localhost", "root", "root");
if (!$con) {
    die("连接失败");
}
mysqli_select_db($con, "flower");
mysqli_set_charset($con, "utf8");
$sql="select classid from classfy where classname='$classname'";
$result=mysqli_query($con, $sql);
if ($result!=FALSE) {
    $row=mysqli_fetch_assoc($result);
   
    echo $row["classid"];
   
    
}
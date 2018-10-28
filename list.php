<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="css/public.css">
        <link rel="stylesheet" type="text/css" href="css/list.css">
    </head>

    <body>
        <!--公共头部-->
        <div id="public-header" style="display: block;">
            <div id="public-header-main" class="clearbox">
                <!--菜单-->
                <ul class="public-header-menu clearbox">
                    <li class="header-menu"><a href=""><img src="images/logo.svg"></a></li>
                    <li class="header-menu"><a href="">发现</a></li>
                    <li class="header-menu"><a href="">最新</a></li>
                    <li class="header-menu"><a href="">美思</a></li>
                    <li class="header-menu"><a href="">活动<span>new</span></a></li>
                    <li class="header-menu"><a href="">教育</a></li>
                    <li class="header-menu"><a href=""></a></li>
                </ul>
                <!--搜索-->
                <div class="public-header-input">
                    <input type="text" id="txtsearch" name="" placeholder="搜索你喜欢的">
                    <span id="btnSearch"></span>
                </div>
                <!--注册登录-->
                <div class="public-header-login">
                    <a class="public-right-register">注册</a>
                    <a name="" class="public-right-login">登录</a>
                </div>
            </div>
        </div>
        <!--列表头部（banner区域）-->
        <div style="padding: 0.1px;">
            <div id="banner">
                <div class="banner-title">草莓</div>
                <div class="banner-name">草莓不好吃 </div>
                <div class="banner-person clearbox">
                    <div></div>
                    <span>Ta们已关注</span>
                    <div></div>
                </div>
                <div class="banner-img">
                    <img src="images/list_icon1.jpg">
                    <img src="images/list_icon2.jpg">
                    <img src="images/list_icon3.jpg">
                    <img src="images/list_icon4.jpg">
                    <img src="images/list_icon5.jpg">
                </div>
            </div>
        </div>
        <!--列表内容-->
        <div id="content">
            <!--更多发现-->
            <div class="content-more">
                <div></div>
                <span>更多发现</span>
                <div></div>
            </div>
            <!--类别-->
            <div class="content-type clearbox">
                <?php
                $con = mysqli_connect("localhost", "root", "root");
                if (!$con) {
                    die("连接失败");
                }
                mysqli_select_db($con, "flower");
                mysqli_set_charset($con, "utf8");
                $sql = "select * from classfy";
                $result = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div><a href='list.php?id=".$row["classid"]."'>" . $row["classname"] . "</a></div>";
                }
                mysqli_close($con);
                ?>
                <!--            <div>草莓</div>
                            <div>派对装饰</div>
                            <div>雪</div>
                            <div>美食</div>
                            <div>书架</div>-->
            </div>
            <!--内容列表-->
            <div class="content-list">
                <!--第1行-->
                <div class="content-list-list clearbox">
                    <?php
                    //根据类别编号查询图片
                    if (isset($_GET["id"])) {
                       $id=$_GET["id"];
                      
                    }else{
                        $id=1;                       
                    } 
                    $con = mysqli_connect("localhost", "root", "root");
                    if (!$con) {
                        die("连接失败");
                    }
                    mysqli_select_db($con, "flower");
                    mysqli_set_charset($con, "utf8");
                    $sql = "select * from image where classid=$id";
                   
                    $result = mysqli_query($con, $sql);
                    if ($result!=false) {
                        while ($row= mysqli_fetch_assoc($result)){
                            echo "<a href='info.php?id=".$row["id"]."'>";
                            echo '<div class="list">';
                            echo "<div><img src=".$row["url"]."></div>";
                            echo "<div>".$row["brief"]."</div>";
                            echo '<div><img src="images/list_icon2.jpg"><p>来自<span style="color: red;">zhangsan</span>收藏 </p><p>2017.07.05</p></div>';
                            echo '</div>';   
                            echo '</a>';
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
        <!--公共底部-->
        <div id="footer">
            <div class="footer-main clearbox">
                <div class="footer-menu">
                    <a href="#">花瓣首页</a>
                    <a href="#">花瓣采集工具</a>
                    <a href="#">花瓣官方微博</a>
                </div>
                <div class="footer-menu">
                    <a href="#">联系与合作</a>
                    <a href="#">联系我们</a>
                    <a href="#">用户反馈</a>
                    <a href="#">花瓣LOGO标准文档</a>
                </div>
                <div class="footer-menu">
                    <a href="#">移动客户端</a>
                    <a href="#">花瓣 iPone 版</a>
                    <a href="#">花瓣 Android 版</a>
                    <a href="#">花瓣 HD</a>
                </div>
                <div class="footer-look">
                    <p>
                        关注我们
                        <br/> 新浪微博：@花瓣网
                        <br/> 官方 QQ：78493943
                        <br/>
                    </p>
                </div>
                <div class="footer-lianxi">
                    <img src="images/erwei.png">
                </div>
            </div>
        </div>
    </body>

</html>
<script src="js/jquery-3.2.1.js"></script>
<script>
    $(function(){
        $("#btnSearch").on("click",function(){
            //获取搜索框的值
            $txt=$("#txtsearch").val();
            $.ajax({
                url:"getidbyname.php",
                type:"post",
                data:{"classname":$txt},
                success:function(res){
                    window.location.href="list.php?id="+res;
                }
            });
        })
    })
</script>
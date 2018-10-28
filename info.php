
<!DOCTYPE html>
<html>

    <head>
        <title>花瓣网</title>
        <meta charset="UTF-8">
        <!--html代码与css代码分离-->

        <link rel="stylesheet" type="text/css" href="css/public.css">
        <link rel="stylesheet" type="text/css" href="css/info.css">
        <script src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript" src="js/info.js"></script>
        <script src="js/sweetalert.min.js"></script>

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
                    <input type="text" name="" placeholder="搜索你喜欢的">
                    <span></span>
                </div>
                <!--注册登录-->
                <div class="public-header-login">
                    <a name="register" class="public-right-register">注册</a>
                    <a name="login" class="public-right-login">登录</a>
                </div>
            </div>
        </div>

        <!--网站中心内容-->
        <div id="content" class="clearbox">
            <div class="content_left">
                <div class="clearbox">
                    <input type="button" value="收藏" id="btnSelect" data="<?php
                    echo $_GET["id"];
                    ?>" />
                    <input type="button" value="返回" id="btnReturn" />
                </div>
                <?php
                $id = $_GET["id"];
                $con = mysqli_connect("localhost", "root", "root");
                if (!$con) {
                    die("连接失败");
                }
                mysqli_select_db($con, "flower");
                mysqli_set_charset($con, "utf8");
                $sql = "select * from image where id=$id";
                $result = mysqli_query($con, $sql);
                if ($result != false) {
                    $row = mysqli_fetch_assoc($result);
                    echo "<img src='" . $row["url"] . "' />";
                }
//                mysqli_close($con);
                ?>
<!--                <img src="images/8.png" />-->
            </div>
            <div class="content_right">
                <div class="content_name clearbox">
                    <div class="content_name_img">
                        <?php
                        $sql="SELECT user_image from users where username='".$row["username"]."'";
                        $result= mysqli_query($con, $sql);
                        $userrow=mysqli_fetch_assoc($result);
                        echo  "<img src='".$userrow["user_image"]."' />";
                        ?>
<!--                        <img src="images/img2.jpg" />-->
                    </div>

                    <div class="content_name_title">
                        <p>
                            <?php
                            echo $row["username"];
                            ?>
                        </p>
                        <p><?php
                            echo $row["updatetime"];
                            ?></p>
                    </div>
                </div>
                <div class="content_comment">
                    <div class="clearbox">
                        <img src="images/list_icon4.jpg"/>
                        <span>q123456789</span>
                        <span>7月6日</span>
                    </div>
                    <div class="content_comment_content">
                        1111111
                    </div>
                </div>
                <div class="content_comment">
                    <div class="clearbox">
                        <img src="images/list_icon4.jpg"/>
                        <span>q123456789</span>
                        <span>7月6日</span>
                    </div>
                    <div class="content_comment_content">
                        1111111
                    </div>
                </div>
                <div class="content_page">
                    <a href="#"><</a>
                    <a href="#" style="color:#d44d4e">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">></a>
                </div>
                <textarea class="content_text" id="comment" placeholder="请登录后发表评论!"></textarea>
                <div>
                    <input type="button" value="评论" id="btnComment" />
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
        <!--登录-->
        <div id="login">
            <div class="login">
                <div class="close">
                    <!--href=#的作用是点击超链接时回到页面顶部-->
                    <a href="javascript:;" name="login_close">X</a>
                </div>
                <div class="logo">
                    <img src="images/logo1.png">
                </div>
                <div class="content">
                    <div></div>
                    使用第三方帐号登录
                    <div></div>
                </div>
                <img src="images/ananan.png">
                <div class="content">
                    <div></div>
                    使用帐号密码登录
                    <div></div>
                </div>
                <div class="loginform">
                    <form>
                        <input type="text" id="user" name="" placeholder="输入花瓣网账号">
                        <input type="text" id="pwd" name="" placeholder="输入密码">
                        <a href="javascript:;" id="btnLogin">登录</a>
                    </form>
                </div>
                <div class="text">
                    还没有帐号？<a href="#">点击注册</a>
                </div>
            </div>
        </div>
        <!--注册-->
        <div id="register">
            <div class="register">
                <div class="close">
                    <!--href=#的作用是点击超链接时回到页面顶部-->
                    <a href="javascript:;" name="login_close">X</a>
                </div>
                <div class="logo">
                    <img src="images/logo1.png">
                </div>
                <div class="content">
                    <div></div>
                    使用用户名注册
                    <div></div>
                </div>
                <div class="loginform">
                    <form action="" method="post">
                        <input type="text" id="username" name="username" placeholder="字母开头字母数字组合6-11位">
                        <input type="text" id="password" name="password" placeholder="字母数组下划线组合8-15位">
                        <input type="text" id="vcode" name="vcode" placeholder="验证码">
                        <img src="vcode.php" id="img1" style="border:1px solid red;margin-bottom: 40px;margin-top: 12px;">
                        <a href="javascript:;" id="btnRegister">注册</a>
    <!--<input type="submit" value="注册">-->
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>
<script type="text/javascript">
//页面加载时让 登录 隐藏
    document.getElementById("login").style.display = "none";
//页面加载时让 注册 隐藏
    document.getElementById("register").style.display = "none";

//为“登录”超链接添加单击事件
//获取登录按钮
    var logins = document.getElementsByName("login");
//遍历登录按钮，为每一个登录按钮添加单击事件
    for (var i = 0; i < logins.length; i++) {
        logins[i].onclick = function () {
            document.getElementById("login").style.display = "block";
        }
    }
//为“注册”按钮添加单击事件
    var registers = document.getElementsByName("register");
    for (var i = 0; i < registers.length; i++) {
        registers[i].onclick = function () {
            document.getElementById("register").style.display = "block";
        }
    }

//为“关闭”按钮添加单击事件
    var closes = document.getElementsByName("login_close");
    for (var i = 0; i < closes.length; i++) {
        closes[i].onclick = function () {
            /* document.getElementById("login").style.display = "none";
             document.getElementById("register").style.display = "none";*/
            this.parentNode.parentNode.parentNode.style.display = "none";
        }
    }
//刷新验证码
    document.getElementById("img1").onclick = function () {
        this.src = "vcode.php?n=" + Math.random();
    }

</script>

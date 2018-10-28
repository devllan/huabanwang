window.onload = function () {
    /*轮播图开始*/
    var imgary = ["banner1.jpg", "banner2.jpg", "banner3.jpg", "banner4.jpg"];
    var count = 0;
    //setInterval(f1, 3000);

    function f1() {
        var url = "url(images/" + imgary[count] + ")";
        document.getElementById("header").style.background = url;
        count++;
        if (count > 3) {
            count = 0;
        }
    }
    /*轮播图结束*/
}

$(function () {
    /*注册开始*/
    $("#btnRegister").on("click", function () {

        var username = $("#username").val();
        var password = $("#password").val();
        var vcode = $("#vcode").val();
        $.ajax({
            url: "register.php",
            type: "post",
            data: {"username": username, "password": password, "vcode": vcode},
            success: function (res) {
                if (res == "ok") {
                    swal("注册成功!");
//                    $("#register").hide(2000);
                    $("#register").css("display", "none");
                } else {
                    swal("注册失败!");
                }
            }
        });
    });
    /*注册结束*/


    /*登录开始*/
    $("#btnLogin").on("click",function(){
        var username=$("#user").val();
        var password=$("#pwd").val();
        $.ajax({
            url:"login.php",
            type:"post",
            data:{"username":username,"password":password},
            success:function(res){
                if (res=="登录成功") {
                    $("#login").css("display","none");
                     $(".public-right-login").css("display","none");
                }else{
                   swal(res); 
                  
                }
            }
        });
    })
    /*登录结束*/

})


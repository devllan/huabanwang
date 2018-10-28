<style>
    *{
        padding:0px;
        margin:0px auto;
    }
    #content{
        width:80%;
        margin:10px auto;
        background-color: #F2F2F2;
    }
    #content ul{
        list-style: none;
        width: 100%;

    }

    #content ul li{
        border-bottom: 1px solid #000;
        margin-top: 10px;
    }

    #message{
        margin-top: 50px;
        width: 500px;
        height: 300px;
    }
</style>

<script src="../js/jquery-3.2.1.js"></script>
<script>
    setInterval(loadmessage,3000);
    $(function () {
        $("#send").on("click", function () {
            var txt = $("#message").val();
            $.ajax({
                url: "savemessage.php",
                type: "post",
                data: {"message": txt},
                success: function (res) {
                    var data = $.parseJSON(res);
                    if (data.status == "success") {
                        alert("发表成功")
                    }
                }
            });
        })
    })
    function loadmessage() {
        $.ajax({
            url: "getmessage.php",
            type: "get",
            success: function (res) {
                var data = $.parseJSON(res);
                $("#ul1 li").remove();
                $(data).each(function (index, value) {                    
                    var li = "<li><span>IP：" + value.username + "</span><span>:" + value.createdatetime + "</span><div>" + value.msg + "</div></li>";
                    $("#ul1").append(li);
                })
            }
        });
    }
</script>
<div id="content">
    <ul id="ul1">
        
    </ul>

    <div>
        <textarea id="message"></textarea>
        <a href="javascript:;" id="send">评论</a>
    </div>
</div>
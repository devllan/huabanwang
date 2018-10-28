$(function () {

//返回按钮
    $("#btnReturn").on("click", function () {
        window.location.href = "list.php";
    })
    //收藏
    $("#btnSelect").on("click", function () {
        var id = $(this).attr("data");
        $.ajax({
            url: "select.php",
            type: "post",
            data: {"imageid": id},
            success: function (res) {
               swal(res);                
                if (res == "用户未登录") {
                    $("#login").css("display", "block");
                }
            }
        });
    })
    //评论
    $("#btnComment").on("click",function(){
        //获取用户的评论内容
       var comment=$("#comment").val();
       //获取图片id
       var imageid=$("#btnSelect").attr("data");
       $.ajax({
           url:"comment.php",
           type:"post",
           data:{"comment":comment,"imageid":imageid},
           success:function(res){
               var data=$.parseJSON(res);
                if (data.status=="success") {
                    swal("评论成功");
                }else if(data.status=="error"){
                    swal(data.msg);
                }
           }
       });
    })
})

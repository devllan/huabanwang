<meta charset="utf-8">
<table id="table1">
    <tr>
        <th>用户名</th>
        <th>密码</th>
    </tr>
</table>
<script src="../js/jquery-3.2.1.js"></script>
<script>
    $(function () {
        $.ajax({
            url: "getuser.php",
            type: "get",
            success: function (res) {
                console.log(res);
            }
        });
    })
</script>
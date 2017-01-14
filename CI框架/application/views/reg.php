<base href="<?php echo site_url()?>"
<meta charset="utf-8">
<link rel="stylesheet" href="assets/css/1.css">
<script src="assets/js/jquery.min.js"></script>
<form action="<?php echo site_url('user/do_reg') ?>" method="post">
    用户名：<input type="text" name="uname"><br/>
    密码：<input type="password" name="pass"><br/>
    重复密码：<input type="password" name="rpass"><br/>
    <input type="submit" name="sub" value="注册">
</form>


<script>
    $(function(){
        $('#p2').blur(function () {
            var pass=$('#p1').val();
            var rpass=$('#p2').val();
            if(pass!=rpass){
                var oSpan=$('<span id="s1">密码不一致</span>');
                $(this).after(oSpan);
            }
        });
        $('#p2').focus(function () {
            $('#s1').move();
        });
        $('')
    })
</script>
<base href="<?php echo site_url();?>">

<script src="assets/js/jquery.min.js"></script>
<div id="div1">
    <form action="<?php echo site_url('user/do_reg')?>" method="post">
        用户名:<input type="text" name="name" id="n1"><br />
        密码:<input type="password" name="pass" id="p1"><br />
        重复密码:<input type="password" name="rpass" id="p2"><br />
        <input type="submit" name="sub" value="注册">
    </form>
</div>

<script>
    $(function(){
        $('#p2').blur(function(){
            var pass=$('#p1').val();
            var rpass=$('#p2').val();
            if(pass != rpass){
                var oSpan=$('<span id="s1">密码不一致</span>');
                $(this).after(oSpan);
            }
        });
        $('#p2').focus(function(){
            $('#s1').remove();
        });

        $('#n1').blur(function(){
            var name=$(this).val();
            console.log(name);
            $.post('<?php echo site_url('user/checkname')?>','uname='+name,function(data){
                //console.log(data);

                if(data=='success'){
                    var oSpan=$('<span id="u1">用户名重名</span>');
                    $('#n1').after(oSpan);
                }
            })
        });

    })


</script>






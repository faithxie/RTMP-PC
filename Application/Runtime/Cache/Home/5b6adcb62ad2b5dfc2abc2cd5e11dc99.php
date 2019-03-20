<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title请登录</title>
    <link rel="stylesheet" href="/Public/static/css/reset.css">
    <link rel="stylesheet" href="/Public/static/css/common.css">
    <link rel="stylesheet" href="/Public/static/css/login.css">
</head>
<body>
    <!-- logo -->
    <div class="logbanner"></div>
    <!-- login -->
    <div class="loginbox">
        <div class="logform">
            <div class="col-tit fl">账号：</div>
            <div class="col-con fl"><input type="text" class="tform" id='username' /></div>
            <div class="col-tit fl">密码：</div>
            <div class="col-con fl"><input type="password" class="tform" id='password' /></div>
            <div class="col-con fl"><button class="logbtn" >登录</button></div>     
        </div>
    </div>
    <!-- copy -->
    <div class="cpy">
        版权所有  2018-2020&nbsp;&nbsp;技术支持：东博软件  www.doposoft.cn
    </div>

    <script src="/Public/static/script/jquery.1.11.1.js"></script>
    <script>
        $(document).ready(function(){
            $(".logbtn").click(function(){
                checkLogin();
            })
        })

        function checkLogin() {
            // 用户名
            var _username = $('#username').val();
            // 密码
            var _password = $('#password').val();
  
            if (_username == '' || _password == '') {
                alert('请填写用户名、密码！');
                return false;
            }
  
            $.ajax({
                type: 'post',
                url: "<?php echo U('Login/check_login');?>",
                data: {username: _username, password: _password},
                dataType: 'json',
                success: function(res) {
                    if (res.status == 0) {
                        window.location.href = "<?php echo U('Index/index');?>";
                    } else {
                        alert('用户名或密码不正确！');
                    }
                }
            });
        }
    </script>
</body>

</html>
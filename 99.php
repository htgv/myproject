<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>flower</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link href="css/entry.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="row">
         <div class="col-md-2" id="logo">
             <img src="img/logo.png">
         </div>
         <div class="col-md-2" id="words">
             <div class="h4">欢迎登录</div>
         </div>
        </div>
    </div>
    <div class="container">
            <div id="login">
                <div class="head">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left"><span>flower&nbsp;</span>会员登录</div>
                        </div>
                        <div class="col-md-6">
                            <div class="right"><a href="enroll.html">立即注册</a></div>
                        </div>
                    </div>
                </div>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">账 号</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="userName" onblur="fn1()" value="<?php echo $_COOKIE["userName"]; ?>" placeholder="用户名/手机号">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">密 码</label>
                        <div class="col-sm-7">
                                <input type="password" class="form-control" id="userPassword" onblur="fn2()" value="<?php echo $_COOKIE["userPassword"]; ?>" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label class="or">
                                <input type="checkbox" id="remember" name="remember">
                                记住密码
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="button" id="entry">登 录</button>
                        </div>
                    </div>
                </form>
                <div>
                    <div class="one"><a href="reset.html">找回密码</a></div>
                    <div class="two"><a href="#">验证码登录</a></div>
                </div>
                <div class="three">
                    <hr /><p>第三方合作账号登录</p><hr />
                </div>
                <br>
                <div class="picture">
                    <div class="qq">
                        <a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=101412062&redirect_uri=http://test.shield.asia&state=test"><img src="img/QQ.png" class="shadow" style="width: 60px; height: 60px"></a>
                    </div>
                    <div class="wechat">
                        <a href="https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=101412062&redirect_uri=http://test.shield.asia&state=test"><img src="img/微信.png" class="shadow" style="width: 60px; height: 60px"></a>
                    </div>
                </div>
            </div>

        <!--模态弹出框(短信登录)-->
        <div class="modal" id="mymodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true" style="float: right;">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" style="margin-left: 200px;"><span>flower&nbsp;</span>用户登录</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" id="form" name="form1">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">手 机 号</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="mobileNumber" placeholder="请输入手机号">
                                </div>
                                <div class="col-sm-4">
                                    <input type="button" class="btn btn-default" id="gainNumber" value="获取验证码">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">验 证 码</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="checkNumber" placeholder="请输入验证码">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="button" class="btn btn-primary" value="登录" id="finish">
                            </div>
                            <div class="col-sm-2">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="取消">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="js/jquery.js"></script>
        <script src="http://cdn.bootcss.com/bootstrap/2.3.1/js/bootstrap-transition.js"></script>
        <script src="http://cdn.bootcss.com/bootstrap/2.3.1/js/bootstrap-modal.js"></script>
        <script>
            $(function(){
                $(".two").click(function(){
                    $("#mymodal").modal("toggle");
                });
            });
        </script>
    </div>
    <div id="picture"><img src="img/login.jpg"></div>
    <script type="text/javascript" src="js/entry.js"></script>
    <script type="text/javascript" src="js/passValue.js"></script>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>登陆与注册－微信公众平台管理系统</title>
        <link href="/css/public.css" rel="stylesheet" type="text/css" />
        <link href="/css/manage.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    	<!--startof header-->
        <link href="/css/public.css" rel="stylesheet" type="text/css" />
        <link href="/css/index2.css" rel="stylesheet" type="text/css" />
        <!--<script src="/js/jquery-1.9.1.min.js" type="text/javascript"></script>-->
        <script src="/js/jquery1.js" type="text/javascript"></script>
        <script src="/js/daohang.js" type="text/javascript"></script>
        
        <script src="/js/jquery-1.7.2.min.js"></script>
        <script src="/js/ss.js"></script>
        <link href="/css/gongneng.css" rel="stylesheet" type="text/css" />
        <script src="/js/gongnneg.js" type="text/javascript"></script>
        <link href="/css/gongneng.css" rel="stylesheet" type="text/css" />
        <link href="/css/help.css" rel="stylesheet" type="text/css" />
        <link href="/css/zifei.css" rel="stylesheet" type="text/css" />
        <link href="/css/case.css" rel="stylesheet" type="text/css" />
        <link href="/css/about us.css" rel="stylesheet" type="text/css" />
        <!--startof header-->
<div class="header clr">
    <!-- 头部 -->
    <?php echo $this->render('/common/top');?>
    <!--banner-->
    <div class="banner clr" >
    	<p class="zhutu clr" style="background:#cbfef7;">
            <img src="/images/5.png" />
                            </p>
    </div>
    <!--end banner-->
        <!--ENDOF header-->
        
        <!--startof content-->
        <div class="content clr">
        	<div class="congtS clr">
            	<div class="shangLt clr">当前位置</div>
                <div class="shangRt clr">
                	<p class="oneth clr"> <a href="#">微信后台多用户微信营销系统</a></p>
                    <p>»</p>
                    <p class="twoth clr"><a href="#">管理中心</a></p>
                </div>
            </div>
            <!--end congtX-->
            <div class="congtX">
            	<div class="contLt clr">
                    <form action="/index.php?m=Users&a=checklogin" method="post" class="login">
                    	<p class="denglu clr">登录</p>
                    	<div class="name clr">
                        	<span style="padding-right:10px;">用户名</span> 
                            <input class="text" type="text" name="username" />
                        </div><br />
                        <div class="password clr">
                        	<span style="padding-right:10px;">密码</span> 
                            <input class="text" type="password" name="password" />
                        </div><br />
                        <div class="yanzheng clr">
                        	<span style="padding-right:10px;">验证码</span> 
                             <input name="verifycode2" type="text" size="8" style="width:80px;" class="text" maxlength="4" />&nbsp;<img src="/images/index.php" id="txtCheckCode2" style="width:70px;margin-top:-5px"/>&nbsp;<a href="javascript:refreshImg2();" style="color:#666">看不清？换一张</a>
                            <script>
                            function refreshImg2(){
                                document.getElementById("txtCheckCode2").src="/index.php?g=Home&m=Index&a=verifyLogin&s="+Math.random();
                            }
                            </script>
                        </div><br />
                        <button class="submit" type="submit">登录</button>
                    <input type="hidden" name="__hash__" value="3e9fde7441cc55bf46afe7f8361af205_3512dc11cf5cf2d9ec571b27131e43e7" /></form>
                </div>
                <!--end left-->
                
                <p style="border-right:1px solid #E3E3E3; width:1px; float:left; height:530px; padding-left:20px;"></p>
                
                <div class="contRt clr">
                	<form action="/index.php?m=Users&a=checkreg" method="post" class="login">
                    	<p class="denglu clr">注册</p>
                    	<div class="name clr">
                        	<span>用户名</span> 
                            <input class="text" required="" value="请输入用户名" onclick="if(this.value=='请输入用户名'){this.value=''}" onblur="if(this.value==''){this.value='请输入用户名'}" type="text" name="username">
                        </div><br />
                        <div class="password clr">
                        	<span>密码</span> 
                            <input class="text" type="password" name="password">
                        </div><br />
                        <div class="aginword clr">
                        	<span>重复密码</span> 
                            <input class="text" type="password" name="repassword">
                        </div><br />
                                                <div class="teliphone clr">
                        	<span>手机</span> 
                            <input class="text" type="text" id="sms_mp" name="mp" />
                        </div><br />
                                                <div class="youxiang clr">
                        	<span>邮箱</span> 
                            <input class="text" type="text" name="email" value="" onclick="if(this.value=='请输入电子邮箱'){this.value=''}" onblur="if(this.value==''){this.value=''}">
                        </div><br />
                        <div class="hangYe clr">
                        	<span style="margin-left: -226px;">所属行业</span> 
                            <select name="business">
                                <option value="mall">电子商务</option><option value="hotel">酒店</option><option value="car">汽车</option><option value="tour">旅游</option><option value="restaurant">餐饮</option><option value="estate">房地产</option><option value="health">医疗保健</option><option value="edu">教育培训</option><option value="beauty">健身美容</option><option value="wedding">婚纱摄影</option><option value="other">其他</option>                            </select>
                        </div><br />
                        <div class="duanxin clr">
                <div class="hangYe clr">
                        	<span style="margin-left: -86px;">验证码</span> 
                        <script>
                        function refreshImg(){
                            document.getElementById("txtCheckCode").src="/index.php?g=Home&m=Index&a=verify&s="+Math.random();
                        }
                        </script>
                        <input name="verifycode" type="text" size="4" style="width:80px;" class="text" maxlength="4" />&nbsp;<img src="/images/index.php" id="txtCheckCode" style="width:70px;"/>&nbsp;<a href="javascript:refreshImg();" style="color:#666;font-size: 16px;border:none">看不清？换一张</a></td>
                    </div>

                                        </div><br />
                        <input class="text" type="hidden" name="invitecode" value="">
                        <button class="submit" type="submit" class="buttom"style=" margin-left:84px;">注册</button>

                    <input type="hidden" name="__hash__" value="3e9fde7441cc55bf46afe7f8361af205_3512dc11cf5cf2d9ec571b27131e43e7" /></form>
                </div>
                <!--end right-->
                
            </div>
        </div>
        
        <!--endof content-->
        
        
        <!--footer-->
        <!--悬浮框-->
        <!--左侧功能菜单-->
        <?php echo $this->render('/common/right')?>  
        <!--leftsead end-->
        </div>
        <!--底部版权-->
        <?php echo $this->render('/common/footer');?>
        
        <script type="text/javascript">
        //功能更新
        $(".tuPian").mouseover(function(){
          $(this).children().children(".tubiao").hide();
          $(this).children().children(".tubiao1").show();
        });
        $(".tuPian").mouseout(function(){
          $(this).children().children(".tubiao").show();
          $(this).children().children(".tubiao1").hide();
        });
        //右侧导航 - 二维码
        $(".youhui").mouseover(function(){
            $(this).children(".2wm").show();
        })
        $(".youhui").mouseout(function(){
            $(this).children(".2wm").hide();
        });
        //右侧导航 - QQ
        var ndiv = $("#qq").children().length;;
        var npx = ((ndiv-2)*49)+"px";
        $("#qq").mouseover(function(){
            $("#tel").css("margin-top",npx);
        })
        $("#qq").mouseout(function(){
            $("#tel").css("margin-top","0px");
        })
        //右侧导航 - 电话
        var ndiv = $("#tels").children().length;
        var npx1 = ((ndiv-2)*49)+"px";
        $("#tels").mouseover(function(){
            $("#btn").css("margin-top",npx1);
        })
        $("#tels").mouseout(function(){
            $("#btn").css("margin-top","0px");
        })
    </script>
    	<div style="display:none"></div>
</div>
    </body>
</html>
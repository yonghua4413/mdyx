<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>管理中心－ 微信帮手 微信公众账号</title>
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
      <?php echo $this->render('/common/top')?>
            <!--banner-->
            <div class="banner clr" >
            	<p  style="background:#e9cbbf;" class="zhutu clr">
                	<img src="/images/6.png" />
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
            <div class="congtX clr">
            	<p class="title clr">如何为微信公众号配置接口？</p>
                <p class="atation clr">请务必认真阅读以下2步内容，才能更有效的完成配置工作，有疑问的请联系QQ：提问。
                <br/>
                <div style="display:none;">
                    你的接口URL是：<font color="red">http://www.houtai.me/index.php?g=Home&m=Weixin&a=index&token=</font>
                    <br>您的token是：<font color="red">
                    </font>
                    <br>EncodingAESKey：<font color="red"></font>
                    <br>消息加解密方式：<font color="red"></font>
                </div>
                </p>
                <p class="first clr">第一步、在微信后台多用户微信营销系统绑定你的微信公众号。</p>
                <ul>
                	<li class="suojin clr">1、注册并登录<a href="/index.php?m=Index&a=login">微信后台多用户微信营销系统接口平台</a></li>
                    <li class="suojin clr">2、添加公众号 → 功能管理 → 勾选要开启的功能</li>
                    <li><img src="/images/shiliphoto_17.png" /></li>
                    <li><img src="/images/shiliphoto_20.png" style="margin-bottom:40px;" /></li>
                </ul>
                <p class="first clr">第二步、到微信公众平台设置接口。</p>
                <ul>
                	<li class="suojin clr">1、登录 <a href="http://mp.weixin.qq.com/">微信公众平台</a>（<a href="http://mp.weixin.qq.com/">http://mp.weixin.qq.com/</a>），登录之后点击左侧菜单的“开发者中心”，下图红框中所示。</li>
                    <li><img src="/images/1.jpg" /></li>
                    <li class="suojin clr">2、进入开发者中心之后，点击下图中绿色的“启用”按钮（<span>如果按钮是红色的就忽略这个直接进入下一步</span>），然后在弹出的页面里点击确定，然后点击下图中的“修改配置”（<span>订阅号的开发者中心可能没有开发者ID、AppId和AppSecret，这属于正常的</span>）</li>
                    <li><img src="/images/2.jpg" /></li>
                    <li class="suojin clr">3、按照下面要求填写接口配置信息，填写后提交即可<br />
                <p style="font-size:14px">比如你微信后台平台上的地址是http://www.houtai.me/index.php/api/demo</p>
                    <p style="font-size:14px">那么URL就是http://www.houtai.me/INDEX.PHP/api/demo</p>
                                <p style="font-size:14px">Token填写 <font color="red"></font></p>
                <p style="font-size:14px">EncodingAESKey <font color="red"></font></p><p style="font-size:14px">消息加解密方式 <font color="red"></font></p>
					<li><img src="/images/5.jpg" /></li>
                </ul>
            </div>
        </div>        	
        <!--endof content-->
         <!--footer-->
        <?php echo $this->render('/common/right');?>
        <!--leftsead end-->
        </div>
        <!--startof footer-->
        <?php echo $this->render('/common/footer');?>
        <?php echo $this->render('/common/right_js');?>
    	<div style="display:none"></div>
</div>

    </body>
</html>
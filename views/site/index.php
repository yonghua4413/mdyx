<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>微信公众平台管理系统</title>
<meta name="keywords" content="微信后台"/>
<meta name="description" content="微信公众平台管理系统"/>
<script language="javascript" type="text/javascript">
function banner(){
    var bn_id = 0;
    var bn_id2= 1;
    var speed33=5000;
    var qhjg = 1;
    var MyMar33;
    $("#banner .d1").hide();
    $("#banner .d1").eq(0).fadeIn("slow");
    if($("#banner .d1").length>1)
    {
        $("#banner_id li").eq(0).addClass("nuw");
        function Marquee33(){
            bn_id2 = bn_id+1;
            if(bn_id2>$("#banner .d1").length-1)
            {
                bn_id2 = 0;
            }
            $("#banner .d1").eq(bn_id).css("z-index","2");
            $("#banner .d1").eq(bn_id2).css("z-index","1");
            $("#banner .d1").eq(bn_id2).show();
            $("#banner .d1").eq(bn_id).fadeOut("slow");
            $("#banner_id li").removeClass("nuw");
            $("#banner_id li").eq(bn_id2).addClass("nuw");
            bn_id=bn_id2;
        };

        MyMar33=setInterval(Marquee33,speed33);

        $("#banner_id li").live('click',function(){
            var bn_id3 = $("#banner_id li").index(this);
            if(bn_id3!=bn_id&&qhjg==1)
            {
                qhjg = 0;
                $("#banner .d1").eq(bn_id).css("z-index","2");
                $("#banner .d1").eq(bn_id3).css("z-index","1");
                $("#banner .d1").eq(bn_id3).show();
                $("#banner .d1").eq(bn_id).fadeOut("slow",function(){qhjg = 1;});
                $("#banner_id li").removeClass("nuw");
                $("#banner_id li").eq(bn_id3).addClass("nuw");
                bn_id=bn_id3;
            }
        })
        $("#banner_id").hover(
            function(){
                clearInterval(MyMar33);
            }
            ,
            function(){
                MyMar33=setInterval(Marquee33,speed33);
            }
        )
    }
    else
    {
        $("#banner_id").hide();
    }
}

function showNotice() {
            document.getElementById("bg").style.display ="block";
            document.getElementById("show").style.display ="block";
            document.getElementsByTagName('body')[0].style.overflow='hidden';
            document.getElementsByTagName('body')[0].scroll="no";
            $(".cc_show").css({"display":"block"});
            $('.zRight').css({'display':'none'});
        }
function hideNotice() {
            document.getElementById("bg").style.display ='none';
            document.getElementById("show").style.display ='none';
            $(".cc_show").css({"display":"none"});
            document.getElementsByTagName('body')[0].style.overflow='auto';
            document.getElementsByTagName('body')[0].scroll="yes";
            $('.zRight').css({'display':'block'});
            var agent_zid='';
            if(agent_zid=='1'){
                showHand();
            }
        }
</script>
<style type="text/css">
        #bg{ display: none;  position: absolute;  top: 0%;  left: 0%;  width: 100%;  height: 100%;  background-color: black;  z-index:1001;  -moz-opacity: 0.7;  opacity:.70;  filter: alpha(opacity=70);}
        #show{display: none; z-index:1002;  position: relative;top:0px;margin-right: -100px;}
</style>
    </head>

    <body>
    <!--startof header-->
    <link href="css/public.css" rel="stylesheet" type="text/css" />
    <link href="css/index2.css" rel="stylesheet" type="text/css" />
    <!--<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>-->
    <script src="js/jquery1.js" type="text/javascript"></script>
    <script src="js/daohang.js" type="text/javascript"></script>
    
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/ss.js"></script>
    <link href="css/gongneng.css" rel="stylesheet" type="text/css" />
    <script src="js/gongnneg.js" type="text/javascript"></script>
    <link href="css/gongneng.css" rel="stylesheet" type="text/css" />
    <link href="css/help.css" rel="stylesheet" type="text/css" />
    <link href="css/zifei.css" rel="stylesheet" type="text/css" />
    <link href="css/case.css" rel="stylesheet" type="text/css" />
    <link href="css/about us.css" rel="stylesheet" type="text/css" />
    <!--startof header-->
<div class="header clr">
    
    <!-- 头部 -->
    <?php echo $this->render('/common/top');?>

    <div id="bg"></div>
    <div class="cc_show" style="width: 1000px;height: 600px;margin: 0 auto;display: none;">
        <div id="show">
            <img src="images/noticereg.png" usemap="#noticeReg" style="float:right" />
    
            <map name="noticeReg">
                <area shape="rectangle" coords="102,0,245,30" href="/index.php?m=Index&a=login" title="登陆/注册">
                <area shape="rectangle" coords="87,502,272,574" value="Close" onclick="hideNotice();" href="#" title="关闭提示">
            </map>
        </div>
    </div>

            <!--banner-->
            <div class="banner" id="banner" >
            	<div id="agin">
                <a href="javascript:void(0)" class="d1" style="background:url(images/bann.jpg) center no-repeat;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;"></a>
                    <a href="javascript:void(0)" class="d1" style="background:url(images/ban.jpg) center no-repeat;background-size:cover;-webkit-background-size:cover;-moz-background-size:cover;"></a>
                                </div>
                <div class="d2" id="banner_id">
                    <ul id="ll">
                    </ul>
                </div>
            </div>
            <script type="text/javascript">banner()</script>
            <!--end banner-->

        <!--startof content-->
        <div class="contents clr">
        	<div class="chengZhang clr" style="margin-top:120px;">
            	<div class="daZi">
                	<p class="Dazi clr">功能更新进程</p>
                    <p class="Xiaozi clr">无与伦比的更新进度 让您的微信营销领先一步</p>
                </div>
                <!-- 更新进程-内容 -->
                <div class="fivePhoto">
            		<ul>
                    <div class="rendv">
                    <li class="tuPian" id="ren">
                            <a href="javascript:void(0)">
                                <P class="tubiao" id="wz" style="background:url(images/datu_03.png) no-repeat center; height:120px;"></P>
                                <P class="tubiao1" id="xz" style="background:url(images/tupian_03.png) no-repeat center; height:120px;display:none"></P>
                                <p class="xiaoZhu clr">微信后台新分享</p>
                                <p class="weizhi clr"></p>
                                <p class="hengXian clr"></p>
                                <p class="sixth clr">2013年8月12日</p>
                            </a>
                        </li>
                        <li class="tuPian" id="ren">
                            <a href="javascript:void(0)">
                                <P class="tubiao" id="wz" style="background:url(images/datu_05.png) no-repeat center; height:120px;"></P>
                                <P class="tubiao1" id="xz" style="background:url(images/tupian_05.png) no-repeat center; height:120px;display:none"></P>
                                <p class="xiaoZhu clr">微信后台微助力</p>
                                <p class="weizhi clr"></p>
                                <p class="hengXian clr"></p>
                                <p class="sixth clr">2013年11月11日</p>
                            </a>
                        </li>
                        <li class="tuPian" id="ren">
                            <a href="javascript:void(0)">
                                <P class="tubiao" id="wz" style="background:url(images/datu_07.png) no-repeat center; height:120px;"></P>
                                <P class="tubiao1" id="xz" style="background:url(images/tupian_07.png) no-repeat center; height:120px;display:none"></P>
                                <p class="xiaoZhu clr">微信后台人气冲榜</p>
                                <p class="weizhi clr"></p>
                                <p class="hengXian clr"></p>
                                <p class="sixth clr">2014年3月24日</p>
                            </a>
                        </li>
                        <li class="tuPian" id="ren">
                            <a href="javascript:void(0)">
                                <P class="tubiao" id="wz" style="background:url(images/datu_09.png) no-repeat center; height:120px;"></P>
                                <P class="tubiao1" id="xz" style="background:url(images/tupian_09.png) no-repeat center; height:120px;display:none"></P>
                                <p class="xiaoZhu clr">微信后台九宫格</p>
                                <p class="weizhi clr"></p>
                                <p class="hengXian clr"></p>
                                <p class="sixth clr">2014年6月9日</p>
                            </a>
                        </li>
                        <li class="tuPian" id="ren">
                            <a href="javascript:void(0)">
                                <P class="tubiao" id="wz" style="background:url(images/datu_11.png) no-repeat center; height:120px;"></P>
                                <P class="tubiao1" id="xz" style="background:url(images/tupian_11.png) no-repeat center; height:120px;display:none"></P>
                                <p class="xiaoZhu clr">微信后台授权登录</p>
                                <p class="weizhi clr"></p>
                                <p class="hengXian clr"></p>
                                <p class="sixth clr">2014年9月19日</p>
                            </a>
                        </li>
                                        </div>
                    </ul>
                </div>
            </div>
            <!---->

            </div>

            <!---->
            <div class="baokuo clr">
                <div class="fuWu clr">
                    <div class="daZi">
                        <p class="Dazi clr">功能模块</p>
                        <p class="Xiaozi clr">微信后台系统内置100多项应用，涵盖近30个行业的垂直领域应用</p>
                    </div>
                    <div class="diaoYan clr">
                        <div class="diaoYtupian1 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                    <p class="beiJingtu clr"></p>
                                    <p class="words clr">微调研</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian2 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                    <p class="beiJingtu clr"></p>
                                    <p class="words clr">微信墙</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian3 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">摇一摇</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian4 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微社区</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian5 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微群发</p>
                                </div>
                            </a>
                        </div>
                        <!---->
                        <div class="diaoYtupian6 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微美容</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian7 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微健身</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian8 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微政务</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian9 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微食品</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian10 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微装修</p>
                                </div>
                            </a>
                        </div>
                        <!---->
                        <div class="diaoYtupian11 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">会员卡支付</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian12 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微城市</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian13 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微团购</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian14 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">微订餐</p>
                                </div>
                            </a>
                        </div>
                        <div class="diaoYtupian15 clr">
                            <a href="javascript:void(0)">
                            	<div class="kuangxian clr">
                                <p class="beiJingtu clr"></p>
                                <p class="words clr">超级商城</p>
                                </div>
                            </a>
                        </div>
                        <!---->
                    </div>
                    <p class="anniu clr"><a href="/index.php?g=Home&m=Index&a=fc">更多功能...</a></p>
                </div>
            </div>
            <!---->
            <div class="anLie clr">
            	<div class="daZi">
                	<p class="Dazi clr">案例展示</p>
                    <p class="Xiaozi clr">深入了解我们客户的案例以及我们能做什么</p>
                </div>
                <div style="width:1050px; margin:0 auto">
                    <div class="mr_frbox">
                          <img class="mr_frBtnL prev" src="images/mfrl.png" width="28" height="46" />
                          <div class="mr_frUl">
                          		<!---->
                              <div class="section">
                                    <ul class="clearfix">
                                        <li>
                                                <div class="photo"><img  src="images/1_03.png"></div>
                                                <div class="rsp"></div>
                                                <div class="text">
                                                    <p class="weiXin clr"><img src="images/thumb_5684f639032ad.png" /></p>
                                                    <p class="chakanX clr"><a href="javascript:void(0)">查看详情</a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo"><img  src="images/2_03.png"></div>
                                                <div class="rsp"></div>
                                                <div class="text">
                                                    <p class="weiXin clr"><img src="images/thumb_5684f639032ad.png" /></p>
                                                    <p class="chakanX clr"><a href="javascript:void(0)">查看详情</a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo"><img  src="images/3_03.png"></div>
                                                <div class="rsp"></div>
                                                <div class="text">
                                                    <p class="weiXin clr"><img src="images/thumb_5684f639032ad.png" /></p>
                                                    <p class="chakanX clr"><a href="javascript:void(0)">查看详情</a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="photo"><img  src="images/4_03.png"></div>
                                                <div class="rsp"></div>
                                                <div class="text">
                                                    <p class="weiXin clr"><img src="images/thumb_5684f639032ad.png" /></p>
                                                    <p class="chakanX clr"><a href="javascript:void(0)">查看详情</a></p>
                                                </div>
                                            </li>

                                                                            </ul>
                                    <div class="clear"></div>
                                </div>
								<!---->
                                <script type="text/javascript">
									$(document).ready(function(){
										$(".section ul li .rsp").hide();
										$(".section	 ul li").hover(function(){
											$(this).find(".rsp").stop().fadeTo(500,0.7)
											$(this).find(".text").stop().animate({left:'0'}, {duration: 500})
										},
										function(){
											$(this).find(".rsp").stop().fadeTo(500,0)
											$(this).find(".text").stop().animate({left:'300'}, {duration: "fast"})
											$(this).find(".text").animate({left:'-300'}, {duration: 0})
										});
									});
								</script>
                          </div>
                          <img class="mr_frBtnR next" src="images/mfrr.png" width="28" height="46" />
                    </div>
                    <script language="javascript">
                    $(".mr_frUl ul li img").hover(function(){$(this).css("border-color","#A0C0EB");},function(){$(this).css("border-color","#d8d8d8")});
                    jQuery(".mr_frbox").slide({titCell:"",mainCell:".mr_frUl ul",autoPage:true,effect:"leftLoop",autoPlay:true,vis:4});
                    </script>
                    </div>
                </div>
            </div>
            <!---->
            <div style="width:1060px;margin:20px auto;margin-bottom:-20px;display:none">友情链接：
                                </div>
            <!---->
            <div class="aboutUs clr" style="margin-bottom:10px">
                <div class="zhongXin clr">
                    <div class="zuoBian clr">
                            <h4>产品动态</h4>
                            <ul>
                                <li><a href="#">双应用助兴圣诞元旦双节 节日气氛嗨起</a></li>
                                <li><a href="#">一周新功能回顾之12月22日篇</a></li>
                                <li><a href="#">微助力活动上线了</a></li>
                                <li><a href="#">人气冲榜活动上线了</a></li>
                                <li><a href="#">人气冲榜活动上线了</a></li>
                            </ul>
                        </div>
                        <div class="zuoBian clr">
                            <h4>微信百科</h4>
                            <ul>
                                <li><a href="#">如何做好粉丝互动营销?</a></li>
                                <li><a href="#">朋友圈营销如何用内容去打动用户</a></li>
                                <li><a href="#">营销者看过来：微信营销全新解读</a></li>
                                <li><a href="#">微信公众号搜素排名优化方法分享</a></li>
                                <li><a href="#">细分行业行业微信运营方法谈之餐饮</a></li>
                            </ul>
                        </div>
                        <div class="zuoBian clr">
                            <h4>行业动态</h4>
                            <ul>
                                <li><a href="#">FB股价创新高：受益移动业务及Instagra</a></li>
                                <li><a href="#">我们听懂张小龙的微信八条了吗</a></li>
                                <li><a href="#">微信开启“声音登录”功能</a></li>
                                <li><a href="#">央行松绑二维码支付还得跨过三重门</a></li>
                                <li><a href="#">微信支付开大门 公众号App都可发现金红包</a></li>
                            </ul>
                        </div>
                                    </div>
            </div>
        <!-- footer -->





        <!--分布引导结束-->
        <!--悬浮框-->
        <!--左侧功能菜单-->
        <?php echo $this->render('/common/right')?>  
        <!--leftsead end-->
        </div>
        <!--底部版权-->
        <?php echo $this->render('/common/footer');?>
        
        <?php echo $this->render('/common/right_js');?>
        
    	<div style="display:none"></div>
</div>


<script type="text/javascript">
     window.onload=function(){
		var a = document.getElementById("agin").getElementsByTagName("a");
		var len = a.length;
		for(var i=0;i<len;i++){
			$("#ll").append("<li></li>");
		}
	}
    showNotice();
</script>
    </body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 微信公众平台管理系统 微信后台</title>
<meta name="keywords" content="微信后台" />
<meta name="description" content="微信公众平台管理系统" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<script>var SITEURL='';</script>
<link rel="stylesheet" type="text/css" href="/css/style_2_common.css" />
<script src="/js/common.js" type="text/javascript"></script>
</head>
<body id="nv_member" class="pg_CURMODULE">
<!-- 头部 -->
<?php echo $this->render('/common/home_top');?>
<div id="aaa"></div>
<div id="mu" class="cl"></div>
</div>
</div>
<div id="aaa"></div>

<div id="wp" class="wp">
        <link href="/css/style-1.css" rel="stylesheet" type="text/css" /> <div class="contentmanage">
    <div class="developer">
       <div class="appTitle normalTitle">
        <h2>管理平台</h2>
        <div class="accountInfo">
        
        </div>
        <div class="clr"></div>
      </div>
      <div class="tableContent">
        <!--左侧功能菜单-->
        <?php echo $this->render('/common/left_menus')?>

<script src="/js/jquery-1.4.2.min.js"></script>
<script src="/js/jquery.artdialog.js"></script>
<script src="/js/iframetools.js"></script>
<link rel="stylesheet" type="text/css" href="/css/default_user_com.css" media="all">
<script language="JavaScript">
if (window.top != self){
  window.top.location = self.location;
}
</script>
<script>
function addFee(){
  art.dialog.open('?g=User&m=Alipay&a=add',{lock:true,title:'充值续费',width:600,height:400,yesText:'关闭',background: '#000',opacity: 0.45});
}
function showApiInfo(id,name){
  art.dialog.open('?g=User&m=Index&a=apiInfo&id='+id,{lock:true,title:name+'接口信息',width:830,height:270,yesText:'关闭',background: '#000',opacity: 0.45});
}
</script>
<div class="content">
<div class="usercontent">

<ul>

  <li class="addli">
    <a class="addwx" style="background-color:#7CBAE5" title="添加公众号" href="#" onclick="addWeixin()">绑定公众号</a>

  </li>

  <li>
    <a onclick="addFuwu()" title="绑定服务窗" class="goldbuy" href="#" style="background-color:#79CBE5">绑定服务窗</a>
  </li>

  <li class="addli">
    <a class="addbiz" title="添加企业号" onclick="addbiz()" href="#" style="background-color:#66D2C6">添加企业号</a>
  </li>

  <li>
    <a href="index.php?g=User&m=Alipay&a=index" class="gold" title="查看资金" style="background-color:#60D295" >
      <p><strong>账户余额：</strong>0</p>
      <p>点击充值</p>
    </a>
  </li>

  <li>
  <a href="###">
    <div class="qqqun" style="background-color:#4CC15D">
      <div class="qt">官方QQ号</div>
      <div class="qt2"></div>
    </div>
  </a>
  </li>


<script type="text/javascript">
  function addbiz(){
          location.href="/index.php?g=User&m=Index&a=add&biz=1";  }

  function addFuwu(){
     alert('您不可以使用服务窗功能，请联系您的网站管理员处理');
       }

  function addWeixin(){
             location.href="/index.php?g=User&m=Index&a=add";
            }
</script>

<div class="clr"></div>
</ul>
        <div class="clr"></div>
      </div>
<div class="msgWrap">
            <TABLE class="ListProduct" border="0" cellSpacing="0" cellPadding="0" width="100%">
              <THEAD>
                <TR>
                  <TH>公众号名称</TH>
                  <TH style="text-align:center">VIP等级</TH>
                  <TH>创建时间/到期时间</TH>
                   <TH>已定义/上限</TH>
                   <TH>请求数</TH>
                  <TH>操作</TH>
                </TR>
              </THEAD>
              <TBODY>
                <TR></TR>
                 
              </TBODY>
            </TABLE>

          </div>          <br>
                    <div class="cLine">
            <div class="pageNavigator right">
              <div class="pages" ></div>
            </div>
            <div class="clr"></div>
          </div>
        </div>

        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
    </div>
    <!--ad start-->
    



<script type="text/javascript">
  function bomb_window(id,token){
    var id=id;
    var token=token;
    var dmheight=$(document).height();
      $('.rightBtn').attr({
        id:id,
        token:token
      })
      $.ajax({
        type:"post",
        url:"/index.php?g=User&m=Index&a=bomb_ajax&id="+id+"&token="+token,
        datatype:"json",
        data:{
          id:id,
          token:token
        },
        success:function(sta){
          if(sta.length<'4'){//判断是否超时
            var obj = JSON.parse(sta);
            if(1==1 || 1==2){//判断选择的模板
              if(obj=='1'){
                location="/index.php?g=User&m=Function&a=welcome&id="+id+"&token="+token;
              }else{
                $('.window').css('display','block');
                $('.fullBg').css({
                  'display':'block',
                  'height':dmheight
                });
                $('body,html').css('overflow', 'hidden');

              }
            }else{
              if(obj=='1'){
                location="/index.php?g=User&m=Function&a=index&id="+id+"&token="+token;
              }else{
                $('.window').css('display','block');
                $('.fullBg').css({
                  'display':'block',
                  'height':dmheight
                });
                $('body,html').css('overflow', 'hidden');
              }
            }
          }else{
            location="/index.php?g=Home&m=Index&a=login";
          }


        }
      })
  }
</script>


<script type="text/javascript">
  $('.rightBtn').click(function(){
    var id=$('.rightBtn').attr('id');
    var token=$('.rightBtn').attr('token');
    $.ajax({
      type:"post",
      url:"/index.php?g=User&m=Index&a=bomb_ajax&id="+id+"&token="+token,
      datatype:"json",
      data:{
        id:id,
        token:token,
        set_id:1
      },
      success:function(shh){
        if(shh){
              $(".window").fadeOut();
          $(".fullBg").css({
            'display':'none',
            'height':'0'
          });
          $('body,html').css('overflow', 'auto');
          location="/index.php?g=User&m=Function&a=index&id="+id+"&token="+token;
        }
      }
      })
  })
</script>
<script type="text/javascript">
  $('.leftBtn').click(function(){
    art.dialog.open('http://www.meihua.com/waphelp/pigcms.php',{lock:true,title:'设置帮助',width:800,height:600,yesText:'Y',background: '#000',opacity: 0.45});

  })
</script>
<script type="text/javascript">
  centerWindow(".window");
</script>


    <!--ad end-->
</div>
</div>
</div>
</div>
</div>
</div>
       <?php echo $this->render('/common/home_footer')?>
     
	<!-- 帮助悬浮开始 -->
    <?php echo $this->render('/common/home_right')?>
    
	<script type="text/javascript">
		window.onload = function(){
			var oDiv1 = document.getElementById('Layer1');
			var oDiv2 = document.getElementById('Layer2');
			var flag = true;
			oDiv1.onclick = function(){
				oDiv2.style.display = oDiv2.style.display == 'block' ? 'none' : 'block';
				if(flag) {
					$.ajax({
						type : 'GET',
						url : '/index.php?g=User&m=Index&a=ajax_help&group=User&module=Index&action=index',
						dataType : 'html',
						success : function (data) {
							if (data) {
								$('.help_content').html(data);
							}
							flag = false;
							$('.loading').hide();
						}
					});
				}
			}
		}
		function openwin(url,iHeight,iWidth){
			var iTop = (window.screen.availHeight-30-iHeight)/2,iLeft = (window.screen.availWidth-10-iWidth)/2;
			window.open(url, "newwindow", "height="+iHeight+", width="+iWidth+", toolbar=no, menubar=no,top="+iTop+",left="+iLeft+",scrollbars=yes, resizable=no, location=no, status=no");
		}
	</script>
	<!-- 帮助悬浮结束 -->
<div style="display:none">
 
</div></body>


</html>
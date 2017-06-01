
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

    <script src="/js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="/js/jquery.artdialog.js"></script>
    <script src="/js/iframetools.js"></script>
    <script src="/js/upyun.js"></script>
    <script src="/js/jquery-2.1.1.js"></script>
<script>
$(function(){
	$("select").change(function(){
		var appid = $("input[name='appid']").val();
		var secret = $("input[name='appsecret']").val();
		var winxintype = $(this).val();
		/*if(winxintype == 4){
			$.ajax({
				type:"POST",
				url:"/index.php?g=User&m=Index&a=dyajax",
				dataType:"json",
				data:{
					appid:appid,
					secret:secret
				},
				success:function(data){
					if(data.error == 2){
						alert('您填的appid和appsecret未认证！');
						$("input[name='appid']").val('');
						$("input[name='appsecret']").val('');
						$("select").val(1);
					}else if(data.error == 1){
						alert('您填的appid和appsecret不正确！');
						$("input[name='appid']").val('');
						$("input[name='appsecret']").val('');
						$("select").val(1);
					}
				}
			});
		}else */
		if(winxintype == 3){
			$.ajax({
				type:"POST",
				url:"/index.php?g=User&m=Index&a=fwajax",
				dataType:"json",
				data:{
					appid:appid,
					appsecret:secret
				},
				success:function(data){
					if(data.error == 2){
						alert('您填的appid和appsecret不是认证后的服务号！');
						$("input[name='appid']").val('');
						$("input[name='appsecret']").val('');
						$("select").val(1);
					}else if(data.error == 1){
						alert('您填的appid和appsecret不正确！');
						$("input[name='appid']").val('');
						$("input[name='appsecret']").val('');
						$("select").val(1);
					}
				}
			});
		}
		/**/
	});
})
</script>
<div class="content">
          <div class="cLineB">
      <h4>
              添加微信公众号      </h4>
      </div>
          <form method="post" action="/index.php?g=User&m=Index&a=insert" enctype="multipart/form-data">
          <div class="msgWrap">
            <table class="userinfoArea" border="0" cellspacing="0" cellpadding="0" width="100%">
              <thead>
                  <tr>
            <th><span class="red">*</span>公众号名称：</th>
            <td><input type="text" required="" class="px" name="wxname" value="" tabindex="1" size="25">
            </td>
          </tr>              </thead>
              <tbody>
                                <tr>
                  <th><span class="red">*</span>公众号原始id：</th>
                  <td><input type="text" required="" name="wxid" value="" onmouseup="this.value=this.value.replace('_430','')" class="px" tabindex="1" size="25">　<span class="red">请认真填写，错了不能修改。</span>比如：gh_423dwjkeww3 <a href="/tpl/static/getoid.htm" target="_blank"><img src="/images/help.png" class="vm helpimg" title="帮助"></a></td>
                </tr>
                <tr>
                  <th><span class="red">*</span>微信号：</th>
                  <td><input type="text" required="" name="weixin" value="" class="px" tabindex="1" size="25">　比如：lentu123 </td>
                </tr>
                <tr>
                  <th><span class="red">*</span>AppID（公众号）：</th>
                  <td><input type="text" name="appid" value="" class="px" tabindex="1" size="25">　用于自定义菜单等高级功能，必填 </td>
                </tr>
                <tr>
                  <th><span class="red">*</span>AppSecret：</th>
                  <td><input type="text" name="appsecret" value="" class="px" tabindex="1" size="25">　用于自定义菜单等高级功能，必填 </td>
                </tr>
                <tr>
					<th><span class="red">*</span>二维码：</th>
					<td>
						<input type="text" id="qr" required="" class="px" name="qr" value="" tabindex="1" size="25">
						<a href="###" onclick="upyunPicUpload('qr',500,500,'admin')" class="a_upload">上传</a>
						<a href="###" onclick="viewImg('qr')">预览</a>
					</td>
				</tr>
                <tr>
                  <th><span class="red"></span>微信号类型：</th>
                  <td><select id="winxintype" name="winxintype">                  
                  <option value="1">订阅号</option>
                  <option value="2">服务号</option>
                  <option value="3">认证服务号</option>
                  <option value="4">认证订阅号</option>
                  </select>　认证服务号是指每年向微信官方交300元认证费的公众号 </td>
                </tr>
                <tr>
                    <td colspan="2"><br /></td>
                </tr>                <tr style="display:none">
                  <th><span class="red">*</span>头像地址（url）:</th>
                  <td><input class="px" name="headerpic" value="./tpl/User/default/common/images/portrait.jpg" size="60">请填写图片外链地址 <a onclick="alert('请填写以jpg,png,gif,bmp等后缀的图文')" target="_blank"><img src="/images/help.png" class="vm helpimg" title="帮助"></a></td>
                </tr>
                 <tr style="display:none">
                  <th><span class="red">*</span>TOKEN</th>
                  <td><input type="text" name="token" value="xshenc1496299642" class="px" tabindex="1" size="40">(填写你的公众号)例：pigcmsweixin,请勿填写文,或者其它特殊字符，此处token和腾讯平台必须一致!</td>
                </tr>
                
                <tr style="display:none">
                  <th><span class="red">*</span>地区</th>
                  <td>
                  <input type="text" class="px" id="province" value="p" name="province" tabindex="1" size="20"> 省  <input id="city" value="c" type="text" name="city" class="px" tabindex="1" value="c" size="20"> 市
               （此处关联公交等本地化查询）
                  </td>
                </tr>
                <tr style="display:none">
                  <th><span class="red">*</span>公众号邮箱：</th>
                  <td><input type="text" required="" class="px" tabindex="1" value="1496299642@yourdomain.com" name="qq" size="25"></td>
                </tr>
                 <tr style="display:none">
                  <th><span class="red">*</span>粉丝数：</th>
                  <td><input type="text" required="" name="wxfans" value="0" class="px" tabindex="1" size="25"></td>
                </tr>
             
                <tr style="display:none">
                  <th>类型：</th>
                  <td><select id="type" name="type_name">                  
                  <option value="1,情感">情感</option>
                  <option value="2,数码">数码</option>
                  <option value="3,娱乐">娱乐</option>
                  <option value="4,IT">IT</option>
                  <option value="5,数码">数码</option>
                  <option value="6,购物">购物</option>
                  <option value="7,生活">生活</option>
                  <option value="8,服务" selected>服务</option>
                  </select></td>
                </tr>
				
                <tr>
                  <th></th>
                  <td><button type="submit" class="btnGreen" id="saveSetting">保存</button></td>
                </tr>
              </tbody>
            </table>
            
          </div>
          <input type="hidden" name="__hash__" value="4ede881ac33670a47255d76188424a48_2348d882f75114f93d8e65eaaf61169e" /></form>
        </div>
        
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <!--底部-->
    </div>
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
						url : '/index.php?g=User&m=Index&a=ajax_help&group=User&module=Index&action=add',
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
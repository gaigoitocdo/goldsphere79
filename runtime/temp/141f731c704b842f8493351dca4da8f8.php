<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"/www/wwwroot/51.79.209.207/application/index/view/user/zfb.html";i:1694961976;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0046)https://mmm.51xcb.com/wx/my/pay/alipayTransfer -->
<html style="font-size: 200px;">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>支付宝支付</title>
		<meta http-equiv="X-UA-Compatible" content="edge,chrome=1">
		<meta http-equiv="Cache-Control" content="no-siteapp">
		<!-- 避免转码 -->
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no, user-scalable=no,minimum-scale=1.0, maximum-scale=1.0">
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no,maximum-scale=1">
		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">
		<meta name="format-detection" content="telephone=no">
		<meta name="format-detection" content="address=no">
		<meta name="format-detection" content="email=no">
		<meta name="apple-mobile-web-app-title" content="">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="wap-font-scale" content="no">
		<link href="/favicon.ico" rel="icon" type="text/plain">
		<link type="text/css" href="/static/zfb/zfb/base.css" rel="stylesheet">
		<link type="text/css" href="/static/zfb/zfb/common.css" rel="stylesheet">
		<link type="text/css" href="/static/zfb/zfb/index.css" rel="stylesheet">
		<link type="text/css" href="/static/zfb/zfb/account.css" rel="stylesheet">
		<link type="text/css" href="/static/zfb/zfb/loading.css" rel="stylesheet">
		<link type="text/css" href="/static/zfb/zfb/layer.css" rel="stylesheet">
		<link type="text/css" href="/static/zfb/zfb/zfb.css" rel="stylesheet">
		<script src="/static/zfb/zfb/hm.js"></script>
		<script>
			var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?1bd5f688fc264b4a13d08f62564b99be";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
<style>body {font-family:Arial;width:100%;max-width: 1600px;margin: 0 auto;position:relative}.box #nav[data-v-12171d70]{width:100%!important;max-width: 1600px!important}.box[data-v-28ad7794]{max-width: 1600px!important;transform: translateX(-50%);left:50%!important}*{max-width:100%}*::-webkit-scrollbar{display:none}</style>
	</head>

	<body style="">
		<noscript>您禁用了浏览器脚本，无法正常预览网页，请允许使用。或者尝试非IE浏览器</noscript>
		<div id="wrap">
			<!-- 顶部-->
			<header class="nav_box translateZ">
				<div class="index_nav nav flexbox justify">
					<a class="nav_back_arrow" href="JavaScript:history.go(-1)"></a>
					<div class="nav_title horizontal_center">支付宝银行卡转账</div>
					<a class="nav_right_txt"></a>
				</div>
			</header>
			<!-- 主要内容-->
			<section class="account_content mar-t-10">
				<p class="zhifupay">第一步：请识别下图二维码进行转账。先保存二维码到相册，然后打开支付宝，点击扫一扫，最后点击相册 选中之前保存的二维码</p>
				<div class="panel retainbb retainbt">
					<div>
						<img src="/static/zfb/erweima/1549882838.jpg" class="zfb" style="height: 300px;">
					</div>
				</div>
				<p class="zhifupay">第二步：请添加客服微信, 发送转账截图给客服(请务必执行此操作，否则无法到账)</p>
				<div class="panel retainbb retainbt">
					<div>
						<img src="/static/zfb/erweima/keFu.jpg" class="zfb" style="height: 300px;">
					</div>
				</div>
				<p class="zhifupay">第三步：发支付凭证给客服微信。</p>
				<div class="btn_box">
					<a href="/index/user/" class="account-btn-red">返回中心</a>
				</div>

				<div class="alipay-ps">
					<div>到账时间</div>
					<p>10:00-22:00　(30分钟内到账)</p>
					<p>22:00以后 (次日10:00前到账)</p>
				</div>
			</section>


		</div>

		<!-- S自定义alert 弹出框-->
		<div id="myAlert" class="myAlert">
			<div id="j_weui_mask" class="weui_mask">
				<div class="weui_dialog blurbk" id="j_weui_dialog">
					<div class="weui_dialog_hd j_weui_dialog_hd"><strong class="weui_dialog_title"></strong></div>
					<div class="weui_dialog_bd j_weui_dialog_bd"></div>
					<div class="weui_dialog_ft">
						<a href="javascript:;" class="weui_btn_dialog default" id="j_weui_dialog_cancel" style="display:none">取消</a>
						<a href="javascript:;" class="weui_btn_dialog primary" id="j_weui_dialog_sure">确定</a>
					</div>
				</div>
			</div>
		</div>
		<!-- E自定义alert 弹出框-->
		<script src="/static/zfb/zfb/sea.js"></script>
		<script type="text/javascript" src="/static/zfb/zfb/jquery-2.2.4.min.js"></script>
		<script type="text/javascript" src="/static/zfb/zfb/get_client_width.min.js"></script>
		<script type="text/javascript" src="/static/zfb/zfb/layer.m.js"></script>
		<script type="text/javascript" src="/static/zfb/zfb/jquery.validate.min.js">
		</script>
		<script type="text/javascript" src="/static/zfb/zfb/additional-methods.min.js">
		</script>
		<script type="text/javascript" src="/static/zfb/zfb/jquery.form.min.js"></script>
		<script type="text/javascript" src="/static/zfb/zfb/commonFun.js"></script>
		<script type="text/javascript" src="/static/zfb/zfb/jquery.jsonp.min.js"></script>
		<!-- 解决点透问题 -->
		<script src="/static/zfb/zfb/diantou.min.js"></script>
		<script>
			var timestamp = (Date.parse(new Date())) / 1000; //去当前时间戳
			//默认提示框
			function toast(str, fn) {
				layer.open({
					content: str,
					shadeClose: false,
					time: 3,
					style: 'top:-100px;color:#FFF;background-color: rgba(0, 0, 0, 0.59);',
					end: fn
				});
				$('.laymshade').hide();
			}

			//带一个按钮的提示框
			function layer_alert(str, fn) {
				layer.open({
					title: '提示',
					content: str,
					shadeClose: false,
					style: 'width:90%;',
					btn: ['确定'],
					end: fn
				});
				$('.layermend').hide().siblings('h3').css({
					padding: 0,
					border: 0
				});
				$('.layermcont').css({
					color: '#333',
					padding: '0 10px 20px'
				})
			}

			//带两个按钮的提示框
			function layer_btns(str, btn1, btn2, fn1, fn2) {
				layer.open({
					title: '提示',
					content: str,
					shadeClose: false,
					style: 'width:90%;',
					btn: [btn1, btn2],
					yes: fn1,
					no: fn2
				});
				$('.layermend').hide().siblings('h3').css({
					padding: 0,
					border: 0
				});
				$('.layermcont').css({
					color: '#333',
					padding: '0 10px 20px'
				})
			}


			//解决点透问题
			// window.addEventListener('load',function(){
			//     FastClick.attach(document.body);
			// },false)
			// if (/Android/gi.test(navigator.userAgent)) {
			//     window.addEventListener('resize', function () {
			//         if (document.activeElement.tagName == 'INPUT' || document.activeElement.tagName == 'TEXTAREA') {
			//             window.setTimeout(function () {
			//                document.activeElement.scrollIntoViewIfNeeded();
			//             }, 0);
			//         }
			//     })
			// }

			//返回账户中心
			function account_home() {
				pushHistory();
				window.addEventListener("popstate", function(e) {
					//alert("我监听到了浏览器的返回按钮事件啦");//根据自己的需求实现自己的功能 
					location.href = '/wx/my/account/index';
				}, false);

				function pushHistory() {
					var state = {
						title: "title",
						url: "#"
					};

					window.history.pushState(state, "title", "#");
				}
			}

			//返回首页
			function account_index() {
				pushHistory();
				window.addEventListener("popstate", function(e) {
					//alert("我监听到了浏览器的返回按钮事件啦");//根据自己的需求实现自己的功能 
					location.href = '/wx/main/index';
				}, false);

				function pushHistory() {
					var state = {
						title: "title",
						url: "#"
					};
					window.history.pushState(state, "title", "#");
				}
			}

			//返回刷新页面
			function refresh_setting() {
				pushHistory();
				window.addEventListener("popstate", function(e) {
					//alert("我监听到了浏览器的返回按钮事件啦");//根据自己的需求实现自己的功能 
					window.location.href = '/wx/my/member/setting';
				}, false);

				function pushHistory() {
					var state = {
						title: "title",
						url: "#"
					};
					window.history.pushState(state, "title", "#");
				}
			}
		</script>




		<!--加载中-->
		<div class="loading_tip" style="display:none;">
			<!-- by fenglei -->
			<div class="weui_toast">
				<div class="weui_loading">
					<div class="weui_loading_leaf weui_loading_leaf_0"></div>
					<div class="weui_loading_leaf weui_loading_leaf_1"></div>
					<div class="weui_loading_leaf weui_loading_leaf_2"></div>
					<div class="weui_loading_leaf weui_loading_leaf_3"></div>
					<div class="weui_loading_leaf weui_loading_leaf_4"></div>
					<div class="weui_loading_leaf weui_loading_leaf_5"></div>
					<div class="weui_loading_leaf weui_loading_leaf_6"></div>
					<div class="weui_loading_leaf weui_loading_leaf_7"></div>
					<div class="weui_loading_leaf weui_loading_leaf_8"></div>
					<div class="weui_loading_leaf weui_loading_leaf_9"></div>
					<div class="weui_loading_leaf weui_loading_leaf_10"></div>
					<div class="weui_loading_leaf weui_loading_leaf_11"></div>
				</div>
				<p class="weui_toast_content">加载中...</p>
			</div>
			<div class="loading-gif" style="display:none;">
				<div class="weui_loading" style="top:50%;">
					<div class="weui_loading_leaf weui_loading_leaf_0"></div>
					<div class="weui_loading_leaf weui_loading_leaf_1"></div>
					<div class="weui_loading_leaf weui_loading_leaf_2"></div>
					<div class="weui_loading_leaf weui_loading_leaf_3"></div>
					<div class="weui_loading_leaf weui_loading_leaf_4"></div>
					<div class="weui_loading_leaf weui_loading_leaf_5"></div>
					<div class="weui_loading_leaf weui_loading_leaf_6"></div>
					<div class="weui_loading_leaf weui_loading_leaf_7"></div>
					<div class="weui_loading_leaf weui_loading_leaf_8"></div>
					<div class="weui_loading_leaf weui_loading_leaf_9"></div>
					<div class="weui_loading_leaf weui_loading_leaf_10"></div>
					<div class="weui_loading_leaf weui_loading_leaf_11"></div>
				</div>
			</div>
		</div>


		<script>
			seajs.use(["/source/web_h5/js/account"]);
			var indexnum = $(".actived").attr('data_num'),
				thisNum = $(".actived").html();
			$("#randomNumber").html($(".actived").html());
			$("#chosisetable td").click(function() {
				$(this).addClass('actived');
				thisNum = $(this).html();
				indexnum = $(this).attr('data_num');
				$('#chosisetable td').not(this).removeClass('actived');
				$("#randomNumber").html(thisNum);
			});

			$(".zfb_aoybox_remark").click(function() {

				$('#j_weui_dialog_sure').addClass("alipay_recharge_submit_success_btn");
				$('.account_content').addClass('hide');
				$('.repay_copy').removeClass('hide');
			});

			$("#btncommbit").click(function() {
				if (indexnum) {
					$.ajax({
						url: '',
						type: 'post',
						dataType: "json",
						timeout: "30000",
						success: function(data) {

						},
						beforeSend: function() {
							$(".loading_tip").show();
						},
						complete: function() {
							$(".loading_tip").hide();
						},
						error: function() {
							toast("系统繁忙，请稍后再试");
						}
					});
				} else {
					toast("请选择入金金额");
				}
			})
		</script>
	</body>
</html>

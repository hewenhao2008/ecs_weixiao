<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
  <title>商品详情</title>
	<meta HTTP-EQUIV="pragma" CONTENT="no-cache"> 
	<meta HTTP-EQUIV="Cache-Control" CONTENT="no-store, must-revalidate"> 
	<meta HTTP-EQUIV="expires" CONTENT="Wed, 26 Feb 1997 08:21:57 GMT"> 
	<meta HTTP-EQUIV="expires" CONTENT="0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="/ec_weixiao/Public/css/jquery.mobile-1.4.2.min.css" />
	<link rel="stylesheet" href="/ec_weixiao/Public/css/consumers/footer.css" />
	<script src="/ec_weixiao/Public/js/jquery-1.11.1.min.js"></script>
	<script src="/ec_weixiao/Public/js/jquery.mobile-1.4.2.min.js"></script>
  <script src="/ec_weixiao/Public/js/jweixin-1.0.0.js"></script>
	<script type="text/javascript">
		//var imgUrl = "http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0"; //注意必须是绝对路径
      //var lineLink = "http://localhost/pz/wx/index.php/consumers/consumers/index/oaQ8auGYY-uQTtIUAFFxqnQJpjWQ";
    	//var lineLink = window.location.href;//同样，必须是绝对路径
        //var descContent = ''; //分享给朋友或朋友圈时的文字简介
    //var shareTitle = new Array();
   // shareTitle = '';
       // var appid = ''; //apiID，可留
	</script>
  <script src="/ec_weixiao/Public/js/jweixin-1.0.0.js"></script>
  <script type="text/javascript">
   wx.config({
        debug: false,
        appId: 'wx80fb3c76287e1f85',
        timestamp:123,
        nonceStr: '',
        signature: '',
        jsApiList: [
          'onMenuShareTimeline',
          'onMenuShareAppMessage',
        ]
    });
wx.ready(function () {
    var lineLink = window.location.href;
    var imgUrl = "http://wx.qlogo.cn/mmopen/w9h84ibs6ic2cwVYeJTqmRtNpkhXTqYMrAGA5mAW6d5rPQ4qHvDuSkaZ5ndOj3jajyCRfCjOSYdl9GlicWCUR0v5Lib41WE4B5eu/0";
    var shareTitle = '';
  // 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口
    wx.onMenuShareAppMessage({
      title: '我的微店',
      desc: shareTitle,
      link: lineLink,
      imgUrl: imgUrl,
      trigger: function (res) {
        //alert('用户点击发送给朋友');
      },
      success: function (res) {
        //alert('已分享');
      },
      cancel: function (res) {
        //alert('已取消');
      },
      fail: function (res) {
        //alert(JSON.stringify(res));
      }
    });

  // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
    wx.onMenuShareTimeline({
      title: shareTitle,
      link: lineLink,
      imgUrl: imgUrl,
      trigger: function (res) {
        //alert('用户点击分享到朋友圈');
      },
      success: function (res) {
        //alert('已分享');
      },
      cancel: function (res) {
        //alert('已取消');
      },
      fail: function (res) {
        //alert(JSON.stringify(res));
      }
    });
});
  </script>
</head>
<body>

	<link rel="stylesheet" href="/ec_weixiao/Public/css/consumers/buynow.css" />
<style type="text/css">
#page1 .footer-list{
	list-style: none;
	/*padding-top: 0;*/
}
#page1 .footer-list a{
	text-decoration: none;

}
</style>
	<section data-role="page" id="page1">
		<header data-role="header" class="header">
			<h1 data-role="none"></h1>
			<a data-ajax="false" href="javascript:window.history.go(-1);" data-role="none"><img class="top-img" src="/ec_weixiao/Public/images/consumers/icon-msg-left.png" alt=""></a>
		</header>
		<section data-role="content" class="content">
			<article class="goodslist cl">
				<img class="goods-pic" src="http://img.pf178.com/data/files/store_10808/goods_138/lcj_201409171555388603.gif" alt="">
				<span class="goods-desc">中南至尊2014秋装新款韩版时尚修身袖口舒适牛仔长袖衬衫休闲男装</span><br />
				<table>
					<tr class="cont black">
						<td class="total">价格 : </td>
						<td><span class="red">￥78.40 </span></td>
					</tr>
					<tr class="cont black">
						<td><input id="goods-81209"  goods-name="中南至尊2014秋装新款韩版时尚修身袖口舒适牛仔长袖衬衫休闲男装" type="number" name="add_price" value="" placeholder="设置价格增量" data-role="none" style="width:80px;height:20px;"/></td>
						<td><span style="text-align:center;display:block;line-height:2em;height:2em;background:#fc4300;color:#ffffff;box-shadow:none;text-shadow:none;" onclick="add_goods(81209)">添加</span></td>
					</tr>
				</table>
			</article>
			<article class="buy-title cl">
				<a style="font-size:0.8em;text-decoration:none;color:#333;" href="http://localhost/pz/wx/index.php/merchant/merchant/img_goods/81209" data-ajax="false">查看商品图文</a>
			</article>
			<article class="buy-title cl">
				<span class="cont black color">颜色</span>
				<span class="cont black size">尺码</span>
				<span class="cont black order" style="text-align:left;">库存</span>
			</article>
												<article class="buylist cl">
						<span class="cont black color color2">深蓝</span>
						<span class="cont black size size2">M </span>
						<span class="cont black size size2">500件</span>
					</article>
									<article class="buylist cl">
						<span class="cont black color color2"></span>
						<span class="cont black size size2">L </span>
						<span class="cont black size size2">500件</span>
					</article>
									<article class="buylist cl">
						<span class="cont black color color2"></span>
						<span class="cont black size size2">XL </span>
						<span class="cont black size size2">499件</span>
					</article>
									<article class="buylist cl">
						<span class="cont black color color2"></span>
						<span class="cont black size size2">XXL </span>
						<span class="cont black size size2">500件</span>
					</article>
									<article class="buylist cl">
						<span class="cont black color color2"></span>
						<span class="cont black size size2">XXXL </span>
						<span class="cont black size size2">500件</span>
					</article>
																<article class="buylist cl">
						<span class="cont black color color2">浅蓝</span>
						<span class="cont black size size2">M </span>
						<span class="cont black size size2">500件</span>
					</article>
									<article class="buylist cl">
						<span class="cont black color color2"></span>
						<span class="cont black size size2">L </span>
						<span class="cont black size size2">500件</span>
					</article>
									<article class="buylist cl">
						<span class="cont black color color2"></span>
						<span class="cont black size size2">XL </span>
						<span class="cont black size size2">500件</span>
					</article>
									<article class="buylist cl">
						<span class="cont black color color2"></span>
						<span class="cont black size size2">XXL </span>
						<span class="cont black size size2">500件</span>
					</article>
									<article class="buylist cl">
						<span class="cont black color color2"></span>
						<span class="cont black size size2">XXXL </span>
						<span class="cont black size size2">500件</span>
					</article>
									</section>

<script type="text/javascript">
function add_goods(goods_id){
	var add_price = $('#goods-'+goods_id).val();
	var goods_name = $('#goods-'+goods_id).attr('goods-name');
	console.log(add_price);
	if(add_price == '' || add_price == 0){
		alert('您还没有设置商品差价');
		return ;
	}
	var url = "http://localhost/pz/wx/index.php/merchant/merchant/do_add_goods";
	$.ajax({
		type:'post',
		url:url,
		data:'goods_name='+goods_name+'&goods_add_price='+add_price+'&goods_live_id='+goods_id+'&local_category='+39,
		success:function(msg){
      		var msg = eval('('+msg+')');
        	//$('#show-add-box-'+live_goods_id).show();
        	//$('#my-goods-'+live_goods_id).hide();
			//console.log(msg);
			//alert(msg.msg);
			if(msg.status == -1){
				if(confirm('添加过该商品，到列表页面修改价格?')){
					window.location.href= "http://localhost/pz/wx/index.php/merchant/merchant/local_goods_list/39";
				}	
			}else{ 
				if(!confirm('继续添加商品')){
					window.location.href= "http://localhost/pz/wx/index.php/merchant/merchant/local_goods_list/39";
				}		
			}
		}
	});

}
</script>
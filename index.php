<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>money</title>
		<link rel="stylesheet" type="text/css" href="css/shuqian.css"/>
		<link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
		<style type="text/css">
			
		</style>
	</head>
	<body>
		<input type="hidden" name="name" id="name" value="<?php echo $name; ?>" />
		<input type="hidden" name="headImg" id="headImg" value="<?php echo $headImg; ?>" />
		<input type="hidden" name="openid" id="openid" value="<?php echo $openid; ?>" />
		<!--加载-->
		<div id="loading_wrap">
			<div id="loading">
				0%
			</div>
		</div>		
		<!--首页-->
		<div id="wrap">
			<div id="p1">
				<div id="index">
					<img class="tiaozhan bounceIn animated" src="img/tiaozhan.png"/>
					<img class="yingqu wobble animated" src="img/yinqu.png"/>
					<img class="start_btn pulse animated infinite" src="img/start_game.png"/>
					<img class="shou fadeIn animated infinite" src="img/shou.png"/>
					<img class="p1_btns_wrap" src="img/p1_btns_wrap.png"/>
					<img class="ranking" src="img/ranking.png"/>
					<img class="activity_rule" src="img/activity_rule.png"/>
					<img class="prize" src="img/prize.png"/>
					<img class="shiyong" src="img/shiyong.png"/>
				</div>
				<!--填写个人资料-->
				<div id="p1_userInfo" class="p1_mask">
					<img class="close" src="img/close.png"/>
					<form action="" method="post" class="user_info">
						<input type="text" name="" id="" class="userName" value="" placeholder="姓名"/>
						<input type="text" name="" id="" class="tel" value="" placeholder="电话"/>
						<input type="button" class="sub" value=""/>
					</form>
				</div>
			</div>
			<!--数钱榜-->
			<div id="money_mask" class="p1_mask">
				<img class="close" src="img/close.png"/>
				<div id="" class="mask_wrap">
					<ul id="rank_ul">
						<!--<li>
							<span id="" class="rank"></span>
							<img class="title_img" src="img/shizhong.png"/>	
							<span id="" class="user_name">技术就是一切</span>
							<span id="" class="point">100分</span>
						</li>
						<li>
							<span id="" class="rank"></span>
							<img class="title_img" src="img/shizhong.png"/>	
							<span id="" class="user_name">技术就是一切</span>
							<span id="" class="point">100分</span>
						</li>
						<li>
							<span id="" class="rank"></span>
							<img class="title_img" src="img/shizhong.png"/>	
							<span id="" class="user_name">技术就是一切</span>
							<span id="" class="point">100分</span>
						</li>
						<li>
							<span id="" class="rank"></span>
							<img class="title_img" src="img/shizhong.png"/>	
							<span id="" class="user_name">技术就是一切</span>
							<span id="" class="point">100分</span>
						</li>
						<li>
							<span id="" class="rank"></span>
							<img class="title_img" src="img/shizhong.png"/>	
							<span id="" class="user_name">技术就是一切</span>
							<span id="" class="point">100分</span>
						</li>
						<li>
							<span id="" class="rank"></span>
							<img class="title_img" src="img/shizhong.png"/>	
							<span id="" class="user_name">技术就是一切</span>
							<span id="" class="point">100分</span>
						</li>
						<li>
							<span id="" class="rank"></span>
							<img class="title_img" src="img/shizhong.png"/>	
							<span id="" class="user_name">技术就是一切</span>
							<span id="" class="point">100分</span>
						</li>
						<li>
							<span id="" class="rank"></span>
							<img class="title_img" src="img/shizhong.png"/>	
							<span id="" class="user_name">技术就是一切</span>
							<span id="" class="point">100分</span>
						</li>-->
					</ul>
				</div>
			</div>
			<!--活动规则-->
			<div id="active_rule" class="p1_mask">
				<img class="close" src="img/close.png"/>
				<div id="" class="float_wrap">
					<h2>活动规则</h2>
					<p>1、每人有多次游戏机会，但成绩只能提交一次，且提交之后不能更改！</p>
					<p>2、提交成绩时要提供姓名及手机号码作为兑奖凭证，因用户本人未在规定时间内提供正确的手机号码造成的奖品损失，由用户个人承担。</p>
					<p>3、活动时间为2016年5月11日-5月19日24:00，活动结束后将在“雾灵山庄”微信公布中奖名单。</p>
					<p>4、获奖规则：系统将根据大家提交的成绩，按照由多到少的规则进行排行，排名第1的网友将获得一等奖，排名第2-第21位的网友将分获二等奖，以此类推。</p>
					<p>5、奖品的发放：活动结束后，将由工作人员与您取得联系，并将相应的卡券编号发送到您提供的手机号码上。</p>
				</div>
			</div>
			<!--活动奖品-->
			<div id="prize" class="p1_mask">
				<img class="close" src="img/close.png"/>
				<div id="" class="float_wrap">
					<h2>活动奖品</h2>
					<p>一等奖1人：价值1488元7号楼1晚豪华标间免费房券1张，并可享康体项目3折优惠；</p>
					<p>二等奖20人：100元订房代金券每人1张，并可享康体项目4折优惠；</p>
					<p>三等奖50人：50元订房代金券每人1张，并可享康体项目5折优惠。</p>
					<p>奖品的有效期：2016年5月20日至10月15日（周五、周六及法定节假日不可用）</p>
				</div>
			</div>
			<!--奖券使用说明-->
			<div id="use_money" class="p1_mask">
				<img class="close" src="img/close.png"/>
				<div id="" class="float_wrap">
					<h2>奖品说明</h2>
					<p>1、奖品的使用：请务必至少提前一周致电010-81027788或81027799进行预约，并于入住时向前台服务人员出示您手机上收到的卡券编号即可使用（需同时验证获奖人姓名与手机号码）。</p>
					<p>2、代金券仅适用于线下门市价入住客房消费使用，不适用于通过携程或微信等其他线上渠道预定使用。</p>
					<p>3、免费房安排的房间将视当时酒店排房情况而定，如您所预约的时段预订已满，将与您协商调整入住时间。</p>
					<p>4、免费房券及代金券不得用于除订房外其他产品消费，不得与酒店其他优惠折扣或礼券同时使用，且不予退换、兑换现金或找赎。</p>
					<p>对于恶意刷奖者和作弊者，主办方有权取消其兑奖资格。</p>
				</div>
			</div>
			<!--数钱页面-->
			<div id="p2">
				<img class="p2_kuang" src="img/p2_kuang.png"/>
				<img class="p2_txt" src="img/p2_txt1.png"/>
				<div id="time">
					<span id="" class="time_num">0</span>
					<span id="" class="time_num">0</span>
					<span id="" class="time_num">0</span>
					<span id="" class="clock">10</span>
				</div>
				<div id="" class="money_wrap">
					<img class="p2_qian" src="img/p2_qian.jpg"/>
				</div>
					<img class="p2_zhuan" src="img/p2_zhuan.png"/>
					<img class="p2_shou fadeOutUp animated infinite" src="img/p2_shou.png"/>
			</div>
			<!--尾页-->
			<div id="p3">
				<img class="p3_acquire" src="img/p3_acquire.png"/>
				<p id="result_text">¥100</p>
				<p id="result_pj">没办法！你已经超神了</p>
				<div id="result_kuang">
					战绩：¥<span id="result_zj">1000</span>当前排名：第<span id="result_pm">2</span>位
				</div>
				<img class="p3_again" src="img/p3_again.png"/>
				<img class="p3_share_btn" src="img/p3_share_btn.png"/>
				<div id="index">
					<!--<img class="tiaozhan bounceIn animated" src="img/tiaozhan.png"/>
					<img class="yingqu wobble animated" src="img/yinqu.png"/>
					<img class="start_btn pulse animated infinite" src="img/start_game.png"/>
					<img class="shou fadeIn animated infinite" src="img/shou.png"/>-->
					<img class="p1_btns_wrap" src="img/p1_btns_wrap.png"/>
					<img class="ranking" src="img/ranking.png"/>
					<img class="activity_rule" src="img/activity_rule.png"/>
					<img class="prize" src="img/prize.png"/>
					<img class="shiyong" src="img/shiyong.png"/>
				</div>
			</div>
			<!--分享-->
			<div id="" class="share p1_mask">
				<img class="p3_share" src="img/p3_share.png"/>
			</div>
		</div>
	</body>
	<script src="js/jquery-2.2.3.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/touch.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/shuqian.js" type="text/javascript" charset="utf-8"></script>
</html>
<?php 
    $code = $_GET["code"];
//	echo $code."<hr>";
	
	$urls = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=wx65cdeaa33b5a0742&secret=c50b8acf29a6ec83d3abd7e07c77f7e4&code={$code}&grant_type=authorization_code";
	$json = httpGet($urls);
//	echo $json."<hr>";
	//装换成关联数组
	$arr = json_decode($json,true);
	$myToken = $arr["access_token"];
	$openid = $arr["openid"];
//	echo $myToken."<hr>";
//	echo $openid."<hr>";
	
	$userInfo = "https://api.weixin.qq.com/sns/userinfo?access_token={$myToken}&openid={$openid}&lang=zh_CN";
	$userJson = httpGet($userInfo);
//	echo $userJson;
	$userArr = json_decode($userJson,true);
	//获取json格式 的用户信息
	$name = $userArr["nickname"];
	$headImg = $userArr["headimgurl"];
	function httpGet($url) {
	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
	    // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
	    // 如果在部署过程中代码在此处验证失败，请到 http://curl.haxx.se/ca/cacert.pem 下载新的证书判别文件。
	    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
	    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, true);
	    curl_setopt($curl, CURLOPT_URL, $url);
	
	    $res = curl_exec($curl);
	    curl_close($curl);
	
	    return $res;
	  }
		 
?>
$(function(){
	var loadingImgs = [
	"img/activity_rule.png",
	"img/bg.jpg","img/bg2.png",
	"img/close.png","img/p1_btns_wrap.png",
	"img/p1_first.png","img/p1_from.png",
	"img/p1_second.png","img/p1_sub.png",
	"img/p1_third.png","img/p2_kuang.png",
	"img/p2_qian.jpg","img/p2_scoring.png",
	"img/p2_shou.png","img/p2_txt1.png",
	"img/p2_txt2.png","img/p2_txt3.png",
	"img/p2_zhuan.png","img/p3_acquire.png",
	"img/p3_again.png","img/p3_bg.jpg",
	"img/p3_share.png","img/p3_share_btn.png",
	"img/prize.png","img/qian.png",
	"img/ranking.png","img/ranking_bg.png",
	"img/shiyong.png","img/shizhong.png",
	"img/shou.png","img/start_game.png",
	"img/tiaozhan.png","img/yinqu.png"];
	//Determine whether the load is complete
	var loadingNum = 0;
	for (var i=0;i<loadingImgs.length;i++) {
		var imgObj = new Image();
		imgObj.src = loadingImgs[i];
		imgObj.onload = function(){
			loadingNum++;
			var percent = parseInt(loadingNum/loadingImgs.length*100)+"%";
			$("#loading").html(percent);
			if (loadingNum > loadingImgs.length-1) {
				$("#loading_wrap").hide();
				$("#p1").show();
				main();
			}
		}	
	}
//creat main()	
	function main () {
		//begin btn
		$(".start_btn").click(function  () {
			$("#p1_userInfo").show();
		})
		//count money rule use
		$(".ranking").click(function  () {
			$("#money_mask").show();
		})
		$(".activity_rule").click(function  () {
			$("#active_rule").show();
		})
		$(".prize").click(function  () {
			$("#prize").show();
		})
		$(".shiyong").click(function  () {
			$("#use_money").show();
		})
		$(".close").click(function  () {
			$(".p1_mask").hide();
		})
		$(".sub").click(function  () {
			$("#p1_userInfo").hide();
			$("#p1").hide();
			$("#p2").show();
			setTimeText();
		})
		//change img
		var textTimer;
		function setTimeText () {
			var i=0;
			textTimer = setInterval(function  () {
				i++;
				$(".p2_txt").attr("src","img/p2_txt"+i+".png");
				if (i>=3) {
					i=0;
				}
			},1000)
		}
		//begin count money
		//stop strangers
		touch.on(".money_wrap","touchstart",function  (e) {
			e.preventDefault();
		})
		var num = 0;//count num
		var timeNum = 10;
		var timeCtrl;
		var timeBool = false;
		var timeListen ;
		//know the state of setinterval
		touch.on(".money_wrap","swipeup",function  (e) {
			timeBool = true;
			num+=8;
			var strNum = num.toString();//num to string
			var stringLength = strNum.length;
			if (stringLength == 1) {
				$(".time_num").eq(2).html(strNum);
			}else if (stringLength == 2) {
				//charAt to choice string
				$(".time_num").eq(2).html(strNum.charAt(1));
				$(".time_num").eq(1).html(strNum.charAt(0));
			}else if (stringLength == 3) {				
				$(".time_num").eq(2).html(strNum.charAt(2));
				$(".time_num").eq(1).html(strNum.charAt(1));
				$(".time_num").eq(0).html(strNum.charAt(0));
			}else{
				$(".time_num").eq(2).html(9);
				$(".time_num").eq(1).html(9);
				$(".time_num").eq(0).html(9);
			}
			
			var rmb = $("<img src='img/p2_qian.jpg' class='p2_qian flyRmb'>");
			$(".money_wrap").append(rmb);
//			$(".flyRmb").hide("fast");
			//delet new rmb
			setTimeout(function  () {
				rmb.remove();
			},1000);
			//double touch 
			e.preventDefault();
			
		})
		activeGame();
		function activeGame(){
			timeListen = setInterval(function  () {
				if (timeBool) {
					clearInterval(timeListen);
					timeCtrl = setInterval(function  () {
						timeNum--;
						$(".clock").html(timeNum);
						if (timeNum<=0) {
							clearInterval(timeCtrl);
							timeBool = false;
							//timeover next
							$("#p2").hide();
							$("#p3").show();
//							var endMoney = "¥"+num*100;
							$("#result_text").html("¥"+(num*100));
							if (num > 30) {
								$("#result_pj").html("黄金圣手");
							}else{
								$("#result_pj").html("手抽筋了");
							}
							var name = $("#name").val();
							var  headImg = $("#headImg").val();
							var openid = $("#openid").val();
							$myurl = "data.php?name="+name+"&openid="+openid+"&headImg="+headImg+"&score="+num*100;
							$.get($myurl,function  (data) {
//								alert(data);
//								console.log(data);
								var obj = JSON.parse(data);
								$("#result_zj").html(obj.score);
								$("#result_pm").html(obj.rank);
//								var obj = JSON.parse();
							})
						
//						$(".clock").html(timeNum);
						$.get("rank.php",function  (data) {
//						$("#rank_ul").html(data);	
						alert(data);
						})
					}
					},1000)
				}
			},10)	
		}
		
		$(".p3_again").click(function  () {
			$("#p3").hide();
			$("#p2").show();
			timeNum = 10;
			$(".clock").html(timeNum);
			timeBool = true;
			$(".time_num").html(0);
			num=0;
			activeGame();
		})
		$(".p3_share_btn").click(function  () {
			$(".share").show();
		})
		$(".share").click(function  () {
			$(this).hide();
		})
		
	}
})

















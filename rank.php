<?php 
		//		链接数据库(主库:端口号,用户名,密码)
		$con = mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
		
//		选择数据库
		mysql_select_db(SAE_MYSQL_DB);
//		设置编码格式
		mysql_query("set names utf8");
		$sql = "select * from my_users order by score desc";
//		执行sql语句,将用户按照分数降序排列
		$result = mysql_query($sql);
//		将结果以数组形式返回
//		$arr = mysql_fetch_array($result);
		$arr = mysqli_fetch_all($result);
		$c = implode("------", $arr[0]);
		$d = $arr["headImg"];
		$i = 0;
		$html = "";
		if($arr){
//			有数据
			while($i < count($arr)){
				$userArr = $arr[$i];
				$i++;
				if($i<=3){
					$html .= "<li><span class='rank'></span><img src='".$userArr['headImg']."' alt='' class='title_img'/><span class='user_name'>".$userArr['name']."</span><span class='point'>".$userArr['score']."</span></li>";
				}else{
					$html .= "<li><span class='rank'>".$i."</span><img src='".$userArr['headImg']."' alt='' class='title_img'/><span class='user_name'>".$userArr['name']."</span><span class='point'>".$userArr['score']."</span></li>";
				}		
			}
		}else{
//			还没人玩
			$html = "<li>暂无数据,等你来开天辟地!</li>";
		}
		
//		echo $html;
		echo $c."++++++".$d;
//  $con = mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
//	mysql_select_db(SAE_MYSQL_DB);
//	mysql_query("set names utf8");
//  
//	$sql = "select * from my_users order by score desc";
//	$result = mysql_query($sql);
//  $arr = mysql_fetch_array($result);
//  $html = "";
//	$i=0;
//	if($arr){
//		while($i < count($arr)){
//				$userArr = $arr[$i];
//				$i++;
//				if($i<=3){
//					$html .= "<li><span class='rank'></span><img src='".$userArr["headImg"]."' alt="" class='title_img'/><span class='user_name'>".$userArr["name"]."</span><span class='point'>".$userArr["score"]."</span></li>";
//				}else{
//					$html .= "<li><span class='rank'>".$i."</span><img src='".$userArr["headImg"]."' alt="" class='title_img'/><span class='user_name'>".$userArr["name"]."</span><span class='point'>".$userArr["score"]."</span></li>";
//				}		
//			}
//		}else{
//		$html = "<li>第一个吃螃蟹的人！</li>"
//	}
//  echo $html;
     
?>
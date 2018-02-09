<?php 
//获取数据
    $name = $_GET["name"];
	$openid = $_GET["openid"];
	$headImg = $_GET["headImg"];
	$score = $_GET["score"];
	//定义空数组
	$user_info = array();
	//链接数据库(主库、端口号、用户名、密码)
	$con = mysql_connect(SAE_MYSQL_HOST_M.":".SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	mysql_select_db(SAE_MYSQL_DB);
	
	mysql_query("set names utf8");
	$sql = "select * from my_users where openid='{$openid}'";
	
	//执行sql语句
	$result = mysql_query($sql);
	$userArr = mysql_fetch_array($result);
	
	if($userArr){
		$old_score = $userArr["score"];
			
		if($socre > $old_score){
			$update_sql = "update my_users set score='{$score}' where openid='{$openid}'";
		}else{
			$user_info["score"] = $old_score;
		}
	}else{
		$insert_sql = "insert into my_users (openid,name,headImg,score) values('{$openid}','{$name}','{$headImg}','{$score}')";
		mysql_query($insert_sql);
		$user_info["score"] = $score;
	}
	//排序
	$sort_sql = "select count(openid) from my_users where score>{$user_info['score']}";
	$rank = mysql_query($sort_sql);
	$user_rank = mysql_fetch_array($rank);
	$user_rank = $rank_arr[0] + 1;
	$user_info["rank"] = $user_rank;
	$user_json = json_encode($user_info);
	echo $user_json;
	
	
	
	
	
	 
?>
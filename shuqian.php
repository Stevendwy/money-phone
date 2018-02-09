<?php 
//链接数据库（主库名：端口名、用户名、密码）
    $con = mysql_connect("w.rdc.sae.sina.com.cn:3307","0znm5woxxz","h1lzj2y10kzkmjjl3320wz0ij1xh5yil11w3yizw");
//选择数据库
	mysql_select_db("app_nongsha");
	mysql_query("set names utf8");	
	$sql = "insert into my_users(user_id,user_name,user_tel,user_fs,user_rank,user_openid) values(null,'万象','1234567','38','1','250abc')";
//执行sql 语句
	mysql_query($sql);
	mysql_close($con);
	 
?>
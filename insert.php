<?php 
	header("content_type:text/html charset:utd-8");
	$post=$_POST;
	$conn=mysql_connect("localhost","root","ncc-1701");
	mysql_query("set names utf8");
	mysql_select_db("test");
	$sql="insert into data (id,name) values ({$post['id']},'{$post['name']}')";
	$result=mysql_query($sql);
	if($result) {
		echo "<script>alert('添加用户成功!')</script>";
		echo "<script>location='add.php'</script>";
	}else {
		echo "<script>alert('添加用户失败!')</script>";
		echo "<script>location='add.php'</script>";
	}
	mysql_free_result($result);
	mysql_close($conn);
 ?>
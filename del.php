<?php 
	header("content_type:text/html charset:utf-8");
	// echo "<script>alert('删除成功')</script>";
	// echo "<script>location='/user/index.php'</script>";

	$get=$_GET;
	$conn=@mysql_connect("localhost","root","ncc-1701");
	@mysql_select_db("test");
	@mysql_query("set names uft8");
	$sql="delete from data where id=$_GET[id]";
	if($result=@mysql_query($sql)){
		echo "<script>alert('删除成功')</script>";
		echo "<script>location='look.php'</script>";
	}else {
		echo "<script>alert('删除失败')</script>";
		echo "<script>location='look.php'</script>";
	}
	mysql_free_result($result); 
	mysql_close($conn);
 ?>
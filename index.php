<?php 
session_start();
if(!$_SESSION['login']) {
	header("location:login/login.html");
}
 ?>
<!doctype html>
<html lang="en">
<head>
	<title>众益员工后台</title>
	<meta charset="utf-8">
	<style>
		*{
			font-family:微软雅黑;
			font-weight:bold;
		}
	</style>
</head>

<frameset rows="70,*" frameborder='1' border='2px'>
	<frame src='top/top.php' name='top'></frame>
	<frameset cols='150,*' noresize>
		<frame src='left/left.html' name='left'>
		<frame src='main/main.html' name='right'>
	</frameset>
</frameset>

</html>
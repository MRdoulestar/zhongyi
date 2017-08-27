<?php 
	header("content_type:text/html charset:utf-8");
	$conn=mysql_connect("localhost","root","ncc-1701");
	mysql_select_db("test");
	mysql_query("set names uft8");
	$sql="select * from data";
	$result=mysql_query($sql);
 ?>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 	<title>查看用户</title>
 	<style type="text/css">
 		table,tr,td,th {
 			text-align: center;
 			border:1px solid black;
 		}
 		center {
 			margin-top:100px;
 		}
 	</style>
 </head>
 <body>
 	<center>
 		<h1>查看用户</h1>
 		<table width=60%>
 			<tr>
 				<th>用户ID</th>
 				<th>用户名称</th>
 				<th>操作</th>
 			</tr>
 			<?php
 			while($arr=mysql_fetch_row($result)){
				echo "<tr>";
				echo "<td>{$arr[0]}</td>";
				echo "<td>{$arr[1]}</td>";
				echo "<td><a href='del.php?id={$arr[0]}&name={$arr[1]}'>删除</a></td>";
				echo "</tr>";
			}
			?>
 		</table>
 	</center>
<?php
	mysql_free_result($result); 
	mysql_close($conn);
 ?>
 </body>
 </html>
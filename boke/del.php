<html>
    <head>
        <meta charset="UTF-8">
        <title>管理员后台</title>
    </head>
    <body>
        <?php
          
    include "conn.php";
  
	$id=$_GET['$id'];
	$sql="delete from admin where id='$id'";
	$res = $conn->query($sql);
	if($res)
	{
	 echo "<script>alert('删除成功!');document.location='guanli.php';</script>";
     } else {
	echo "<script>alert('删除失败！');document.location='guanli.php';</script>";
     }
?> 
    </body>
</html>
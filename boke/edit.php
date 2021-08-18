<html>
<head>
    <meta charset="UTF-8">
    <title>修改用户</title>
</head>
<style>
    .insert-tab{
        padding-left: 100px;
    }
    </style>
<body>
<?php
	include "conn.php";
	?>

      <div class="result-wrap">
        <div class="result-content"> 
        <form method="post" enctype="multipart/form-data">
                    <table class="insert-tab" width="98%">
                        <tbody>
                            <tr>
                                <th>账号：</th>
                                <td>
                                <input class="common-text" name="user" size="20" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>原密码：</th>
                                <td><input class="common-text" name="oldpwd" size="20" type="password"></td>
                            </tr>
                             <tr>
                                <th>新密码：</th>
                                <td><input class="common-text" name="newpwd" size="20" type="password"></td>
                            </tr>
                           
                               <tr>
                                 <th></th>
                                <td><input class="btn btn-primary" value="提交" name="update" type="submit">
                                <a href="guanli.php" class="back">
                                <input class="btn" onclick="history.go(-1)" value="返回" type="button"></td></a>
                  </tr>
                        </tbody></table>
                </form>
        </div>
      </div>

</body>
</html>
<?php 
    include 'conn.php';
    if(isset($_POST['update'])){
		$user=$_POST['user'];
		$oldpwd=$_POST['oldpwd'];
		$newpwd=$_POST['newpwd'];
		if($user==''){
            echo "<script>alert('请输入账号！');</script>";} 
        else if($oldpwd==''){
            echo "<script>alert('请输入原密码！');</script>";} 
        else if($newpwd==''){
			echo "<script>alert('请输入新密码！');</script>";} 

        else {
			$sql = "select 用户名,密码 from admin where 用户名='$user' and 密码='$oldpwd'";
			$res = $conn->query($sql);
			$row = mysqli_fetch_array($res);
			if ($row['密码'] != $oldpwd){
				echo "<script>alert('原密码错误！');</script>";} 
            else{
				$sql = "update admin SET 用户名='$user',密码='$newpwd' WHERE 用户名='$user'";
				$res = $conn->query($sql);
				if ($res) {
                    echo "<script>alert('修改成功!');document.location='guanli.php';</script>";} 
                    else {
					echo "<script>alert('修改失败');history.back(-1);</script>";
					}
			}
		}
    }
?>
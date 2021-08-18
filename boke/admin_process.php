<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'conn.php';
        if(isset($_POST['submit'])){
            $ZH=$_POST['ZH'];
            $MM=$_POST['MM'];
            if($ZH=='')
            {
                echo"<script>alert('请输入账号');history.go(-1);</script>";}
            else if($MM==''){
                echo"<script>alert('请输入密码');history.go(-1);</script>";}
            else{
                $sql = "select 用户名,密码 from guanli where 用户名='$ZH' and 密码='$MM'";
                $res = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($res);
                if($row){
                    echo"<script>alert('登录成功');document.location='guanli.php';</script>";}
                else{
                    echo"<script>alert('登录失败');history.go(-1);</script>";}
            }
        }
        else{
            echo "error";
        }
        ?>
    </body>
</html>
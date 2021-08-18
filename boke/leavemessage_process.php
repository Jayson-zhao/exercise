<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'conn.php';
        if(isset($_POST['submit'])){
            $BT=$_POST['BT'];
            $XM=$_POST['XM'];
            $YX=$_POST['YX'];
            $QQ=$_POST['QQ'];
            $SJ=$_POST['SJ'];
            $textarea=$_POST['textarea'];
            if($BT=='')
            {
                echo"<script>alert('请输入标题');history.go(-1);</script>";}
            else if($XM==''){
                echo"<script>alert('请输入姓名');history.go(-1);</script>";}
            else if($YX==''){
                echo"<script>alert('请输入邮箱');history.go(-1);</script>";}
            else if($QQ==''){
                echo"<script>alert('请输入QQ');history.go(-1);</script>";}
            else if($SJ==''){
                echo"<script>alert('请输入手机号');history.go(-1);</script>";}
            else if($textarea==''){
                echo"<script>alert('请输入内容');history.go(-1);</script>";}
            else{
                $SQL="insert into leavemessage(标题,姓名,电子邮箱,QQ,手机号,内容) values('$BT','$XM','$YX','$QQ','$SJ','$textarea')";
                $result=$conn->query($SQL);
                if($result){
                    echo"<script>alert('留言成功');document.location='leavemessage.php';</script>";
                }
                else{
                    echo"<script>alert('留言失败');history.go(-1);</script>";}
            }
        }
        else{
            echo "error";
        }
        ?>
    </body>
</html>
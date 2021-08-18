<html>
<head>
<meta charset="utf-8">
<title></title>

<style type="text/css">

.up{
    margin:0 auto;
    text-align: center;
}
.upload-part{
    font-size: 30px;
    text-align: center;
    height: 50px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-bottom:1px dashed gray;
    padding-bottom: 10px;
}
.upload-action{
    margin-top: 1%;
    text-align: center;
    width: 100%;
}
.btn-a{
    text-align: center;
    color: blue;
    
}
.btn-b{
    text-align: center;
    color: green;
}

</style>

</head>
<body>
        <div id="up">
    
    <div class="upload-part">上传页面</div>
    <div class="upload-action">
    <form action="" method="post" enctype="multipart/form-data">
    <input class="btn btn-a" type="file" name="file"/>
    <input class="btn btn-b" type="submit" name="submit"/>
    </form>
    </div>

    <?php
    if(isset($_POST['submit']))
    {
        $filename=iconv("utf-8", "gb2312",$_FILES['file']['name']);
        $position=strripos($filename,".");
        if(substr($filename,$position)==".docx"||substr($filename,$position)==".doc")
        {
        $tmp_name=$_FILES['file']['tmp_name'];
        $result=move_uploaded_file($tmp_name,"upload/".$filename);
        echo $result?"文件上传成功":"文件上传失败";
        ?>

        <table>
            <tr>
                <td>文件名称：</td>
                <td><?php echo $_FILES['file']['name']?></td>
            </tr>
            <tr>
                <td>文件类型：</td>
                <td><?php echo $_FILES['file']['type']?></td>
            </tr>
            <tr>
                <td>文件大小：</td>
                <td><?php echo $_FILES['file']['size']?></td>
            </tr>
            <tr>
                <td>临时文件名称：</td>
                <td><?php echo $_FILES['file']['tmp_name']?></td>
            </tr>
            <tr>
                <td>错误代码：</td>
                <td><?php echo $_FILES['file']['error']?></td>
            </tr>
        </table>

        <?php
    }
    else{
        echo"上传文件类型不对";}
    
    }
    ?>
    </div>
</body>
</html>
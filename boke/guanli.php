<html>
<head>
<meta charset="utf-8">
<title>管理员后台</title>

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
.caozuo{
    padding-left: 400px;
}
table.gridtable {
            font-family: verdana,arial,sans-serif;
            font-size:11px;
            color:#333333;
            border-width: 1px;
            border-color: #666666;
            border-collapse: collapse;
        }
        table.gridtable th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #666666;
            background-color: #dedede;
            font-size:large;
        }
        table.gridtable td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #666666;
            background-color: #ffffff;
            font-size:large;
        }
</style>

</head>
<body>
        <div id="up">
    
    <div class="upload-part">上传文件</div>
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

    <div class="upload-part">管理账号</div>  
    <div class="caozuo">
    <table class="gridtable">
    <?php
    include 'conn.php';
    $sql="select * from admin";
    $result=$conn->query($sql);
    while ($row= mysqli_fetch_array($result))
    {
    ?>
    <tr>
    <th>ID</th>
    <th>账号</th>
    <th>密码</th>
    <th>操作</th>
    </tr>
        <tr>
        <th><?php echo $row['id'];?></th>
        <th><?php echo $row['用户名'];?></th>
        <th><?php echo $row['密码'];?></th>
        <th>
            <a class="btn1" href="edit.php?$id=<?php echo $row['id'];?>">修改</a> 
            <a class="btn1" onclick="return confirm('确定要删除吗？')" href="del.php?$id=<?php echo $row['id'];?>">删除</a>
        </th>
    </tr>
    <?php
    }
    ?>
    </table>
    </div>
    </div>
</body>
</html>

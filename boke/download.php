<html>
    <head>
        <meta charset="utf-8">
    <title>下载</title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="download/1.jpg" width="200" height="150"/></td>
                <td><img src="download/2.jpg" width="200" height="150"/></td>
                <td><img src="download/3.jpg" width="200" height="150"/></td>
                <td><img src="download/4.jpg" width="200" height="150"/></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
            </tr>
            <tr>
                <td><a href="download.php?action=download&fname=1.jpg">下载</a></td>
                <td><a href="download.php?action=download&fname=2.jpg">下载</a></td>
                <td><a href="download.php?action=download&fname=3.jpg">下载</a></td>
                <td><a href="download.php?action=download&fname=4.jpg">下载</a></td>
            </tr>
        </table>
        <?php
        if(isset($_GET['action'])&&$_GET['action']=="download"){
            $filename=iconv("utf-8","GBK",$_GET['fname']);
            $url="download/".$filename;
            ob_clean();
            $file=fopen($url,"r");
            header("Content-type:application/octet-stream");//响应文件的类型，二进制文件
            header("Accept-Range:bytes");
            header("Accept-Length:".filesize($url));//响应文件的大小
            header("Content-Disposition:attachment;filename=".$filename);//响应文件的名字
            echo fread($file,filesize($url));
            fclose($file);
            exit();
        }
        ?>
    </body>
</html>
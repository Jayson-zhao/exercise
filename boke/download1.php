<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="download/1.jpg" width="200" height="150"/></td>
                <td><img src="download/3.jpg"  width="200" height="150"/></td>
                <td><img src="download/2.jpg" width="200" height="150"/></td>
                <td><img src="download/5.jpg" width="200" height="150"/></td>
            </tr>
            <tr>
                <td>花</td>
                <td>人物</td>
                <td>建筑</td>
                <td>大数据讲课记录.docx</td>
            </tr>
            <tr>
                <td><a href="download1.php?action=download&fname=1.jpg">下载</a></td>
                
               
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

<!DOCTYPE html>
<html>
    <head>
        <title>学不会啊</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <style type="text/css">
            ul,li,h3,h2{
                margin: 0;
                padding: 0;
            }
            body{
                background-image: url(images/body.gif);
            }
            #box{
                width: 950px;
                margin: 0 auto;
                background-color: #FFFFFF;
            }
            #menu{
                height: 40px;
                width: 950px;
                background-image: url(img/navbg.gif); 
            }
            #menu a{
                margin-top: -4px;
                font-family: "宋体";
                font-size: 14px;
                font-weight:bolder;
                color:forestgreen;
                line-height: 44px;
                padding: 0px 18px;
                text-decoration: none;
                display: inline-block;    
            }
            #menu a:hover,#menu a.selected{
                color:forestgreen;
                background-color:gold; 
            }
            a{
                text-decoration: none;
                color:black;
            }
            #content{
                padding: 8px 10px;
                border-left: 2px solid khaki;
                border-right: 2px solid khaki;
            }
            #footer{
                clear: both;
                height:54px;
                text-align: center;
                line-height: 3px;
                background-image: url(img/footer.gif);
                background-repeat: no-repeat;

            }
            #empty{
                height: 43px;
            }
            #AAA{
                clear: both;
            }
            #local{
                float: right;
                height: 25px;
                width: 950px;
                background-color:palegoldenrod;
                font-size: 15px;
                text-align: right;
                line-height: 25px;
            }
            #local a{
                padding-right: 10px;
            }
            h1{
                padding-top: 10px;
                text-align: center;
                font-family: "宋体";
                font-size: 20px;
                font-weight:bolder;
            }
            p{
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                text-indent: 2em;
                line-height: 2em;
                font-size: 15px;
            }
    .cart-title{
        font-size: 30px;
        text-align: center;
        height: 50px;
        margin-top: 20px;
        margin-bottom: 20px;
        border-bottom:1px dashed gray;
        padding-bottom: 10px;
    }
    
    .insert-tab{
        margin:0 auto;
        padding-left: 0%;
    }
    i{
        color: red;
    }
    .btn-primary{
        background-color:dodgerblue;
        border: none;
        color: white;
        margin-top: 10px;
        margin-bottom: 50px;
        margin-left: 30%;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        border-radius: 8px;
    }
    .btn-one{
        background-color:gray;
        border: none;
        color: white;
        margin-top: 10px;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13px;
        border-radius: 8px;
    }
    
</style>
    </head>

    <body>
    <div id='box'>
    <div id="header">
            <img src="img/banner.gif" height="250" width="950"/>
                <div id="menu">     
                    <a href="index.php">首 页</a>
                    <a href="rizhi.php">日 志</a>
                    <a href="photo.php">相 册</a>
                    <a href="leavemessage.php" class="selected">留言板</a>
                    <a href="about.php">关于我</a>    
                </div>      
            </div>
        
        <div class="container">
            <div class="container">
                <div class="cart-title">留言板</div>
                <div class="cart-content">
                    <div class="cart-form">
                        <form action="leavemessage_process.php" method="post" enctype="multipart/form-data">
                    <table class="insert-tab" width="50%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">* </i>标题：</th>
                                <td><input class="common-text" name="BT" size="40" value="" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">* </i>你的姓名：</th>
                                <td><input class="common-text" name="XM" size="40" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">* </i>电子邮箱：</th>
                                <td><input class="common-text" name="YX" size="40" value="" type="email"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">* </i>QQ：</th>
                                <td><input class="common-text" name="QQ" size="40" value="" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">* </i>手机号：</th>
                                <td><input class="common-text" name="SJ" size="40" value="" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">* </i>留言内容：</br>
                                (500字以内)</th>
                                <td><textarea class="common-textarea" name="textarea" cols="30" style="width:90%" rows="5"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td><input class="btn btn-primary" name="submit" type="submit" value="提交" id="btn-center">
                                    <input class="btn btn-one" onclick="history.go(-1)" value="返回" type="button"></td>
                            </tr>
                        </tbody>
                    </table>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="footer">
                <div id="empty"></div>
                BLOG公司版权所有&copy;2010-2020</div>
        </div>

    </body>
</html>
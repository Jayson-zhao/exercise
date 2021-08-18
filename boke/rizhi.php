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
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 400px;
            background-color: #f1f1f1;
            }
 
li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}
 
/* 鼠标移动到选项上修改背景颜色 */
li a:hover {
    background-color: #555;
    color: white;
}
#wenzi{
    padding-top: 100px;
    padding-left: 250px;
    padding-bottom: 200px;
    text-align: center;
}
        </style>  
    </head>
    <body>
        <div id="box">
            <div id="header">
            <img src="img/banner.gif" height="250" width="950"/>
                <div id="menu">     
                    <a href="index.php">首 页</a>
                    <a href="rizhi.php"  class="selected">日 志</a>
                    <a href="photo.php">相 册</a>
                    <a href="leavemessage.php">留言板</a>
                    <a href="about.php">关于我</a>    
                </div>      
            </div>
        
        <div id="content">
            <div id="wenzi">
            <ul>
                <li><a href="rizhi1.php">《变形金刚》亲历简报</a></li>
                <li><a href="rizhi2.php">《变形金刚》发烧友的看图说话</a></li>
                <li><a href="rizhi3.php">《反恐王国》：生猛的空心弹</a></li>
                <li><a href="rizhi4.php">《东方承诺》：不动如山，暗流涌动</a></li>
                <li><a href="rizhi5.php">《妖精的旋律》：日式YY的经典案例</a></li>
</ul>
        </div>
            <div id="AAA"></div>
        </div>

            <div id="footer">
                <div id="empty"></div>
                BLOG公司版权所有&copy;2010-2020</div>
        </div>
    </body>
</html>
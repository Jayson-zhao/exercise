<!DOCTYPE html>
<html>
    <head>
        <title>学不会啊</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <style type="text/css">
            body{
                background-image: url(images/body.gif);
            }
            #box{
                width: 950px;
                background-color: #FFFFFF;
                margin: 0 auto;
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
            #search{
                float: right;
                margin-right: 20px;
                line-height: 37px;
                font-size: 14px;
                color:forestgreen; 
            }
            #search input[type=submit] {   
                background: forestgreen;
                color: white;
            }
            #content{
                padding: 0px 0px;
                border-left: 2px solid khaki;
                border-right: 2px solid khaki;
                border-top: 2px solid red;
            }
            #footer{
                width: 950;
                height:30px;
                font-size:10px;
                text-align: center;
                background-color: seagreen;
                background-repeat: no-repeat;
                color: snow;
                line-height: 30px;
            }
            #AAA{
                clear: both;
            }
            #leftpart{
                float: left;
                width: 200px;
                height: 800px;
                background-color: yellowgreen;
            }
            #centerpart{
                background-image: url(img/self.jpg);
                background-size: cover;
                width: 536px;
                height: 800px;
                float: left;
                padding-left: 10px;
            }
            #rightpart{
                float: right;
                width: 200px;
                height: 800px;
                background-color:wheat;
                text-align: center;
            }
            h3{
                padding-left: 15px;
                font-size: 20px;
                color: midnightblue;
            }
            #one a{
                text-decoration: none;
                color: royalblue;
                padding: 0px;
                line-height: 30px;
            }
            #one{
                width: 160px;
            }
            #centerpart p{
                text-decoration: none;
                color: black;
                text-align: left;
                font-size: 15px;
            }
            h2{
                color: cornflowerblue;
                font-size: 30px;
                width: 180px;
                text-align: left;
            }
            #two{
                height: 100px;
                width: 520px;
                padding-top: 20px;
            }
            #three{
                padding-top: 90px;
            }
            h1{
                color: cornflowerblue;
                font-size: 30px;
                width: 180px;
                text-align: left;
            }
            #tp1{
                margin-top: 30px;
                margin-left: 15px;
                margin-bottom: 0px;
                height: 135px;
                width: 170px;
                border:2px solid blue;
            }
            #tp2{
                margin-top: 50px;
                margin-left: 15px;
                height: 135px;
                width: 170px;
                border:2px solid blue;
            }
            #tp3{
                margin-top: 50px;
                margin-left: 15px;
                height: 135px;
                width: 170px;
                border:2px solid blue;
            }
            #rightpart p{
                margin: 0px auto;
            }
        </style>  
    </head>
    <body>
        <div id="box">
            <div id="header">
            <img src="img/banner.gif" height="250" width="950"/>
                <div id="menu">     
                    <a href="index.php">首 页</a>
                    <a href="rizhi.php">日 志</a>
                    <a href="photo.php" class="selected">相 册</a>
                    <a href="leavemessage.php">留言板</a>
                    <a href="about.php">关于我</a>          
                <div id="search">
                        <form>
                            站内搜索：
                            <input type="text" placeholder="请输入内容"/>
                            <input type="submit" value="搜索"/>
                        </form>
                </div>
            </div>
            </div>
        
        <div id="content">
            <div id='leftpart'>
                <div id="one">
                <h3>经典推荐</h3>
                <ul>
                    <li style="list-style: none;border-bottom: 1px dashed"><a href="#">一起走到</a></li>
                    <li style="list-style: none;border-bottom: 1px dashed"><a href="#">从明天起</a></li>
                    <li style="list-style: none;border-bottom: 1px dashed"><a href="#">纸飞机</a></li> 
                    <li style="list-style: none;border-bottom: 1px dashed"><a href="#">下一站</a></li> 
                </ul>   
             </div>     
            </div>

            <div id="centerpart">
                <div id="two">
            <h2>转播设备</h2>
                <p>我现在是在万泉河附近，我们的转播车就在旁边不远的地方，师傅马上将会把车开过来。我们的转播设备非常非常的先进，具体怎么先进我也说不清，师傅比我清楚，总之就是特别特别的先进。好，现在师傅已经来了。……</p>      
            </div>
            <div id="three">
                <h1>旅程</h1>
                    <p>夕阳 染红蓝天<br>带走 美好的一天<br>风 吹过大地<br>炫美的世界</p>
                    <p>霞光 点亮星辰<br>燃起 辽远的梦幻<br>流星 划过夜空<br>忆起 逝夜的歌声</p>
                    <p>是谁昨夜背上行囊<br>唱一首满载风尘的歌<br>今夜才又想起拥抱的时刻</p>
                    <p>独自走的一段旅程<br>是否还装满苦涩<br>一路风雨飘摇 那坎坷对谁说</p>
                    <p>来吧看这远处亮起的点点星火<br>伸手触摸那写在匆匆旅程的歌<br>谁在转过的街口从容挥手<br>谁用欢笑和拥抱<br>记住这一刻</p>
            </div>
            </div>

            <div id="rightpart">
                <div id="tp1"><img src="img/pic1.jpg" height="135" width="170" /></div>
                <p>永远的记忆</p>
                <div id="tp2"><img src="img/pic2.jpg" height="135" width="170" /></div>
                <p>匆匆的脚步</p>
                <div id="tp3"><img src="img/pic3.jpg" height="135" width="170" /></div>
                <p>温暖而忙碌</p>
            </div>
            <div id="AAA"></div>
        </div>

            <div id="footer">
                BLOG公司版权所有&copy;2010-2020
            </div>
        </div>       
    </body>
</html>
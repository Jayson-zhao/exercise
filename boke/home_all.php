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
            #menu a:hover{
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
            a{
                text-decoration: none;
                color:black;
            }
            #leftpart{
                width: 300px;
                float: left;
            }
            h3{
                background-repeat: no-repeat;
                height: 13px;
                width: 300px;
                margin-bottom: 30px;
                padding: 10px 0px;
                color: black;
                line-height: 25px;
                text-align: left;
                font-size: 15px;
                border-bottom: 2px solid red;
                margin: 8px;
            }
            #content{
                padding: 8px 10px;
                border-left: 2px solid khaki;
                border-right: 2px solid khaki;
            }
            ul{
                list-style-position: outside;
                text-align: center;
                list-style: none;
            }
            #leftpart li{
                list-style: none;
                margin-bottom: 10px;
            }
            #leftpart b{
                color: red;
                font-size: 14px;
                font-family: "宋体";
            }
            #leftpart img{
                display: block;
                margin: 0 auto;
                padding: 0px;
                
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
            #rightpart1{
                float: right;
                width: 500px;
                height: 225px;
                border: 2px solid rgba(114, 146, 25, 0.226);
                margin: 20px;
            }
            h2{
                font-size: 15px;
                background-color: rgba(114, 146, 25, 0.226);
                height: 30px;
                line-height: 30px;   
            }
            #rightpart1 li{
                text-align: left;
                padding: 5px;
            }
            span{
                float:right;
            }
            #rightpart2{
                float: right;
                width: 500px;
                height: 250px;
                border: 2px solid rgba(114, 146, 25, 0.226);
                margin-right: 20px;
            }
            #rightpart2 img{
                padding: 6px;
            }
            #AAA{
                clear: both;
            }
            #kanming{
                padding-left: 10px;
                padding-top:0px;
                padding-bottom: 10px;
            }
            #riqi{
                padding-left: 130px;
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
                    <a href="photo.php">相 册</a>
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
                <h3>>>关于我</h3>
                <a href="about.php"><img src="img/yang.jpg" height="320" width="240" /></a>
                <ul>
                    <li><a href="#"><img src="img/girl.gif">杨扬</a></li>
                    <li><a href="#">广东省广州市</a></li>
                    <li><b href="#">青春在沉默中逝去，昨日的繁华与辛酸都已淹灭在深海，细软的沙滩上走过，回头发现，走过的脚印早已被海水浸没，不见了踪影，细小的沙粒，有说不尽的哀伤，可惜没有人懂。</b></li> 
                </ul>        
        </div>

        <div id="rightpart1">
            <h2>>>日志</h2>
    <table>
    <?php
    include 'conn.php';
    $sql="select * from rizhi where 所属类型='日志' limit 0,5";
    $result=$conn->query($sql);
    while ($row= mysqli_fetch_array($result))
    {
    ?>
    <tr>
        <td id="kanming" style="border-bottom: 1px dashed;"><a href="rizhi.php"><?php echo $row['刊名'];?></a></td>
        <td id="riqi" style="border-bottom: 1px dashed;"><a href=""><?php echo $row['添加日期'];?></a></td>
    </tr>
    <?php
    }
    ?>
    </table>       
        </div>

        <div id="rightpart2">
            <h2>>>相册</h2>
            <div id="demo" style="overflow:hidden;width:500;" >
            <table  cellpadding=1 cellspacing=1 cellspace=0>
				<tr>
					<td valign=top  id=marquePic1>
						<table width='100%' cellspacing='0'>
							<tr>
                            <td><a href="photo.php"><img src="img/1.jpg" height="200" width="150" /></a></td>
                            <td><a href="photo.php"><img src="img/2.jpg" height="200" width="150" /></a></td>
                            <td><a href="photo.php"><img src="img/3.jpg" height="200" width="150" /></a></td>
                            <td><a href="photo.php"><img src="img/4.jpg" height="200" width="150" /></a></td>
                            <td><a href="photo.php"><img src="img/5.jpg" height="200" width="150" /></a></td>
                            <td><a href="photo.php"><img src="img/6.jpg" height="200" width="150" /></a></td>
							</tr>
						</table>
					</td>
					<td id=marquePic2 valign=top></td>
			  </tr>
			</table>
        </div>
        
        </div>
            <div id="AAA"></div>
        </div>
        

            <div id="footer">
                <div id="empty"></div>
                BLOG公司版权所有&copy;2010-2020</div>
        </div>
    </body>
</html>

<script type="text/javascript">
var speed=15
var marquePic2 = document.getElementById("marquePic2");
var demo = document.getElementById("demo");
var marquePic1 = document.getElementById("marquePic1"); 
marquePic2.innerHTML=marquePic1.innerHTML 
function Marquee(){ 
if(demo.scrollLeft>=marquePic1.scrollWidth){ 
demo.scrollLeft=0 
}else{ 
demo.scrollLeft++ 
} 
} 
var MyMar=setInterval(Marquee,speed) 
demo.onmouseover=function() {clearInterval(MyMar)} 
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
</script>
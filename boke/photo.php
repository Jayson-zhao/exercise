<!DOCTYPE html>
<html>
    <head>
        <title>学不会啊</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <script src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
        <style type="text/css"> 
        @keyframes rotateY1 {
            from {
                transform: rotateY(0deg);}
            to {
                transform: rotateY(40deg);}
        }
        @keyframes rotateY2 {
            from {
                transform: rotateY(40deg);}
            to {
                transform: rotateY(80deg);}
        }
        @keyframes rotateY3 {
            from {
                transform: rotateY(80deg);}
            to {
                transform: rotateY(120deg);}
        }
        @keyframes rotateY4 {
            from {
                transform: rotateY(120deg);}
            to {
                transform: rotateY(160deg);}
        }
        @keyframes rotateY5 {
            from {
                transform: rotateY(160deg);}
            to {
                transform: rotateY(200deg);}
        }
        @keyframes rotateY6 {
            from {
                transform: rotateY(200deg);}
            to {
                transform: rotateY(240deg);}
        }
        @keyframes rotateY7 {
            from {
                transform: rotateY(240deg);}
            to {
                transform: rotateY(280deg);}
        }
        @keyframes rotateY8 {
            from {
                transform: rotateY(280deg);}
            to {
                transform: rotateY(320deg);}
        }
        @keyframes rotateY9 {
            from {
                transform: rotateY(320deg);}
            to {
                transform: rotateY(360deg);}
        }
        @keyframes rotate-Y1 {
            from {
                transform: rotateY(0deg);}
            to {
                transform: rotateY(-40deg);}
        }
        @keyframes rotate-Y2 {
            from {
                transform: rotateY(-40deg);}
            to {
                transform: rotateY(-80deg);}
        }
        @keyframes rotate-Y3 {
            from {
                transform: rotateY(-80deg);}
            to {
                transform: rotateY(-120deg);}
        }
        @keyframes rotate-Y4 {
            from {
                transform: rotateY(-120deg);}
            to {
                transform: rotateY(-160deg);}
        }
        @keyframes rotate-Y5 {
            from {
                transform: rotateY(-160deg);}
            to {
                transform: rotateY(-200deg);}
        }
        @keyframes rotate-Y6 {
            from {
                transform: rotateY(-200deg);}
            to {
                transform: rotateY(-240deg);}
        }
        @keyframes rotate-Y7 {
            from {
                transform: rotateY(-240deg);}
            to {
                transform: rotateY(-280deg);}
        }
        @keyframes rotate-Y8 {
            from {
                transform: rotateY(-280deg);}
            to {
                transform: rotateY(-320deg);}
        }
        @keyframes rotate-Y9 {
            from {
                transform: rotateY(-320deg);}
            to {
                transform: rotateY(-360deg);}
        }
        #footer{
                clear: both;
                height:54px;
                text-align: center;
                line-height: 3px;
                background-image: url(img/footer.gif);
                background-repeat: no-repeat;
            }
        .my-container {
            width: 800px;
            height: 500px;
            margin: 20px auto;
            padding-bottom: 100px;
        }
        .photo-wrap {
            perspective: 800px;
            width: 800px;
        }
        .container {
            width: 800px;
            height: 500px;
            margin: 0 auto;
            position: relative;
            transform-style: preserve-3d;
        }
        .img {
            width: 200px;
            height: 118px;
            line-height: 118px;
            text-align: center;
            position: absolute;
            top: 160px;
            left: 300px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.9) inset;
            background: pink;
        }
        .img01 {
            transform: rotateY(0deg) translateZ(300px);
        }
        .img02 {
            transform: rotateY(40deg) translateZ(300px);
        }
        .img03 {
            transform: rotateY(80deg) translateZ(300px);
        }
        .img04 {
            transform: rotateY(120deg) translateZ(300px);
        }
        .img05 {
            transform: rotateY(160deg) translateZ(300px);
        }
        .img06 {
            transform: rotateY(200deg) translateZ(300px);
        }
        .img07 {
            transform: rotateY(240deg) translateZ(300px);
        }
        .img08 {
            transform: rotateY(280deg) translateZ(300px);
        }
        .img09 {
            transform: rotateY(320deg) translateZ(300px);
        }
        .prev {
            width: 30px;
            height: 70px;
            color: #6d8099;
            float: left;
            font-size: 22px;
            background: #ddd;
            line-height: 70px;
            text-align: center;
            position: relative;
            bottom: -175px;
            border-radius: 5px;
            z-index: 100;
        }
        .next {
            width: 30px;
            height: 70px;
            color: #6d8099;
            float: right;
            font-size: 22px;
            background: #ddd;
            line-height: 70px;
            text-align: center;
            position: relative;
            bottom: -175px;
            border-radius: 5px;
            z-index: 100;
        }
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
            #AAA{
                clear: both;
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
                    <a href="photo.php" class="selected">相 册</a>
                    <a href="leavemessage.php">留言板</a>
                    <a href="about.php">关于我</a>    
                </div>      
            </div>

    <div class="my-container">
        
        <div class="photo-wrap">  
            <div class="container">   
                <div class="img img01"><img src="img/1.jpg" height="300" width="210" /></div>
                <div class="img img02"><img src="img/2.jpg" height="300" width="210" /></div>
                <div class="img img03"><img src="img/3.jpg" height="300" width="210" /></div>
                <div class="img img04"><img src="img/4.jpg" height="300" width="210" /></div>
                <div class="img img05"><img src="img/5.jpg" height="300" width="210" /></div>
                <div class="img img06"><img src="img/6.jpg" height="300" width="210" /></div>
                <div class="img img07"><img src="img/7.jpg" height="300" width="210" /></div>
                <div class="img img08"><img src="img/8.jpg" height="300" width="210" /></div>
                <div class="img img09"><img src="img/9.jpg" height="300" width="210" /></div>
            </div>
        </div>

    </div>
    <div id="AAA"></div>
    <div id="footer">
    <th>如果你也喜欢这些图片，可以点击-><a href="download.php">下载</a></th>
                <div id="empty"></div>
                BLOG公司版权所有&copy;2010-2020</div>
    </div>


    <script>
    function IsPC() {
        var userAgentInfo = navigator.userAgent;
        var Agents = ["Android", "iPhone", "SymbianOS", "Windows Phone","iPad", "iPod"];
        var flag = true;
        for (var v = 0; v < Agents.length; v++) {
            if (userAgentInfo.indexOf(Agents[v]) > 0) {
                flag = false;
                break;
            }
        }
        return flag;
    }
    var now = 1;
    var changeImg = function(flag) {
        var str = flag == 'next' ? '-' : '';
        var className = 'rotate' + str + 'Y' + now;
        $('.container').removeAttr('style').css('animation', className + ' 1s ease-in-out forwards');
        now = (now+1) > 9 ? 1 : (now+1);
    }
    var timer = setInterval(function() {
        changeImg('next');
    }, 3000);
    if(IsPC()) {  
        $('.prev').click(function() {
            clearInterval(timer);
            changeImg('prev');
        });
        $('.next').click(function() {
            clearInterval(timer);
            changeImg('next');
        });
    } else {
        $('.prev').tap(function() {
            clearInterval(timer);
            changeImg('prev');
        });
        $('.next').tap(function() {
            clearInterval(timer);
            changeImg('next');
        });
    }
    </script>
</body>
</html>
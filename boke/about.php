<!DOCTYPE html>
<html>
    <head>
        <title>学不会啊</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <style type="text/css">
* {
    margin: 0;
    padding: 0;
}
.about {
    margin:auto;
    width: 1000px;
    height: 100%;
    overflow: hidden;
}

.about_bgc {
    width: 100%;
    height: 500px;
}

.about_tit {
    position: absolute;
    top: 280px;
    left: 0;
    right: 0;
    font-size: 28px;
    font-weight: 550;
    color: red;
    bottom: 0;
    width: 500px;
    margin: auto;
    text-align: center;
}

.ribbon {
    display: flex;
    justify-content: center;
    position: absolute;
    right: 300px;
    top: 50px;
    margin: auto;
}

.ribbon:after,
.ribbon:before {
    margin-top: 0.5em;
    content: "";
    display: flex;
    ;
    border: 1.5em solid #fff;
}

.ribbon:after {
    border-right-color: transparent;
}

.ribbon:before {
    border-left-color: transparent;
}

.ribbon a:link,
.ribbon a:visited {
    color: #000;
    text-decoration: none;
    height: 3.5em;
    overflow: hidden;
}

.ribbon span {
    background: #fff;
    display: inline-block;
    line-height: 3em;
    padding: 0 1.5em;
    margin-top: 0.5em;
    position: relative;
    -webkit-transition: background-color 0.2s, margin-top 0.2s;
    /* Saf3.2+, Chrome */
    -moz-transition: background-color 0.2s, margin-top 0.2s;
    /* FF4+ */
    -ms-transition: background-color 0.2s, margin-top 0.2s;
    /* IE10 */
    -o-transition: background-color 0.2s, margin-top 0.2s;
    /* Opera 10.5+ */
    transition: background-color 0.2s, margin-top 0.2s;
}

.ribbon a:hover span {
    background: #FFD204;
    margin-top: 0;
}

.ribbon span:before {
    content: "";
    position: absolute;
    top: 3em;
    left: 0;
    border-right: 0.5em solid #9B8651;
    border-bottom: 0.5em solid #fff;
}

.ribbon span:after {
    content: "";
    position: absolute;
    top: 3em;
    right: 0;
    border-left: 0.5em solid #9B8651;
    border-bottom: 0.5em solid #fff;
}

.me {
    display: flex;
    justify-content: center;
    margin-top: 60px;
    overflow: hidden;
}

.me_tit {
    width: 500px;
    line-height: 36px;
    font-size: 18px;
    margin-left: 50px;
    margin-top: 50px;
}

.me_img {
    width: 500px;
    height: 300px;
}

.animate {
    padding-left: 20px;
    width: 500px;
    font-size: 16px;
    color: #000;
    height: 300px;
    animation: 30s wordsLoop linear infinite normal;
}

@keyframes wordsLoop {
    0% {
        transform: translateY(100px);
        -webkit-transform: translateY(100px);
    }
    100% {
        transform: translateY(-100%);
        -webkit-transform: translateY(-100%);
    }
}

.videos {
    display: flex;
    margin-top: 60px;
    padding-bottom: 80px;
}

.videos span {
    width: 400px;
    margin-right: 100px;
    margin-left: 50px;
    color: #FFD204;
}

</style>

<body>
    <div class="about">
        <h3 class="about_tit">要不断的努力，才能成为更好的自己</h3>
        <img class="about_bgc" src="img/a.jpg" alt="">
        <div class='ribbon'>
            <a href="index.php"><span>首 页</span></a>
            <a href="rizhi.php"><span>日 志</span></a>
            <a href="photo.php"><span>相 册</span></a>
            <a href="leavemessage.php"><span>留言板</span></a>

        </div>
        <div class="me">
            <img class="me_img" src="img/b.jpg" alt="">
            <span class="me_tit animate ">我是一名大三的学生，平时爱好看看书，浏览网页资料，学习一下新知识，为以后毕业做些小打算。跟大多数人一样，对未来些许迷茫，当忽然之间脑海里闪现出来一些关于几年前的某个片段时，会情不自禁的回想那个时候的自己，关于那个曾经的所有点点滴滴也渐渐浮现出一些画面，突然拼命的想要去找一点在那个记忆点里的某些东西，寻找的过程中脑海里的思绪早已沉溺在回忆里面，忘了的还有那些忘不了的感触在这一刻全都涌了出来，我觉得最后寻找的结果或许已不重要了，因为这突如其来想要寻找的一些东西的念头，让自己突然变得好安静，莫名的思绪蔓延开来了，它又带我回到了现在已经体会不到的那种怦然心动的时候，仿佛打开了老旧的抽屉，里面装满了当初的成长，青涩，遗憾与那一种想起来会不禁忽然笑出来的感觉，可能想笑的是那时的自己，又或许是笑那带有遗憾结尾的时光，怀念真好。
                又一年即将过去了，生活一如既往的推着自己往前走，在行人眼里穿梭，而不时会回头看看的，还是那个仿佛不知在追逐着什么的自己，此刻的空气很好，它不会留下痕迹。
            </span>
        </div>
        <div class="videos">
            <span>
            这是我很喜欢的一个UP主，经常在B站上分享家里猫猫的视频。
            o(=•ェ•=)m
            o(=•ェ•=)m
            o(=•ェ•=)m
            o(=•ェ•=)m
            o(=•ェ•=)m
                    </span>
            <video width="600" controls id="video" preload="auto" height="100%"  loop="loop" type="video/mp4" src="video/videos.mp4"></video>

        </div>
    </div>
    </body>
</html>

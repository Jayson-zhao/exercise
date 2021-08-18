<!DOCTYPE html>
<html>
    <head>
        <title>学不会啊</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <style type="text/css">
* {
    margin: 0;
    padding: 0
}

.from {
    overflow: hidden;
    position: relative;
}

.bgc {
    width: 100%;
}

.submit {
    position: absolute;
    z-index: 9;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    margin-top: 150px;
    width: 500px;
    height: 300px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    color: #fff;
    display: flex;
    flex-direction: column;
}

.form_title {
    text-align: center;
    margin-top: 40px;
    font-size: 18px;
}

.form_input {
    padding: 0 30px;
    box-sizing: border-box;
    display: flex;
    margin-top: 20px;
}

.inputs {
    height: 40px;
    width: 300px;
    border-radius: 5px;
    border: none;
    background-color: #eee;
    color: #666;
    padding-left: 20px;
}

.password {
    height: 40px;
    width: 300px;
    border-radius: 5px;
    border: none;
    background-color: #eee;
    color: #666;
    padding-left: 20px;
}

.form_input span {
    width: 85px;
    align-self: center;
}

.btn_submit {
    align-self: center;
}

.btn {
    border: none;
    width: 80px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    background:chocolate;
    margin-top: 40px;
}

.btn:hover {
    background:blue;
}

.back {
    margin-left: 10px;
}

.btn2 {
    border: none;
    width: 80px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    background: #FFD204;
}
.btn2:hover {
    background: seagreen;
}
        </style>  
    <body>
    <div class="from">
    <form action="admin_process.php" method="post" enctype="multipart/form-data">
        <img class="bgc" src="img/ha.jpg" alt="">
        <div class="submit">
            <span class="form_title">管理员后台登录</span>
            <div class="form_input">
                <span>账号：</span>
                <input class="inputs" name="ZH" type="text" value="">
            </div>
            <div class="form_input">
                <span>密码：</span>
                <input class="password"  name="MM" type="password" value="">
            </div>
            <div class="btn_submit">
                <input class="btn" name="submit" type="submit" value="登录" id="btn-center">
            </div>
        </div>
    </form>
    </div>
</body>
</html>
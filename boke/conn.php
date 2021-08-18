<?php
        $servername = "localhost";
        $username = "zhao";
        $password = "123456";
        $dbname = "boke";
        // 创建连接
        $conn = new mysqli($servername, $username, $password, $dbname);
        if(!$conn){
                echo "数据库连接异常";
            }
        mysqli_query($conn, "set names 'UTF8'");
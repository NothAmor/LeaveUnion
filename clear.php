<?php
    function insert($file,$database,$name,$root,$pwd)//
    {
        //将表导入数据库
        header("Content-type: text/html; charset=utf-8");
        $_sql = file_get_contents($file);
        $_arr = explode(';', $_sql);
        $_mysqli = new mysqli($name,$root,$pwd,$database);
        if (mysqli_connect_errno()) 
        {
            exit('连接数据库出错');
        }
        else{
            //执行sql语句
            $_mysqli->query('set names utf8;');
            foreach ($_arr as $_value) {
                $_mysqli->query($_value.';');
            }
            echo "执行成功";
        }
        $_mysqli->close();
        $_mysqli = null;
    }


    insert("drop.sql","excel2","den1.mysql6.gear.host","excel2","Ig97P_BCoI!j");
?>
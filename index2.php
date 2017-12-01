<?php
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if ($user=='admin'){
        if ($pass=='123456'){
            echo '登陆成功';
        }else{
            echo '密码错误';
        }
    }else{
        echo '账户不存在';

    }
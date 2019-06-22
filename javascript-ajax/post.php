<?php
    header('Access-Control-Allow-Origin:*');
    //echo 'hello pony';
    $user = $_POST['name'];
    $pass = $_POST['pass'];
    if($user == 'pony' && $pass == '123456'){
        echo "{reg:1,text:'成功'}";
    }else{
        echo "{reg:0,text:'失败'}";
     }
    //echo $user.$pass;
?>
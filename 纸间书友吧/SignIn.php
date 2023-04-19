<?php

//定义一个弹窗方法
function alert($str,$url){
    echo '<script>alert("'.$str.'");location.href="'.$url.'"</script>';
}

//接受由登录界面传来的数据
session_start();

// 获取表单信息
$name = $_POST['s_name'];
$email = $_POST['s_Email'];
$pwd = $_POST['s_pwd'];
$pwd2 = $_POST['s_pwd2'];

// 定义正则表达式验证邮箱格式
$emailPattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";


// 判断表单输入是否为空或者合法
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 判断姓名是否为空
    if (empty($name)) {
        alert("姓名不能为空","index.html");
        exit;
    }
    // 判断邮箱是否为空或者格式是否正确
    if (empty($email)) {
        alert("邮箱不能为空","index.html");
        exit;
    }
    elseif (!preg_match($emailPattern, $email)) {
        alert("邮箱格式不正确","index.html");
        exit;
    }
    // 判断密码是否为空或者长度是否大于等于6
    if (empty($pwd)) {
        alert("密码不能为空","index.html");
        exit;
    }
    elseif (strlen($pwd) < 6) {
        alert("密码长度必须大于等于6","index.html");
        exit;
    }
    // 判断确认密码是否为空或者是否和密码一致
    if (empty($pwd2)) {
        alert("确认密码不能为空","index.html");
    } elseif ($pwd2 != $pwd) {
        alert("确认密码和密码不一致","index.html");
        exit;
    }
}


$account = array($name,$email,$pwd);

$user = "$account[0],$account[1],$account[2]";

$filename = "userMsg.csv";
//文件不存在就创建

if($fp = fopen($filename,"a+")){
    fwrite($fp,"$user\r\n");
    fclose($fp);
}

alert("注册成功","func.php");
exit;

?>


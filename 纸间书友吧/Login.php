<?php
//定义一个弹窗方法
function alert($str,$url){
    echo '<script>alert("'.$str.'");location.href="'.$url.'"</script>';
}

$temp = 0;   //文件中账号或者邮箱标志位   //0是账号名

//接受由登录界面传来的数据
session_start();

// 获取表单信息
global $name;
$name = $_GET['L_name'];
$pwd = $_GET['L_pwd'];


//正则邮箱
$emailPattern = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";

// 判断表单输入是否为空或者合法
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // 判断姓名是否为空
    if (empty($name)) {
        alert("账户不能为空","index.html");
        exit;
    }
    // 判断密码是否为空或者长度是否大于等于6
    if (empty($pwd)) {
        alert("密码不能为空","index.html");
        exit;
    }
    if (strlen($pwd) < 6) {
        alert("密码长度必须大于等于6","index.html");
        exit;
    }
    if (preg_match($emailPattern, $name)){
        $temp = 1;   // 1是邮箱
    }
}

$filename = "userMsg.csv";

//判断文件是否存在，文件不存在则不存在账户
if(!file_exists($filename)){
    alert("账号/文件信息不存在","index.html");
    exit;
}
$fp = fopen($filename,"r");


//分割每行的用户名和密码
$account = array();
$count = 0;
//循环读取文件
while(!feof($fp)){
    //去除每行的换行符和逗号
    $line = str_replace(array("," , "\r\n" ), " ", fgets($fp));
    $list = explode(" ", $line);
    $account[] = $list;
    $count++;
}
/* 二维数组 接收文件数据 */
/* 数据匹配 */


fclose($fp);
$loginflag = true;
for ($i=0; $i<$count; $i++){
    if($temp == 0){   /* 用户名 */
        if($account[$i][0] == $name && $account[$i][2] == $pwd){
            $loginflag = false;
            alert("登录成功","func.php");
            break;
        }

    }
    if($temp == 1){  /*  邮箱 */
        if($account[$i][1] == $name && $account[$i][2] == $pwd){
            $loginflag = false;
            alert("登录成功","func.php");
            break;
        }
    }
}
if($loginflag == true){
    alert("登录失败","index.html");
}
exit;
?>
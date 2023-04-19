<?php
    function alert($str,$url){
        echo '<script>alert("'.$str.'");location.href="'.$url.'"</script>';
    }



    session_start();


    $replyText = $_GET["replyText"];
    /* 判断信息是否为空 */
    if($replyText  == ""){
        $previous = $_SERVER['HTTP_REFERER'];//获取上一个页面的URL
        header("Location: $previous");//发送跳转头部
        exit;  /* 直接退出 */
    }

    /* 判断文件是否存在 */
    $filename = "replychat.csv";

    $fp = fopen($filename, 'a');  /* 追加方式 */

    /* 1.获取登录名 或者通过邮箱获取登录名 2.用一个随机数用户名方法 */
    $random = rand(10000, 99999);
    $username = "用户名:$random";
    /* 读入textarea 信息  获取当前时间 */
    $date = date("Y-m-d/H:i:s", time() + 8 * 3600);

    if($fp){
        /* 将用户名 文本内容 时间 记录到文件中 */
        fwrite($fp,"$username##$replyText##$date\r\n");
        /* 保存成功，关闭文件 */
        fclose($fp);
    }
    //echo "$username,$replyText,$date";
    alert("发送成功","func.php");
    exit;



?>


<?php
  /**
   * This file is modified
   * by yybird
   * @2016.06.02
  **/
?>

<?php
  require_once('./include/db_info.inc.php');
  require_once('./include/setlang.php');
  $view_title= "Welcome To Online Judge";
  require_once("./include/const.inc.php");
  require_once("./include/my_func.inc.php");
  $lost_user_id=$_POST['user_id'];
  $lost_email=$_POST['email'];
  $vcode=trim($_POST['vcode']);
  if($lost_user_id&&($vcode!= $_SESSION["vcode"]||$vcode==""||$vcode==null) ){
    echo "<script language='javascript'>\n";
    echo "alert('Verify Code Wrong!');\n";
    echo "history.go(-1);\n";
    echo "</script>";
    exit(0);
  }
  if(get_magic_quotes_gpc()){
        $lost_user_id=stripslashes($lost_user_id);
        $lost_email=stripslashes($lost_email);
  }
  $sql="SELECT `email` FROM `users` WHERE `user_id`='$lost_user_id'";
  $result=$mysqli->query($sql);
  $row = $result->fetch_array();
  $result->free();
  if($row && $row['email']==$lost_email && strpos($lost_email,'@')){
    $_SESSION['lost_user_id']=$lost_user_id;
    $_SESSION['lost_key']=strtoupper(substr(MD5($user_id.rand(0,9999999)),0,16));
  
    require_once "include/email.class.php";
    //******************** 配置信息 ********************************
    $smtpserver = "smtp.exmail.qq.com";//SMTP服务器
    $smtpserverport = 25;//SMTP服务器端口
    $smtpusermail = "forgot@hsacm.com";//SMTP服务器的用户邮箱
    $smtpemailto = $row['email'];//发送给谁
    $smtpuser = "forgot@hsacm.com";//SMTP服务器的用户帐号
    $smtppass = "hznuojForgot123";//SMTP服务器的用户密码
    $mailtitle = "HZNUOJ系统密码重置激活";//邮件主题
    $mailcontent = "$lost_user_id:\n您好！\n您在HZNUOJ系统选择了找回密码服务,为了验证您的身份,请将下面字串输入口令重置页面以确认身份:".$_SESSION['lost_key']."\n\n这个key也将成为您重置成功后的新密码！\n\n\n杭州师范大学在线评测系统";//邮件内容
    $mailtype = "TXT";//邮件格式（HTML/TXT）,TXT为文本邮件
    //************************ 配置信息 ****************************
    $smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $smtp->debug =false;//是否显示发送的调试信息
    $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
    require("template/".$OJ_TEMPLATE."/lostpassword2.php");
  } else{
  /////////////////////////Template
    require("template/".$OJ_TEMPLATE."/lostpassword.php");
  }
/////////////////////////Common foot
?>
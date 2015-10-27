<?php
namespace Home\Controller;
use Think\Controller;

class MailController extends Controller {
	public function test() {
		$mail = new \Org\Util\PHPMailer(); //建立邮件发送类
		$address = '740681141@qq.com';
		$mail->IsSMTP(); // 使用SMTP方式发送
		$mail->FromName = "您的名称";
		$mail->AddAddress($address, ""); //收件人地址，可以替换成任何想要接收邮件的email信箱,格式是AddAddress("收件人email","收件人姓名")
		//$mail->AddReplyTo("", "");
		//$mail->AddAttachment("/var/tmp/file.tar.gz"); // 添加附件
		//$mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
		$mail->Subject = "PHPMailer测试邮件"; //邮件标题
		$mail->Body = "Hello,这是测试邮件"; //邮件内容
		$mail->AltBody = "This is the body in plain text for non-HTML mail clients"; //附加信息，可以省略
		if (!$mail->Send()) {
			echo "邮件发送失败. <p>";
			echo "错误原因: " . $mail->ErrorInfo;
			exit;
		}
		echo "邮件发送成功";
	}
}
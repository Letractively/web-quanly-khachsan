
<?php
// file 03-gmail.php
//Nhúng thư viện phpmailer
require_once('./include/subpages/phpmailer/class.phpmailer.php');
//Khởi tạo đối tượng
$mail = new PHPMailer();

$ten = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['phone'];
$mess = $_POST['msg'];

/*=====================================
* THIET LAP THONG TIN GUI MAIL
*=====================================*/

$mail->IsSMTP(); // Gọi đến class xử lý SMTP
$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // Sử dụng đăng nhập vào account
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com"; // Thiết lập thông tin của SMPT
$mail->Port = 465; // Thiết lập cổng gửi email của máy
$mail->Username = "G09@gmail.com"; // SMTP account username
$mail->Password = "G09"; // SMTP account password

//Thiet lap thong tin nguoi gui va email nguoi gui
$mail->SetFrom($mail,$ten);
 
//Thiết lập thông tin người nhận
$mail->AddAddress("G09@gmail.com", "G09");
//$mail->AddAddress("zendvn@yahoo.com", "ZendVN Group");

//Thiết lập email nhận email hồi đáp
//nếu người nhận nhấn nút Reply
$mail->AddReplyTo($mail,$ten);

  /*=====================================
* THIET LAP NOI DUNG EMAIL
*=====================================*/

//Thiết lập tiêu đề
$mail->Subject = "email";

//Thiết lập định dạng font chữ
$mail->CharSet = "utf-8";

//Thiết lập nội dung chính của email
$body = $mess;
$mail->Body = $body;

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Message sent!";
}
?>
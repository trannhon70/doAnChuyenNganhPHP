<?php
     
    // require "PHPMailer-master/src/PHPMailer.php"; 
    // require "PHPMailer-master/src/SMTP.php"; 
    // require 'PHPMailer-master/src/Exception.php'; 
    include  "PHPMailer-master/src/PHPMailer.php";
include  "PHPMailer-master/src/Exception.php";
include  "PHPMailer-master/src/OAuth.php";
include  "PHPMailer-master/src/POP3.php";
include  "PHPMailer-master/src/SMTP.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    class Mailer{
        
        public function dathangmail($tieude,$noidung,$maildathang){
            $mail = new PHPMailer(true);
            //$mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
            try {
                $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
                $mail->isSMTP();  
                $mail->CharSet  = "utf-8";
                $mail->Host = 'smtp.gmail.com';  //SMTP servers
                $mail->SMTPAuth = true; // Enable authentication
                $mail->Username = 'nhontrau03@gmail.com'; // SMTP username
                $mail->Password = '0968222502';   // SMTP password
                $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
                $mail->Port = 465;  // port to connect to                
                $mail->setFrom('nhontrau03@gmail.com', 'Kevin trần' ); 
                $mail->addAddress($maildathang); //mail và tên người nhận  
                //$mail->addCC('nhontrau03@gmail.com');
                $mail->isHTML(true);  // Set email format to HTML
                $mail->Subject = $tieude;
                $noidungthu = $noidung; 
                $mail->Body = $noidungthu;
                $mail->smtpConnect( array(
                    "ssl" => array(
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                        "allow_self_signed" => true
                    )
                ));
                $mail->send();
                echo 'Đã gửi mail xong';
            } catch (Exception $e) {
                echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
            }
        }
    }
?>
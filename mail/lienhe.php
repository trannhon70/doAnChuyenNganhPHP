<?php  
    if(isset($_POST['btn'])==true){
        GuiMail();
        header("location:lienhe_guimailxong.php");
    }
    function GuiMail(){   
        require "PHPMailer-master/src/PHPMailer.php"; 
        require "PHPMailer-master/src/SMTP.php"; 
        require 'PHPMailer-master/src/Exception.php'; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
        try {
            $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            //mailStrap
            // $mail->Host = 'smtp.mailtrap.io';  //SMTP servers
            // $mail->SMTPAuth = true; // Enable authentication
            // $mail->Username = '95193c9d6ef6f2'; // SMTP username
            // $mail->Password = '0611d54d459eaf';   // SMTP password
            // $mail->SMTPSecure = 'tsl';  // encryption TLS/SSL 
            // $mail->Port = 587;  // port to connect to      465/587    
            //Gmail
            $mail->Host = 'smtp.gmail.com';  //SMTP servers
            $mail->SMTPAuth = true; // Enable authentication
            $mail->Username = 'nhontrau03@gmail.com'; // SMTP username
            $mail->Password = '0968222502';   // SMTP password
            $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
            $mail->Port = 465;  // port to connect to      465/587          
            $mail->setFrom('nhontrau03@gmail.com', 'kevinTran' ); 
            $mail->addAddress('kevintran351996@gmail.com', 'nhon'); //mail và tên người nhận  
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = 'Thư gửi từ form liên hệ';
            //$noidungthu = '<h2>Chào bạn ! chúc bạn làm ăn phát đạt </h2>'; 
            $noidungthu = file_get_contents("noidungthulienhe.txt");
            $noidungthu = str_replace(
                [ '{email}' , '{noidung}'], 
                [$_POST['email'], $_POST['noidunglienhe']]
                , $noidungthu);
            $mail->Body = nl2br($noidungthu);
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
     }//function GuiMail
?>
<form method="post" action=""> 
  <div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" class="form-control bg-light" name="email" placeholder="Nhập email của bạn">
  </div>
  <div class="mb-3">
  <label class="form-label">Nội dung liên hệ</label>
  <textarea class="form-control bg-light" name="noidunglienhe" rows="5"></textarea>
  </div>  
  <div class="mb-3">
     <button name="btn" type="submit" class="btn btn-primary">GỬI LIÊN HỆ</button>
  </div>
 </form>
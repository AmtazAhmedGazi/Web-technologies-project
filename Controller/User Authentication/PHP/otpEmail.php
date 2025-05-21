<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../Controller/PHP Mailer/Exception.php';
require '../../Controller/PHP Mailer/PHPMailer.php';
require '../../Controller/PHP Mailer/SMTP.php';

function otp($email) {
    $randomSecureNumber = random_int(100000, 999999);
    $num = $randomSecureNumber;  // Generate OTP inside function

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Change to DEBUG_SERVER for verbose output
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'amtazahmed@gmail.com';    // Your SMTP username
        $mail->Password   = 'wwta xmxb suqs gwsq';      // Your SMTP password (App password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('amtazahmed@gmail.com', 'OTP');
        $mail->addAddress($email, 'Social Media App');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'OTP for user creation';
        $mail->Body    = "Your OTP is: <br><b>$num</b>";

        $mail->send();
        // Optionally remove echo or log success instead
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        return false;  // Indicate failure
    }

    return $num;  // Return the OTP
}
?>

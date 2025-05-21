<?php 
    error_reporting(E_ALL);

require_once('../../Controller/User Authentication/PHP/otpEmail.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $email = $_SESSION['email'] ;
    $otp = otp($email);
    $_SESSION['otp'] = $otp;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>OTP</title>
    <link
      rel="stylesheet"
      href="../../Assets/User%20Authentication/styleOtpEmail.css"
    />
  </head>
  <body>
    <section>
      <h1>OTP</h1>
      <form id="form-1" method="post" >
        <table>
          <tr>
            <td><label for="otp">Enter OTP:</label></td>
          </tr>
          <tr>
            <td>
              <input
                type="text"
                id="otp"
                name="otp"
                placeholder="6 digit OTP"
              />
            </td>
          </tr>
          <tr>
            <td>
              <input
                type="submit"
                id="submit"
                name="submit"
                value="Confirm OTP"
              />
            </td>
            <td>
              <input
                type="button"
                id="resend"
                name="resend"
                value="resend OTP"
                onclick =""
              />
            </td>
          </tr>
        </table>
      </form>
    </section>

    <script src="../../Controller/User%20Authentication/JS/scriptOtpEmail.js"></script>
  </body>
</html>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userOtp = trim($_POST['otp'] ?? '');
    if ($userOtp == ($_SESSION['otp'] ?? '')) {
        unset($_SESSION['otp']);
        setcookie('status', 'true', time() + 3000, '/');
        header('Location: userCreate.html');
        exit();
    } else {
        echo "<p>Invalid OTP. Please try again.</p>";
        header('Location: otpEmail.php');
    }
}
?>

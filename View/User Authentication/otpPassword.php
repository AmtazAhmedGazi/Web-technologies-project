<?php 
session_start();
require_once('../../Controller/User Authentication/PHP/otpPassword.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $email = $_SESSION['email'];
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
      href="../../Assets/User%20Authentication/styleOtpPassword.css"
    />
  </head>
  <body>
    <h1>OTP SUBMISSION</h1>
    <form id="form-1" method="post" >
      <table>
        <tr>
          <td>
            <label for="otp">Check your Email for OTP</label>
          </td>
        </tr>

        <tr>
          <td>
            <input type="text" id="otp" name="otp" placeholder="6 digit OTP" />
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

              <input
                type="button"
                id="resend"
                name="resend"
                value="Resend OTP"
              />
            </td>
        </tr>
      </table>
    </form>
    <script src="../../Controller/User%20Authentication/JS/scriptOtpPassword.js"></script>
  </body>
</html>
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userOtp = trim($_POST['otp'] ?? '');
    if ($userOtp == ($_SESSION['otp'] ?? '')) {
        unset($_SESSION['otp']);
        setcookie('status', 'true', time() + 3000, '/');
        header('Location: confirmPassword.html');
    } else {
        echo "<p>Invalid OTP. Please try again.</p>";
        header('Location: otpPassword.php');
    }
}
?>

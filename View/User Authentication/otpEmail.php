<?php 
session_start();
require_once('../../Controller/User Authentication/PHP/otpEmail.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $otp = otp();
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
      <form id="form-1" method="post" onsubmit="return validateOtp();">
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
                id="otpBtn"
                name="otpBtn"
                value="Confirm OTP"
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
    }
}
?>

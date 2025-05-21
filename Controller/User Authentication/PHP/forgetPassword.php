<?php 
    error_reporting(E_ALL);
    require_once('../../../Model/userModel.php');
    session_start();

$email = "";

// function test_input($data){
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }


if (isset($_POST['submit'])){
 
$email = trim($_POST["email"]);

      if ($email=="" ){
          echo "Submission Failed: 'null email!' ";
      }
        else{ 
              $user = ['email'=> $email ];
              $status = forgetPassword($user);
              if($status){
                  $_SESSION['email'] = $email;
                  header('location: ../../../View/User%20Authentication/otpPassword.php');
              }else{
                header('Location: ../../../View/User%20Authentication/forgetPassword.html?error=existing email ');
              }
            }

}
else {
  header('Location: ../../../View/User%20Authentication/forgetPassword.html');
 }

?>

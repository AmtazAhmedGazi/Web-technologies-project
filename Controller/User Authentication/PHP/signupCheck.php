<?php 
    error_reporting(E_ALL);
    require_once('../../../Model/userModel.php');
    session_start();

$email = $username = $password = $confirmPassword = "";

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if (isset($_REQUEST["submit"])){
 
$username = test_input($_REQUEST["username"]);
$password = test_input($_REQUEST["password"]);
$confirmPassword = test_input($_REQUEST["confirmPassword"]);
$email = test_input($_REQUEST["email"]);

      if ($email=="" || $username=="" || $password== "" || $confirmPassword== ""){
          echo "Submission Failed: 'null username/password/email!' ";
      }
       else if(!ctype_alpha($username)){
         echo"Username Invalid";
      }
        else{ 
              $user = ['username'=> $username, 'password'=>$password, 'email'=> $email ];
              $status = signup($user);
              if($status){
                  setcookie('status', 'true', time()+3000, '/');
                  header('location: ../../../View/User%20Authentication/otpEmail.php');
              }else{
                header('Location: ../../../View/User%20Authentication/signUp.html?error=existing email or username');
              }
            }

}
else {
  header('Location: ../../../View/User%20Authentication/login.html');
 }

?>

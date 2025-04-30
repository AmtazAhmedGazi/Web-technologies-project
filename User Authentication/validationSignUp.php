<?php 
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
    echo "<h2>Submission Failed Empty Field</h2>";
 }
 if(ctype_alpha($username)){
   echo "username ok";
 }
 else{
   echo"Username Invalid";
 }

    echo "<h2>Your Input:</h2>";
    echo $email;
    echo "<br>";
    echo $username;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $confirmPassword;
 
 
}

else {
   echo "Invalid URL";
 }

// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $email = test_input($_POST["email"]);
//     $username = test_input($_POST["username"]);
//     $password = test_input($_POST["password"]);
//     $confirmPassword = test_input($_POST["confirmPassword"]);
// }


?>



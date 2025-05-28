<?php
error_reporting(E_ALL);
require_once('../../../Model/userModel.php');
session_start();
// $username = $_SESSION['username'] ;
$username ='amtaz' ;

if (isset($_POST['submit'])){

    $name = trim($_POST['name']);
    $date = trim($_POST['date'] );
    $gender = $_POST['gender'] ?? '';
    $address = trim($_POST['address']);
    $contactNumber = trim($_POST['contacNumber']);
    $prefix = "+880";
    $numberPart = substr($contactNumber, strlen($prefix));

    if (!isset($_FILES['profilPic'])) {
        echo "Please upload a profile picture.";
        header('Location: ../../../View/User%20Authentication/userCreate.html');
    } else {
        $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
        $fileType = mime_content_type($_FILES['profilPic']['tmp_name']);

        if (!in_array($fileType, $allowedTypes)) {
            echo "Profile picture must be a JPG ,JPEG or PNG file.";
            header('Location: ../../../View/User%20Authentication/userCreate.html');
        }
        else{ 
        $src = $_FILES['profilPic']['tmp_name'];
        $des = "../../../Assets/upload".$_FILES['profilPic']['name'];

        if( move_uploaded_file($src, $des)){
            echo "Success";
        }else{
            echo "Error!";
        }
        }
    }
    if ($name =="") {
        echo "Name cannot be empty.";
        header('Location: ../../../View/User%20Authentication/userCreate.html');
    } else if (is_numeric($name)) {
        echo "Name cannot be a number.";
        header('Location: ../../../View/User%20Authentication/userCreate.html');
    }
    else if ($gender=="") {
        echo  "Gender must be selected.";
        header('Location: ../../../View/User%20Authentication/userCreate.html');
    }
    else if ($date=="") {
        echo "Date cannot be empty.";
        header('Location: ../../../View/User%20Authentication/userCreate.html');
    }
    else if ($contactNumber=="") {
        echo "Contact number is missing.";
        header('Location: ../../../View/User%20Authentication/userCreate.html');
    } 
    else if (!str_starts_with($contactNumber, $prefix)) {
        echo "Contact number must start with +880.";
        header('Location: ../../../View/User%20Authentication/userCreate.html');
    }  
    else if (strlen($numberPart) !== 10 || !is_numeric($numberPart)) {
            echo "Contact number must have exactly 10 digits after +880.";
            header('Location: ../../../View/User%20Authentication/userCreate.html');
    }
    else if($address==""){
        echo "Address cannot be empty.";
        header('Location: ../../../View/User%20Authentication/userCreate.html');
    }
    else{
            $user = ['username'=> $username, 'name'=> $name, 'gender'=>$gender, 'date'=> $date , 'address'=>$address, 'contactNumber'=> $contactNumber , 'des' => $des  ];
            $status = usercreate($user);
            if($status){
                session_destroy();
                echo "Profile Updated  Successfully";
                header('location: ../../../View/User%20Authentication/login.html');
            }else{
                header('Location: ../../../View/User%20Authentication/userCreate.html');
            }

    }
}
 else{
        header('Location: ../../../View/User%20Authentication/userCreate.html');
}



?>
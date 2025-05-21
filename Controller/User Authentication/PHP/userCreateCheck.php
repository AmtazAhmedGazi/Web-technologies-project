<?php
error_reporting(E_ALL);
require_once('../../../Model/userModel.php');
session_start();
// $email = $_SESSION['email'] ;


if (isset($_POST['submit'])){

    $name = trim($_POST['name']);
    $date = trim($_POST['date'] );
    $gender = $_POST['gender'] ?? '';
    $address = trim($_POST['address']);
    $contactNumber = trim($_POST['contacNumber']);
    $prefix = "+880";
    $numberPart = substr($contactNumber, strlen($prefix));

    // if (!isset($_FILES['profilPic']) || $_FILES['profilPic']['error'] !== UPLOAD_ERR_OK) {
    //     echo "Please upload a profile picture.";
    // } else {
    //     $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png'];
    //     $fileType = mime_content_type($_FILES['profilPic']['tmp_name']);

    //     if (!in_array($fileType, $allowedTypes)) {
    //         echo "Profile picture must be a JPG or PNG file.";
    //     }
    // }
    if ($name =="") {
        echo "Name cannot be empty.";
    } else if (is_numeric($name)) {
        echo "Name cannot be a number.";
    }
    else if ($gender=="") {
        echo  "Gender must be selected.";
    }
    else if ($date=="") {
        echo "Date cannot be empty.";
    }
    else if ($contactNumber=="") {
        echo "Contact number is missing.";
    } 
    else if (!str_starts_with($contactNumber, $prefix)) {
        echo "Contact number must start with +880.";
    }  
    else if (strlen($numberPart) !== 10 || !is_numeric($numberPart)) {
            echo "Contact number must have exactly 10 digits after +880.";
    }
    else if($address==""){
        echo "Address cannot be empty.";
    }
    else{
         echo "Profile Updated  Successfully";
        header('location: ../../../View/User%20Authentication/login.html');
    }
}
 else{
        header('Location: ../../../View/User%20Authentication/userCreate.html');
}



?>
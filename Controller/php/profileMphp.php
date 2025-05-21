<?php
$fullName = $email = $avatar = $password = $confirmPassword = "";
$fullNameErr = $emailErr = $avatarErr = $passwordErr = $confirmPasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fullName"])) {
        $fullNameErr = "Full Name is required";
    } else {
        $fullName = test_input($_POST["fullName"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $fullName)) {
            $fullNameErr = "Only letters and white space allowed";
        }
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate Avatar (optional, just check if file was uploaded)
    if (!empty($_FILES["avatar"]["name"])) {
        $avatar = $_FILES["avatar"]["name"];
        $allowedTypes = ["image/jpeg", "image/png", "image/gif"];
        $fileType = $_FILES["avatar"]["type"];
        
        if (!in_array($fileType, $allowedTypes)) {
            $avatarErr = "Invalid file type. Only JPEG, PNG, and GIF allowed.";
        }
    }

    // Validate Password
    if (!empty($_POST["password"])) {
        $password = test_input($_POST["password"]);
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters long";
        }
    }

    // Validate Confirm Password
    if (!empty($_POST["confirmPassword"])) {
        $confirmPassword = test_input($_POST["confirmPassword"]);
        if ($password != $confirmPassword) {
            $confirmPasswordErr = "Passwords do not match";
        }
    }

    // If there are no errors, process the form data
    if (empty($fullNameErr) && empty($emailErr) && empty($avatarErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
        // Proceed with saving the data or updating the profile
        // Here you can insert the data into a database or update the user profile
        echo "Profile updated successfully!";
    }
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);  // This ensures that special characters are converted to HTML entities
    return $data;
}
?>
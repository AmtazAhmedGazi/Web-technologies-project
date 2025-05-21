<?php

if (isset($_POST["submit"])) {
    $text = trim($_POST["postText"] );
    $hasText = !empty($text);
    $hasFile = isset($_FILES["mediaUpload"]) && $_FILES["mediaUpload"]["error"] === UPLOAD_ERR_OK;

    if (!$hasText && !$hasFile) {
        echo "Nothing is posted.";
    }

    if ($hasText) {
        echo "Text posted ";
    }

    if ($hasFile) {
        $target_dir = "../../../Assets/Post Creation/upload/";
        $target_file = $target_dir . basename($_FILES["mediaUpload"]["name"]);

        $fileType = mime_content_type($_FILES["mediaUpload"]["tmp_name"]);
        $allowedTypes = ['image/jpeg', 'image/png', 'image/jpg', 'video/mp4'];

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["mediaUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["mediaUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Unsupported file type.";
        }
    }

} else {
    echo "Invalid request method.";
}
?>

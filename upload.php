<?php
// Define a target directory where the file will be saved
$targetDir = "uploads/";

// Concatenate the directory path with the uploaded file name
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

// Check if the file has been uploaded correctly
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded successfully.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>

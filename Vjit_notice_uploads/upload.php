

<?php

// Getting uploaded file
$file = $_FILES["file"];

// Uploading in "uplaods" folder
move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
echo "File uploaded successfully";

// Redirecting back
header("Location: " . $_SERVER["HTTP_REFERER"]);

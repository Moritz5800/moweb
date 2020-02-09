<?php

// Getting uploaded file
$file = $_FILES["Datei"];

// Uploading in "uplaods" folder
move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);

// Redirecting back
header("Location: index.php");
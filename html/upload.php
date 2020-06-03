<?php
// https://www.w3schools.com/php/php_file_upload.asp
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
 if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if(true) {
  //  echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 1;
}


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "tex") {
  echo "Sorry, only .tex files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
echo nl2br("\n");
echo nl2br("\n");

  echo nl2br("\n");
  echo(($_FILES["fileToUpload"]["tmp_name"]));

  /* $latexscriptcommand = escapeshellcmd('latex2mobius.py $_FILES["fileToUpload"]["tmp_name"]');
  $latexscriptcommand = escapeshellcmd('python3 var/www/html/testing.py');
  $output = shell_exec($latexscriptcommand);
  echo $output; */
  echo nl2br("\n");
// $result_array = json_decode($result);
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


?>

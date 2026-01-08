<?php
session_start();
$files = [];

if (!empty($_FILES['pdfs']['name'][0])) {
  foreach ($_FILES['pdfs']['name'] as $i => $name) {

    if ($_FILES['pdfs']['error'][$i] === 0) {
      $tmp = $_FILES['pdfs']['tmp_name'][$i];
      $newName = time() . "_" . basename($name);
      $path = "uploads/" . $newName;

      if (move_uploaded_file($tmp, $path)) {
        $files[] = $newName;
      }
    }
  }
}

$_SESSION['pdfs'] = $files;
header("Location: result.php");
exit;

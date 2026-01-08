<?php
session_start();
$pdfs = $_SESSION['pdfs'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Uploaded PDFs</title>

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<div class="navbar">
  <div class="nav-container">
    <div class="logo">MySite</div>
    <div class="menu">
      <a href="index.php">Home</a>
    </div>
  </div>
</div>

<div class="result-container">
  <h2>Uploaded PDFs</h2>

  <?php if ($pdfs): ?>
    <?php foreach ($pdfs as $pdf): ?>
      <div class="pdf-row">
        <div class="pdf-name">
          <i class="fa-solid fa-file-pdf"></i>
          <?= $pdf ?>
        </div>

        <div class="pdf-actions">
          <a href="uploads/<?= $pdf ?>" target="_blank">
            <i class="fa-solid fa-eye"></i>
          </a>
          <a href="uploads/<?= $pdf ?>" download>
            <i class="fa-solid fa-download"></i>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>No PDF uploaded</p>
  <?php endif; ?>
</div>

</body>
</html>

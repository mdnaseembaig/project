<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>MySite</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
  <div class="nav-container">
    <div class="logo">Visite save Pdf File</div>
    <div class="menu">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
      <a href="#">Save File</a>
    </div>
  </div>
</div>

<form action="upload.php" method="POST" enctype="multipart/form-data">

<!-- PDF BOXES -->
<div class="pdf-grid">
  <?php for ($i=0; $i<6; $i++): ?>
    <label class="pdf-box">
      <input type="file" name="pdfs[]" accept="application/pdf" hidden>
      <i class="fa-solid fa-plus"></i>
      <span>Upload PDF</span>
    </label>
  <?php endfor; ?>
</div>

<!-- LOGIN FORM -->
<div class="login-card">
  <h2>Login Form</h2>

  <div class="input-group">
    <i class="fa-solid fa-user"></i>
    <input type="text" name="username" placeholder="Username" required>
  </div>

  <div class="input-group">
    <i class="fa-solid fa-envelope"></i>
    <input type="email" name="email" placeholder="Email" required>
  </div>

  <button type="submit">Submit</button>
</div>

</form>

</body>
</html>

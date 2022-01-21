<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Aplikasi Chat Anjayyy</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Nama Awal</label>
            <input type="text" name="fname" placeholder="Nama Awal" required>
          </div>
          <div class="field input">
            <label>Nama Akhir</label>
            <input type="text" name="lname" placeholder="Nama Akhir" required>
          </div>
        </div>
        <div class="field input">
          <label>Email Anda</label>
          <input type="text" name="email" placeholder="Masukan Email Anda" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Ambil Gambar</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Pencet Anjay">
        </div>
      </form>
      <div class="link">Sudah Punya Akun? <a href="login.php">Login Saiki</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>

<div id="contact" class="footer">
  <div class="container">
    <div class="row footer-div justify-content-between">
      <div class="col-md-4">
        <h4 class="title-footer">Hubungi Nanti</h4>
        <p><strong>Email kamu, untuk dihubungi</strong></p>
        <form class="form-newsletter">
          <div class="input-group">
            <input type="email" class="form-control form-bottom" placeholder="Masukan emailmu...">
            <span class="input-group-btn">
              <button class="btn btn-default btn-search-bottom" type="button"><strong>GO</strong></button>
            </span>
          </div>
        </form>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <h4 class="title-footer">Hubungi Saya</h4>
        <p><strong>Sumiarni 2010010530 <br> Banjarmasin, Kalimantan Selatan</strong></p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginLabel">login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="username">username</label>
            <input type="text" class="form-control" id="username" name="username" required="">
          </div>
          <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" id="password" name="password" required="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="login">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
$user = 'admin';
$pass = 1234;
if (isset($_POST["login"])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  //cek apakah login berhasil
  if ($user == $username and $pass == $password) {
    echo "<script> document.location.href = 'admin.php' ; </script>";
  } else
    echo "<script> 
  alert('Login Gagal, Username dan password tidak sesuai');
  document.location.href = 'index.php' ;
  </script>";
} ?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
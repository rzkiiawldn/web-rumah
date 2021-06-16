<?php
include "function.php";

$blog = $conn->query("SELECT * FROM blog ORDER BY id_blog ASC");
$num = mysqli_num_rows($blog);

/*====================== TAMBAH =====================*/
if (isset($_POST["tambahblog"])) {

  //cek apakah data berhasil ditambahkan
  if (tambahblog($_POST) > 0) {
    echo "<script> 
    alert('data berhasil ditambahkan');
    document.location.href = 'admin.php' ;
    </script>";
  } else
    echo "<script> 
    alert('data gagal ditambahkan');
    document.location.href = 'admin.php' ;
    </script>";
}


/* ====================== EDIT ============================*/
if (isset($_POST["editblog"])) {

  //cek apakah blog berhasil diubah
  if (editblog($_POST) > 0) {
    echo "<script> 
    alert('blog berhasil diubah');
    document.location.href = 'admin.php' ;
    </script>";
  } else
    echo "<script> 
    alert('blog gagal diubah');
    document.location.href = 'admin.php' ;
    </script>";
}

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Blog!</title>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
      <a class="navbar-brand" href="#">WebBlog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link active" href="index.php" onclick="return confirm('apakah anda yakin ingin keluar ?')">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main -->
  <main>
    <div class="container mt-4">
      <nav aria-label="breadcrumb mt-2" style="padding-top: 20px">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
      </nav>
      <h3>Blog</h3>
      <a href="" class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#tambah">Tambah Blog</a>
      <p>Total blog : <?= $num; ?></p>
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col" width="5%">#</th>
              <th scope="col">blog</th>
              <th scope="col">keterangan</th>
              <th scope="col">created by</th>
              <th scope="col">created date</th>
              <th scope="col">Foto</th>
              <th scope="col" width="12%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if ($num == 0) : ?>
              <tr>
                <td colspan="7" class="text-center">blog Kosong !</td>
              </tr>
            <?php else : ?>
              <?php $no = 1;
              foreach ($blog as $row) : ?>
                <tr>
                  <th scope="row"><?= $no++; ?></th>
                  <td><?= $row['judul']; ?></td>
                  <td><?= substr($row['keterangan'], 0, 50); ?>..</td>
                  <td><?= $row['created_by']; ?></td>
                  <td><?= $row['created_date']; ?></td>
                  <td><img src="img/<?= $row['foto']; ?>" class="img" width="120"></td>
                  <td>
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#edit<?= $row['id_blog']; ?>">edit</a>
                    <a href="hapus.php?id_blog=<?= $row["id_blog"]; ?>" onclick="return confirm('yakin?');" class="btn btn-sm btn-danger">hapus</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <p style="margin-bottom: 100px"></p>
  <footer>
    <p class="text-center mt-2">&copy; Blog <?= date('Y'); ?></p>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahLabel">Tambah blog</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" required="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10" required></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="created_by">Created By</label>
                  <input type="text" class="form-control" id="created_by" name="created_by" required="">
                </div>
              </div>
              <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto" class="form-control">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="tambahblog">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- EDIT Modal -->
  <?php foreach ($blog as $row) : ?>
    <div class="modal fade" id="edit<?= $row['id_blog']; ?>" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editLabel">Tambah blog</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <input type="hidden" name="id_blog" value="<?= $row['id_blog']; ?>">
              <input type="hidden" name="foto_lama" value="<?= $row["foto"]; ?>">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $row['judul']; ?>" required="">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="10" required><?= $row['keterangan']; ?></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="created_by">Created By</label>
                    <input type="text" class="form-control" id="created_by" name="created_by" value="<?= $row['created_by']; ?>" required="">
                  </div>
                </div>
              </div>
              <div class="form-group row no-gutters mt-2">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="img/<?= $row['foto']; ?>" class="img-thumbnail">
                  </div>
                  <div class="col-sm-9">
                    <div class="custom-file">
                      <input type="file" name="foto" class="custom-file-input">
                      <label class="custom-file-label" for="custom-file">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="editblog">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endforeach; ?>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- Script untuk menampilkan nama file dalam edit foto -->
  <script>
    $('.custom-file-input').on('change', function() {
      let fileName = $(this).val().split('\\').pop();
      $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 5000);
  </script>
</body>

</html>
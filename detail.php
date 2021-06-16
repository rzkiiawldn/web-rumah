  <?php require_once("template/header.php");
    $id_blog = $_GET["id_blog"];
    $blog = query("SELECT * FROM blog WHERE id_blog = '$id_blog'")[0]; ?>
  <div class="container div-articles">
      <div class="row div-single-articles">
          <div class="col-md-5">
              <img src="img/<?= $blog['foto'] ?>" class="img-responsive">
          </div>
          <div class="col-md-7">
              <div class="row">
                  <div class="col-md-10 col-sm-10 col-xs-8">
                      <h3 class="title-article"><a href="#"><?= $blog['judul']; ?></a></h3>
                      <p class="author-article">by <?= $blog['created_by']; ?></p>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-4">
                      <div class="date-article">
                          <?php $tanggal = date('d M', strtotime($blog['created_date']));  ?>
                          <?= $tanggal; ?>
                      </div>
                  </div>
              </div>

              <div class="row content-article">
                  <div class="col-md-12">
                      <p><?= nl2br($blog['keterangan']); ?></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php require_once("template/footer.php"); ?>
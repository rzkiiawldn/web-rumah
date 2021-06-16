  <?php require_once("template/header.php"); ?>
  <?php $blog = $conn->query("SELECT * FROM blog ORDER BY id_blog DESC"); ?>
  <div class="container div-articles">
      <h2 class="text-center">Blog</h2><br>
      <hr>
      <div class="row">
          <?php foreach ($blog as $row) : ?>
              <div class="col-md-6">
                  <div class="row div-single-articles">
                      <div class="col-md-5">
                          <img src="img/<?= $row['foto'] ?>" class="img-responsive">
                      </div>
                      <div class="col-md-7">
                          <div class="row">
                              <div class="col-md-10 col-sm-10 col-xs-8">
                                  <h3 class="title-article"><?= $row['judul']; ?></h3>
                                  <p class="author-article">by <?= $row['created_by']; ?></p>
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-4">
                                  <div class="date-article">
                                      <?php $tanggal = date('d M', strtotime($row['created_date'])); ?>
                                      <?= $tanggal; ?>
                                  </div>
                              </div>
                          </div>

                          <div class="row content-article">
                              <div class="col-md-12">
                                  <p><?= substr($row['keterangan'], 0, 100); ?>..</p>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <a href="detail.php?id_blog=<?= $row['id_blog'] ?>" class="read-more">Selengkapnya</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>
  </div>

  <?php require_once("template/footer.php"); ?>
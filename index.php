  <?php require_once("template/header.php"); ?>
  <?php $blog = $conn->query("SELECT * FROM blog ORDER BY id_blog DESC LIMIT 4"); ?>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/slider/slider1.jpg" alt="Slide1">
        <div class="carousel-caption">

        </div>
      </div>
      <div class="item">
        <img src="img/slider/slider2.jpg" alt="Slider2">
        <div class="carousel-caption">

        </div>
      </div>
      <div class="item">
        <img src="img/slider/slider3.jpg" alt="Slider3">
        <div class="carousel-caption">

        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container div-articles">
    <h2 class="text-center">BLOG</h2>
    <hr><br>
    <?php foreach ($blog as $row) : ?>
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
                <?php $tanggal = date('d M', strtotime($row['created_date']));  ?>
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
    <?php endforeach; ?>
    <div class="text-center">
      <a href="blog.php">selengkapnya</a>
    </div>
  </div>
  <?php require_once("template/footer.php"); ?>
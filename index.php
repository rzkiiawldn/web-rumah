  <?php require_once("template/header.php"); ?>

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
    <div class="row div-single-articles">
      <div class="col-md-5">
        <img src="img/recent/post1.jpg" class="img-responsive">
      </div>
      <div class="col-md-7">
        <div class="row">
          <div class="col-md-10 col-sm-10 col-xs-8">
            <h3 class="title-article"><a href="#">Rumah Idaman</a></h3>
            <p class="author-article">by <a href="#">Unknow</a></p>
            <p class="comment-article"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;100</p>
          </div>
          <div class="col-md-2 col-sm-2 col-xs-4">
            <div class="date-article">
              25 Okt
            </div>
          </div>
        </div>

        <div class="row content-article">
          <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <a href="detail.php" class="read-more">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php require_once("template/footer.php"); ?>
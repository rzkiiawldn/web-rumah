  <?php require_once("template/header.php"); ?>
  
  <div class="container div-articles">
    <div class="row">
    <?php for($i = 1; $i < 5; $i++): ?>
        <div class="col-md-6">
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
        <?php endfor; ?>
    </div>
  </div>

  <?php require_once("template/footer.php"); ?>
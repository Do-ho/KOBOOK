<!DOTYPE html>
<head>
  <?php
    include "base.php";
  ?>
</head>

<link type="text/css" rel="stylesheet" href="index.css">

<body id="page-top">

<style>
@import url(//fonts.googleapis.com/earlyaccess/nanumbrushscript.css);
.nb{font-family: 'Nanum Brush Script', cursive;}
.intro-subheading {
    font-size : 80px;
    margin-top : 0;
    margin-bottom : 50px;
    text-align: center;

    }
    .star{
      width : 60px;
      height: 60px;
      margin-bottom:5px;
      margin-right:10px;

    }
</style>

  <div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/book8.jpg" class="d-block w-100 downsize" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <p class="intro-lead-in">Welcome To</p>
            <h5 class="intro-heading">KOREACHECK!!</h5>
            </div>

        </div>
        <div class="carousel-item">
          <img src="image/somebook.jpg" class="d-block w-100 downsize" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <a href="#BUY" class="btn btn-outline-warning shadow rounded upgrade" role="button" aria-pressed="true">Today's Kobook!</a>
            <p class ="intro-lead-in2">Kobook은 koreatech Book의 줄임말로 한기대에서 거래하는 책들을 말합니다</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/youwant2.jpg" class="d-block w-100 downsize" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="intro-subheading nb"><img src="image/star9.png" class="star">무료 책 거래로 포인트도 쌓아보세요!</h5>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

    <!--삽니다 -->
    <section class="page-section" id="BUY">
      <div class="container">
            <h2 class="section-heading">BUY_삽니다</h2>
            <h3 class="section-subheading">최근 게시된 살 수 있는 책..</h3>

            <div class="row ">
              <div class="card-group go_right">
                <div class="card">
                  <img src="image/somebook.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text cardintext">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <img src="image/somebook.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text cardintext">This card has supporting text below as a natural lead-in to additional content.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <img src="image/somebook.jpg" class="card-img-top cardsize" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text cardintext">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="card">
                  <img src="image/somebook.jpg" class="card-img-top cardsize" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text cardintext">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                  </div>
                </div>
                <div class="cardnext">
                <a href="SELLmajor11"><img src="image/right-arrow.png"height="40px" width="40px"/></a>
                </div>
                </div>
              </div>
              </div>
              </section>
              <!--삽니다 -->
              <section class="page-section2" id="Sell">
                <div class="container">
                      <h2 class="section-heading">SELL_팝니다</h2>
                      <h3 class="section-subheading">최근 게시된 사고자하는 책..</h3>

                      <div class="row">
                        <div class="card-group go_right">
                          <div class="card">
                            <img src="image/somebook.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text cardintext">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                          </div>
                          <div class="card">
                            <img src="image/somebook.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text cardintext">This card has supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                          </div>
                          <div class="card">
                            <img src="image/somebook.jpg" class="card-img-top cardsize" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text cardintext">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                          </div>
                          <div class="card">
                            <img src="image/somebook.jpg" class="card-img-top cardsize" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text cardintext">This is a wider card with supporting text below as a natural lead-in to additional content. </p>
                            </div>
                            <div class="card-footer">
                              <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                          </div>
                          <div class="cardnext">
                          <a href="SELLmajor11"><img src="image/right-arrow.png"height="40px" width="40px"/></a>
                          </div>
                          </div>
                        </div>
                      </div>

                      </section>
  </body>



  </html>

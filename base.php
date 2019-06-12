<!DOCTYPE html>
<html>
<head>
  <?php
    session_start();
   ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--웹페이지의 크기 지정, 웹 페이지의 크기가 스마트폰의 실제 액정 크기를 따라가도록,  보여지는 화면의 zoom up 정도를 1배율로,마지막은 사파리 브라우저에 사용되는 속성-->
  <meta name="description" content="">
  <!-- 이건 검색엔진에서 content 내용으로 검색했을 때 연관되어 뜰 수 있도록 하는 정보-->
  <meta name="author" content="">

  <title>KOREACHECK - Kobook</title>

  <!--
    <link href="css/agency.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <style>
    img.test {
      position: fixed;

      right: 20px;
      width: 4%;
      height: 60%;
      bottom: 10%;
      line-height: 50px;
      text-align: center;
      border-radius: 4px;
      color: #FFF;
      z-index: 99;
      transition: opacity 0.4s cubic-bezier(0.5, 0, 0, 0.8);
      cursor: pointer;
    }
    .topcolor{
      background-color: white;
    }
  </style>
</head>


<!--메뉴바--><link type="text/css" rel="stylesheet" href="base.css">
<body id="page-top">
<div class="topcolor">
  <ul class="nav justify-content-end">
    <?php
      if(isset($_SESSION['mem_ID'])) {
        echo "<li class=nav-item>
          <a class=nav-link base href=logout.php target=_self><p class=text-dark>Logout</p></a>
        </li>";
        echo "<li class=nav-item>
          <a class=nav-link href=mypage.php><p class=text-dark>마이페이지</p></a>
        </li>";
        echo "<li class=nav-item>
              <a class=nav-link disabled href='cart.php' tabindex=-1 aria-disabled=true>장바구니</a>
            </li>";
      }
      else {
        echo "<li class=nav-item>
        <a class=nav-link base href=login.php target=_self><p class=text-dark>Login</p></a>
        </li>";
        echo "<li class=nav-item>
        <a class=nav-link href=join.php><p class=text-dark>회원가입</p></a>
      </li>";
      echo "<li class=nav-item>
            <a class=nav-link disabled href='cart.php' tabindex=-1 aria-disabled=true>장바구니</a>
          </li>";
      }
     ?>
  </ul>


  <div class="container makesmall" >
    <div class="center">
      <div class="common"><a href="index.php"><img src="image/logo.png" href='index.php'height="70px" width="220px" alter="로고"></a></div>
      <div class="common">
  <form class="form-inline">
     <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-dark my-2 my-sm-0" type="submit">검색</button>
   </form> </div>
   </div>
   </div>

   <ul class="nav nav-pills nav-justified navbar">
     <li class="nav-item">
       <a class="navitems" href="index.php">Home</a>
     </li>
     <li class="nav-item dropdown">
       <a class="navitems dropdown-toggle"data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sell   </a>
       <div class="dropdown-menu submenusize">
             <a class="dropdown-item" href="board_sell_home.php?major=컴퓨터공학부">컴퓨터공학부</a>
             <a class="dropdown-item" href="board_sell_home.php?major=전기전자통신공학부">전기전자통신공학부</a>
             <a class="dropdown-item" href="board_sell_home.php?major=메카트로닉스공학부">메카트로닉스공학부</a>
             <a class="dropdown-item" href="board_sell_home.php?major=에너지신소재화학공학부">에너지신소재화학공학부</a>
             <a class="dropdown-item" href="board_sell_home.php?major=건축공학부">건축공학부</a>
             <a class="dropdown-item" href="board_sell_home.php?major=기계공학부">기계공학부</a>
             <a class="dropdown-item" href="board_sell_home.php?major=디자인공학부">디자인공학부</a>
             <a class="dropdown-item" href="board_sell_home.php?major=산업경영학부">산업경영학부</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="board_sell_home.php?major=HRD교양">HRD교양</a>
             <a class="dropdown-item" href="board_sell_home.php?major=일반교양">일반교양</a>
             <a class="dropdown-item" href="board_sell_home.php?major=자격증 및 기타">자격증 및 기타</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="board_sell_home.php?major=all">전체보기</a>
           </div>
     </li>
     <li class="nav-item dropdown">
       <a class="navitems dropdown-toggle"data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Buy  </a>
       <div class="dropdown-menu submenusize">
             <a class="dropdown-item" href="board_buy_home.php?major=컴퓨터공학부">컴퓨터공학부</a>
             <a class="dropdown-item" href="board_buy_home.php?major=전기전자통신공학부">전기전자통신공학부</a>
             <a class="dropdown-item" href="board_buy_home.php?major=메카트로닉스공학부">메카트로닉스공학부</a>
             <a class="dropdown-item" href="board_buy_home.php?major=에너지신소재화학공학부">에너지신소재화학공학부</a>
             <a class="dropdown-item" href="board_buy_home.php?major=건축공학부">건축공학부</a>
             <a class="dropdown-item" href="board_buy_home.php?major=기계공학부">기계공학부</a>
             <a class="dropdown-item" href="board_buy_home.php?major=디자인공학부">디자인공학부</a>
             <a class="dropdown-item" href="board_buy_home.php?major=산업경영학부">산업경영학부</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="board_buy_home.php?major=HRD교양">HRD교양</a>
             <a class="dropdown-item" href="board_buy_home.php?major=일반교양">일반교양</a>
             <a class="dropdown-item" href="board_buy_home.php?major=자격증 및 기타">자격증 및 기타</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="board_buy_home.php?major=all">전체보기</a>
           </div>
     </li>
     <li class="nav-item">
       <a class="navitems" href="servicecenter.php">Service</a>
     </li>
   </ul>

  <img src="image/cart.png" class="test">
</div>
</body>
</html>

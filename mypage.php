<html>
<head>
  <title> Mypage </title>
  <meta charset="utf-8">
  <?php
    include "base.php";
   ?>
</head>
<body>
  <h2>Mypage</h2>
  <hr>
  <form action="mypage_db.php" method="post">
    <div>
      <label for="id"> 아이디 </label>
      <input type="text" value = <?php echo $_SESSION['mem_ID'];?> name="mypage_id"/>
    </div>
    <div>
      <label for="pw"> 패스워드 </label>
      <input type="password" value= <?php echo $_SESSION['PW'];?> name="mypage_pw"/>
    </div>
    <div>
      <label for="name"> 이름 </label>
      <input type="text" value= <?php echo $_SESSION['name'];?> name="mypage_name"/>
    </div>
    <div>
      <label for="major"> 전공 </label>
      <input type="text" value= <?php echo $_SESSION['major'];?> name="mypage_major"/>
    </div>
    <div>
      <label for="phone"> 핸드폰번호 </label>
      <input type="text" value= <?php echo $_SESSION['phone'];?> name="mypage_phone"/>
    </div>
    <div>
      <label for="mail"> 이메일 </label>
      <input type="text" value= <?php echo $_SESSION['e_mail'];?> name="mypage_mail"/>
    </div>
    <div>
      <label for="address"> 주소 </label>
      <input type="text" value= <?php echo $_SESSION['address'];?> name="mypage_address"/>
    </div>
    <div class="button">
      <input type="submit" value="수정"/>
    </div>
  </form>
  <button onclick="location.href='index.php'"/> 홈 화면으로 </button>
</body>
</html>

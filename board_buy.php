
<html>
<head>
<link rel = stylesheet href="bootstrap3.css" type ="text/css">

  <?php
    include "base.php";
    include "db_connect/connection.php";
    $num = $_GET['num'];
    $major = $_GET['major'];
    $sql = "select * from board where number=$num";
    $result = $dbConnect->query($sql);
    
    $item = mysqli_fetch_array($result);
    $item_num = $item['number'];
    $item_catagory = $item['catagory'];
    $item_title = $item['board_title'];
    $item_content = $item['board_contents'];
    $item_price = $item['price'];
    $item_book_name = $item['book_name'];

  ?>
<style>
h2, h3{
  color: #002f6c;
  position: relative;
  left: 100px;
}
#content{
  position: relative;
  left: 100px;
}
body{
  background-color : rgb(240,240,240);
}

</style>


</head>
<body>
<div id ='content'>
    <div align = "left">
    <h2>삽니다!</h2>
    <hr>
    </div>
    <div id ='content'>
    <?php
          echo "<h4>[&nbsp".$item_num."&nbsp]".$item_title."</h4>"
    ?>
    <table id="customers" border='1'>
    <?php
      echo "<tr><th width = '180px'>카테고리 </th><td> ". $item_catagory ."</td></tr>";
      echo "<tr><th>가격 </th><td> ".$item_price ."</td></tr>";
      echo "<tr><th>책 이름 </th><td> ".$item_book_name ."</td></tr>";
      echo "<tr><th>내용 </th><td> ".$item_content ."</td></tr>";

    ?>
    </table>
    </div>
    <hr>
    <br>
    <div align = "center">
      <?php
        echo "<button align='right' class='btn btn-secondary slidedown' onclick = 'location.href=";
        echo '"board_buy_home.php?major=';
        echo "$major";
        echo '"';
        echo "'>목록</button>";
      ?>
    </div>

  </body>
</html>

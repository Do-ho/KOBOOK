
<!DOCTYPE html>
<html>
<head>
  <!--jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    $item_link = $item['imglink'];
    $link = "book_image/$item_link".".jpg";
  ?>

  <script type="text/javascript">
    var link_file_src = "<?php echo $link; ?>";
  </script>
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
  <h2>팝니다</h2>
    <div id ='content'>
      <hr>
      <?php
      echo "<h4>$item_title</h4>"
      ?>
      <span align = 'center'>
      <img id='want' src = '' height = '200' width = '300' alt='buy'>
      
      <script type="text/javascript"> 
          $('#want').attr("src",link_file_src);
       </script> 

      <br><hr></span>
      <span>
      <table id="customers" border='1'>
      <?php   
    
        echo "<tr><th width = '200px'>책 이름 </th><td> $item_book_name </td></tr>";
        echo "<tr><th>가격 </th><td> $item_price </td></tr>";
        echo "<tr><th>내용 </th><td> $item_content </td></tr>";
      ?>
      </table>
</span>
    </div>
    <br>
    <div align = "center">
      <?php
        echo "<button class='btn btn-secondary slidedown' onclick='location.href=";
        echo '"board_sell_home.php?major=';
        echo "$major";
        echo '"';
        echo "'> 목록 </button>";
      ?>
    </div>
  </body>
</html>

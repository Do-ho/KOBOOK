<html>
  <head>
  <link rel = stylesheet href="bootstrap3.css" type ="text/css">

    <?php
        include "base.php";
        include "db_connect/connection.php";
        $scale = 10; //화면에 표시되는 글의 개수

        $sql = "select * from board where buy_sell='buy';";
        $result = $dbConnect->query($sql);
        $total_record = mysqli_num_rows($result); //화면에 표시되는 전체 글 수

        //전체 페이지 수($total_page) 계산
        if($total_record % $scale ==0) {
          $total_page = floor($total_record/$scale);
        }
        else {
          $total_page=floor($total_record/$scale) + 1;
        }

        $page = 1;

        //표시될 페이지에 따라 $start 계산
        $start = ($page - 1) * $scale;
        $number = $total_record - $start;
        $major = $_GET['major'];
    ?>

        <style>
      h2, h3, h4, h5{
  color: #002f6c;
  position: relative;
  left: 100px;
}
#btn{
  position:relative;
  right: 290px;
}
body{
  background-color : rgb(240,240,240);
}

        </style>

  </head>

  <body>
    <div>
      <span><h4> <?php echo "[" .$major. "]" ?> </h4></span>
      <h2>삽니다.</h2>
      
      <hr>
      <h5 style=left:100px>게시물이 총 <?php echo "$total_record";?> 개 있습니다.</h5>
      
     
    </div>
<div id='btn' align = "right">
    <?php
      

      echo "<button class='btn btn-secondary slidedown' onclick='location.href=";
      echo '"write_buy.php?major=';
      echo "$major";
      echo '"';
      echo "'> 글쓰기 </button>";

    ?>
    </div>
    <br>
    <table id="customers" border='1' align = 'center'>
      <tr>
        <th>번호</th>
        <th width=500px>제목</th>
        <th>책 이름</th>
        <th>가격</th>
      </tr>
      <?php
        for($i=$start; $i<$total_record; $i++){
          echo "<tr>";

          mysqli_data_seek($result, $i);
          $row = mysqli_fetch_array($result);

          $item_num = $row['number'];
          $item_board_name = $row['board_title'];
          $item_book_name = $row['book_name'];
          $item_book_price = $row['book_price'];
          $index = $i + 1;
          echo "<td> $index </td>";
      
          echo "<td> <a href='board_buy.php?num=$item_num&major=$major'> $item_board_name </a></td>";
          echo "<td> $item_book_name </td>";
          echo "<td> $item_book_price </td>";

          echo "</tr>";
        }
      ?>
      </table>
      <hr>
    <br>


  </body>
</html>
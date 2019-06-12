

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <?php
    include "base.php";
    include "db_connect/connection.php";

    $sql = "select * from board where buy_sell='sell'";
    $result = $dbConnect->query($sql);
    $total_record = mysqli_num_rows($result);
    
    $major = $_GET['major'];
  ?>

<style>

h2, h3, h4, h5{
  color: #002f6c;
  position: relative;
  left: 100px;
} 
p{
  left:100px;
}

head{
  background-color: blue;
}
body{
  background-color : rgb(240,240,240);
}

</style>

</head>
<body bgcolor="#8F8681">
<section class="page-section2" id="BUY">
<div id='head'>
        <span><h4> <?php echo "[" .$major. "]" ?> </h4></span>
        <span><h2 class="section-heading">팝니다</h2></span>
        </div>
        <hr>
        <?php
          echo "<h5 style=left:100px >게시물이 총 $total_record 개 있습니다.&nbsp</h5>";
            
        

          echo "<table align = 'center'>";
          echo "<tr><td height= 100px></td><td></td><td></td><td style='text-align: right;'><button id = 'absolute' class='btn btn-secondary slidedown' onclick='location.href=";
          echo '"write_sell.php?major=';
          echo "$major";
          echo '"';
          echo "'> 글쓰기 </button></td></tr>";
          $i = 0;
          while($row = mysqli_fetch_assoc($result)) {
            $item_num = $row['number'];
            $item_catagory = $row['catagory'];
            $item_title = $row['board_title'];
            $item_content = $row['board_contents'];
            $item_price = $row['price'];
            $item_book_name = $row['book_name'];
            $item_link = $row['imglink'];
            $link = "book_image/$item_link".".jpg";
            if($i % 4 == 0) echo "<tr>";
            echo '<td>';
        ?>
        <script type="text/javascript">
          var link_file_src = "<?php echo $link; ?>";
        </script>

<div class="card" style="width: 18rem;">


        <?php
          echo "<img class='card-img-top' id='want$item_num' src = '' height = '200' width = '300' alt='buy$item_num'>";
        ?>

  <div class="card-body">
   
        
        <script type="text/javascript"> 
          $('#want' + '<?php echo $item_num; ?>').attr("src",link_file_src);
        </script> 
        
        <br>

        <?php
              echo "<h5 class ='card-title'>".$item_book_name."</h5><br>";
              echo "<p class='card-text'>전공 : ".$item_catagory."<br>가격 : ".$item_price."</p>";
              
              echo "<a href='board_sell.php?num=$item_num&major=$major' class='btn btn-primary'>More</a>
              </div>
            </div>";
              if($i % 4 == 0) echo '</td>';
              $i++;
          }
          
         
          

            echo "</table>";
        ?>  
  </section>


</body>
</html>


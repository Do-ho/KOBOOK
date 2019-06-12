<?php
    include "db_connect/connection.php";
    $major = $_GET['major'];
    $title = $_POST['title'];
    $content = $_POST['contents'];
    $name = $_POST['name'];
    $hopePrice = $_POST['hopePrice'];
    $catagory = $_GET['major'];


    if($title != null && $title != ''){
        $title = $dbConnect->real_escape_string($title);
    } else {
        echo "제목을 입력하세요.";
        echo "<a href='write_buy.php?major=$major'>작성 페이지로 이동</a>";
        exit;
    }

    if($content != null && $content != ''){
        $content = $dbConnect->real_escape_string($content);
    } else {
        echo "내용을 입력하세요.";
        echo "<a href='write_buy.php?major=$major'>작성 페이지로 이동</a>";
        exit;
    }

    if($name != null && $name != ''){
        $name = $dbConnect->real_escape_string($name);
    } else {
        echo "책 이름을 입력하세요.";
        echo "<a href='write_buy.php?major=$major'>작성 페이지로 이동</a>";
        exit;
    }

    if($hopePrice != null && $hopePrice != ''){
        $hopePrice = $dbConnect->real_escape_string($hopePrice);
    } else {
        echo "가격을 입력하세요.";
        echo "<a href='write_buy.php?major=$major'>작성 페이지로 이동</a>";
        exit;
    }

    if($catagory != null && $catagory != ''){
        $catagory = $dbConnect->real_escape_string($catagory);
    } else {
        echo "카테고리를 선택하세요.";
        echo "<a href='write_buy.php?major=$major'>작성 페이지로 이동</a>";
        exit;
    }

    $sql = "INSERT INTO board (catagory, buy_sell, board_title, board_contents, price, book_name, book_price) ";
    $sql .= "VALUES ('{$catagory}','buy','{$title}','{$content}', {$hopePrice} , '{$name}', {$hopePrice}) ";
    $result = $dbConnect->query($sql);

    /*
    if($result){
        echo "저장 완료";
        //echo "<a href='./183-list.php'>게시글 목록으로 이동</a>";
        exit;
    } else {
        echo "저장 실패 - 관리자에게 문의";
       // echo "<a href='./183-list.php'>게시글 목록으로 이동</a>";
        exit;
    }
    */
?>

<script>
  location.href='board_buy_home.php?major=<?php echo"$major"?>';
</script>
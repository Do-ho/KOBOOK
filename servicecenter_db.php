<?php
//    include "db_connect/connection.php";


    $title = $_POST['title'];
    $content = $_POST['content'];
/*
    if($title != null && $title != ''){
        $title = $dbConnect->real_escape_string($title);
    } else {
        echo "제목을 입력하세요.";
        echo "<a href='servicecenter.php'>작성 페이지로 이동</a>";
        exit;
    }

    if($content != null && $content != ''){
        $content = $dbConnect->real_escape_string($content);
    } else {
        echo "내용을 입력하세요.";
        echo "<a href='servicecenter.php'>작성 페이지로 이동</a>";
        exit;
    }*/

  //  $regTime = time();

    $connect = mysqli_connect('localhost', 'root', '123456');
    mysqli_select_db($connect, 'kobook_db');

    $sql = "insert into serviceboard(title, content) ";
    $sql .= "values ('$title','$content')";
    $result = mysqli_query($connect, $sql);

    if($result){
        echo "저장 완료";
        exit;
    } else {
        echo "저장 실패 - 관리자에게 문의";
        exit;
    }
?>

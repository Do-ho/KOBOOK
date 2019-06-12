<?php
    include "connection.php";
    // 테이블 생성 쿼리
    $sql = "CREATE TABLE board (";
    $sql .= "number INT PRIMARY KEY AUTO_INCREMENT,";
    $sql .= "catagory VARCHAR(100) NOT NULL,"; 
    $sql .= "buy_sell CHAR(10) NOT NULL,";
    $sql .= "board_title VARCHAR(32) NOT NULL,";
    $sql .= "board_contents VARCHAR(100),"; 
    $sql .= "price int NOT NULL,";
    $sql .= "imglink VARCHAR(50),";
    $sql .= "book_name VARCHAR(50) NOT NULL,";
    $sql .= "book_price int NOT NULL";
    $sql .= ")CHARSET=utf8;";
    //board table 생성
    $dbConnect->query($sql);
?>


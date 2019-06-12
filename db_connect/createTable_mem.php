<?php
    include "connection.php";
    // 테이블 생성 쿼리
    $sql = "CREATE TABLE mem (";
    $sql .= "mem_ID VARCHAR(10) PRIMARY KEY,";
    $sql .= "PW VARCHAR(15) NOT NULL,";
    $sql .= "name VARCHAR(10) NOT NULL,";
    $sql .= "major VARCHAR(10) NOT NULL,"; 
    $sql .= "phone VARCHAR(20) NOT NULL,";
    $sql .= "e_mail VARCHAR(50),";
    $sql .= "address VARCHAR(100) NOT NULL,";
    $sql .= "point int NOT NULL";
    $sql .= ")CHARSET=utf8;";
    //mem table 생성
    $dbConnect->query($sql);
?>

    
<?php
  
  $name=$_POST['find_id_name'];
  $mail=$_POST['find_id_mail'];

  $connect = mysqli_connect('localhost', 'kobook', '1234');
  mysqli_select_db($connect, 'kobook_db');

  $check = "select * from mem where name='$name' && e_mail='$mail'";
  $result=mysqli_query($connect, $check);
  $rows = mysqli_fetch_array($result);

  if($rows['name'] == $name && $rows['e_mail'] == $mail)
  {
    $content = "회원님의 아이디는 [";
    $content .= $rows['mem_ID'];
    $content .= "] 입니다.";

    echo "<script>alert('$content'); window.location = 'login.php';</script>";
    exit();
  }
  else
  {
          echo "<script>alert('없는 계정입니다.'); window.location = 'find_id.php';</script>";
    exit();
  }
 ?>

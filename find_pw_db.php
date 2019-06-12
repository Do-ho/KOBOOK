<?php
  $id=$_POST['find_pw_id'];
  $name=$_POST['find_pw_name'];
  $mail=$_POST['find_pw_mail'];

  $connect = mysqli_connect('localhost', 'kobook', '1234');
  mysqli_select_db($connect, 'kobook_db');

  $check = "select * from mem where mem_ID='$id' && name='$name' && e_mail='$mail'";
  $result=mysqli_query($connect, $check);
  $rows = mysqli_fetch_array($result);

  if($rows['mem_ID'] == $id && $rows['name'] == $name && $rows['e_mail'] == $mail)
  {
    $content2 = "회원님의 비밀번호는 [";
    $content2 .= $rows['PW'];
    $content2 .= "] 입니다.";

    echo "<script>alert('$content2'); window.location = 'login.php';</script>";
    exit();
  }
  else
  {
    echo "<script>alert('입력한 정보가 잘못되었습니다.'); window.location = 'find_pw.php';</script>";
    exit();
  }
 ?>

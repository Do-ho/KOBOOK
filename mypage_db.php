<?php
  session_start();

  $id=$_POST['mypage_id'];
  $pw=$_POST['mypage_pw'];
  $name=$_POST['mypage_name'];
  $major=$_POST['mypage_major'];
  $phone=$_POST['mypage_phone'];
  $mail=$_POST['mypage_mail'];
  $address=$_POST['mypage_address'];

  $_SESSION['mem_ID']=$id;
  $_SESSION['PW'] = $pw;
  $_SESSION['name']=$name;
  $_SESSION['major']=$major;
  $_SESSION['phone']=$phone;
  $_SESSION['e_mail']=$mail;
  $_SESSION['address']=$address;

  $connect = mysqli_connect('localhost', 'kobook', '1234');
  mysqli_select_db($connect, 'kobook_db');

  $sql = "update mem set PW='$pw' where mem_ID='$id'";
  $result = mysqli_query($connect, $sql);

  $sql = "update mem set name='$name' where mem_ID='$id'";
  $result = mysqli_query($connect, $sql);

  $sql = "update mem set major='$major' where mem_ID='$id'";
  $result = mysqli_query($connect, $sql);

  $sql = "update mem set phones='$phone' where mem_ID='$id'";
  $result = mysqli_query($connect, $sql);

  $sql = "update mem set e_mail='$mail' where mem_ID='$id'";
  $result = mysqli_query($connect, $sql);

  $sql = "update mem set address='$address' where mem_ID='$id'";
  $result = mysqli_query($connect, $sql);

  if($result)
  {
    echo "데이터 수정 완료";
    echo "<a href=index2.php> 확인 </a>";
    exit();
  }
  mysqli_close($connect);
 ?>

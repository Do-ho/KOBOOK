
<?php
  session_start();

  $id=$_POST['join_id'];
  $pw=$_POST['join_pw'];
  $pwc=$_POST['join_pwc'];
  $name=$_POST['join_name'];
  $major=$_POST['join_major'];
  $phone=$_POST['join_phone'];
  $mail=$_POST['join_mail'];
  $address=$_POST['join_address'];

  $_SESSION['mem_ID']=$id;
  $_SESSION['PW']=$pw;
  $_SESSION['name']=$name;
  $_SESSION['major']=$major;
  $_SESSION['phone']=$phone;
  $_SESSION['e_mail']=$mail;
  $_SESSION['address']=$address;

  if($pw != $pwc)
  {
    echo "<script>alert('비밀번호와 비밀번호 확인이 서로 다릅니다.'); history.go(-1);</script>";
    exit();
  }
  if($id==NULL || $pw==NULL || $pwc==NULL || $name==NULL || $major==NULL || $phone==NULL || $mail==NULL || $address==NULL)
  {
    echo "<script>alert('빈 칸을 모두 채우세요.'); history.go(-1); </script>";
    exit();
  }

  $connect = mysqli_connect('localhost', 'root', '123456');
  mysqli_select_db($connect, 'kobook_db'); 

  $check = "select * from mem where mem_ID='$id'";
  $r = mysqli_query($connect, $check);
  $count=mysqli_num_rows($r);
  if($count>0)
  {
    echo "<script>alert('id가 중복됐습니다.'); history.go(-1);</script>";
    exit();
  }
    $sql = "insert into mem(mem_ID, PW, name, major, phone, e_mail, address, point)";
    $sql = $sql."values('$id', '$pw', '$name', '$major', '$phone', '$mail', '$address', '0')";
    $result = mysqli_query($connect, $sql);
    
    if($result)
    {
      echo "<script>alert('회원가입을 축하드립니다.'); window.location = 'login.php';</script>";
      exit();
    }
    

    mysqli_close($connect);


 ?>

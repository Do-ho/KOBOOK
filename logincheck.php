
<?php
  session_start();

  $id=$_POST['login_id'];
  $pw=$_POST['login_pw'];

  $connect = mysqli_connect('localhost', 'root', '123456');
  mysqli_select_db($connect, 'kobook_db');


  $check="select * from mem where mem_ID='$id'";
  $result=mysqli_query($connect, $check);
  $count=mysqli_num_rows($result);
  if($count==1){
    $row = mysqli_fetch_assoc($result);
    if($row['PW']==$pw){
      $_SESSION['mem_ID']=$id;
      $_SESSION['PW'] = $pw;
      $_SESSION['name']=$row['name'];
      $_SESSION['major']=$row['major'];
      $_SESSION['phone']=$row['phone'];
      $_SESSION['e_mail']=$row['e_mail'];
      $_SESSION['address']=$row['address'];
      if(isset($_SESSION['mem_ID'])){
        header('Location:index.php');
      }
      else {
        echo "<script>alert('세션 저장 실패'); history.go(-1);</script>";
      }
    }
    else {
      echo "<script>alert('id / pw가 잘못되었습니다.'); history.go(-1);</script>";
    }
  }
  else {
    echo "<script>alert('id / pw가 잘못되었습니다.'); history.go(-1);</script>";
  }
?>

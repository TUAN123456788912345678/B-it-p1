<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title></title>
    <style type="text/css">
    body{
      margin: auto;
      background-color: rgb(214, 248, 248);
      background-image: url(https://mir-s3-cdn-cf.behance.net/projects/404/c484cb93479947.Y3JvcCw4MDgsNjMyLDAsMA.jpg);
      background-size:  cover;
    
    }
      .login{
        background-color: #fff;
        width: 400px;
        padding: 25px;
        border-radius: 8px;
        margin: auto;
        transform: translateY(150%);
      }
      button a{
        text-decoration: none;
        color: black;
      }
    </style>
</head>
<body>
<form method ="POST">
  <div class="dangnhap">
    <table>
      <tr>
        <td>UserName</td>
        <td><input type="text" name="username"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name="PASSWORD"></td>
      </tr>
      <tr>
        <td><input type="submit" name="login" value="login"></td>
        <td>
          <button type="submit" name="register">
              <a href="login.php">Register</a>
            </button>
        </td>
      </tr>
    </table>

  </div>
</form>
  <?php 
  //Kết nối theo Mysqli procedural
  $connect = mysqli_connect('localhost','root','','SDLC');
  if($connect){
    echo " ";
  }
  else{
    echo"Kết nối thất bại";
  }
    if(isset($_POST['login'])){
      $username= $_POST['username'];
      $Password =$_POST['PASSWORD'];
      $sql = "SELECT * FROM users WHERE username ='$username' AND Password = '$PASSWORD'";
      $result = mysqli_query($connect, $sql);
      $row = mysqli_num_rows($result);
    thành công  
    if($row>0){
    echo "<script> alert('Đăng nhập thành công')</script>";
    header("location: test1.php");
    $_SESSION['username'] = $UserName;
  }
  else{
    echo"<script>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>";
  }
  }
  ?>
</form>
</body>
</html>
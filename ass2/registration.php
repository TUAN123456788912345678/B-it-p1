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
      background-size: cover;
      background-repeat: no-repeat;
    
    }
   .resignter{
    
     padding: 25px;
     background-color: white;
     border: 1px solid rgb(209, 208, 208);
     border-radius:8px;
   }
   .table{
		 width: 500px;
		 margin: auto;
		 transform: translateY(150%);
		 background-color: #ffff;
		 padding: 20px 0;
		 border-radius: 8px;
	 }
   .dk{
     text-align: center;
     margin: 0;
     color: black;
    }
   .form-input{
     width: 70%;
     border-radius: 2px;
     padding: 3px;
   }
  </style>
</head>
<body>

        <a href="test1.php"><img src="https://pbs.twimg.com/media/EiOLaYbX0AA5S6S.jpg" width="100" height="100" /></a>
<form method="POST">
	<div class="register">
		<table class="table">
			<tr>
				<td class="dk">userid:</td>
				<td><input type="text" class="form-input" placeholder="usersid" name="usersid"></td>
			</tr>
			<tr>
				<td class="dk">username:</td>
				<td><input type="text" class="form-input" placeholder="usersname" name="usersname"></td>
			</tr>
			<tr>
				<td class="dk">PASSWORD</td>
				<td><input type="password" class="form-input" placeholder="PASSWORD" name="PASSWORD"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="register" value="register"></td>
			</tr>
		</table>
	</div>
</form>
	<?php 
	  $connect =mysqli_connect('localhost','root','','SDLC');
	  if($connect){
	    echo "kết nối thành công";
	  }
    else{
	      echo"Kết nối thất bại";
	  }
	  if(isset($_POST['register'])){
      echo "ok";
      $usersid = $_POST['usersid'];
      $usersname= $_POST['usersname'];
	    $PASSWORD= $_POST['PASSWORD'];
	    $sql ="INSERT INTO users VALUES('$usersid','$usersname','$PASSWORD')";
	    $result= mysqli_Query($connect,$sql);
	  if($result){
	    echo "<br>";
	    echo "<script> alert('thêm mới thành công')</script>";
	    header("location: dangnhap.php");
	  }
	  else{
	    echo "<script> alert('thêm mới thất bại')</script>";
	  }
	}
	?>
</body>
</html>
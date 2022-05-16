<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php

$search = "";
if( !empty($_GET['Search'])){
  $search = $_GET['Search'];
}
?>
 <h3 class="title">Search Results for: <?= $search ?></h3>
<div class="container" style="margin-top: 20px">
<div class="row">
    <?php
     $connect = mysqli_connect('localhost', 'root', '', 'SDLC');
     
    if(!empty($search)) {
    	$sql="SELECT * FROM Song,singer,Genre WHERE Song.Songname LIKE '%{$search}%' and Song.singerid=singer.singerid and song.Genreid=Genre.Genreid";
      $rs = mysqli_query($connect,$sql);
      while($row = mysqli_fetch_assoc($rs)){
    ?>
    <div class="card" style="background-color: white;margin-top: 20px;margin-left: 35px;overflow: auto;width: 270px; 
          border: 2px solid #F8ABAB;border-radius: 1px;border-bottom: 6px solid #FCA5A5; float: left;">
              <a href="detail.php?id=<?php echo $row['Songid']?>" style=" text-decoration: none; 
            text-align: center;">
            <div style="height:80px">
              <h2><?php echo $row['Songname'] ?></h2>
              </div>
              <div><img src="img/<?php echo $row['songimg']?>" style="width: 247px;height: 200px;padding: 7px"></div>
              <p style="color: red"><?php echo $row['Songprice']." $"; ?></p>
              <h4 style="color: #3BA33D"><?php echo $row['singername'] ?></h4>
            <h5>Genre: <?php echo $row['Genrename'] ?></h5>
            </a>
          </div>
         <?php
     }
    }
    ?>
  </div>
  </div>
  <?php 
   ?>
</body>
</html>
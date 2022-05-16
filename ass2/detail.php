<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Chi tiết bài hát</title>
	<style type="text/css">
		.images-detail img {
	    margin-top: 5%;
	    width: 100%;
	    align-items: center;
	    border-radius: 100%;
	    margin-bottom: 30px;
	    animation: app-logo-spin infinite 20s linear
		}
		@keyframes app-logo-spin {
		    from {
		        transform: rotate(0deg);
		    }
		    to {
		        transform: rotate(360deg);
		    }
		}

	</style>
</head>
<body>
	<nav class="white">
        </style>

        <a href="test1.php"><img src="https://pbs.twimg.com/media/EiOLaYbX0AA5S6S.jpg" width="100" height="100" /></a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" . data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="test1.php"><span class="glyphicon glyphicon-home"></span> Homepage</a></li>
                <li><a href="">
                        <sanp class="glyphicon glyphicon-earphone"></span>Contact
                    </a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Registration</a></li>
                <li><a href="dangnhap.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
            </ul>
            </ul>
        </div>
        </div>


<div class="container">
	<div class="row">
		<?php
		session_start();
		$connect = mysqli_connect('localhost', 'root', '', 'SDLC');
		$id = $_GET["id"];
		$sql = "SELECT * FROM Song,singer,Genre WHERE Song.Genreid = Genre.Genreid and Song.singerid = singer.singerid and Songid = {$id}";		
		$result = mysqli_query($connect, $sql);
		while($row= mysqli_fetch_array($result)){
			$id = $row['Songid'];
			?>
			<div class="col-md-6" style="text-align: left;">
				<h2> Name of Music: <?php echo $row['Songname'];?> </h2>
				<p>Price: <?php echo $row['Songprice'];?> </p>
				<audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width: 250px;">
					   	<source src="audio/<?php echo $row['Songaudio'];?>" type="audio/mpeg">
					   </audio>
					   <script type="text/javascript">
					   	function myAudio(event){
					   		if(event.currentTime>30){
					   			event.currentTime=0;
					   			event.pause();
					   			alert("Bạn phải trả phí để nghe cả bài");
					   		}
					   	}
					   </script>
					   <h5> singer:<?php echo $row["singername"] ;?></h5>
					   <h4> Genre:<?php echo $row["Genrename"]; ?></h4>
					    <textarea cols="40" rows="10" disabled><?php echo $row["Songdescription"];?></textarea>
					  <a href="add.?id=<?php echo $id ;?>">  <button type="submit" name ="buy" class='btn btn-primary'><i class="fas fa-cart-plus"></i> Add to cart</button> </a>
			</div>  
			<div class="images-detail">
			<div class="col-md-6">
				<img src="IMG/<?php echo $row['songimg'] ?>" style = "width: 500px;height: 500px;">
			</div> 
		</div>
			<?php
		}

	?>
	</div>
</div>
</body>
</html>
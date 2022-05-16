<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
    .carousel-inner .item img {
        margin: auto;
    }
</style>

<body>


    <nav class="navbar navbar-inverse ">
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
            	<form class="form-inline my-2 my-lg-0 " action="search.php" method="GET">
<input class="form-control mr-sm-2" type="search" placeholder="Search for song" style= "width: 400px" name="Search">
<input type="submit"name="search" value="Search" />
</form>
                <li><a href=""><span class="glyphicon glyphicon-home"></span> Homepage</a></li>
                <li><a href="">
                        <sanp class="glyphicon glyphicon-earphone"></span>Contact
                    </a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Registration</a></li>
                <li><a href="dangnhap.php"><span class="glyphicon glyphicon-log-in"></span> Log in</a></li>
  
            
            </ul>
        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://avatar-ex-swe.nixcdn.com/slideshow/2022/03/29/d/f/d/5/1648549267813_org.jpg" width="1000px" height="500px" alt="Los Angeles" alt="Los Angeles">
                </div>

                <div class="item">
                    <img src="https://avatar-ex-swe.nixcdn.com/slideshow/2022/03/29/d/f/d/5/1648536723710_org.jpg" width="1000px" height="500px" alt="Chicagog" alt="Chicago">
                </div>

                <div class="item">
                    <img src="https://avatar-ex-swe.nixcdn.com/slideshow/2022/03/29/d/f/d/5/1648536723710_org.jpg" width="1000px" height="500px" alt="Chicagog" alt="New York">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </nav>
    <div class="row">
        <?php
        $connect = mysqli_connect('localhost', 'root', '', 'SDLC');
        $sql = "SELECT * FROM Song";
        $result = mysqli_query($connect, $sql);
        while ($row_Song = mysqli_fetch_array($result)) {
        ?>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="card card-product mb-3">
                    <img class="card-img-top" src="img/<?php echo $row_Song['songimg'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php $row_Song['Songname']  ?></h5>
                        <h5 class="card-title"><?php $row_Song['Songid'] ?></h5>
                        <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                            <source src="audio/<?php echo $row_Song['Songaudio'] ?>" type="audio/mpeg">
                        </audio>
                        <script type="text/javascript">
                            function myAudio(event) {
                                if (event.currentTime > 30) {
                                    event.currentTime = 0;
                                    event.pause();
                                    alert("Bạn phải trả phí để nghe cả bài");
                                }
                            }
                        </script>
                        <a href='detail.php?id=<?= $row_Song['Songid'] ?>' class='btn btn-primary'>Details</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>
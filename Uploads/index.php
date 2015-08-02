<!DOCTYPE html>
<html lang="en">
<head>
    <title>Image Uploader</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>
          .carousel-inner > .item > img,
          .carousel-inner > .item > a > img {
              width: 60%;
              margin: auto;
        }
        </style>
</head>
<body background="images\61.jpg">

<div class="container">
  <br>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Image Uploader</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> LogIn</a></li>
        <li><a href="reg.html"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images\11.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="images\22.jpg" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="images\33.jpg" alt="Flower" width="460" height="345">
      </div>
      <div class="item">
        <img src="images\44.jpg" alt="1" width="460" height="345">
      </div>
      <div class="item">
        <img src="images\55.jpg" alt="2" width="460" height="345">
      </div>
      <div class="item">
        <img src="images\66.jpg" alt="3" width="460" height="345">
      </div>
      <div class="item">
        <img src="images\77.jpg" alt="4" width="460" height="345">
      </div>
      <div class="item">
        <img src="images\88.jpg" alt="4" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

    <div class="row">
        
        
    </div>
  </div>
</div>
</body>
</html>
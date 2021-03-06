<!DOCTYPE HTML>
<html lang="en">
  <head>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="assets/fontAwesome/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
    <link href="assets/animate.min.css" rel="stylesheet" type='text/css'>
    <link href="css/xylocraft_style.css" rel="stylesheet">
    <script src="assets/jquery-1.12.3.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="js/jsFunctions.js"></script>

      <title>XyloCraft Website</title>
  </head>

  <body><div class="all">
  <div class="container-fluid">
    <div class="row">
      <div class="navigation">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#">home</a></li>
            <li><a href="staff/index.php">Staff Team</a></li>
            <li><a href="speltypes">Speltypes</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="#">Etc.</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header">
       <div class="row">
         <img class="img-responsive headerImg" src="img/XyloCraft_Banner.png" alt="bannerImg">
      </div>
    </div>
    <div class="mid">
        <h2>News</h2>
    </div>
    <footer id="footer"></footer>
  </div>

  </div>
<script type="text/javascript" id="js">
$( document ).ready(function() {
      MakeFooter("index");
});
elem = document.getElementById('js');
elem.parentNode.removeChild(elem);
</script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register Now</title>
    <link rel="shortcut icon" href="images/world.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css">
    <script src="popper/popper.min.js"></script>
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <style>
    .carousel-item 
    {
      height: 65vh;
      min-height: 300px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      border-bottom: #0B4C7D 3px solid;
    }
  </style>
<body>
  <?php include("nav.php"); ?>
  <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
<!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/img1.jpg')"></div>
<!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/img2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3 >Explore the World</h3>
              <p >As Travel Experts, we are committed to quality service, bringing you the most memorable vacation experience.</p>
            </div>
          </div>
<!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/img3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3 >Surf Up Your Boundaries!</h3>
              <p>Got an idea for the perfect vacation? We are always here to help recreate your fantasies.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

<!-- Page Content -->
    <section class="py-5">
      <div class="container" style="color: black">
        <center><h1>Welcome to Travel Experts</h1></center>
        <p>Travel Experts is a travel agency founded in 2016, by the Sait OOSD student organization. The institution had initially started its program back in 2008 with the uprising of modern technologies in advance object-oriented software and mobile development. Harv Peters, one of the original founders of the company was a graduate of web application development back in the 1990s.</p>
      </div>
    </section>
    <?php include("footer.php")?>
</body>
</html>

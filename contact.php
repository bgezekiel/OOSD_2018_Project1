<?php include('agencies.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>
<body>
  <!--Navagation Bar-->
<?php include("nav.php");?>
  <!--Jumbotron-->
  <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Planning your next vacation?</h1>
        <p class="lead">We would love to hear all about it! Contact one of our agents at a location near you.
      </div>
    </div>
  <!--Contact Information-->
 
  <div class="row">
    <div class="col-6">
      <div class="card" style="width: 25rem;">
        <img class="card-img-top" src="images/agent.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Calgary Branch</h5>
          <p class="card-text">
            <?php 
              $myobj->getdata("select AgncyAddress,AgncyCity,AgncyProv,AgncyPostal,AgncyPhone from agencies where agncyCity='Calgary'"); 
            ?>
          </p>
          <a href="#" class="btn btn-primary">Find an Agent!</a>
        </div>
      </div>
    </div>

  
    <div class="col-6">
      <div class="card" style="width: 25rem;">
        <img class="card-img-top" src="images/agent1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Okotoks</h5>
          <p class="card-text">
            <?php 
              $myobj->getdata("select AgncyAddress,AgncyCity,AgncyProv,AgncyPostal,AgncyPhone from agencies where agncyCity='Okotoks'"); 
            ?>
          </p>
          <a href="#" class="btn btn-primary">Find an Agent!</a>
        </div>
      </div>
    </div>
   </div>
  
  
</body>
</html>

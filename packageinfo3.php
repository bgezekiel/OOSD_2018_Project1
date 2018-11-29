<!doctype html>
<html lang="en">
  <head>
<!-- Define the Charset and meta data for responsiveness -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Inlude style sheets, bootstrap and Java script librarries used in the project -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
<body>
  <div class="container">
  <div class="row">
  <div class="col-12">
    <form name="packageform" action="packagecontainer.php">
  </div>

    <?php
  //a php class populate all agents 
class dataAccess3{
  
        public $pkgno; //function to Connect to database
        public function getdata($query)
        {
        $pkgno = 0;
        $mysqli = new mysqli("localhost", "root","","travelexperts");
    /* check connection */
        if ($mysqli->connect_errno) 
        {
          printf("Connect failed: %s\n", $mysqli->connect_error);
          exit();
        }
        
        if ($result = $mysqli->query($query)) 
        {
          while ($row = $result->fetch_assoc()) 
          {
              $pkgno=$pkgno+3;
    ?>
              <div class="col-6">
                <div class="card" style="width: 18rem;">
                  <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
                  <div class="card-body">
                    <p class="card-text">
                      <?php
                        print("<center><h5 class='card-title'>".$row["PkgName"]."</h5></center>");
                        print("Vacation Package<br>"."<b>Start Date: </b>". substr($row["PkgStartDate"],0,10)."<br>"."<b>End Date:&nbsp;&nbsp;</b> "
                        .substr($row["PkgEndDate"],0,10)."<br><br>"."<b>Price: </b>$".round($row["PkgBasePrice"],2)."<br>"."<b>Commission: </b>$".round($row["PkgAgencyCommission"],2));
                      ?>
                    </p>
                    <input type="submit" class="btn btn-primary" name=<?php echo $pkgno; ?> value="Go for this Package" >
                  </div>
                </div>
              </div>
              <?php
            }
          }
  $result->free();
        }
  }
  //print("<a href=index.php>Click here to Home Page</a>");
  //instantiate object
  $myobj=new dataAccess3();
  $query = "SELECT PkgName,PkgStartDate,PkgEndDate, PkgDesc,PkgBasePrice,PkgAgencyCommission FROM packages WHERE PackageId='3'";
  //$myobj->getdata($query);
  //instantiat function to get data
  $myobj->getdata("$query");
  ?>
  <!--
  <form action="booking.php" name="myform">
  <input type="submit" name="sbutton">
  </form>-->
    </form>
  </div>
  </div>
</body
</html>


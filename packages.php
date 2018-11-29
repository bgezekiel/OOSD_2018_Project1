<!DOCTYPE html>
<html>
<head>
	<title>Packages</title>
	    <meta charset="UTF-8">
	    <link rel="shortcut icon" href="images/world.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <script src="popper/popper.min.js"></script>
        <script src="jquery/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    <style type="text/css">

    #j1 {
   		background-image: url("images/hero_pac.jpg");
   		background-size: cover;
    	background-repeat: no-repeat;
    	background-position: center;
    	width: 100%;
    	border-bottom: #0B4C7D 6px solid;
    	font-weight: bold;
	}

	.containerbox {
		background-size: cover;
   		background-repeat: no-repeat;
    	background-position: center;
		width: 100%;
		border: solid 40px transparent;
		outline: solid  6px;
	}
	#package1 {	background-image: url("images/Polynesian/Polynesian2.jpg");
				background-color: #2A2A2A;
				outline-color: #2A2A2A;
	}
	#package2 {	background-image: url("images/Caribbean/Caribbean2.jpeg");
    			background-color: #0B4C7D;
    			outline-color: #0B4C7D;
    }
	#package3 {	background-image: url("images/Asia/Asia2.jpg");
				background-color: #7F9418;
				outline-color: #7F9418;
	}
	#package4 {	background-image: url("images/Europe/Europe2.jpg");
				background-color: #A21313;
				outline-color: #A21313;
	}

	.col-sm-3 {	border: solid 10px;
				color: white;
	}
	#pac1 {	background-color: #2A2A2A;
			border-color: #707171;
	}
	#pac2 { background-color: #0B4C7D;
			border-color: #3F739F;
	}
	#pac3 {	background-color: #7F9418;
			border-color: #85A14D;
	}
	#pac4 {	background-color: #A21313;
			border-color: #AB3A3A;
	}

    </style>
</head>
<body>
	<?php include("nav.php") ?>
	  <!--Jumbotron-->
	<div class="jumbotron" id="j1">
			<h1 class="display-4">Book Your Vacation Today!</h1>
			<p>All featured vacation packages below are limited-time offer! Sign up before it's too late!</p>
	</div>
	
	<center><h2 class="display-4" id="ptitle1">Polynesian Paradise</h2></center><br />
	<div class="containerbox" id="package1">
		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-3" id="pac1">
					<center>
						<p>Polynesian Paradise</p>
					</center>
				</div>
				<div class="col-sm-7">
					<center>
						<img src="images/Polynesian/Polynesian1.jpg" 
						class="w-100" alt="Polynesian Festival"
						style="border: solid 15px white;">
					</center>
				</div>
			<div class="col-sm-1"></div>
		</div>
	</div><br />

	<center><h2 class="display-4" id="ptitle2">Caribbean New Years</h2></center><br />
	<div class="containerbox" id="package2">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-7">
				<center>
					<img src="images/Caribbean/Caribbean1.jpg" 
					class="w-100" alt="Polynesian Festical"
					style="border: solid 15px white;">
				</center>
			</div>
			<div class="col-sm-3" id="pac2">
				<center>
					<p>Polynesian Paradise</p>
				</center>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div><br />

	<center><h2 class="display-4" id="ptitle3">Asia Expedition</h2></center><br />
	<div class="containerbox" id="package3">
		<div class="row">
			<div class="col-sm-1"></div>
				<div class="col-sm-3" id="pac3">
					<center>
						<p>Polynesian Paradise</p>
					</center>
				</div>
				<div class="col-sm-7">
					<center>
						<img src="images/Asia/Asia1.jpg" 
						class="w-100" alt="Polynesian Festival"
						style="border: solid 15px white;">
					</center>
				</div>
			<div class="col-sm-1"></div>
		</div>
	</div><br />

	<center><h2 class="display-4" id="ptitle4">European Vacation</h2></center><br />
	<div class="containerbox" id="package4">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-7">
				<center>
					<img src="images/Europe/Europe1.jpg" 
					class="w-100" alt="Polynesian Festical"
					style="border: solid 15px white;">
				</center>
			</div>
			<div class="col-sm-3" id="pac4">
				<center>
					<p>Polynesian Paradise</p>
				</center>
			</div>
			<div class="col-sm-1"></div>
		</div>
	</div>
</body>
</html>
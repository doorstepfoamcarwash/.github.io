<!DOCTYPE html>
<html>
<head>
	<tittle></tittle>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Doorstep Foam Car Washing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Our Services.php">Our Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Our Infrastructure" width="1100" height="500">
      <div class="carousel-caption">
      	<h3>Luxury Foam Wash</h3>
      	<p>Automated shine</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Our Moto" width="1100" height="500">
      <div class="carousel-caption">
      	<h3>Chinese Foam Wash</h3>
      	<p>Only Dust Remover</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" alt="New Building" width="1100" height="500">
      <div class="carousel-caption">
      	<h3>Water Wash</h3>
      	<p>Dust Cleaning Only</p>
      </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About us</h2>
	</div>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/1.jpg" class="img-fluid aboutimg">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
		<h2 class="display-5">Doorstep Car Washing</h2>
		<p class="py-4">An Entity want to clean your car as your status and your family background</p>
		<a href="about.php" class="btn btn-success">See More</a>
		</div>
	 </div>	            
</div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services</h2>
  </div>
    <div class="container-fluid">
       <div class="row">
         <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
            <img class="card-img-top" src="images/1.jpg" alt="Card image">
              <div class="card-body">
               <h4 class="card-title">Simple Water Wash</h4>
                <p class="card-text">&#8377; 180/-</p>
                 <a href="Our Servies.php" class="btn btn-primary">Book Now</a>
              </div>
            </div>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
            <img class="card-img-top" src="images/3.jpg" alt="Card image">
              <div class="card-body">
               <h4 class="card-title">Chinese Foam Washing</h4>
                <p class="card-text">&#8377; 220/-</p>
                 <a href="Our Services.php" class="btn btn-primary">Book Now </a>
              </div>
            </div>
           </div>
           <div class="col-lg-4 col-md-4 col-12">
           <div class="card">
            <img class="card-img-top" src="images/2.jpg" alt="Card image">
              <div class="card-body">
               <h4 class="card-title">Luxury Foam Washing</h4>
                <p class="card-text">&#8377; 280/-</p>
                 <a href="Our services.php" class="btn btn-primary">Book Now</a>
              </div>
            </div>
           </div>
         </div>
     </div>
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>
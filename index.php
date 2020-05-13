<!DOCTYPE html>
<html>
<head>
	<title>CareerRide</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/styling.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

 
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="about.php">CareerRide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Field
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="engineering.php">Engineering</a>
          <a class="dropdown-item" href="medical.php">Medical</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="contactus.php">Contact Us</a>
        </div>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/career.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Career</h3>
        <p>Wanna get high in career?</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/engineering.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Engineering</h3>
        <p>One of the most demanding career especially in India!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/medical.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Medical</h3>
        <p>Life saving Job!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<marquee behavior="scroll" direction="left">Welcome! Find Your Interest Here..</marquee>


<section class="my-5">
	<div class="container p-3 my-3 bg-dark text-white">
		
		<h2 class="text-center" >About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<img src="images/engineering.jpg" class="img-fluid aboutimg">
		</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">Welcome to my Page!</h2>
				<p class="py-3"> CareerRide is India’s first and only platform for students where you can find data about career aspects in different field.</p>
				<p>Know all about engineerng,medical, finearts, banking sector, chareterd account psychology fields and many more.</p>
				<a href="about.php" class="btn btn-success">Wanna Know More?</a>

		</div>
</div>
</section>

	<section class="my-5">
		<div class="container p-3 my-3 bg-dark text-white">
			<h2 class="text-center">Exams to Appear</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
	  				<img class="card-img-top" src="images/neet.jpg" alt="Card image">
	 				 <div class="card-body">
	   					 <h4 class="card-title">Medical Entrance Exam</h4>
	    			<p class="card-text">Neet</p>
	   				 <a href="medical.php" class="btn btn-primary">Click Here</a>
	   				</div>
	   			</div>
	   		</div>
	  

	  	<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
	  				<img class="card-img-top" src="images/main.jpg" alt="Card image">
	 				 <div class="card-body">
	   					 <h4 class="card-title">Engineering Entrance Exam</h4>
	    			<p class="card-text">JEE-Main</p>
	   				 <a href="engineering.php" class="btn btn-primary">Click Here</a>
	   				</div>
	   			</div>
	   		
	  </div>

	  	<div class="col-lg-4 col-md-4 col-12">
					<div class="card" >
	  				<img class="card-img-top" src="images/cet.jpg" alt="Card image">
	 				 <div class="card-body">
	   					 <h4 class="card-title">Enginnering Entrance Exam</h4>
	    			<p class="card-text">MH-CET</p>
	   				 <a href="engineering.php" class="btn btn-primary">Click Here</a>
	   				</div>
	   			</div>
	   		</div>
	  </div>
	</div>
	</div>


			
	</section>


<section class="my-5">
		<div class="container p-3 my-3 bg-dark text-white">
			<h2 class="text-center">Our Contributers</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-10">
					<div class="text-block">
					<h4>Pratyaksha Ambast</h4>
					<p>SE IT-B 42</p>
					<img src="images/pratyaksha.jpeg" height="800" width="800" class="img-fluid" pb=6>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-10">
					<div class="text-block">
					<h4>Rahulkumar Singh</h4>
					<p>SE IT-B 63</p>
					<img src="images/rahul.jpeg" height="800" width="800" class="img-fluid" pb=6>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-10">
					<div class="text-block">
					<h4>Nandini Yadav</h4>
					<p>SE IT-B 55</p>
					<img src="images/nandini.jpeg" height="800" width="800" class="img-fluid" pb=6>
					</div>
				</div>
			</div>
		</div>
</section>





<section class="my-5">
		<div class="container p-3 my-3 bg-dark text-white">
			<h2 class="text-center">Contact Us</h2>
		</div>

		<div class="w-50 m-auto">
			<form action="userinfo.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="uname" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Email-Id</label>
					<input type="text" name="email" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Phone No</label>
					<input type="text" name="phone" autocomplete="off" class="form-control">
				</div>
				<div class="form-group">
					<label>Comment</label>
				<textarea class="form-control" name="comment"></textarea>
				</div>

				<button type="submit" class="btn btn-success">
  <span class="spinner-border spinner-border-sm"></span>
 Submit
</button>
					
					

			</form>
		</div>
</section>

<footer>
<div class="container p-3 my-3 bg-dark text-white">

                <div class="copyright">&copy: CareerRide</div>
                <div class="contact">
                   
                   <a href="about.php">AboutUs</a>
                  
                   <a href="contactus.php">CareerWithUs/ContactUs</a>
                   
                   
                </div>
                <div class="clearfix"></div>
				</div>
            </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>




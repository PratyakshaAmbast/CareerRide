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





<section class="my-5">
	<div class="container p-3 my-3 bg-dark text-white">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<img src="images/engineering.jpg" class="img-fluid aboutimg">
		</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">Welcome to Our Page!</h2>
				<p class="py-3"> CareerRide is India’s first and only platform for students where you can find data about career aspects in different field.</p>
				<p>Know all about engineerng,medical, finearts, banking sector, chareterd account psychology fields and many more.</p>
				<a href="about.php" class="btn btn-success">Wanna Know More?</a>

		</div>
</div>
</section>

	<section class="my-5">
		<div class="py-5">
		
		<div id="main">
                <div class="content" ="green">
                <div class="single-post">
				
				
			<h2 class="text-center">What happens in Medical!</h2>
		</div>
		<div class="container-fluid">
			
                    <article>
                      
<p>In most countries, it is not easy for students to become a doctor in one country and practice in another.  Following are your options after the MBBS degree:
</p>
 
<p>With an MBBS degree, you can work at:
<ul><li>Government or private hospitals</li>
    <li>Nursing homes/clinics/health departments</li>
    <li>Medical services of the army, navy and air force, under the Ministry of Defence</li>
<li>Charitable institutions</li></ul>
<ul>The positions you can work as include:
    <li>General Practitioner</li>
    <li>Physician</li>
    <li>General Surgeon</li>
    <li>Anesthetist or Anesthesiologists</li>
    <li>Psychiatrist</li>
</ul></p>
<h2>Jobs & Salary</h2>
    <p>Whether it is a period of economic boom or recession, medical practitioners are always in demand. Doctors have many options when it comes to choosing their work options. These are some of the options for a qualified MBBS graduate both in the public and private sector:
Hospital Administration
Medical Transcription
Scientific Research
Cosmetology/Trichology
Your pay as a doctor depends on the organisation you work for, number of hours you can put in, your experience, skill, reputation, the geographic region, and similar factors. The total compensation for a doctor in government hospitals usually includes the salary, bonus, research stipends, bonuses, and other benefits. It is often seen that private practitioners and self-employed doctors have a higher median income. As you will notice in the following table, after a couple of years in this field, your salary increases in leaps and bounds.
</p>
<p>Apart from the general medicine, a new field has emerged in this real: Para-medicine. It is the intersection of healthcare, public health and public safety. The major areas of work in the field of paramedical sciences are spinal injury management, fracture management, obstetrics, management of burns and assessment, and evaluation of general incident scene.
Physiotherapy, Occupational Therapy, Speech Therapy, Prosthetic & Orthotic Engineering and Nursing are some its well-known areas. 
</p>
<h2>Pros & Cons</h2>
<p>The advantages of being a doctor are many especially if you are a sucker for respect. Following are some of the other obvious advantages:

Ability to provide service and support to others
Save lives
Continuous learning
Excellent pay
Sadly, with respect comes responsibility and some disadvantages:

Late work hours and erratic shift timings
Dealing with immensely stressful situations on an ongoing basis
Long duration of study </p>
<a href="https://www.recruiter.com/careers/"> CLICK HERE TO KNOW MORE</a>

                    </article>
	</div>
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
<?php
$servername = "localhost";
$name = "root";
$password = "";
$database = "codeacademy";

$con = mysqli_connect($servername, $name, $password, $database);

	echo "connect successfully";

if (isset($_POST['add_user']) AND !empty($_POST)) {
	$username = $_POST['email'];
	$password = $_POST['password'];
	$user_add = mysqli_query($con,"INSERT INTO `bilal`(`email`,`password`) VALUES ('$username','$password')");
	if ($user_add) {
		$sts = "info";
		$msg = "Data add successfully";

	}else{
		$sts="Danger";
		$msg="Error while inserted ";
	}
}
$v = mysqli_query($con,"SELECT * FROM bilal");


?>



<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Page Title</title>

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="CodeAcademy.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.css"
		integrity="sha512-LKG0Zi6duJ5mwncLtQVchN0iF8fWmcxApuX9pqGq7ITgwQDWR9EqZFsrV9TXfE9pPRa1J6GVnsBl7gKxAyllaA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


	<div class="container">
		<header>

			<nav class="navbar navbar-expand-lg navbar-light bg-light .header  fixed-top ">
				<div class="conatiner">
					<a href="" class="navbar-brand m-2">Code Academy</a>
				</div>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
					aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

					<span class="navbar-toggler-icon"></span>

				</button>

				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="#" class="nav-link">HOME</a></li>

						<li class="nav-item"><a href="#" class="nav-link dropdown-toggle" id="navbarDropdown"
								role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalog</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a href="#" class="dropdown-item"></a>function 1</li>
								<li><a href="#" class="dropdown-item"></a>function 2</li>
								<li><a href="#" class="dropdown-item"></a>function 3</li>
							</ul>
						</li>
						<li class="nav-item"><a href="#" class="nav-link dropdown-toggle" id="navbarDropdown"
								role="button" data-bs-toggle="dropdown" aria-expanded="false">Resources</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a href="#" class="dropdown-item"></a>function 1</li>
								<li><a href="#" class="dropdown-item"></a>function 2</li>
								<li><a href="#" class="dropdown-item"></a>function 3</li>
							</ul>
						</li>
						<li class="nav-item"><a href="#" class="nav-link dropdown-toggle" id="navbarDropdown"
								role="button" data-bs-toggle="dropdown" aria-expanded="false">Community</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a href="#" class="dropdown-item"></a>function 1</li>
								<li><a href="#" class="dropdown-item"></a>function 2</li>
								<li><a href="#" class="dropdown-item"></a>function 3</li>
							</ul>
						</li>
						<li class="nav-item"><a href="#" class="nav-link dropdown-toggle" id="navbarDropdown"
								role="button" data-bs-toggle="dropdown" aria-expanded="false">Pricing</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a href="#" class="dropdown-item"></a>function 1</li>
								<li><a href="#" class="dropdown-item"></a>function 2</li>
								<li><a href="#" class="dropdown-item"></a>function 3</li>
							</ul>
						</li>
						<li class="nav-item "><a href="#" class="nav-link">For Term</a></li>


					</ul>
				</div>

				
					<div class="">
						<span><a href=""><i class="fa fa-search btn btn-outline-warning m-2" aria-hidden="true"></i></a></span>
					</div>
	
					<div >
						
							<a href="" class="btn btn-warning m-2 "><b>Log in</b></a>

					</div>
				

			</nav>
		</header>
	</div>


	<div class="container-flude mt-4" id="container-1">
		<div class="row" style="background: #FFF0E5;">

			<div class="col-md-6">
				<img src="img/img1.jpg" alt="" class=" rol-1">
			</div>

			<div class="col-md-4 rol-2">
				<h3 class="rol-3">Join the millions learning to code with Codecademy for free</h3>

				<form method="POST">
					<div class="form-group p-2">
						<label class="p-2">Email</label>
						<input type="email" class="form-control form-control-lg" name="email">
					</div>
					<div class="form-group p-2">
						<label class="p-2">Password</label>
						<input type="password" class="form-control form-control-lg" name="password">
					</div>
					<div class="form-group p-2">
						<input type="submit" class="form-control blue1 mt-2" value="Sign up" name="add_user">
					</div>
				</form>

				<div class="p-2">
					<p>By signing up for Codecademy, you agree to Codecademy's <br>
						<a href="">Terms of Service</a>& <a href=""> Privacy Policy</a>.
					</p>
					<b>Or sign up using:</b>
				</div>

				<div class="main-box">
					<div>
						<div class="icon-box">
							<i class="fa ma fa-google" aria-hidden="true"></i>
						</div>
					</div>
					<div>
						<div class="icon-box">
							<i class="fa ma fa-facebook-square" aria-hidden="true"></i>
						</div>
					</div>
					<div>
						<div class="icon-box">
							<i class="fa ma fa-linkedin-square" aria-hidden="true"></i>
						</div>
					</div>
					<div>
						<div class="icon-box">
							<i class="fa ma fa-github" aria-hidden="true"></i>

						</div>
					</div>
					<div>
						<div class="icon-box">
							<i class="fa ma fa-apple" aria-hidden="true"></i>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>

	<div class="container-flude" id="container-3">
		<div class="row">
			<div class="col-md-12 " id="container-3-1">
				<h4 class="pt-5">Start Learning</h4>
				<h1>Popular Courses</h1>
			</div>
		</div>

		<div class="container" id="container-5">


			<div class="row">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'one')">AI</button>
					<button class="tablinks" onclick="openCity(event, 'two')">Free</button>
					<button class="tablinks" onclick="openCity(event, 'three')">New to coding</button>
					<button class="tablinks" onclick="openCity(event, 'four')">Most popular</button>
					<button class="tablinks" onclick="openCity(event, 'five')">Skill paths</button>
					<button class="tablinks" onclick="openCity(event, 'six')">Career paths</button>
				</div>

				<div id="one" class="tabcontent">
					<div class="row">
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									AI
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									AI
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									AI
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									AI
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="two" class="tabcontent">
					<div class="row">
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="three" class="tabcontent">
					<div class="row">
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="four" class="tabcontent">
					<div class="row">
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Free Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="five" class="tabcontent">
					<div class="row">
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Paid Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Paid Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Paid Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Paid Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="six" class="tabcontent">
					<div class="row">
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Paid Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Paid Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Paid Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card my-4">
								<div class="card-header">
									Paid Course
								</div>
								<div class="card-body">
									<b>Front-End Engineer</b>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing
										elit. Adipisci error dolor, vel vero eum repudiandae.</p>
								</div>
								<div class="card-footer">
									includ 34 Courses
									<hr>
									With profectional certification
									<hr>
									Lessons
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="row" id="container-3-2">
			<a href="" class="btn btn-warning">Explore Full Catalog </a>
		</div>

	</div>

	<div class="container-flude" id="container-4">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="img/text.webp" alt="" class="w-100 h-100 " id="container-4-1">
				</div>

				<div class="col-md-6" id="container-4-2">
					<h4 class="p-1">Beginners welcome</h4>
					<h1 class="p-1">Start coding in <br> seconds</h1>
					<b class="p-1">Go ahead, give it a try. Our hands-on learning <br> environment means you'll
						be writing real code from your very first lesson.</b>
					<div class="pt-4">
						<a href="" class="btn btn-outline-warning">Continue Lesson</a>
						<a href="" class="btn btn-warning">More beginner courses</a>
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>

	<div class="container-flude" id="container-6">
		<div class="row">
			<div class="col-md-6 ">
				<div id="container-6-1">

					<h1 class="p-1">Not sure where <br> to start?</h1>
					<p>Lorem ipsum dolor sit amet consectetur. <br> At dolores assumenda

						veritatis. <br> Fugit debitis numquam quis ducimus?
					</p>
					<a href="" class="btn btn-primary mt-2">Take the quiz</a>
				</div>
			</div>
			<div class="col-md-6">
				<img src="img/side.png" alt="" class="w-75 h-75" id="container-6-2">
			</div>
		</div>
	</div>

	<div class="container-flude container-1" id="">
		<div class="container blue">
			<div class="row">
				<div class="col-md-12">
					<h1 class="py-2">Stories from real people</h1>
					<p class="py-2">Watch and read stories from the Codecademy community.</p>
				</div>

			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<img src="img/p1.jpeg" alt="" class="w-100 h-100">
						</div>
					</div>
					<div class="card-header">
						<h4>Technical Analyst to Front-End Engineer in 6 Months</h4>
						<p>Technical Analyst to Front-End Engineer in 6 Months
							Cristian T</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<img src="img/p2.jpeg" alt="" class="w-100 h-100">
						</div>
					</div>
					<div class="card-header">
						<h4>Technical Analyst to Front-End Engineer in 6 Months</h4>
						<p>Technical Analyst to Front-End Engineer in 6 Months
							Cristian T</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<img src="img/p3.jpeg" alt="" class="w-100 h-100">
						</div>
					</div>
					<div class="card-header">
						<h4>Technical Analyst to Front-End Engineer in 6 Months</h4>
						<p>Technical Analyst to Front-End Engineer in 6 Months
							Cristian T</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<img src="img/p4.jpeg" alt="" class="w-100 h-100">
						</div>
					</div>
					<div class="card-header">
						<h4>Technical Analyst to Front-End Engineer in 6 Months</h4>
						<p>Technical Analyst to Front-End Engineer in 6 Months
							Cristian T</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container-flude" id="container-7">
		<div class="container">
			<div class="row">

				<div class="col-md-6">
					<h1>Join in on <br>
						something big</h1>
				</div>
				<div class="col-md-2">
					<h1>50M</h1>
					<h4>Learners</h4>
				</div>
				<div class="col-md-2">
					<h1>190+</h1>
					<h4>Countries</h4>
				</div>
				<div class="col-md-2">
					<h1>3.7B</h1>
					<h4>Code submits</h4>
				</div>
			</div>
		</div>
	</div>


	<div class="container-flude" id="container-9">
		<div class="row">
			<div class="col-md-6 ">
				<div id="container-9-1">
					<div class="p-0">
						<h2>Code Academy</h2>
						<p>from skilsoft</p>
					</div>
					<h1 class="p-1">Level up your <br> team's skills</h1>
					<p>Give your team the knowledge, experience, and <br> confidence they need to tackle any problem
					</p>
					<a href="" class="btn btn-warning mt-2">Explore business plans</a>
				</div>
			</div>
			<div class="col-md-6">
				<img src="img/hexagone.png" alt="" class="w-75 h-75" id="container-6-2">
			</div>
		</div>
	</div>

	<div class="container-flude" id="container-10">
		<div class="container">

			<div class="row">
				<div class="col-md-6 ">
					<img src="img/img3.png" alt="" class="w-75 h-75" id="container-10-2">
				</div>
				<div class="col-md-6 ">
					<div id="container-9-1">

						<h1 class="p-1">Start for free</h1>
						<p>If you’ve made it this far, you must be at least
							<br> a little curious. Sign up and take the first step
							<br> toward your goals
						</p>
						<a href="" class="btn btn-warning mt-2">Explore business plans</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container-flude" id="container-11">
		<div class="container">
			<div class="row footer">
				<div class="col-md-2">
					<ul>
						<li><b>Company</b></li>
						<li>About</li>
						<li>Careers</li>
						<li>Affiliates</li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i>
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
							<i class="fa fa-instagram" aria-hidden="true"></i>
							<i class="fa fa-youtube-square" aria-hidden="true"></i>
						</li>
					</ul>
				</div>
				<div class="col-md-2">
					<ul>
						<li><b>Resources</b></li>
						<li>Articles</li>
						<li>blog</li>
						<li>Chearsheet</li>
						<li>Cide Chalenges</li>
						<li>Docs</li>
						<li>Projects</li>
						<li>Videos</li>
						<li>Workspace</li>
						<li><b>Support</b></li>
						<li>Help Center</li>
					</ul>
				</div>
				<div class="col-md-2 ">
					<ul>
						<li><b>Plans</b></li>
						<li>Paid memberships</li>
						<li>For students</li>
						<li>For team</li>
						<li><b>Community</b></li>
						<li>Forums</li>
						<li>Chapters</li>
						<li>Events</li>
						<li>Code crew</li>
						<li>Learner Stories</li>
						<li>Discord</li>
					</ul>
				</div>
				<div class="col-md-2 bl">
					<ul>
						<li><b>Subject</b></li>
						<li>AI</li>
						<li>Cloud Computing</li>
						<li>Code Founfation</li>
						<li>Computer Science</li>
						<li>Cybersecurity</li>
						<li>Data Analytics</li>
						<li>Data science</li>
						<li>Data Visualization</li>
						<li>Developer Tool</li>
						<li>DevOps</li>
						<li>Game Developer</li>
						<li>IT</li>
						<li>Machine learning</li>
						<li>Math</li>
						<li>Mobile Development</li>
						<li>Web Development</li>
						<li>Web Design</li>
					</ul>

				</div>
				<div class="col-md-2">
					<ul>
						<li><b>Languages</b></li>
						<li>AI</li>
						<li>Cloud Computing</li>
						<li>Code Founfation</li>
						<li>Computer Science</li>
						<li>Cybersecurity</li>
						<li>Data Analytics</li>
						<li>Data science</li>
						<li>Data Visualization</li>
						<li>Developer Tool</li>
						<li>DevOps</li>
						<li>Game Developer</li>
						<li>IT</li>
						<li>Machine learning</li>
						<li>Math</li>
						<li>Mobile Development</li>
						<li>Web Development</li>
						<li>Web Design</li>
					</ul>
				</div>
				<div class="col-md-2">
					<ul>
						<li><b>Plans</b></li>
						<li>Paid memberships</li>
						<li>For students</li>
						<li>For team</li>
						<li><b>Community</b></li>
						<li>Forums</li>
						<li>Chapters</li>
						<li>Events</li>
						<li>Code crew</li>
						<li>Learner Stories</li>
						<li><b>Mobile</b></li>
					</ul>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<p>Privacy Policy | Cookie Policy | Do Not Sell My Personal Information | Terms</p>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-4">
					Made with ❤️in NYC © 2023 Codecademy
				</div>
			</div>
		</div>
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>

	<script>
		function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";

		}
	</script>

</html>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="vendors/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link rel="stylesheet" type="text/css" href="vendors/modal-video/css/modal-video.min.css">


	<script type="text/javascript" src="vendors/jquery/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="vendors/modal-video/js/jquery-modal-video.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="col-sm-12 top-header">
			<a href="javascript:;" class="nav-toggle"><i class="fa fa-bars"></i></a>
			<h6 class="header-title">Dashboard</h6>
			<div class="header-profile">
				<img src="assets/img/profile2.jpg">
				<a href="javascript:;" data-toggle="message-box"><i class="fa fa-caret-down text-white"></i></a>
			</div>
		</div>
		<div class="col-md-1 sidemenu">
			<div class="logo-wrapper">
				<h6 class="logo">S</h6>
			</div>
			<ul class="menu">
				<li class="menu-item">
					<i class="fa fa-home"></i><a href="javascript:;"> Home</a>
				</li>
				<li class="menu-item">
					<i class="fa fa-user"></i><a href="javascript:;"> Students</a>
				</li>
				<li class="menu-item">
					<i class="fa fa-book"></i><a href="javascript:;"> My classroom</a>
				</li>
				<li class="menu-item">
					<i class="fa fa-cog"></i> <a href="javascript:;">Management</a>
				</li>
				<li class="menu-item">
					<i class="fa fa-area-chart"></i><a href="javascript:;" data-toggle='submenu'>Data <i class="fa fa-caret-down"></i></a>
					<ul class="submenu">
						<li class="submenu-item"><a href="javascript:;">Scores</a></li>
						<li class="submenu-item"><a href="javascript:;">Results</a></li>
						<li class="submenu-item"><a href="javascript:;">Transcripts</a></li>
					</ul>
				</li>
				<hr>
				<h6 class="theme-color text-center">Admin</h6>
				<li class="menu-item">
					<i class="fa fa-user"></i><a href="javascript:;"> Students</a>
				</li>
				<li class="menu-item">
					<i class="fa fa-building"></i><a href="javascript:;"> Classes</a>
				</li>
				<li class="menu-item">
					<i class="fa fa-cog"></i><a href="javascript:;"> Teachers</a>
				</li>
				<li class="menu-item">
					<i class="fa fa-envelope"></i> <a href="javascript:;">Messages</a>
				</li>	
				<li class="menu-item">
					<i class="fa fa-bar-chart"></i> <a href="javascript:;">Assessments</a>
				</li>
			</ul>
			<a class="logout text-white" href="javascript:;" data-toggle="custom-modal" data-target="#logoutModal"> <i class="fa fa-sign-out text-white"></i> Logout</a>
		</div>

		<div class="col-md-12 main-content p-5" style="background-image: url('assets/img/bg1.jpg'); min-height: 100vh; background-size: cover;">
			<h6 class="page-title">Home</h6>
			<hr>
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-2 mb-2">
							<div class="card card-sl">
								<h6 class="card-header text-10 text-center theme-color">Total students</h6>
								<!-- <hr class="bb-theme-color" > -->
								<h4 class="text-center theme-color font-800">10,090</h4>
							</div >
						</div>
						<div class="col-sm-3 mb-2">
							<div class="card card-sl">
								<h6 class="card-header text-10 text-center theme-color">Total Assessments Taken</h6>
								<!-- <hr class="bb-theme-color" > -->
								<h4 class="text-center theme-color font-800">100,905</h4>
							</div >
						</div>
						<div class="col-sm-3 mb-2">
							<div class="card card-sl">
								<h6 class="card-header text-10 text-center theme-color">No. of Classes</h6>
								<!-- <hr class="bb-theme-color" > -->
								<h4 class="text-center theme-color font-800">204</h4>
							</div >
						</div>
						<div class="col-sm-3 mb-2">
							<div class="card card-sl">
								<h6 class="card-header text-10 text-center theme-color">Available Teachers</h6>
								<!-- <hr class="bb-theme-color" > -->
								<h4 class="text-center theme-color font-800">1,843</h4>
							</div >
						</div>
						<div class="col-sm-12">
							<h6 class="text-theme mt-4 p-2 underlined">Our Teachers</h6>
						</div>
						<div class="col-sm-12 mt-4">
							<div class="card shadow-sm p-2 card-list">

								<span class="custom-badge bg-danger">Hot</span>
								<div class="row">
									<div class="col-sm-1">
										<img src="assets/img/profile2.jpg" class="card-img">
									</div>
									<div class="col-sm-6">
										<h6 class="text-muted">Chinedu Ukpe <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></h6>
										<small class="theme-color">Famous for his ingenius contribution to the media department of the school.</small>
									</div>
									<div class="col-sm-5">
										<a href="javascript:;"><i class="ml-5 theme-color fa fa-envelope card-icon hover-text-white"></i></a>
										<a href="javascript:;"><i class="ml-5 theme-color fa fa-edit card-icon text-green"></i></a>
										<a href="javascript:;"><i class="ml-5 theme-color fa fa-user card-icon text-blue"></i></a>
										<a href="javascript:;"><i class="ml-5 fa fa-trash card-icon text-danger"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 mt-4">
							<div class="card shadow-sm p-2 card-list active">
								<span class="custom-badge">New</span>
								<div class="row">
									<div class="col-sm-1">
										<img src="assets/img/profile.jpg" class="card-img">
									</div>
									<div class="col-sm-6">
										<h6 class="text-muted">Chinedu Ukpe <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></h6>
										<small class="theme-color">Famous for his ingenius contribution to the media department of the school.</small>
									</div>
									<div class="col-sm-5">
										<a href="javascript:;"><i class="ml-5 theme-color fa fa-envelope card-icon hover-text-white"></i></a>
										<a href="javascript:;"><i class="ml-5 theme-color fa fa-edit card-icon text-green"></i></a>
										<a href="javascript:;"><i class="ml-5 theme-color fa fa-user card-icon text-blue"></i></a>
										<a href="javascript:;"><i class="ml-5 fa fa-trash card-icon text-danger"></i></a>
									</div>
								</div>
							</div>
						</div>


						<div class="col-sm-12 mt-4">
							<div class="card shadow-sm p-2 card-list">
								<div class="row">
									<div class="col-sm-1">
										<img src="assets/img/profile3.jpg" class="card-img">
									</div>
									<div class="col-sm-6">
										<h6 class="text-muted">Okpe Samuel <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></h6>
										<small class="theme-color">Famous for his ingenius contribution to the media department of the school.</small>
									</div>
									<div class="col-sm-5">
										<a href="javascript:;"><i class="ml-5 theme-color fa fa-envelope card-icon hover-text-white"></i></a>
										<a href="javascript:;"><i class="ml-5 theme-color fa fa-edit card-icon text-green"></i></a>
										<a href="javascript:;"><i class="ml-5 theme-color fa fa-user card-icon text-blue"></i></a>
										<a href="javascript:;"><i class="ml-5 fa fa-trash card-icon text-danger"></i></a>								</div>
									</div>
								</div>
							</div>

							<div class="col-sm-12">
								<div class="row mt-5 courses-section">
									<div class="col-sm-12">
										<h6 class="theme-color underlined mb-3">Our Courses</h6>
									</div>
									<div class="col-md-4">
										<div class="card shadow-sm">
											<div class="card-body">
												<img src="assets/img/courses/course1.jpg">
												<div class="course-category">
													<a href="javascript:;" >Programming </a>
													<div class="review-wrapper">
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="card-body-overlay">
													<a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i class="fa fa-play-circle"></i></a>
												</div>
												<h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
											</div>
											<div class="card-footer">
												<button class="btn btn-sm btn-block btn-outline-theme">Register</button>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card shadow-sm">
											<div class="card-body">
												<img src="assets/img/courses/course2.jpg">
												<div class="course-category">
													<a href="javascript:;">Algorithms </a>
													<div class="review-wrapper">
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="card-body-overlay">
													<a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i class="fa fa-play-circle"></i></a>
												</div>
												<h6 class="pl-2 mt-5">Introduction to basic algorithm concepts</h6>
											</div>
											<div class="card-footer">
												<button class="btn btn-sm btn-block btn-outline-theme">Register</button>
											</div>

										</div>
									</div>
									<div class="col-md-4">
										<div class="card shadow-sm">
											<div class="card-body">
												<img src="assets/img/courses/course3.jpg">
												<div class="course-category">
													<a href="javascript:;">Programming </a>
													<div class="review-wrapper">
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="card-body-overlay">
													<a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i class="fa fa-play-circle"></i></a>
												</div>
												<h6 class="pl-2 mt-5">Understanding programming concepts</h6>
											</div>
											<div class="card-footer">
												<button class="btn btn-sm btn-block btn-outline-theme">Register</button>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="card shadow-sm">
											<div class="card-body">
												<img src="assets/img/courses/course4.jpg">
												<div class="course-category">
													<a href="javascript:;">Compiler Construction </a>
													<div class="review-wrapper">
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
													</div>
												</div>
												<div class="card-body-overlay">
													<a href="javascript:;" data-video-id='L61p2uyiMSo' class="video-modal-trigger">Watch Demo <i class="fa fa-play-circle"></i></a>

												</div>
												<h6 class="pl-2 mt-5">Introduction to compiler construction 1</h6>
											</div>
											<div class="card-footer">
												<button class="btn btn-sm btn-block btn-outline-theme">Register</button>
											</div>
										</div>
									</div>
									<!-- SWITCH -->
									<div class="col-sm-12">
										<div class="switch">
											<button class="switch-button"></button>
										</div>
									</div>
									<!-- END SWITCHES -->
								</div>
							</div>

						</div>
					</div>

					<div class="col-md-3 bl-1 mmt-2">
						<h6 class="page-title">Profiles</h6>
						<div class="card profile-card">
							<div class="card-header">
								<img src="assets/img/profile2.jpg" class="img img-responsive">

							</div>
							<div class="card-body">
								<div class="file-form-group">
									<input type="file" name="profile-picture">
									<button class="file-upload-button btn btn-theme">Upload</button>
									<span class="upload-file-name"></span>
								</div>
							</div>
						</div>
						<div class="custom-card mt-3 p-2">
							<h6 class="theme-color text-center curved-underlined">Chinedu Ukpe</h6>
							<small class="text-justified">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
							</small>
							<button class="btn btn-theme block mt-2 btn-block">Update</button>
						</div>
					</div>

				</div>

				<!-- DATA TABLE -->
				<div class="row py-5">
					<table class="table table-responsive-sm slid-data-table">
						<thead>
							<tr>
								<th>Status</th>
								<th>Name</th>
								<th>Level</th>
								<th>Course</th>
								<th>Attendance</th>
								<th>Date</th>
								<th>Grade</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td> 
									<div class="switch">
										<button class="switch-button"></button>
									</div>
								</td>
								<td>Chinedu Ukpe</td>
								<td>200</td>
								<td>CMP410</td>
								<td>
									<div class="progress-bar">
										<span class="progress" style="width: 50%"></span>
										<span class="label">50%</span>
									</div>
								</td>
								<td>26th June 2020</td>
								<td>A</td>

							</tr>
							<tr>
								<td> 
									<div class="switch active">
										<button class="switch-button"></button>
									</div>
								</td>
								<td>Chinedu Ukpe</td>
								<td>200</td>
								<td>CMP410</td>
								<td>
									<div class="progress-bar">
										<span class="progress" style="width: 9%"></span>
										<span class="label">9%</span>
									</div>
								</td>
								<td>26th June 2020</td>
								<td>A</td>

							</tr>
							<tr>
								<td> 
									<div class="switch active">
										<button class="switch-button"></button>
									</div>
								</td>
								<td>Chinedu Ukpe</td>
								<td>200</td>
								<td>CMP410</td>
								<td>
									<div class="progress-bar">
										<span class="progress" style="width: 40%; "></span>
										<span class="label">40%</span>
									</div>
								</td>
								<td>26th June 2020</td>
								<td>A</td>

							</tr>
							<tr>
								<td> 
									<div class="switch">
										<button class="switch-button"></button>
									</div>
								</td>
								<td>Chinedu Ukpe</td>
								<td>200</td>
								<td>CMP410</td>
								<td>
									<div class="progress-bar">
										<span class="progress" style="width: 10%"></span>
										<span class="label">10%</span>
									</div>
								</td>
								<td>26th June 2020</td>
								<td>A</td>

							</tr><tr>
								<td> 
									<div class="switch active">
										<button class="switch-button"></button>
									</div>
								</td>
								<td>Chinedu Ukpe</td>
								<td>200</td>
								<td>CMP410</td>
								<td>
									<div class="progress-bar">
										<span class="progress" style="width: 86%"></span>
										<span class="label">86%</span>
									</div>
								</td>
								<td>26th June 2020</td>
								<td>A</td>

							</tr>
						</tbody>
					</table>
				</div>
				<!-- END DATA TABLE -->

				<!-- START ABOUT SECTION -->
				<div class="row mt-5 shadow-sm fadeInOnScroll">
					<div class="col-sm-12 col-md-7 p-4 pb-0">
						<h4 class="theme-color underlined-center bolder text-center">Building the next generation schools</h4>
						<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						</p>
						<a href="javascript:;" class="btn m-3 btn-lg btn-theme text-white">See more...</a>
					</div>
					<div class="col-sm-12 col-md-4">
						<img src="assets/img/section1.webp" class="img-full">
					</div>
				</div>
				<!-- END ABOUT SECTOIN -->

				<!-- START AUDIO TRACK SECTIONS -->
				<div class="container-fluid mt-5 fadeInOnScroll">
					<h3 class="theme-color underlined">Audio Section</h3>
					<div class="audio-tracks-section row">
						<div class="col-sm-12 col-md-3 audio-item">
							<div class="row shadow">
								<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >
									<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">
								</div>
								<div class="col-sm-5 col-md-5 mt-sm-2">
									<h6 class="theme-color text-10">Discussing the imact of polygamy in modern society</h6>
									<small class="text-muted text-9">Bryson Tiller</small>
								</div>
								<div class="col-sm-2 col-md-2 d-flex activity-wrapper">
									<a href="javascript:;"><i class="fa fa-heart text-muted"></i></a>
									<a href="javascript:;"><i class="fa fa-thumbs-up text-muted"></i></a>
								</div>
								<hr>
								<div class="play-button-wrapper p-2 ">
									<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>
										<audio >
											<source src="assets/audio/intro.mp3" type="audio/mpeg">
										</audio>
									</a>
								</div>

							</div>
						</div>

						<div class="col-sm-12 col-md-3 audio-item">
							<div class="row shadow">
								<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >
									<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">
								</div>
								<div class="col-sm-5 col-md-5 mt-sm-2">
									<h6 class="theme-color text-10">Sorry Not Sorry</h6>
									<small class="text-muted text-9">Bryson Tiller</small>
								</div>
								<div class="col-sm-2 col-md-2 d-flex activity-wrapper">
									<a href="javascript:;"><i class="fa fa-heart theme-color"></i></a>
									<a href="javascript:;"><i class="fa fa-thumbs-up theme-color"></i></a>
								</div>
								<hr>
								<div class="play-button-wrapper p-2 ">
									<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>
										<audio >
											<source src="assets/audio/intro.mp3" type="audio/mpeg">
										</audio>
									</a>
								</div>

							</div>
						</div>

						<div class="col-sm-12 col-md-3 audio-item">
							<div class="row shadow">
								<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >
									<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">
								</div>
								<div class="col-sm-5 col-md-5 mt-sm-2">
									<h6 class="theme-color text-10">Discussing the imact of polygamy in modern society</h6>
									<small class="text-muted text-9">Bryson Tiller</small>
								</div>
								<div class="col-sm-2 col-md-2 d-flex activity-wrapper">
									<a href="javascript:;"><i class="fa fa-heart text-muted"></i></a>
									<a href="javascript:;"><i class="fa fa-thumbs-up theme-color"></i></a>
								</div>
								<hr>
								<div class="play-button-wrapper p-2 ">
									<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>
										<audio >
											<source src="assets/audio/audio4.mp3" type="audio/mpeg">
										</audio>
									</a>
								</div>

							</div>
						</div>

						<div class="col-sm-12 col-md-3 audio-item">
							<div class="row shadow">
								<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >
									<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">
								</div>
								<div class="col-sm-5 col-md-5 mt-sm-2">
									<h6 class="theme-color text-10">Discussing the imact of polygamy in modern society</h6>
									<small class="text-muted text-9">Bryson Tiller</small>
								</div>
								<div class="col-sm-2 col-md-2 d-flex activity-wrapper">
									<a href="javascript:;"><i class="fa fa-heart text-muted"></i></a>
									<a href="javascript:;"><i class="fa fa-thumbs-up text-muted"></i></a>
								</div>
								<hr>
								<div class="play-button-wrapper p-2 ">
									<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>
										<audio >
											<source src="assets/audio/audio3.mp3" type="audio/mpeg">
										</audio>
									</a>
								</div>

							</div>
						</div>

						<div class="col-sm-12 col-md-3 audio-item">
							<div class="row shadow">
								<div class="col-sm-1 col-md-3 p-0 audio-img-wrapper" >
									<img src="assets/img/album-covers/trapsoul.jpg" class="audio-img">
								</div>
								<div class="col-sm-5 col-md-5 mt-sm-2">
									<h6 class="theme-color text-10">Discussing the imact of polygamy in modern society</h6>
									<small class="text-muted text-9">Bryson Tiller</small>
								</div>
								<div class="col-sm-2 col-md-2 d-flex activity-wrapper">
									<a href="javascript:;"><i class="fa fa-heart text-muted"></i></a>
									<a href="javascript:;"><i class="fa fa-thumbs-up text-muted"></i></a>
								</div>
								<hr>
								<div class="play-button-wrapper p-2 ">
									<a href="javascript:;" data-role='playAudio'><i class="fa fa-play-circle theme-color"></i>
										<audio >
											<source src="assets/audio/audio2.mp3" type="audio/mpeg">
										</audio>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- END AUDIO TRACK SECTIONS -->

				<!-- MANAGEMENT SECTION -->
				<div class="container-fluid mt-5">
					<h3 class="theme-color underlined">Our Staffs</h3>
					<div class="row management-section">
						<div class="col-md-2 management-user shadow  p-0">
							<img src="assets/img/profile2.jpg" class="img-full">
							<div class="management-user-detail pt-2">
								<h4 class="text-center mb-0 mt-2">Chinedu Ukpe</h4>
								<p class="text-center">Programmer</p>
								<div class="social-wrapper">
									<a href="javascript:;"><i class="fa fa-instagram text-white"></i></a>
									<a href="javascript:;"><i class="fa fa-whatsapp text-white"></i></a>
									<a href="javascript:;"><i class="fa fa-twitter text-white"></i></a>
									<a href="javascript:;"><i class="fa fa-facebook text-white"></i></a>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!-- END MANAGEMENT SECTION -->

			</div>

			<div class="message-box shadow">
				<h6 class="theme-color text-10"> <i class="fa fa-envelope"></i> New messages</h6>
				<hr>
				<div class="block p-2 bg-white ">
					<div class="message-item p-1">
						<div class="row">
							<div class="col-sm-4">
								<img src="assets/img/profile2.jpg">
							</div>
							<div class="col-sm-8">
								<a href="javascript:;" class="block theme-color text-10"><span class="message-custom-badge bg-green text-8 p-2"></span>Your game is ready</a>
								<small class="block text-muted text-10">Mr. Chinedu, we are pleased to announce ou...</small>
							</div>
						</div>
					</div>
					<div class="message-item p-1">
						<div class="row">
							<div class="col-sm-4">
								<img src="assets/img/profile3.jpg">
							</div>
							<div class="col-sm-8">
								<a href="javascript:;" class="block theme-color text-10"><span class="message-custom-badge bg-blue text-8 p-2"></span>Hey Chinedu</a>
								<small class="block text-muted text-10">Mr. Chinedu, we are pleased to announce ou...</small>
							</div>
						</div>
					</div>
					<div class="message-item p-1">
						<div class="row">
							<div class="col-sm-4">
								<img src="assets/img/profile.jpg">
							</div>
							<div class="col-sm-8">
								<a href="javascript:;" class="block theme-color text-10"><span class="message-custom-badge bg-danger text-8 p-2"></span>Alert! Error found</a>
								<small class="block text-muted text-10">Mr. Chinedu, we are pleased to announce ou...</small>
							</div>
						</div>
					</div>
					<div class="message-item p-1">
						<div class="row">
							<div class="col-sm-4">
								<img src="assets/img/profile3.jpg">
							</div>
							<div class="col-sm-8">
								<a href="javascript:;" class="block theme-color text-10"><span class="message-custom-badge bg-blue text-8 p-2"></span>Welcome on board mate!</a>
								<small class="block text-muted text-10">Thank you for signing up with meta cafe...</small>
							</div>
						</div>
					</div>
					<!-- <hr> -->
					<a href="javascript:;" class="pull-right theme-color text-10">more...</a>
				</div>
			</div>
		</div>
		<footer>
			<p class="text-center text-10 theme-color">Copyright 2020 @ SLID Solutions</p>
		</footer>

		<div class="custom-modal" id="logoutModal">
			<div class="card-modal-content">
				<div class="card-header bg-danger">
					<h6 class="text-white">Logout</h6>
				</div>
				<div class="card-body bg-white">
					<p>Are you sure you want to logout?</p>
				</div>
				<div class="card-footer bg-white">
					<button class="btn btn-secondary close-modal text-10">Close</button>
					<a href="/" class="btn btn-danger text-10">Logout</a>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="vendors/jquery/popper.min.js"></script>
		<script type="text/javascript" src="vendors/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/dashboard.js"></script>

		<script>
			$(".video-modal-trigger").modalVideo({
				youtube:{
					controls:0,
					nocookie: true
				}
			});
		</script>
	</body>

	</html>
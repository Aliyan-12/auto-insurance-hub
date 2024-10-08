<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Auto Insurance - Home</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

		<style>
			#message {
				text-shadow: 15px 5px 20px #666;
				transition: opacity 0.5s ease;
			}
		</style>
		<script>
			setTimeout(function() {
				var messageElement = document.getElementById('message');
				if (messageElement) {
					messageElement.style.opacity = '0'; // Fade out
					setTimeout(() => {
						messageElement.remove(); // Remove after fade out
					}, 500);
				}
			}, 4000);
		</script>
	</head>
	<body id="home">
		<header>
			<section class="navbar logo-holder navbar-expand-lg bg-body-dark">
				<div class="container">
				  <h2><a href="#"> <span>Auto</span> Secure Hub</a></h2>
				  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  	<!-- <span class="navbar-toggler-new-icon"> -->
						<img src="images/icons/menu.svg" alt="menu">
					<!-- </span> -->
				  </button>
				  <div class="collapse navbar-collapse justify-content-end mx-auto" id="navbarSupportedContent">
					<ul class="navbar-nav gap-5 mb-2 mb-lg-0">
					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.html">Home</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="#services">Services</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="./pages/partners.php">Partners</a>
					  </li>
					  <!-- <li class="nav-item">
						<a class="nav-link" href="pages/form.html">Form</a>
					  </li> -->
					</ul>
					
				  </div>
				</div>
			</section>

			<section class="hero">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4 col-md-offset-0 col-sm-10">
							<div class="hero-text">
								<h1>BE INSURED & <span class="big-title">SECURE </span> </h1> 
								<h2>YOUR CAR INSURANCE QUOTES</h2>
								<!-- <h6>Manage your policy your way, with our mobile app, paperless policy documents and billing, and online automatic bill payments.</h6> -->
							</div>
						</div>
							<div class="col-md-6 col-sm-12">
								<div class="hero-form">
									<?php if(array_key_exists('success', $_SESSION) && $_SESSION['success']): ?>
										<div id="message" class="fw-bold fs-3 text-success"><?= $_SESSION['message']; ?></div>
									<?php elseif(array_key_exists('success', $_SESSION) && !$_SESSION['success']): ?>
										<div id="message" class="fw-bold fs-3 text-danger"><?= $_SESSION['message']; ?></div>
									<?php endif; ?>
									<?php unset($_SESSION['success']); unset($_SESSION['message']); ?>
									<!-- <h2>GET A QUOTE</h2>
									<h6>FREE AND FASTER</h6> -->
									<form action="php/save.php" method="post">
										<input type="hidden" name="universal_leadid" id="leadid_token" value="">
										<input type="hidden" name="traffic_source_id" id="traffic_source_id" value="2374">
										<input type="hidden" name="source_url" id="source_url" value="https://autosecurehub.com/">

										<div class="form-group form-group-lg">
											<label class="sr-only" >First Name</label>
											<input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required="required">
										</div>
										<div class="form-group form-group-lg">
											<label class="sr-only" >Last Name</label>
											<input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required="required">
										</div>
										<div class="form-group form-group-lg">
											<label class="sr-only">Email</label>
											<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
										</div>
										<div class="form-group form-group-lg">
											<label class="sr-only" >Phone No</label>
											<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" required="required">
										</div>
										<div class="form-group form-group-lg">
											<label class="sr-only" >ZIP Code</label>
											<input type="text" class="form-control" id="zip" name="zip" placeholder="ZIP Code" required="required">
										</div>
										<div class="form-group form-group-lg">
											<label class="d-flex align-items-start text-danger fw-bold">
												<!-- <input type="checkbox" class="d-flex me-2" name="leadid_tcpa_disclosure" id="leadid_tcpa_disclosure" required="required"/> -->
												Terms and Conditions
											</label>
											<p class="fw-normal text-start text-dark fs-6">
												By clicking the <strong>“Get Quote”</strong> button, I agree to the <a href="./pages/privacy-policy.php" style="text-decoration: underline; color: inherit;" target="_blank">Privacy Policy</a> and <a href="./pages/terms-&-conditions.php" style="text-decoration: underline; color: inherit;" target="_blank">Terms & Conditions.</a> <br>
												By clicking the <strong>“Get Quote”</strong> button, I hereby consent to receive marketing communications via automated telephone dialing system and/or pre-recorded or artificial voice calls, text messages, and/or emails from Auto Secure Hub and one or more of its <a href="./pages/partners.php" style="text-decoration: underline; color: inherit;" target="_blank">Marketing Partners</a> at the phone number provided above. Consent is not a condition of purchase and may be revoked at any time. For a quote without consent, please call Auto Secure Hub at <a href="tel:(855) 308-1639" style="text-decoration: underline; color: inherit;">(855) 308-1639</a>.
											</p>
										</div>
										<button type="submit" class="btn btn-primary btn-lg btn-block">GET QUOTE</button>
									</form>
									<!-- <p>We promise your details are secure with us.</p> -->
									<p class="form-message"></p>
								</div>
							</div>
					</div> <!-- Hero Row End -->
				</div> <!-- Hero Container End -->
			</section> <!-- Hero Section End -->
		</header> <!-- Header End -->

		<!-- <section class="clients">
			 <div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<h6>We are working with good companies...</h6>
						</div>
					 	<div class="push-right">
					 		<div class="col-md-2 col-sm-3">
								<img src="images/client-logos/client-1.png" class="img-responsive" alt="Client Logo">
							</div>
							<div class="col-md-2 col-sm-3">
								<img src="images/client-logos/client-2.png" class="img-responsive" alt="Client Logo">
							</div>
							<div class="col-md-2 col-sm-3">
								<img src="images/client-logos/client-3.png" class="img-responsive" alt="Client Logo">
							</div>
							<div class="col-md-2 col-sm-3">
								<img src="images/client-logos/client-4.png" class="img-responsive" alt="Client Logo">
						 	</div>
					 	</div>
					</div>
			 </div>
		</section> -->

		<section class="features">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="features-title">
							<h2>Why Choose Us?</h2>
							<h5>
								Hit the road with confidence and we will handle the rest! <br><br>
								Contact us today for personalized auto insurance quotes. Our professionals are standing by to answer your questions and help you find the best coverage and price for you.
							</h5>
						</div> <!-- End Features Title -->
						<div class="features-list">
							<h4>Comprehensive Coverage</h4>
							<p><img src="images/icons/tick-icon.png" alt="tick">May protect you from financial loss even if you're responsible for an accident that causes injury or damage to another person or their property.</p>
						</div> <!-- End Features List 1 -->
						<!-- <div class="features-list">
							<h4>Claims Support</h4>
							<p><img src="images/icons/tick-icon.png" alt="tick">Accidents may happen, but we're here to make the process smoother. Our dedicated licensed advisors are available 24/7 to guide you through the process, ensuring hassle-free service when you need it the most with no obligated quotes.</p>
						</div> -->
						<div class="features-list">
							<h4>Tailored Policies</h4>
							<p><img src="images/icons/tick-icon.png" alt="tick">Each driver has different insurance requirements, and we find such policies that suit your needs.</p>
						</div> <!-- End Features List 3 -->
					</div>
				</div> <!-- End Features Row -->
			</div> <!-- End Features Container -->
		</section> <!-- End Features Section -->

		<!-- <section class="contact">
			 <div class="container">
					<div class="row">
						 <div class="col-md-12">
								<h4>Our Tool free No :</h4>
								<h2>(1-800) 985-7485</h2>
								<h3>Call us if you have any questions - We are happy to help you</h3>
						 </div>
					</div>
			 </div>
		</section> -->

		<section id="services" class="services">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="services-title">
							<h2>Our Services</h2>
							<!-- <h5>We provide top-quality auto insurance services.</h5> -->
							<p>At Auto Secure Hub, we understand the importance of protecting your vehicle and ensuring peace of mind every time you're on the road. Our auto insurance quotes are tailored to meet the diverse needs of drivers, helping you find comprehensive coverage, competitive rates, and outstanding customer service.</p>
						</div>
					</div>
				</div>
				<div class="services-list">
					<div class="col-md-4  col-sm-6">
						<div class="list">
							<img src="images/icons/car-icon-1.png" alt="car icon">
							<h4>Insurance Coverage</h4>
							<p>It covers the cost if you're found legally responsible for causing injury or property damage to others including medical expenses, vehicle repairs, and legal fees.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="list">
							<img src="images/icons/car-icon-2.png" alt="car icon">
							<h4>Collision Coverage</h4>
							<p>It helps you pay for repairs or replacement of your vehicle if it's damaged in an accident regardless of whoever is at fault. It's essential for safeguarding your car from costly damages in case of a collision.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="list">
							<img src="images/icons/car-icon-3.png" alt="car icon">
							<h4>Comprehensive Coverage</h4>
							<p>It covers the damage of your vehicle caused by incidents other than a collision, such as theft, fire or natural disasters. It's a broad process of protection for unexpected incidents.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="list">
							<img src="images/icons/car-icon-4.png" alt="car icon">
							<h4>Personal Injury Protection</h4>
							<p>It covers the medical expenses of the driver and passenger regardless of whoever is at fault in case of an accident. It provides essential support for recovery after an accident.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="list">
							<img src="images/icons/car-icon-5.png" alt="car icon">
							<h4>Uncovered Driver Protection</h4>
							<p>If you're in an accident with a driver who doesn't have insurance or enough coverage, this protection helps pay for your medical bills and vehicle repairs.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="list">
							<img src="images/icons/car-icon-6.png" alt="car icon">
							<h4>Roadside Assistance</h4>
							<p>This service offers 24/7 support for emergencies such as towing, flat tires, battery jumps, or lockouts. It's designed to provide peace of mind and help you get back on the road quickly.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- <section class="offer">
			<div class="container">
				<h2>50% Off on Your Car Insurance Renewals</h2>
				<div class="col-lg-offset-4 col-md-offset-3 col-lg-4 col-md-6">
					<a class="btn btn-primary btn-lg btn-block" href="#home">GET IT NOW <br><span>Before its gone</span></a>
				</div>
			</div>
		</section> -->

		<!-- <section class="reviews">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="reviews-title">
							<h2>What Our Clients Say’s</h2>
							<p>Curabitur scelerisque nunc eu nibh sagittis interdum. Aenean in tellus ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent mattis eu felis id dignissim. Donec et vehicula diam, volutpat viverra enim.</p>
						</div>
					</div>
				</div>
				<div class="row reviews-list-row">
					<div class="col-md-4">
						<div class="reviews-list">
							<img src="images/reviews/user-1.jpg" class="img-thumbnail" alt="client">
							<h4>Jessica Alba</h4>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<p>It was very easy to get a can insurance from Jr. Car Insurance. Support Team is Very Friendly, They cleared my all doughts.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="reviews-list">
							<img src="images/reviews/user-2.jpg" class="img-thumbnail" alt="client">
							<h4>Jhon Smith</h4>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<p>Car Accidents maybe happens Jr. Car Insurance Team Will Always Help For You and your car, Fastest Service Ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="reviews-list">
							<img src="images/reviews/user-3.jpg" class="img-thumbnail" alt="client">
							<h4>Will Jacson</h4>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<span class="fa fa-star" aria-hidden="true"></span>
							<p>It was very easy to get a can insurance from Jr. Car Insurance. Support Team is Very Friendly, They cleared my all doughts.</p>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- <section class="reviews">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="reviews-title">
							<h2>TPMO Rules</h2>
							<p>We provide auto insurance quotes with no obligation to purchase a policy. Coverage options and benefits may vary by carrier and location.</p><br>
							<div class="d-flex gap-4">
								<p class="text-start">I understand that by providing my information, I am using an electronic signature to express written consent to receive emails, text messages, artificial or pre-recorded messages from Auto Insurance Hub, its affiliates, and any third-party partners (or their service provider partners) regarding their products and services, including auto insurance plans, at the email address and/or telephone number provided, including my wireless phone number (if provided), utilizing an automated telephone dialing system. I understand that I am not required to grant this consent as a condition of purchasing any products or services from the foregoing companies.</p>
							</div>
							<div class="d-flex gap-4">
							    <p class="text-start">Coverage availability, discounts, and premiums are subject to limitations, restrictions, and underwriting approval. We do not offer every auto insurance policy available in your area. We only provide information on policies we offer in your location. For a comprehensive list of available auto insurance policies, please contact your state's Department of Insurance.</p>
							</div>
							<div class="d-flex gap-4">
								<p class="text-start">I understand that providing false information may subject me to liability. My consent is not required as a condition of purchasing an auto insurance policy and I may revoke my consent at any time. There is no obligation to purchase a policy, and availability of coverage options varies by insurance company and state.</p>
							</div>
							<div class="d-flex items-center justify-content-center gap-4">
								<p class="text-center">I agree to this website’s privacy policy and Terms of Use.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->

		<section class="faq">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div class="faq-title">
							<h2>Frequently Asked Questions</h2>
							<p>Clients frequently ask us! We have answers for your questions.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="faq-list">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="col-md-1 col-sm-2 col-xs-2">
								<h2>Q<br>A</h2>
							</div>
							<div class="qa">
								<div class="col-md-11 col-sm-10 col-xs-10">
								<h6>What is auto insurance, and why do I need it?</h6>
								<p>Auto insurance provides financial protection in case of accidents, damage, theft, or other incidents involving natural disasters.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="col-md-1 col-sm-2 col-xs-2">
								<h2>Q<br>A</h2>
							</div>
							<div class="qa">
								<div class="col-md-11 col-sm-10 col-xs-10">
								<h6>What does liability insurance cover?</h6>
								<p>It helps pay for damages to other people’s vehicle, medical bills, and legal expenses but it doesnot cover damage to your own vehicle.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="col-md-1 col-sm-2 col-xs-2">
								<h2>Q<br>A</h2>
							</div>
							<div class="qa">
								<div class="col-md-11 col-sm-10 col-xs-10">
								<h6>What’s the difference between collision and comprehensive coverage?</h6>
								<p>
									<strong class="fw-bold">Collision coverage</strong> pays for damages to your vehicle if you’re involved in an accident, regardless of whoever is at fault.<br>
									<strong class="fw-bold">Comprehensive coverage</strong> protects your car from non-collision-related incidents, such as theft or natural disasters.
								</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="col-md-1 col-sm-2 col-xs-2">
								<h2>Q<br>A</h2>
							</div>
							<div class="qa">
								<div class="col-md-11 col-sm-10 col-xs-10">
								<h6>Does auto insurance cover rental cars?</h6>
								<p>Many auto insurance policies extend to rental cars, providing coverage if you’re driving a rental vehicle.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="footer-hero">
			<div class="container">
				<div class="row">
					<h2>Get a Fast and Competitive Quote for your Car!</h2>
					<h6>Don’t Wait - Get Free and Fast Option within minutes.</h6>
					<div class="col-md-offset-4 col-md-4">
					<a class="btn btn-primary btn-lg btn-block" href="#home">GET A QUOTE</a>
					</div>
				</div>
			</div>
		</section>

		<script id="LeadiDscript" type="text/javascript">
			(function() {
				var s = document.createElement('script');
				s.id = 'LeadiDscript_campaign';
				s.type = 'text/javascript';
				s.async = true;
				s.src = '//create.lidstatic.com/campaign/93e92761-eb51-fe3b-9366-542deb108e13.js?snippet_version=2';
				var LeadiDscript = document.getElementById('LeadiDscript');
				LeadiDscript.parentNode.insertBefore(s, LeadiDscript);
			})();
		</script>
		<noscript><img src='//create.leadid.com/noscript.gif?lac=643B9470-BEEE-94A1-40BE-69DF63A2B0CA&lck=93e92761-eb51-fe3b-9366-542deb108e13&snippet_version=2' /></noscript>
		<!-- <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-8">
						<p>Designed With <span class="fa fa-heart" aria-hidden="true"></span> Made For Auto Insurance Hub</p>
					</div>
					<div class="col-md-6 col-sm-4">
						<div class="social">
							<a href="https://github.com/Aliyan-12"> <i class="fa fa-github" aria-hidden="true"></i></a>
							<a href="https://portfolio-aliyan.netlify.app"> <i class="fa fa-user"></i></a>
							<a href="https://www.linkedin.com/in/aliyan-nasir-a53ba8234/"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
		</footer> -->


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<!-- Bootstrap Validator-->
		<script type="text/javascript" src="js/bootstrapValidator.min.js"></script>
		<script src="js/custom.js" ></script>
	</body>
</html>
@extends('layouts.home')

@section('content')
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="{{ url('/') }}">
							<img class="logo" src="/img/logo.png" alt="logo">
							<img class="logo-alt" src="/img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="#pricing">Prices</a></li>
					<li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="/blog-single">blog post</a></li>
						</ul>
					</li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">Welcome to Message Maldives</h1>
							<p class="white-text">Morbi mattis felis at nunc. Duis viverra diam non justo. In nisl. Nullam sit amet magna in magna gravida vehicula. Mauris tincidunt sem sed arcu. Nunc posuere.
							</p>
							<button class="white-btn">Get Started!</button>
							<button class="main-btn">Learn more</button>
						</div>
					</div>
					<!-- /home content -->
				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

    <!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Welcome to Website</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Fully Customizible</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Awesome Features</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Fully Responsive</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->

	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">What we offer</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>App Development</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-rocket"></i>
						<h3>Graphic Design</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-cogs"></i>
						<h3>Creative Idea</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>Marketing</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-pencil"></i>
						<h3>Awesome Support</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-flask"></i>
						<h3>Brand Design</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero.</p>
					</div>
				</div>
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Why Choose Us</h2>
					</div>
					<p>Molestie at elementum eu facilisis sed odio. Scelerisque in dictum non consectetur a erat. Aliquam id diam maecenas ultricies mi eget mauris. Ultrices sagittis orci a scelerisque purus.</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Quis varius quam quisque id diam vel quam elementum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Mauris augue neque gravida in fermentum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Orci phasellus egestas tellus rutrum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="./img/about1.jpg" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
						<img class="img-responsive" src="./img/about1.jpg" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">451</span></h3>
						<span class="white-text">Happy clients</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-trophy"></i>
						<h3 class="white-text"><span class="counter">12</span></h3>
						<span class="white-text">Awards won</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-coffee"></i>
						<h3 class="white-text"><span class="counter">154</span>K</h3>
						<span class="white-text">Cups of Coffee</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-file"></i>
						<h3 class="white-text"><span class="counter">45</span></h3>
						<span class="white-text">Projects completed</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->

	<!-- Pricing -->
	<div id="pricing" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Pricing Table</h2>
				</div>
				<!-- /Section header -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Basic plan</span>
							<div class="price">
								<h3>$9<span class="duration">/ month</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>1GB Disk Space</p>
							</li>
							<li>
								<p>100 Email Account</p>
							</li>
							<li>
								<p>24/24 Support</p>
							</li>
						</ul>
						<div class="price-btn">
							<button class="outline-btn">Purchase now</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Silver plan</span>
							<div class="price">
								<h3>$19<span class="duration">/ month</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>1GB Disk Space</p>
							</li>
							<li>
								<p>100 Email Account</p>
							</li>
							<li>
								<p>24/24 Support</p>
							</li>
						</ul>
						<div class="price-btn">
							<button class="outline-btn">Purchase now</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">Gold plan</span>
							<div class="price">
								<h3>$39<span class="duration">/ month</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>1GB Disk Space</p>
							</li>
							<li>
								<p>100 Email Account</p>
							</li>
							<li>
								<p>24/24 Support</p>
							</li>
						</ul>
						<div class="price-btn">
							<button class="outline-btn">Purchase now</button>
						</div>
					</div>
				</div>
				<!-- /pricing -->

			</div>
			<!-- Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Pricing -->


	<!-- Blog -->
	<div id="blog" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Recents news</h2>
				</div>
				<!-- /Section header -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="./img/blog1.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>John doe</li>
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul>
							<h3>Molestie at elementum eu facilisis sed odio</h3>
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							<a href="/blog-single">Read more</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive" src="./img/blog2.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>John doe</li>
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul>
							<h3>Molestie at elementum eu facilisis sed odio</h3>
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							<a href="/blog-single">Read more</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- blog -->
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img class="img-responsive"  src="./img/blog3.jpg" alt="">
						</div>
						<div class="blog-content">
							<ul class="blog-meta">
								<li><i class="fa fa-user"></i>John doe</li>
								<li><i class="fa fa-clock-o"></i>18 Oct</li>
								<li><i class="fa fa-comments"></i>57</li>
							</ul>
							<h3>Molestie at elementum eu facilisis sed odio</h3>
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
							<a href="/blog-single">Read more</a>
						</div>
					</div>
				</div>
				<!-- /blog -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Blog -->

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>512-421-3940</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>email@support.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>1739 Bubby Drive</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Name">
						<input type="email" class="input" placeholder="Email">
						<input type="text" class="input" placeholder="Subject">
						<textarea class="input" placeholder="Message"></textarea>
						<button class="main-btn">Send message</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->

@endsection
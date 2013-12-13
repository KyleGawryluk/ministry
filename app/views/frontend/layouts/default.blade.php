<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Bootstrap
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/bootstrap-responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

		<style>
		@section('styles')
		body {
			padding: 10px 0;
		}
		/*@show*/
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
		<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
		<link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
	</head>

	<body>

		<a class="logo" href="{{URL::to('/')}}"><img src="{{asset('assets/img/logo.png')}}"></a>
		<!-- Container -->
		<div class="container-fluid">
			<!-- Navbar -->
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<a class="brand" href="#"></a>
						<div class="nav-collapse collapse">
							<ul class="nav pull-right">
								@if (Sentry::check())

								<li class="dropdown{{ (Request::is('account*') ? ' active' : '') }}">
									<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="{{ route('account') }}">
										Welcome, {{ Sentry::getUser()->first_name }}
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
										@if(Sentry::getUser()->hasAccess('admin'))
										<li><a href="{{ route('admin') }}"><i class="icon-cog"></i> Administration</a></li>
										@endif
										<li{{ (Request::is('account/profile') ? ' class="active"' : '') }}><a href="{{ route('profile') }}"><i class="icon-user"></i> Your profile</a></li>
										<li class="divider"></li>
										<li><a href="{{ route('logout') }}"><i class="icon-off"></i> Logout</a></li>
									</ul>
								</li>
								@else
								<li {{ (Request::is('auth/signin') ? 'class="active"' : '') }}><a href="{{ route('signin') }}">Sign in</a></li>
								<li {{ (Request::is('auth/signup') ? 'class="active"' : '') }}><a href="{{ route('signup') }}">Register</a></li>
								@endif
							</ul>
							<div class="clearfix"></div>
							<ul class="nav pull-right">
								<li {{ (Request::is('/') ? 'class="active"' : '') }}><a href="{{ route('home') }}"><i class="icon-home icon-white"></i> Home</a></li>
								<li {{ (Request::is('blog') ? 'class="active"' : '') }}><a href="{{ route('blog') }}"><i class="icon-home icon-white"></i>Babu's Blog</a></li>
								<li {{ (Request::is('pastors') ? 'class="active"' : '') }}><a href="{{ URL::to('pastors') }}"><i class="icon-home icon-white"></i>Sponsor A Pastor</a></li>
								<li {{ (Request::is('believe') ? 'class="active"' : '') }}><a href="{{ URL::to('believe') }}"><i class="icon-file icon-white"></i> What We Believe</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Education
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li {{ (Request::is('college') ? 'class="active"' : '') }}><a href="{{ URL::to('college') }}"><i class="icon-file icon-white"></i> Bible College</a></li>
										<li {{ (Request::is('christian-home') ? 'class="active"' : '') }}><a href="{{ URL::to('christian-home') }}"><i class="icon-file icon-white"></i> Grace Christian Home</a></li>
									</ul>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										About
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li {{ (Request::is('about-babu') ? 'class="active"' : '') }}><a href="{{ URL::to('about-babu') }}"><i class="icon-file icon-white"></i> About Babu</a></li>
										<li {{ (Request::is('about-india') ? 'class="active"' : '') }}><a href="{{ URL::to('about-india') }}"><i class="icon-file icon-white"></i> About India</a></li>
										<li class="{{ (Request::is('current-projects') ? 'active' : '') }} disabled"><a href="{{ URL::to('current-projects') }}"><i class="icon-file icon-white"></i> Current Projects</a></li>
									</ul>
								</li>
								
								
								<li {{ (Request::is('contact-us') ? 'class="active"' : '') }}><a href="{{ URL::to('contact-us') }}"><i class="icon-file icon-white"></i> Contact us</a></li>
							</ul>

							
						</div>
					</div>
				</div>
			</div>

			<!-- Notifications -->
			@include('frontend/notifications')
			<div class="container white thumbnail">
				@yield('content')	
			</div>
			


			<!-- Footer -->
<!-- 			<footer class="navbar navbar-inverse navbar-fixed-bottom pad-footer">
				<div class="navbar-inner footer">
					<div class="container">
						<p class="footer">&copy; Grace Christian Ministries {{ date('Y') }}</p>
					</div>
				</div>
			</footer> -->
		</div>

		<!-- Javascripts
		================================================== -->
		<script src="{{ asset('assets/js/jquery.1.10.2.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
		<script>
		$( document ).ready(function() {
			$('.btn-navbar').on('click',function(){
				$('.logo').toggle('fast');
			});
		});
		</script>
	</body>
	</html>

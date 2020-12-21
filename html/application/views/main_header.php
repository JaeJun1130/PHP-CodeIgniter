
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="ko">
<head>
<title>New Line Cinema</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One Movies Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/~team17/team/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/~team17/team/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/~team17/team/css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="/~team17/team/css/faqstyle.css" type="text/css" media="all" />
<link href="/~team17/team/css/single.css" rel='stylesheet' type='text/css' />
<link href="/~team17/team/css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="/~team17/team/css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="/~team17/team/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="/~team17/team/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="/~team17/team/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="/~team17/team/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="/~team17/team/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<script>
	$(document).ready(function() { 
		$("#owl-demo1").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script>
<script>
	$(document).ready(function() { 
		$("#owl-demo2").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script>
<script>
	$(document).ready(function() { 
		$("#owl-demo3").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script>

<!-- //banner-bottom-plugin -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/~team17/team/js/move-top.js"></script>
<script type="text/javascript" src="/~team17/team/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
<div style="background-color:#F6F6F6;">
	<div class="header backgroui">
		
		<div class="container">
		<br>
			<div class="w3layouts_logo">
				<a href="/~team17"><img src="/~team17/team/images/로고2.png" width="190" height="100" alt="" /></a>
			</div>
			<br>
			<div class="w3_search">
				<form action="#" method="post">
					<input type="text" name="Search" placeholder="Search" required="">
					<input type="submit" value="Go">
				</form>
			</div>

			<div class="w3l_sign_in_register">
				<ul>
					<li></i></li>
				<?
				
					if($this->session->userdata('uid')){
					$session_no = $this->session->userdata('no');
						echo("<li><a href='/~team17/login/logout'>Logout</a>
								  <a href='/~team17/usermember/edit/no/$session_no'>내정보</a>
								  </li>");}
					else{		
						echo("<li><a href='#' data-toggle='modal' data-target='#myModal'>Login</a></li>");
					}
				?>

				</ul>				
			</div>
			


			<div class="clearfix"> </div><br>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Sign In & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Click Me</div>
							  </div>
							  <div class="form">
								<h3>Login to your account</h3>
								<form name="form_login" method="post" action="/~team17/login/check">
								<!--<form action="#" method="post"> -->
								  <input type="text" name="Username" placeholder="Username" value="" required="">
								  <input type="password" name="Password" placeholder="Password" value="" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>Create an account</h3>
								<form name="form_register" method="post" action="/~team17/register/add">
								<!--<form action="#" method="post">-->
								  <input type="text" name="Username" placeholder="Username" value="" required="">
								  <input type="password" name="Password" placeholder="Password" value="" required="">
								  <input type="text" name="Name" placeholder="Name" value="" required="">
								  <input type="email" name="Email" placeholder="Email Address" value="" required="">
								  <input type="text" name="Phone" placeholder="Phone Number" value="" required="">
								  <input type="text" name="Birth" placeholder="Birth Day" value="" required="">
								  <input type="text" name="Juso" placeholder="Juso" value="" required="">
								  <input type="submit" value="Register">
								</form>
							  </div>
							  <div class="cta"><a href="#">Forgot your password?</a></div>
							  </form>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li><a href="/~team17">메인화면</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">영화 <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									
										<ul class="multi-column-dropdown">
											<li><a href="/~team17/movie">무비차트</a></li>
										</ul>
										<ul class="multi-column-dropdown">
											<li><a href="/~team17/movie/lists1">HD트레일러</a></li>
										</ul>
								
									
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>

							<li><a href="/~team17/reserve">예매</a></li>

							<li><a href="/~team17/news">뉴스</a></li>

							<li><a href="/~team17/event">이벤트</a></li>

							<li><a href="/~team17/qa/">고객센터</a></li>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>

						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
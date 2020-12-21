<?
 $no1=$row->no;
$session_name = $this->session->userdata('name');
 //$tmp = $text1 ? "/no/$no/text1/$text1" : "/no/$no";
 ?>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="/~team17/team/css/reset.css" />
<link rel="stylesheet" type="text/css" href="/~team17/team/css/common.css" />   
<link rel="stylesheet" type="text/css" href="/~team17/team/css/banner.css" />
<link rel="stylesheet" type="text/css" href="/~team17/team/css/swiper.min.css" />

<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [414,4]
	 
		});
	 
	}); 
</script> 
<script src="/~team17/team/js/simplePlayer.js"></script>
<script>
	$("document").ready(function() {
		$("#video").simplePlayer();
	});
</script>

</head>
	
<body>

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
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>Create an account</h3>
								<form action="#" method="post">
								  <input type="text" name="Username" placeholder="Username" required="">
								  <input type="password" name="Password" placeholder="Password" required="">
								  <input type="email" name="Email" placeholder="Email Address" required="">
								  <input type="text" name="Phone" placeholder="Phone Number" required="">
								  <input type="submit" value="Register">
								</form>
							  </div>
							  <div class="cta"><a href="#">Forgot your password?</a></div>
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

<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav>
</div>
<!-- single -->
<div class="single-page-agile-main">
<div class="tittle-head">
									<h4 class="latest-text">Movie Info</h4>
<div class="container">
		<!-- /w3l-medile-movies-grids -->
			<div class="agileits-single-top">
				<ol class="breadcrumb">
				  <li><a href="/~team17">Home</a></li>
				  <li class="active">Movie Info</li>
				</ol>
			</div>
			<div class="single-page-agile-info">
                   <!-- /movie-browse-agile -->
                           <div class="show-top-grids-w3lagile">
				<div class="col-sm-8 single-left" style="margin-bottom:200px;">
					<div class="song">
						<div class="song-info">
							
					</div>
						<div class="video-grid-single-page-agileits">
							<div data-video="<?=$row->trailer; ?>" id="video"> <img src="https://img.youtube.com/vi/<?=$row->trailer; ?>/maxresdefault.jpg" alt="" class="img-responsive" /> </div>
						</div>
					</div>




<div class="all-comments">
<div class="wide_inner">
<div class="wide_top">					
					<div class="info_main">				
							<div class="info_data"><h2 class="info_tit"><?=$row->title; ?></h2></div>
							<ul class="ranking_list">
								<li>
									<strong class="rate_tit Lang-LBL0000">예매율</strong>
									<span class="rate_txt"><em class="num"><?=$row->no; ?></em>위</span>
								</li>
								<li id="score"><strong class="score_member">관객평점</strong><span class="num"><?=$row->rank; ?></span><span class="rate_txt"></span></li>
							</ul>
							<dl class="info_spec" id="dSpec0" style="padding-bottom:20px;"><dt>등급</dt><dd id="dVClass"><?=$row->gubun; ?></dd><dt>개봉일</dt><dd id="dReleaseDate"><?=$row->openday; ?></dd><dt>장르</dt><dd id="dBaseInfo"><?=$row->genre_name; ?><dt>상영시간</dt><dd id="dReleaseDate"><?=$row->runtime; ?>분</dd>    
							</dl>							
						</div>
						</div>

						<div class="obj_section">
						<h3 class="obj_tit Lang-LBL0000" style="padding-top:10px;">시놉시스</h3>
						<p class="obj_txt" id="pSynopsis"><?=$row->story; ?>
						</p>
					</div>			
</div>
</div>

<div class=""><div class="all-comments">
				<div class="mpeople_inner">
					<h3 class="mpeople_tit Lang-LBL0000">감독 및 출연</h3>		
					<div class="slide_mbox">
						<a href="javascript:void(0);" class="btn_prev" style="display: none;"><img src="/~team17/team/images/btn_slide_prev.png" alt="이전"></a>
						<div class="slide_spot">
							<ul id="ulCasting"><li style="left: 0px;"><div class="pic"><span class="mask"></span><img src="<?=$row->pic2; ?>" alt=""></div><p class="name"></p><p class="role"></p></li><li style="left: 168px;"><div class="pic"><span class="mask"></span><img src="<?=$row->pic3; ?>" alt=""></div><p class="name"></p><p class="role"></p></li><li style="left: 336px;"><div class="pic"><span class="mask"></span><img src="<?=$row->pic4; ?>" alt=""></div><p class="name"></p><p class="role"></p></li><li style="left: 504px;"><div class="pic"><span class="mask"></span><img src="<?=$row->pic5 ?>" alt=""></div><p class="name"></p><p class="role"></p></li>
							</div></ul>
						<h6><?=$row->director; ?>  감독  &nbsp;&nbsp;/&nbsp;&nbsp;  <?=$row->actor; ?>  출연</h6>
						<a href="javascript:void(0);" class="btn_next" style="display: none;"><img src="/~team17/team/images/btn_slide_next.png" alt="다음"></a>
					</div>
				</div>
			</div>
</div>
				<!--body wrapper start-->
			
			<div class="well" style="margin-top:40px;">
				<div id="owl-demo" class="owl-carousel owl-theme">
<?
    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no;       // 사용자번호		
?>
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="/~team17/movie/view/no/<?=$no?>" class="hvr-shutter-out-horizontal"><img src="/~team17/team/images/poster/<?=$row->pic; ?>" title="album-name" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="single.html"><?=$row->title; ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2019</p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>NEW</p>
							</div>
						</div>
					</div>
<?
    }
?>
					
				</div>
			</div>
		<!--body wrapper end-->


					<div class="song-grid-right">
						<div class="share">
						
							<div class="single-agile-shar-buttons">
							<ul>
								<li>
									<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
									<script>(function(d, s, id) {
									  var js, fjs = d.getElementsByTagName(s)[0];
									  if (d.getElementById(id)) return;
									  js = d.createElement(s); js.id = id;
									  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
									  fjs.parentNode.insertBefore(js, fjs);
									}(document, 'script', 'facebook-jssdk'));</script>
								</li>
								<li>
									<div class="fb-share-button" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fw3layouts&amp;src=sdkpreparse">Share</a></div>
								</li>
								<li class="news-twitter">
									<a href="https://twitter.com/w3layouts" class="twitter-follow-button" data-show-count="false">Follow @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								</li>
								<li>
									<a href="https://twitter.com/intent/tweet?screen_name=w3layouts" class="twitter-mention-button" data-show-count="false">Tweet to @w3layouts</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
								</li>
								<li>
									<!-- Place this tag where you want the +1 button to render. -->
									<div class="g-plusone" data-size="medium"></div>

									<!-- Place this tag after the last +1 button tag. -->
									<script type="text/javascript">
									  (function() {
										var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
										po.src = 'https://apis.google.com/js/platform.js';
										var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
									  })();
									</script>
								</li>
							</ul>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>

					<div class="well">
						<div class="all-comments-info">
							<a href="#">comments</a>
							<div class="agile-info-wthree-box">
								<form name="review" method="post" action="/~team17/review/add/no/<?=$no?>">								
									<p> <?=$session_name?> 님</p>
									<input type="hidden" placeholder="이름" name="name" value="<?=$session_name?>" required="">
									<input type="text" placeholder="평점 (0~10)" name="rank" required="">
									<input type="hidden" placeholder="무비넘버" name="movie_no" value="<?=$no1?>" required="">
									<textarea placeholder="내용" name="detail" required=""></textarea>
									<input type="submit" value="SEND">
									<div class="clearfix"> </div>
								</form>
							</div>
						</div>
						<div class="media-grids">

					<?
						foreach ($list2 as $row1)                             // 연관배열 list를 row를 통해 출력한다.
						{
							$no=$row1->no;       // 사용자번호		
					?>
							<div class="media" style="padding:0;">
								
								<div class="media-left">

									<a href="#">
										<img src="/~team17/team/images/user.jpg" title="One movies" alt=" " />
									</a>
								</div>
								<div class="media-left">
								<h6 style="padding-bottom:10px; padding-top:5px;"><?=$row1->name; ?></h6>
								<h5><?=$row1->detail; ?></h5>
								<h6><a>평점 : <?=$row1->rank; ?> 점</a></h6>
								</div>

								<!--<div class="media-body">
									<p>와 겨울왕국</p>
									<span>View all posts by :<a href="#"> Admin </a></span>
								</div>-->
							</div>
						<?
							}
						?>






				<!---- 다른 영화 ----->
						</div>
					</div>
				</div>

<div class="col-md-4 single-right">
<div class="bg-secondary">
<h3>UP NEXT<h3>

<!-- 				<div class="col-md-4 single-right" style="padding-bottom:10px; padding-top:20px; height:200px;" > -->
					
					<div class="single-grid-right" >
<?
    foreach ($list3 as $row2)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row2->no;       // 사용자번호		
?>					<div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="/~team17/movie/view/no/<?=$no?>"><img src="/~team17/team/images/poster/<?=$row2->pic; ?>.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="/~team17/movie/view/no/<?=$no?>" class="title"><?=$row2->title; ?> </a>
								<p class="author"><a class="author"><?=$row2->director; ?> 감독</a></p>
								<p class="views"><?=$row2->actor; ?> 출연</p>
							</div>
							<div class="clearfix"> </div>
						</div>
<?
    }
?>				</div>				
				</div>
				</div>

				
				<div class="clearfix"> </div>

			</div>
			
				<!-- //movie-browse-agile -->

						
							 
				</div>
				<!-- //w3l-latest-movies-grids -->
			</div>	
		</div>
	<!-- //w3l-medile-movies-grids -->
		</div>
						</div>
					</div>
				</div>
			</div>

<!-- Bootstrap Core JavaScript -->
<script src="/~team17/team/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>

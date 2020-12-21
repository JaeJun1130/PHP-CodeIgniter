<link href="https://fonts.googleapis.com/css?family=Jua&display=swap&subset=korean" rel="stylesheet">
    <style>
      p {
        font-family: "Jua", sans-serif;
        font-size: 23px;
      }
      p.a {
        font-weight: 400;
      }
      p.b {
        font-weight: 700;
      }
      p.c {
        font-weight: 800;
      }
      p.d {
        font-weight: bold;
      }
    </style>
<!-- banner -->
	<!--<div style="background-color:#2F4F4F;">-->
	<div class="container">
	<div id="slidey" style="display:none;">
		<ul>
<?
    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no;       // 사용자번호		
?>
			<li><img src="https://img.youtube.com/vi/<?=$row->trailer; ?>/maxresdefault.jpg" alt=" "><p class='title'><?=$row->title; ?></p><p class='description'><?=$row->director; ?> 감독 <br> <?=$row->actor; ?> 출연</p></p></li>
			
<?
    }
?>
		</ul>   	
    </div>
	</div>

    <script src="/~team17/team/js/jquery.slidey.js"></script>
    <script src="/~team17/team/js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
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
		</div>
	</div>
<!-- //banner-bottom -->
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
<!-- general -->
	<div class="general">
		<h4 class="latest-text w3_latest_text"><p class="c">추천영화</p></h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><p class="a">추천영화</p></a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false"><p class="a">개봉일순</p></a></li>
					<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true"><p class="a">평점순</p></a></li>
					<li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false"><p class="a">상영예정작</p></a></li>
				</ul>

				<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
<?
    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no;       // 사용자번호		
?>
 					
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/~team17/movie/view/no/<?=$no?>" class="hvr-shutter-out-horizontal"><img src="/~team17/team/images/poster/<?=$row->pic; ?>.jpg" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h5><a href="single.html"><?=$row->title; ?> (2019)</a></h5>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<p>예매율 <?=$no?>위</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>				
<?
    }
?>	

							<div class="clearfix"> </div>
						</div>
<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
<?
    foreach ($list3 as $row3)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row3->no;       // 사용자번호		
?>						
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/~team17/movie/view/no/<?=$no?>" class="hvr-shutter-out-horizontal"><img src="/~team17/team/images/poster/<?=$row3->pic; ?>" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h5><a href="/~team17/movie/view/no/<?=$no?>"><?=$row3->title; ?> (2019)</a></h5>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p></p>
										<div class="block-stars">
										<p><?=$row3->openday ?> 개봉</p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>					
<?
    }
?>	
<div class="clearfix">
</div>
</div>

<div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
<?
    foreach ($list2 as $row2)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row2->no;       // 사용자번호		
?>						
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/~team17/movie/view/no/<?=$no?>" class="hvr-shutter-out-horizontal"><img src="/~team17/team/images/poster/<?=$row2->pic; ?>" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h5><a href="/~team17/movie/view/no/<?=$no?>"><?=$row2->title; ?> (2019)</a></h5>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<p>★<?=$row2->rank ?></p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
					
<?
    }
?>	
<div class="clearfix">
</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
					
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="/~team17/movie/view/no/<?=$no?>" class="hvr-shutter-out-horizontal"><img src="/~team17/team/images/poster/<?=$row->pic; ?>" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h5><a href="/~team17/movie/view/no/<?=$no?>"><?=$row->title; ?> (2019)</a></h5>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<p>★<?=$row->rank ?></p>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>NEW</p>
								</div>
							</div>
				
<div class="clearfix">
</div>
</div>

					</div>
			</div>
		</div>
	</div>

<!-- //general -->

<script src="/~team17/team/js/simplePlayer.js"></script>
<script>
	$("document").ready(function() {
		$("#video").simplePlayer();
	});
</script>

<!-- Latest-tv-series -->
	<div class="Latest-tv-series">
		<h4 class="latest-text w3_latest_text w3_home_popular"><p class="c">인기 트레일러</p></h4>
		<div class="container">

			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
<?
    foreach ($list1 as $row1)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row1->no;       // 사용자번호		
?>						
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
<!-- 								<div class="video-grid-single-page-agileits"> -->
<!-- 							<div data-video="<?=$row->trailer; ?>" id="video"> <img src="https://img.youtube.com/vi/<?=$row->trailer; ?>/maxresdefault.jpg" alt="" class="img-responsive" /> </div> -->
<!-- 						</div> -->
									<div class="w3ls_market_video_grid1">
										<img src="https://img.youtube.com/vi/<?=$row1->trailer; ?>/maxresdefault.jpg" alt=" " class="img-responsive" />
										<a class="w3_play_icon" href="#small-dialog<?=$row1->no; ?>">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header_para"><?=$row1->title; ?></p>
									<p class="fexi_header"><span>감독 :</span>
										<?=$row1->director; ?></p>
										<p class="fexi_header"><span>출연 : </span>
										<?=$row1->actor; ?></p>
										<p class="fexi_header"><span>장르 : </span>
										<?=$row1->genre_name; ?></p> 										
									<p class="fexi_header"><span>개봉일 : </span>
										<?=$row1->openday; ?></p>											
									</p>
									<p class="fexi_header"><span>평점 : </span>
										<?=$row1->rank; ?>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">

									<div class="clearfix"> </div>
								</div>
							</div>
						</li>				
<?
	}
	?>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="/~team17/team/css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="/~team17/team/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- pop-up-box -->  
		<script src="/~team17/team/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/eSEs4B4H-EA"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/WY1odOmjJi4"></iframe>
	</div>
	<div id="small-dialog3" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/alSU8mnZCaM"></iframe>
	</div>
		<div id="small-dialog4" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/kYHXGPadHP4"></iframe>
	</div>
	<div id="small-dialog5" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/sn7wcMigCCo"></iframe>
	</div>
	<div id="small-dialog6" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/i43oWv6jWJ4"></iframe>
	</div>
		<div id="small-dialog7" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/aNtqlkVJRzw"></iframe>
	</div>
	<div id="small-dialog8" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/kDcqWYCdGrc"></iframe>
	</div>
	<div id="small-dialog9" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/2CMl_rB8Dy4"></iframe>
	</div>
	<div id="small-dialog10" class="mfp-hide">
		<iframe src="https://www.youtube.com/embed/tgyYcVxltBA"></iframe>
	</div>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
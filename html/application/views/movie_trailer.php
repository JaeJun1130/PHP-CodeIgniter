

<script>
    function find_text()
    {
		    if (!form1.text1.value)       // 값이 없는 경우, 전체 자료
			 form1.action="/~team17/movie/lists/page";
			else                                    // 값이 있는 경우, text1 값 전달			
			 form1.action="/~team17/movie/lists/text1/" + form1.text1.value+"/page";
        form1.submit();
    }
</script>

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


<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
			<li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>				  
		</ul>
  </nav></div>
<!-- /w3l-medile-movies-grids -->
	<div class="general-agileits-w3l">
		<div class="w3l-medile-movies-grids">


				
				      <div class="movie-browse-agile">
					     <!--/browse-agile-w3ls -->
						<div class="browse-agile-w3ls general-w3ls">
								<div class="tittle-head">
									<h4 class="latest-text"><p class="c">HD 트레일러</p> </h4>
									<div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li><a href="/~team17">Home</a></li>
											  <li class="active">HD Trailer</li>
											</ol>
										</div>
									</div>
								</div>

<!-- general -->
	<div class="general">
		<div class="container">
			
<?
    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
              // 사용자번호		
?>
<div class='col-md-3 w3l-movie-gride-agile'>
						 <a href='https://www.youtube.com/embed/<?=$row->trailer; ?>' class='hvr-shutter-out-horizontal'><img width='270' src='https://img.youtube.com/vi/<?=$row->trailer; ?>/mqdefault.jpg' title='album-name' alt=' ' />
						 <div class='w3l-action-icon'><i class='fa fa-play-circle' aria-hidden='true'></i></div>
						 </a>
							<div class='mid-1'>
								<div class='w3l-movie-text'>
									<h6><a href='https://www.youtube.com/embed/<?=$row->trailer; ?>'><b><?=$row->title; ?></b></a></h6>							
								</div>										
							</div>
							<div class='ribben two'>
								<p>NEW</p>
							</div>	
						</div>
<?
    }
?>	
<div class="clearfix">
					</div></div>




</div>			
								<div class="clearfix"> </div>		</div>		</div>	 	</div> 
												
						</div>
						</div>
				<!--//browse-agile-w3ls -->
				<!-- 페이지 넘어가는거 주석
						<div class="blog-pagenat-wthree">
							<ul>
								<li><a class="frist" href="#">Prev</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a class="last" href="#">Next</a></li>
							</ul>
						</div> -->
				</div>
			</div>
						<!--body wrapper end-->
	
					</div>	
			</div>	
		</div>


	<!-- //w3l-medile-movies-grids -->
		</div>
</div>
</div></div></div>

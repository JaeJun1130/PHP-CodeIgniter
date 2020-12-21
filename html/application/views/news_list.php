

<script>
    function find_text()
    {
		    if (!form1.text1.value)       // 값이 없는 경우, 전체 자료
			 form1.action="/~team17/news/lists/page";
			else                                    // 값이 있는 경우, text1 값 전달			
			 form1.action="/~team17/news/lists/text1/" + form1.text1.value+"/page";
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
<!-- /w3l-medile-events-grids -->
	<div class="general-agileits-w3l">
		<div class="w3l-medile-events-grids">
				      <div class="event-browse-agile">
					     <!--/browse-agile-w3ls -->
						<div class="browse-agile-w3ls general-w3ls">
								<div class="tittle-head">
									<h4 class="latest-text"><p class="c">News</p> </h4>
									<div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li><a href="/~team17">Home</a></li>
											  <li class="active">News Page</li>
											</ol>
										</div>
									</div>
								</div>

<!-- general -->
	<div class="general">
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
				</ul><div id="myTabContent" class="tab-content">




<?
    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no;       // 사용자번호      
?>           
               <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab" style="margin-left:10px; margin-right:10px;">
                  <div class="w3_agile_featured_events">
                    <div class="col-lg-6 col-md-6" style="margin-bottom:20px; width:800px;">
                                   <div style="float:left; margin-right:15px;">
                                       <a href="/~team17/news/view/no/<?=$no?>" class="hvr-shutter-out-horizontal">
                                           <img src="/~team17/news_img/<?=$row->pic1; ?>" align="left" title="album-name" class="img-responsive" alt=" " style="width:250px; height:250px;;"/>
                                           <div class="w3l-action-icon">
                                             <i class="fa fa-play-circle" aria-hidden="true"></i>
                                           </div>
                                       </a>
                                   </div>
                        <div class="mid-1 agileits_w3layouts_mid_1_home">
                                           <div class="w3l-event-text" style="margin-top:10px; font-weight:bold;">         
                                             <p ><?=$row->name; ?></p>
                                           </div>

                                           <div class="mid-2 agile_mid_2_home" style="margin-top:30px;">
                                                <?=$row->bigo; ?>
                                           </div>

                                           <div class="mid-2 agile_mid_2_home" style="margin-top:30px;  width: 500px; display: inline-block; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                                <?=$row->startday; ?>
                                           </div>

                         </div>
                                     <div style="clear:both;"></div>
                    </div>
                  </div>
                      </div>

					  <br>
					  <br>
					  <br>
					  <br>
					  <br>
					  <br>
					  <br>
					  <br>

<?
    }
?>



								<div class="clearfix"> </div>		</div>		</div>	 	</div> 
												
						</div>
						</div>

				</div>
			</div>

					</div>	
			</div>	
		</div>

		</div>
</div>
</div></div></div>

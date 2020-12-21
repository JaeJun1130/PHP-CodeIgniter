<script>

function find_text()
{
	form1.action="/~team17/booking/lists/no/<?=$no?>/no1/<?=$no1?>/text1/" + form1.text1.value+"/page";
	form1.submit();
}

function find_area(no)
{
	form1.action="/~team17/booking/lists/no/<?=$no?>/no1/" + no + "/text1/" + form1.text1.value+"/page";
	form1.submit();
}

function next_page()
{
	form1.action="/~team17/booking/seat";
	form1.submit();
}

      $(function(){
         $('#text1').datetimepicker({
            locale: 'ko',
            format: 'YYYY-MM-DD',
            defaultDate:moment()
         });

         $('#text1').on("dp.change", function (e){
            find_text();
         });

		 $(".movie_button").click(function(){
			$(this).css("background","#C0C0C0");
			$(this).attr("class","checked"); //속성값 제어 checked로 바꿈
			$(".movie_button").css("background","#aab9ea");
			$(this).attr("class","movie_button");
		 });

		 $(".area_button").click(function(){
			$(this).css("background","#C0C0C0");
			$(this).attr("class","area_checked"); //속성값 제어 checked로 바꿈
			$(".area_button").css("background","#aab9ea");
			$(this).attr("class","area_button");
		 });

		 var date =$(".today").val();
		 $(".movie_date_hidden").val(date);
         
		 var date =$(".today").val();
		 $(".movie_date_hidden").val(date);
         

		 $(".movie_area").click(function(){
			var text = $(this).text();
			$(".movie_area_hidden").val(text);
		 });

		 $(".movie_time").click(function(){
			var text = $(this).text();
			$(".movie_time_hidden").val(text);
		 });

      });
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




    <link href="/~team17/my/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="/~team17/my/css/fontawesome-all.min.css" rel="stylesheet">



<!-- /w3l-medile-events-grids -->
<div class="faq">
<h4 class="latest-text w3_faq_latest_text w3_latest_text"><p class="c">예매하기</p></h4>
	<div class="general-agileits-w3l container">
		<div class="w3l-medile-events-grids">
			<div class="event-browse-agile">
					     <!--/browse-agile-w3ls -->
				<div class="browse-agile-w3ls general-w3ls">
					<div class="tittle-head">
					
						<div class="container">
							<div class="agileits-single-top">
								<ol class="breadcrumb">
									<li><a href="/~team17">Home</a></li>
									<li class="active">Booking</li>
								</ol>
							</div>
						</div>
					</div>

					<form name="form1" action="" method="post">
						 <div class="row" style="margin-left:20px;">
								<div class="col-3" align="left">   
									 <div class ="form-inline">
											<div class="input-group input-group-sm table-sm date" id="text1">
												 <div class="input-group-prepend">
														<span class="input-group-text"><p class="a">Step1. 날짜/지점/상영시간표 선택</p></span>&nbsp;
												 </div>
												<div class="input-group-append">
												 <input type="text" name="text1" class="form-control today" value="<?=$text1; ?>" onKeydown="if (event.keyCode == 13){find_text(); }">
														<div class="input-group-addon">
															 <i class="far fa-calendar-alt fa-lg"></i>
														</div>
												 </div>
											</div>
									 </div>
								</div>
						<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";    ?>
						</div>
					

								<div class="clearfix"> </div>		
				</div>		
			</div>	 
		</div>
		<center>
						<div class="well" style="width:600px;">
<center>
								<?
									foreach($area_list as $row)
									{ 
								?>
										<button class="area_button movie_area" name="area" style="border:0; background:#aab9ea; width:90px; height:40px; margin-left:20px;" value="<?=$row->no?>" onClick="find_area(<?=$row->no?>);"><?=$row->areaname?></button>
								<?
									}
								?>
								

								<br><br>
								<?
									foreach($list2 as $row)
									{
										$a = $text1;
										$b = $row->day;
										$c = $no;
										$d = $row->movie_no;
										foreach($list as $movieinfo)
												{
													if($movieinfo->no==$d)
														{
														$moviename=$movieinfo->title;
														echo("<input type='hidden' name='movie_title' class='movie_title_hidden' value='$moviename'>");
														}
												}
										if($a==$b)
										{
											if($c==$d)
											{
												
								?>
										
										<button class="movie_button movie_time" style="border:0; background:#aab9ea; width:90px; height:40px; margin-left:20px;"><?=$row->start?></button>
								<?
											}
										}
									}
								?>
								</center>
</div>
<div class="w3ls_footer_grid_pos" style="border:0px; margin:10px; ">
								<center>								
								<button class="checkout-button" style="border:0; background:#A6A6A6; width:90px; height:40px; margin-left:20px;"><a href='/~team17/reserve'>이전화면</a></button>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
								<input type="hidden" name="movie_no" class="movie_no_hidden" value="<?=$no?>">
								<input type="hidden" name="movie_date" class="movie_date_hidden" value="">
								<input type="hidden" name="movie_area" class="movie_area_hidden" value="<?=$movie_area?>">
								<input type="hidden" name="movie_time" class="movie_time_hidden" value="<?=$movie_time?>">


								<button class="checkout-button" onclick="next_page()" style="border:0; background:#A6A6A6; width:90px; height:40px; margin-left:20px;">다음단계</button>

									</center>
						</div>
								</form>
						
</div>
</div></div>

    <script src="/~team17/my/js/moment-with-locales.min.js"></script>
    <script src="/~team17/my/js/bootstrap-datetimepicker.js"></script>
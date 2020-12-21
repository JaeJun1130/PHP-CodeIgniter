

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
	   p1  {
        text-align: center;
      }
    </style>


<!-- start-smoth-scrolling -->
<!-- tables -->
<link rel="stylesheet" type="text/css" href="/~team17/team/list-css/table-style.css" />
<link rel="stylesheet" type="text/css" href="/~team17/team/list-css/basictable.css" />
<link rel="stylesheet" type="text/css" href="/~team17/team/list-css/list.css" />
<script type="text/javascript" src="/~team17/team/list-js/jquery.basictable.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });
	   $('#table-breakpoint1').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint2').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint3').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint4').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint5').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint6').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint7').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint8').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint9').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint10').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint11').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint12').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint13').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint14').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint15').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint16').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint17').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint18').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint19').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint20').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint21').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint22').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint23').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint24').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint25').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint26').basictable({
        breakpoint: 768
      });
    });
  </script>
<!-- //tables -->
</head>
	

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
<!-- faq-banner -->
	<div class="faq">
		<h4 class="latest-text w3_faq_latest_text w3_latest_text"><p class="c">영화 예매</p></h4>
			<div class="container">
				<div class="agileits-news-top">
					<ol class="breadcrumb">
					  <li><a href="index.html">Home</a></li>
					  <li class="active">Booking</li>
					</ol>
				</div>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">							
							<li role="presentation"><a href="#a" role="tab" id="a-tab" data-toggle="tab" aria-controls="a">현재 상영작</a></li>

					
						</ul>
						<div id="myTabContent" class="tab-content">


							<div role="tabpanel" class="tab-pane fade in active" id="a" aria-labelledby="a-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : 10<span></span></h4>
									</div>
									<table id="table-breakpoint">
										<thead>
										  <tr>
										<th  style="text-align: center;" width="%">예매율</th>
											<th  style="text-align: center;" width="30%">영화</th>
											<th  style="text-align: center;" width="10%">개봉일</th>
											<th  style="text-align: center;" width="7%">평점</th>			
											<th  style="text-align: center;" width="15%">등급</th>
											<th  style="text-align: center;" width="10%">장르</th>
											<th  style="text-align: center;" width="10%">상영시간</th>
											<th  style="text-align: center;" width="10%">예매하기</th>
											
										  </tr>
										</thead>
										<tbody>
<?$name="";
    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no;       // 사용자번호	
		if($name != $row->title){
?>
										  <tr>
											<td  style="text-align: center;"><b><?=$row->no; ?>위</b></td>
											<td  style="text-align: center;"><a href="/~team17/movie/view/no/<?=$no?>"><img src="/~team17/team/images/poster/<?=$row->pic; ?>.jpg" width="100" height="150" alt="" /> </a><p><?=$row->title; ?></p></td>
											<td  style="text-align: center;"><b><?=$row->openday; ?></b></td>
											<td  style="text-align: center;"><b><?=$row->rank; ?></b></td>
											
											<td  style="text-align: center;"><b><?=$row->gubun; ?></b></td>										
											<td  style="text-align: center;"><b><?=$row->genre_name; ?></b></td>
											<td  style="text-align: center;"><b><?=$row->runtime; ?>분</b></td>
											<td  style="text-align: center;"><a href="/~team17/booking/lists/no/<?=$no?>/no1/<?=$row->area_no;?>"><button type="button" class="btn btn-secondary" ><b>상영시간표</b></button></a></td>
										  </tr>
<?	
		} $name = $row->title; }
?>										  
										</tbody>
									</table>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="b" aria-labelledby="b-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : 3<span></span></h4>
									</div>
									<table id="table-breakpoint">
										<thead>
										  <tr>
											<th width="5%">No.</th>
											<th width="31%">영화</th>
											<th width="8%">평점</th>
											<th width="10%">개봉일</th>
											<th width="15%">등급</th>
											<th width="9%">장르</th>		
											
											<th width="9%">상영시간</th>
											<th width="23%"></th>
										  </tr>
										</thead>
										<tbody>

<?
    foreach ($list3 as $row3)    
    {
        $no=$row3->no;       // 사용자번호		
?>
										  <tr>
											<td><?=$row3->no; ?></td>
											<td><a href="/~team17/movie/view/no/<?=$no?>"><img src="/~team17/team/images/poster/<?=$row3->pic; ?>.jpg" width="100" height="150" alt="" /> </a><?=$row3->title; ?></td>
											<td><?=$row3->rank; ?></td>
											<td><?=$row3->openday; ?></td>
											<td><?=$row3->gubun; ?></td>
											
											<td><?=$row3->genre_name; ?></td>
											
											<td><?=$row3->runtime; ?>분</td>
											<td><a href="/~team17/booking/"<button type="button" class="btn btn-secondary" >상영시간표</button></a></td>
										  </tr>
<?	
    }
?>										  
										</tbody>
									</table>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="c" aria-labelledby="c-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : 1<span></span></h4>
									</div>
									<table id="table-breakpoint">
										<thead>
										  <tr>
											<th width="5%">No.</th>
											<th width="31%">영화</th>
											<th width="8%">평점</th>
											<th width="10%">개봉일</th>
											<th width="15%">등급</th>
											<th width="9%">장르</th>		
											
											<th width="9%">상영시간</th>
											<th width="23%"></th>
										  </tr>
										</thead>
										<tbody>

<?
    foreach ($list4 as $row4)    
    {
        $no=$row4->no;       // 사용자번호		
?>
										  <tr>
											<td><?=$row4->no; ?></td>
											<td><a href="/~team17/movie/view/no/<?=$no?>"><img src="/~team17/team/images/poster/<?=$row4->pic; ?>.jpg" width="100" height="150" alt="" /> </a><?=$row4->title; ?></td>
											<td><?=$row4->rank; ?></td>
											<td><?=$row4->openday; ?></td>
											<td><?=$row4->gubun; ?></td>
											
											<td><?=$row4->genre_name; ?></td>
											
											<td><?=$row4->runtime; ?>분</td>								
											<td><button type="button" class="btn btn-secondary">상영시간표</button></td>
										  </tr>
<?	
    }
?>										  
										</tbody>
									</table>
								</div>
							</div>



							<div role="tabpanel" class="tab-pane fade" id="d" aria-labelledby="d-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : 2<span></span></h4>
									</div>
									<table id="table-breakpoint">
										<thead>
										  <tr>
											<th width="5%">No.</th>
											<th width="31%">영화</th>
											<th width="8%">평점</th>
											<th width="10%">개봉일</th>
											<th width="15%">등급</th>
											<th width="9%">장르</th>		
											
											<th width="9%">상영시간</th>
											<th width="23%"></th>
										  </tr>
										</thead>
										<tbody>
<?
    foreach ($list5 as $row5)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row5->no;       // 사용자번호		
?>
										  <tr>
											<td><?=$row5->no; ?></td>
											<td><a href="/~team17/movie/view/no/<?=$no?>"><img src="/~team17/team/images/poster/<?=$row5->pic; ?>.jpg" width="100" height="150" alt="" /> </a><?=$row5->title; ?></td>
											<td><?=$row5->rank; ?></td>
											<td><?=$row5->openday; ?></td>
											<td><?=$row5->gubun; ?></td>
											
											<td><?=$row5->genre_name; ?></td>
											
											<td><?=$row5->runtime; ?>분</td>
											<td><button type="button" class="btn btn-secondary">상영시간표</button></td>
										  </tr>
<?	
    }
?>										  
										</tbody>
									</table>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane fade" id="e" aria-labelledby="e-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : 2<span></span></h4>
									</div>
									<table id="table-breakpoint">
										<thead>
										  <tr>
											<th width="5%">No.</th>
											<th width="31%">영화</th>
											<th width="8%">평점</th>
											<th width="10%">개봉일</th>
											<th width="15%">등급</th>
											<th width="9%">장르</th>		
											
											<th width="9%">상영시간</th>
											<th width="23%"></th>
										  </tr>
										</thead>
										<tbody>
<?
    foreach ($list6 as $row6)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row6->no;       // 사용자번호		
?>
										  <tr>
											<td><?=$row6->no; ?></td>
											<td><a href="/~team17/movie/view/no/<?=$no?>"><img src="/~team17/team/images/poster/<?=$row6->pic; ?>.jpg" width="100" height="150" alt="" /> </a><?=$row6->title; ?></td>
											<td><?=$row6->rank; ?></td>
											<td><?=$row6->openday; ?></td>
											<td><?=$row6->gubun; ?></td>
											
											<td><?=$row6->genre_name; ?></td>
											
											<td><?=$row6->runtime; ?>분</td>
											<td><a href="/~team17/booking/lists1"><button type="button" class="btn btn-secondary">상영시간표</button></td>
										  </tr>
<?	
    }
?>										  
										</tbody>
									</table>
								</div>
							</div>



<!-- ********** 동대문점 테스트중(성진) ********** -->
							<div role="tabpanel" class="tab-pane fade" id="f" aria-labelledby="f-tab">
								<div class="agile-news-table">
									<div class="w3ls-news-result">
										<h4>Search Results : 2<span></span></h4>
									</div>
									<table id="table-breakpoint">
										<thead>
										  <tr>
											<th width="5%">No.</th>
											<th width="31%">영화</th>
											<th width="8%">평점</th>
											<th width="10%">개봉일</th>
											<th width="15%">등급</th>
											<th width="9%">장르</th>		
											
											<th width="9%">상영시간</th>
											<th width="23%"></th>
										  </tr>
										</thead>
										<tbody>
<?
    foreach ($list7 as $row7)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row7->no;       // 사용자번호		
?>
										  <tr>
											<td><?=$row7->no; ?></td>
											<td><a href="/~team17/movie/view/no/<?=$no?>"><img src="/~team17/team/images/poster/<?=$row7->pic; ?>.jpg" width="100" height="150" alt="" /> </a><?=$row7->title; ?></td>
											<td><?=$row7->rank; ?></td>
											<td><?=$row7->openday; ?></td>
											<td><?=$row7->gubun; ?></td>
											
											<td><?=$row7->genre_name; ?></td>
											
											<td><?=$row7->runtime; ?>분</td>
											<td style='text-align: center;' class='w3-list-info'><a href='#myModal2' role='button' data-toggle='modal' class='success btn btn-secondary'
												jijum_no='260' title='<?=$row7->title; ?>' pic='<?=$row7->pic; ?>' movie_no='<?=$row7->no; ?>' showtimes='<?=$row7->runtime; ?>분' open_day='<?=$row7->openday; ?>'>
												예매하기</a></td>											
										  </tr>
<?	
    }
?>										  
										</tbody>
									</table>
								</div>
							</div>
<!-- ********** 동대문점 테스트중(성진) ********** -->



							
							
						</div>
				</div>
			</div>
	</div>
</div>
<!-- //faq-banner -->


<!--**************테스트중입니다 건드리지 마시오************** -->
<div id="myModal2" class="modal" data-easein="flipXIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">예매하기</h4>
          </div>
          <div class="modal-body">
            <table>
				<thead>
					<th style="text-align: center;">선택 영화</th>
					<th style="text-align: center;">날짜 선택</th>
					<th style="text-align: center;">상영시간표</th>
				</thead>
				<tbody>
					<tr>
						<td rowspan="4" style="text-align: center;">
							<a href="single.html"><img id="booking_poster" width="115" height="175" src="" alt="" />
							<br><span><b id="booking_title" style="color: black;"></b></span></a>
						</td>
						<td style="text-align: center;">
							<a href="#today" class="booking_today"><span><b id="booking_today" style="color: red;"></b></span></a>
						</td>
						<form action="#myModal3" data-toggle="modal">
						<td id="movietimes" valign="top" style="text-align: center;" rowspan="4">
							<span><b id="booking_time" style="color: black;">6일테스트</b></span><br><br>
							<input type="radio" id="radio1" name="radios" value="all" checked>
							   <label for="radio1">22:10</label>
							<input type="radio" id="radio2" name="radios"value="false">
							   <label for="radio2">23:10</label>
							<input type="radio" id="radio3" name="radios" value="true">
							   <label for="radio3">00:10</label>
							<input type="radio" id="radio4" name="radios" value="true">
							   <label for="radio4">15:10</label>
							   <br><br>							   
						</td>
					</tr>
					<tr> <td style="text-align: center;"><a href="#tomorrow" class="booking_tomorow"><span><b id="booking_tomorow" style="color: black;"></b></span></a></td>
					</tr>
					<tr> <td style="text-align: center;"><a href="#tomorrow2" class="booking_tomorow2"><span><b id="booking_tomorow2" style="color: black;"></b></span></a></td>
					</tr>
					<tr> <td style="text-align: center;"><a href="#tomorrow3" class="booking_tomorow3"><span><b id="booking_tomorow3" style="color: black;"></b></span></a></td>
					</tr>
					
				</tbody>
			</table>
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">닫기</button>
            <a href="#myModal3" role="button" class="to-seat btn btn-warning" data-toggle="modal" data-dismiss="modal" aria-hidden="true">선택</a>
          </div>
        </div>
      </div>
    </div>
	<div id="myModal3" class="modal" data-easein="flipXIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div style="width: 60%; height:100%" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">좌석선택</h4>
          </div>
          <div style="height: 530px;" class="modal-body">
			  <div class="screen">
				<h1>SCREEN</h1>
			  </div>
			  <iframe id="iframe_id" class="ttt" width="100%" height="90%" src="/~team4/test/test1"></iframe>
		  </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">닫기</button>
            <a href="#myModal23" role="button" screeninginfo="" class="pay btn btn-warning" data-toggle="modal" data-dismiss="modal" aria-hidden="true">좌석선택</a>
          </div>
        </div>
      </div>
    </div>

<script>

	var seat_select = '';
	$(function(){
		$('.to-seat').click(function(){ 
			 var screeninginfo = $("input[name=radios]:checked").val();
			 $.ajax({
				url: "/~team17/booking/seat",
				type: "POST",
				data:{
					"screeninginfo":screeninginfo
				},
				dataType:"html",
				complete:function(xhr, textStatus) {
					var no = xhr.responseText;
					seat_select = no;
					$('.ttt').attr("src","/~team4/test/test1");
				},
				error:function(request,status,error)
				{
					alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				},
			});
		});
	});

	$(function(){
		$('.fail').click(function(){
			alert("로그인 후 이용이 가능합니다.");
		});
	});
	$(function(){
		$('.pay').click(function(){
			var f = $('#iframe_id').contents().find('.seat_name').val();
			alert(f);
			
			$.ajax({
				url: "/~team4/booking/pay",
				type: "POST",
				data:{
				},
				dataType:"html",
				complete:function(xhr, textStatus) {
					var no = xhr.responseText;
					
				},
				error:function(request,status,error)
				{
					alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				},
			});
		});
	});
	$(function(){
		$('.success').click(function(){
			 var poster = $(this).attr("pic");
			 $('#booking_poster').attr("src","/~team17/team/images/poster/" + poster);
			 var title = $(this).attr("title");
			 $('#booking_title').text(title);
			 var today = new Date();
			 $('.booking_today').attr("jijum_no",$(this).attr("jijum_no"));
			 $('.booking_today').attr("movie_no",$(this).attr("movie_no"));
			 $('#booking_today').text(today.getDate() + "일");
			 var today = new Date();
			 today.setDate(today.getDate()+1);
			 $('#booking_tomorow').text(today.getDate() + "일");
			 $('.booking_tomorow').attr("jijum_no",$(this).attr("jijum_no"));
			 $('.booking_tomorow').attr("movie_no",$(this).attr("movie_no"));
			 today.setDate(today.getDate()+1);
			 $('#booking_tomorow2').text(today.getDate() + "일");
			 $('.booking_tomorow2').attr("jijum_no",$(this).attr("jijum_no"));
			 $('.booking_tomorow2').attr("movie_no",$(this).attr("movie_no"));
			 today.setDate(today.getDate()+1);
			 $('#booking_tomorow3').text(today.getDate() + "일");
			 $('.booking_tomorow3').attr("jijum_no",$(this).attr("jijum_no"));
			 $('.booking_tomorow3').attr("movie_no",$(this).attr("movie_no"));
			 
			 today.setDate(today.getDate()-3);
			 
			 var now_time = new Date();
			 
			 now_time.setMinutes(now_time.getMinutes()+10);
			 if(parseInt(now_time.getMinutes) > 60) {
				 now_time.setHours(now_time.getHours()+1);
				 if(parseInt(now_time.getHours) > 24)
					 now_time.setHours(now_time.getHours() - 25);
				 now_time.setMinutes(now_time.getMinutes() - 60);
			 }

			 var now_minute = parseInt(now_time.getMinutes()); 
			 if(now_minute < 10 && now_minute > 0)
				 now_minute = '0' + now_minute;					

			 var jijum_no = $(this).attr("jijum_no");
			 var movie_no = $(this).attr("movie_no");
			 
			 $.ajax({
				url: "/~team4/booking/movietimes/type/1",
				type: "POST",
				data:{
					"jijum_no":jijum_no,
					"movie_no":movie_no
				},
				dataType:"html",
				complete:function(xhr, textStatus) {
					var no = eval(xhr.responseText);
					
					var text = '';
					var cinema = '';
					var now_hm = now_time.getHours() + '' + now_minute;
					
					for(var i = 0; i < no.length; i ++) {
						if(i == 0)
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
						else if(no[i-1]['cinema_section'] == no[i]['cinema_section']) {						
							cinema = '';
						}
						else {
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
							text = text + '<br><br>' + cinema;
							cinema = '';
						}
						
						var select_hm = no[i]['time'].substring(0,2) + '' + no[i]['time'].substring(3,5);
						
						if(parseInt(now_hm) > parseInt(select_hm)) {
							text = cinema + '' + text + '<input type="radio" id="radio'+ no[i]['no'] +'" name="radios" value="'+ no[i]['no'] +'" disabled>'+
						   '<label style="color: red;" for="radio' + no[i]['no'] + '">' + no[i]['time'].substring(0,5) + '</label>' +
						   ' 0석 ';
						   
						}
						else {
							text = cinema + '' + text + '<input type="radio" id="radio'+ no[i]['no'] +'" name="radios" value="'+ no[i]['no'] +'">'+
							   '<label for="radio' + no[i]['no'] + '">' + no[i]['time'].substring(0,5) + '</label>' +
							   ' ' + no[i]['seat'] + '석 ';
						}
						
					}
					$('#movietimes').replaceWith('<td id="movietimes" valign="top" style="text-align: center;" rowspan="4">' + 
					'<span><b id="booking_time" style="color: black;">' + today.getDate()  + '일</b></span>' +
					'<br><br>' +
					text +   //라이도버튼
					'</td>');
					
					//no = no[0]['time'].substring(11,16);
					//alert(no);
				},
				error:function(request,status,error)
				{
					alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				},
			});
		});
	});
	
	$(function(){
		$('.booking_today').click(function(){
			 var now_time = new Date();
			 now_time.setMinutes(now_time.getMinutes()+10);
			 
			 var jijum_no = $(this).attr("jijum_no");
			 var movie_no = $(this).attr("movie_no");
			 
			 
			 $.ajax({
				url: "/~team4/booking/movietimes/type/1",
				type: "POST",
				data:{
					"jijum_no":jijum_no,
					"movie_no":movie_no
				},
				dataType:"html",
				complete:function(xhr, textStatus) {
					var no = eval(xhr.responseText);
					
					var text = '';
					var cinema = '';
					var now_hm = now_time.getHours() + '' + now_time.getMinutes();
					
					for(var i = 0; i < no.length; i ++) {
						if(i == 0)
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
						else if(no[i-1]['cinema_section'] == no[i]['cinema_section']) {						
							cinema = '';
						}
						else {
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
							text = text + '<br><br>' + cinema;
							cinema = '';
						}
						
						var select_hm = no[i]['time'].substring(0,2) + '' + no[i]['time'].substring(3,5);
						if(parseInt(now_hm) > parseInt(select_hm)) {
							text = cinema + '' + text + '<input type="radio" id="radio'+ no[i]['no'] +'" name="radios" value="'+ no[i]['no'] +'" disabled>'+
						   '<label style="color: red;" for="radio' + no[i]['no'] + '">' + no[i]['time'].substring(0,5) + '</label>' +
						   ' 0석 ';
						   
						}
						else {
							text = cinema + '' + text + '<input type="radio" id="radio'+ no[i]['no'] +'" name="radios" value="'+ no[i]['no'] +'">'+
							   '<label for="radio' + no[i]['no'] + '">' + no[i]['time'].substring(0,5) + '</label>' +
							   ' ' + no[i]['seat'] + '석 ';
						}
						
					}
					$('#movietimes').replaceWith('<td id="movietimes" valign="top" style="text-align: center;" rowspan="4">' + 
					'<span><b id="booking_time" style="color: black;">' + now_time.getDate()  + '일</b></span>' +
					'<br><br>' +
					text +   //라이도버튼
					'</td>');
					
					//no = no[0]['time'].substring(11,16);
					//alert(no);
				},
				error:function(request,status,error)
				{
					alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				},
			});
		});
	});
	
	$(function(){
		$('.booking_tomorow').click(function(){
			 var now_time = new Date();
			 now_time.setDate(now_time.getDate()+1);
			 
			 var jijum_no = $(this).attr("jijum_no");
			 var movie_no = $(this).attr("movie_no");
			 
			 $.ajax({
				url: "/~team4/booking/movietimes/type/2",
				type: "POST",
				data:{
					"jijum_no":jijum_no,
					"movie_no":movie_no
				},
				dataType:"html",
				complete:function(xhr, textStatus) {
					var no = eval(xhr.responseText);
					
					var text = '';
					var cinema = '';
					
					for(var i = 0; i < no.length; i ++) {
						if(i == 0)
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
						else if(no[i-1]['cinema_section'] == no[i]['cinema_section']) {						
							cinema = '';
						}
						else {
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
							text = text + '<br><br>' + cinema;
							cinema = '';
						}
						text = cinema + '' + text + '<input type="radio" id="radio'+ no[i]['no'] +'" name="radios" value="'+ no[i]['no'] +'">'+
						'<label style="color: black;" for="radio' + no[i]['no'] + '">' + no[i]['time'].substring(0,5) + '</label>'+
						' ' + no[i]['seat'] + '석 ';
					}
					$('#movietimes').replaceWith('<td id="movietimes" valign="top" style="text-align: center;" rowspan="4">' + 
					'<span><b id="booking_time" style="color: black;">' + now_time.getDate()  + '일</b></span>' +
					'<br><br>' +
					text +   //라이도버튼
					'</td>');
					
					//no = no[0]['time'].substring(11,16);
					//alert(no);
				},
				error:function(request,status,error)
				{
					alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				},
			});
		});
	});
	
	$(function(){
		$('.booking_tomorow3').click(function(){
			 var now_time = new Date();
			 now_time.setDate(now_time.getDate()+3);
			 
			 var jijum_no = $(this).attr("jijum_no");
			 var movie_no = $(this).attr("movie_no");
			 
			 $.ajax({
				url: "/~team4/booking/movietimes/type/0",
				type: "POST",
				data:{
					"jijum_no":jijum_no,
					"movie_no":movie_no
				},
				dataType:"html",
				complete:function(xhr, textStatus) {
					var no = eval(xhr.responseText);
					
					var text = '';
					var cinema = '';
					
					for(var i = 0; i < no.length; i ++) {
						if(i == 0)
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
						else if(no[i-1]['cinema_section'] == no[i]['cinema_section']) {						
							cinema = '';
						}
						else {
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
							text = text + '<br><br>' + cinema;
							cinema = '';
						}
						text = cinema + '' + text + '<input type="radio" id="radio'+ no[i]['no'] +'" name="radios" value="'+ no[i]['no'] +'">'+
						'<label style="color: black;" for="radio' + no[i]['no'] + '">' + no[i]['time'].substring(0,5) + '</label>'+
						' ' + no[i]['seat'] + '석 ';
					}
					$('#movietimes').replaceWith('<td id="movietimes" valign="top" style="text-align: center;" rowspan="4">' + 
					'<span><b id="booking_time" style="color: black;">' + now_time.getDate()  + '일</b></span>' +
					'<br><br>' +
					text +   //라이도버튼
					'</td>');
					
					//no = no[0]['time'].substring(11,16);
					//alert(no);
				},
				error:function(request,status,error)
				{
					alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				},
			});
		});
	});
	
	$(function(){
		$('.booking_tomorow2').click(function(){
			 var now_time = new Date();
			 now_time.setDate(now_time.getDate()+2);
			 
			 var jijum_no = $(this).attr("jijum_no");
			 var movie_no = $(this).attr("movie_no");

			 $.ajax({
				url: "/~team4/booking/movietimes/type/3",
				type: "POST",
				data:{
					"jijum_no":jijum_no,
					"movie_no":movie_no
				},
				dataType:"html",
				complete:function(xhr, textStatus) {
					var no = eval(xhr.responseText);

					var text = '';
					var cinema = '';
					
					for(var i = 0; i < no.length; i ++) {
						if(i == 0)
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
						else if(no[i-1]['cinema_section'] == no[i]['cinema_section']) {						
							cinema = '';
						}
						else {
							cinema = '<span><b id="booking_time" style="color: black;">' + no[i]['cinema_kind'] + ' ' + no[i]['cinema_section'] + '</b></span><br>';
							text = text + '<br><br>' + cinema;
							cinema = '';
						}
						text = cinema + '' + text + '<input type="radio" id="radio'+ no[i]['no'] +'" name="radios" value="'+ no[i]['no'] +'">'+
						'<label style="color: black;" for="radio' + no[i]['no'] + '">' + no[i]['time'].substring(0,5) + '</label>'+	
						' ' + no[i]['seat'] + '석 ';						
					}
					$('#movietimes').replaceWith('<td id="movietimes" valign="top" style="text-align: center;" rowspan="4">' + 
					'<span><b id="booking_time" style="color: black;">' + now_time.getDate()  + '일</b></span>' +
					'<br><br>' +
					text +   //라이도버튼
					'</td>');
					
					//no = no[0]['time'].substring(11,16);
					//alert(no);
				},
				error:function(request,status,error)
				{
					alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				},
			});
		});
	});
	
</script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

    <!--<script src="/js/bootstrap-datepicker.kr.js" charset="UTF-8"></script>-->
	
	<script type='text/javascript'>
		$(function(){
			$('.input-group.date').datepicker({
				calendarWeeks: false,
				todayHighlight: true,
				startDate: '-70y',
				changeMonth: true,
				changeYear: true,
				autoclose: true,
				format: "yyyy/mm/dd",
				language: "kr"
			});
		});

		;(function($){
			$.fn.datepicker.dates['kr'] = {
				days: ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일", "일요일"],
				daysShort: ["일", "월", "화", "수", "목", "금", "토", "일"],
				daysMin: ["일", "월", "화", "수", "목", "금", "토", "일"],
				months: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"],
				monthsShort: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"]
			};
		}(jQuery));
    </script>
	






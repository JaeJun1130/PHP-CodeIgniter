<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Movie Ticket Booking Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Movie Ticket Booking Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="/~team17/team/seat-css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="/~team17/team/seat-js/jquery-1.11.0.min.js"></script>
<script src="/~team17/team/seat-js/jquery.seat-charts.js"></script>
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

<script>

function next_pay()
{
	form1.action="/~team17/booking/add";
	form1.submit();
}

function next_page()
{
	form1.action="/~team17/";
	form1.submit();
}


window.onload = function() { 
	$(".seatCharts-seat").click(function(){
		var length = $(".cart-item").length;
		var sits = new Array();

		var i;
		for(i=0;i<length;i++){
			var sit = $(".cart-item").eq(i).text();
			sits[i]=sit;
		}
		$(".movie_sits_hidden").val(sits);

		var total = $("#total").text();
		$(".movie_total_hidden").val(total);

		var counter = $("#counter").text();
		$(".movie_counter_hidden").val(counter);
	});

	#out {
 width: 100%;
 text-align: center;
 }

	
};
</script>
</head>
<body>
<div class="faq">
<h4 class="latest-text w3_faq_latest_text w3_latest_text"><p class="c">결제정보확인</p></h4>
</div>

<div class="row">
	<table style="text-align:center;" class="table table-bordered table">
								<tbody><tr>
									<td>영화제목</td>
									<td><?=$movie_no?></td>
								</tr>
								<tr>
									<td>상영날짜</td>
									<td><?=$movie_date?></td>
								</tr>
								<tr>
									<td>상영지점</td>
									<td><?=$movie_area?></td>
								</tr>
								<tr>
									<td>상영시간</td>
									<td><?=$movie_time?></td>
								</tr>
								<tr>
									<td>영화좌석</td>
									<td><?=$movie_sits?></td>
								</tr>
								<tr>
									<td>결제금액</td>
									<td><?=$movie_total?></td>
								</tr>
								<tr>
									<td>티켓갯수</td>
									<td><?=$movie_counter?></td>
								</tr>

								<tr>
									<td>결제자</td>
									<td><?=$this->session->userdata('name')?></td>
								</tr>

								<tr>
									<td>예약날짜</td>
									<td><?=date("Y-m-d")?></td>
								</tr>

							</tbody>
	</table>


</div>
<br>	

<form name="form1" action="/~team17/booking/add" method="post">

		<button  class="checkout-button" style= "margin-left:830px;">결제하기</button></a>
			
		<input type="hidden" name="movie_no" class="movie_no_hidden" value="<?=$movie_no?>">
		<input type="hidden" name="movie_date" class="movie_date_hidden" value="<?=$movie_date?>">
		<input type="hidden" name="movie_area" class="movie_area_hidden" value="<?=$movie_area?>">
		<input type="hidden" name="movie_time" class="movie_time_hidden" value="<?=$movie_time?>">
		<input type="hidden" name="movie_sits" class="movie_sits_hidden" value="<?=$movie_sits?>">
		<input type="hidden" name="movie_total" class="movie_total_hidden" value="<?=$movie_total?>">
		<input type="hidden" name="movie_counter" class="movie_counter_hidden" value="<?=$movie_counter?>">
		<input type="hidden" name="movie_id" class="movie_id_hidden" value="<?=$this->session->userdata('name')?>">
		<input type="hidden" name="movie_startday" class="movie_id_hidden" value="<?=date("Y-m-d")?>">
</form>

</div>
</div>
<script src="/~team17/team/seat-js/jquery.nicescroll.js"></script>
<script src="/~team17/team/seat-js/scripts.js"></script>

</body>
</html>

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

function next_page()
{
	form1.action="/~team17/booking/bookinginfo";
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

	
};
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
</head>
<body>
<div class="faq">
<h4 class="latest-text w3_faq_latest_text w3_latest_text"><p class="c">예매하기</p></h4>

<div class="browse-agile-w3ls general-w3ls">
					<div class="tittle-head">
					<br>
						<div class="container">
							<div class="agileits-single-top">

								<ol class="breadcrumb">
									<li><a href="/~team17">Home</a></li>
									<li class="active">Booking</li>
								</ol>
							</div><div class="input-group-prepend">
														<span class="input-group-text"><p class="a">Step2. 좌석 선택</p></span>&nbsp;
												 </div>
						</div>
					</div>


<div class="content">
	<div class="main">
		<h2></h2>
		<div class="demo">
			<div id="seat-map">
				<div class="front">SCREEN</div>					
			</div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Movie</li>
					<li>Date </li>
					<li>Time</li>
					<li>Tickets</li>
					<li>Total</li>
					<li>Seats :</li>
				</ul>
				<ul class="book-right">
					<li>: <?=$movie_title?></li>
					<li>: <?=$movie_date?></li>
					<li>: <?=$movie_time?></li>
					<li>: <span id="counter">0</span></li>
					<li>: <b><i>$</i><span id="total">0</span></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>

				<a onclick="next_page()"><button class="checkout-button">선택완료</button>	</a>
				<div id="legend"></div>
			</div>
			<div style="clear:both"></div>
	    </div>

<?$arr = ""; 
$arr2 = "";
foreach($list as $row){
	if($movie_time == $row->timetable_no && $movie_date == $row->reserveday){
	$arr2 = explode(',' , $row->seat_no);
	$cnt = count($arr2);
	for($i = 0 ; $i < $cnt; $i++){
		$arr = $arr . "'" . $arr2[$i] . "'" . ", "; 
		//echo("$arr\n");
	}
	
}
}
$arr=substr($arr, 0, -2);
?>


			<script type="text/javascript">
				var price = 10; //price
				$(document).ready(function() {
					var $cart = $('#selected-seats'), //Sitting Area
					$counter = $('#counter'), //Votes
					$total = $('#total'); //Total money
					
					var sc = $('#seat-map').seatCharts({
						map: [  //Seating chart
							'aaaaaaaa',
							'aaaaaaaa',
							'________',
							'aaaaaaaa',
							'aaaaaaaa',
							'aaaaaaaa'

						],
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return column;
							}
						},
						legend : { //Definition legend
							node : $('#legend'),
							items : [
								[ 'a', 'available',   'Available' ],
								[ 'a', 'unavailable', 'Sold'],
								[ 'a', 'selected', 'Selected']
							]					
						},
						click: function () { //Click event
							if (this.status() == 'available') { //optional seat
								$('<li>'+(this.settings.row+1)+'_'+this.settings.label+'</li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.attr('class', 'cart-item')
									.data('seatId', this.settings.id)
									.appendTo($cart);

								$counter.text(sc.find('selected').length+1);
								$total.text(recalculateTotal(sc)+price);
											
								return 'selected';
							} else if (this.status() == 'selected') { //Checked
									//Update Number
									$counter.text(sc.find('selected').length-1);
									//update totalnum
									$total.text(recalculateTotal(sc)-price);
										
									//Delete reservation
									$('#cart-item-'+this.settings.id).remove();
									//optional
									return 'available';
							} else if (this.status() == 'unavailable') { //sold
								return 'unavailable';
							} else {
								return this.style();
							}
						}
					});
					//sold seat
					sc.get([<?=$arr?>]).status('unavailable');
				});
				//sum total money
				function recalculateTotal(sc) {
					var total = 0;
					sc.find('selected').each(function () {
						total += price;
					});
							
					return total;
				}
			</script>
	</div></div>
						
	<form name="form1" action="" method="post">
		<input type="hidden" name="movie_no" class="movie_no_hidden" value="<?=$movie_no?>">
		<input type="hidden" name="movie_title" class="movie_title_hidden" value="<?=$movie_title?>">
		<input type="hidden" name="movie_date" class="movie_date_hidden" value="<?=$movie_date?>">
		<input type="hidden" name="movie_area" class="movie_area_hidden" value="<?=$movie_area?>">
		<input type="hidden" name="movie_time" class="movie_time_hidden" value="<?=$movie_time?>">
		<input type="hidden" name="movie_sits" class="movie_sits_hidden" value="<?=$movie_sits?>">
		<input type="hidden" name="movie_total" class="movie_total_hidden" value="<?=$movie_total?>">
		<input type="hidden" name="movie_counter" class="movie_counter_hidden" value="<?=$movie_counter?>">
		<input type="hidden" name="movie_id" class="movie_id_hidden" value="<?=$this->session->userdata('name')?>">
		<input type="hidden" name="movie_id" class="movie_id_hidden" value="<?=date("Y-m-d")?>">
	</form>
</div>
</div>
<script src="/~team17/team/seat-js/jquery.nicescroll.js"></script>
<script src="/~team17/team/seat-js/scripts.js"></script>

</body>
</html>

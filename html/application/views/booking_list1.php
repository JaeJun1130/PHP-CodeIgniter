<script>
	function next_movie()
{
	form1.action="/~team17/userReservation/seat";
	form1.submit();
}

$(function() {
$(".swiper-slide").click(function(){
	var a = $("span.choosen-area").text();
	$("#choosen_movie").val(a);
    
});
});
</script>
				<br>

				<!-- Search bar -->
        <div class="search-wrapper">
            <div class="container container--add">
                <form id='search-form' method='get' class="search">
                    <input type="text" class="search__field" placeholder="Search">
                    <select name="sorting_item" id="search-sort" class="search__sort" tabindex="0">
                        <option value="1" selected='selected'>By title</option>
                        <option value="2">By year</option>
                        <option value="3">By producer</option>
                        <option value="4">By title</option>
                        <option value="5">By year</option>
                    </select>
                    <button type='submit' class="btn btn-md btn--danger search__button">search a movie</button>
                </form>
            </div>
        </div>
        
        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="/~team12/my/cinema/images/tickets.png">
                    <p class="order__title">티켓 예매 <br><span class="order__descript">and have fun movie time</span></p>
                    <div class="order__control">
                        <a href="#" class="order__control-btn active">Purchase</a>
                        <a href="#" class="order__control-btn">Reserve</a>
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step">1. What &amp; Where &amp; When</div>
                </div>

            <h2 class="page-heading heading--outcontainer">영화 선택</h2>
        </section>
    

        <div class="choose-film">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                  <!--First Slide-->
				    <?
    foreach ($list  as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no;
		$name=$row->name;
		//$genre_name=$row->genre_name;
		//$startday=$row->startday;

		//$area_name=$row->area_name;
	
		if($row->picture)
		$picture=$row->picture;
	else
		$picture="이미지X";
	
	?>
                  <div class="swiper-slide"  data-film='<?=$row->name;?>'> 
                        <div class="film-images">
                           	<img  src="/~team12/product_img/<?=$picture?>" style="width:155px; height:180px; background:gray;">
                        </div>
                        <p class="choose-film__title"><?=$row->name;?></p>
                  </div>
                  
	<?
	}
				  ?>
              </div>
            </div>
        </div>

        <section class="container">
            <div class="col-sm-12">
                <div class="choose-indector choose-indector--film">
                    <strong>Choosen: </strong><span class="choosen-area"></span>
                </div>

                <h2 class="page-heading">City &amp; Date</h2>

                <div class="choose-container choose-container--short">
                    <form name='form_city' id='select' class="select" method='get'>
                          <select name="select_item" id="select-sort" class="select__sort" tabindex="0">
						<?
							foreach($area as $row1)
							{
								if($row1->no==$city) {
						?>
								<option value="<?=$row1->no;?>" selected><?=$row1->name;?></option>
						<?
								}
								else {
						?>
								<option value="<?=$row1->no;?>"><?=$row1->name;?></option>
						<?
								}
							}
						?>
                        </select>
                    </form>

                    <div class="datepicker">
                      <span class="datepicker__marker"><i class="fa fa-calendar"></i>Date</span>
                      <input type="text" id="datepicker" value='<?=date("Y-m-d", time())?>' class="datepicker__input">
                    </div>
                </div>

                <h2 class="page-heading">Pick time</h2>

                <div class="time-select time-select--wide">
						<?
						foreach($screening as $row2)
						{
						?>
							<div class="time-select__group">
								<div class="col-sm-3">
									<p class="time-select__place"><?=$row2->name?></p>
								</div>
								<ul class="col-sm-6 items-wrap">
								<?
									foreach($timetable as $row3)
									{
										if ($row2->no == $row3->screening_no) {
								?>
										<li class="time-select__item" data-time='<?=$row3->time?>'><?=$row3->time?></li>	
								<?
										}
									}
								?>
								</ul>
							</div>							
						<?
						}
						?>
                </div>

                <div class="choose-indector choose-indector--time">
                    <strong>Choosen: </strong><span class="choosen-area"></span>
                </div>
            </div>

        </section>

        <div class="clearfix"></div>

        <form id='film-and-time'  name="form1" class="booking-form" method='post' action=''>
            <input type="text" name="choosen_movie" class='choosen-movie' id="choosen_movie" >

						<input type='text' name='choosen_city' class="choosen-city">
            <input type="text" name="choosen_date" class="choosen-date" id="choosen_date">
            
            <input type="text" name="choosen_cinema" class="choosen-cinema" id="choosen_cinema">
            <input type="text" name="choosen_time" class="choosen-time" id="choosen_time">

            <div class="booking-pagination">
                    <a href="#" class="booking-pagination__prev hide--arrow">
                        <span class="arrow__text arrow--prev"></span>
                        <span class="arrow__info"></span>
                    </a>
                    <a  class="booking-pagination__next" onclick="next_movie()">
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">choose a sit</span>
                    </a>
            </div>

        </form>


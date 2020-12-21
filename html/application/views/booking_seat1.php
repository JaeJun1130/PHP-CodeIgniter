				<br>
<script>
		function next_movie()
		{
			form1.action="/~team17/userReservation/purchase";
			form1.submit();
		}
</script>
        <!-- Search bar -->
       
        
        <!-- Main content -->
        <div class="place-form-area">
        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="/~team12/my/cinema/images/tickets.png">
                    <p class="order__title"><h2><?=$movie?></h2> <br><span class="order__descript">and have fun movie time</span></p>
                    <div class="order__control">
                        <a href="#" class="order__control-btn active">Purchase</a>
                        <a href="#" class="order__control-btn">Reserve</a>
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step">2. Choose a sit</div>
                </div>
            
            <div class="choose-sits">
                <div class="choose-sits__info choose-sits__info--first">
                    <ul>
                        <li class="sits-price marker--none"><strong>Price</strong></li>
                        <li class="sits-price sits-price--cheap">$10</li>
                        <li class="sits-price sits-price--middle">$20</li>
                        <li class="sits-price sits-price--expensive">$30</li>
                    </ul>
                </div>

                <div class="choose-sits__info">
                    <ul>
                        <li class="sits-state sits-state--not">Not available</li>
                        <li class="sits-state sits-state--your">Your choice</li>
                    </ul>
                </div>
                
                <div class="col-sm-12 col-lg-10 col-lg-offset-1">
                <div class="sits-area hidden-xs">
                    <div class="sits-anchor">screen</div>

                    <div class="sits">
                        <aside class="sits__line">
                            <span class="sits__indecator">A</span>
                            <span class="sits__indecator">B</span>
                            <span class="sits__indecator">C</span>
                            <span class="sits__indecator">D</span>
                            <span class="sits__indecator">E</span>
                            <span class="sits__indecator">F</span>
                            <span class="sits__indecator">G</span>
                            <span class="sits__indecator">H</span>
                            <span class="sits__indecator additional-margin">I</span>
                            <span class="sits__indecator">J</span>
                            <span class="sits__indecator">K</span>
                        </aside>
<?
	foreach ($list as $row) 
	{
		$seat_row=$row->row;
		$seat_col=$row->col;
		$seat[] = $seat_col.$seat_row;
	}
?>
<?
	for($i='A'; $i <= 'D'; $i++) {
		echo("<div class='sits__row'>");
		for($j='1'; $j <= '19'; $j++) {
			if(in_array($i.$j, $seat))
			{
		?>
			<span class="sits__place sits-price--cheap sits-state--not" data-place='<?=$i.$j?>' data-price='10'><?=$i.$j?></span>
		<?
			} else {
		?>
			<span class="sits__place sits-price--cheap" data-place='<?=$i.$j?>' data-price='10'><?=$i.$j?></span>
		<?
			}
		}
		echo("</div>");
	}
?>
<?
	for($i='E'; $i <= 'H'; $i++) {
		echo("<div class='sits__row'>");
		for($j='1'; $j <= '19'; $j++) {
			if(in_array($i.$j, $seat))
			{
		?>
			<span class="sits__place sits-price--expensive sits-state--not" data-place='<?=$i.$j?>' data-price='30'><?=$i.$j?></span>
		<?
			} else {
		?>
			<span class="sits__place sits-price--expensive" data-place='<?=$i.$j?>' data-price='30'><?=$i.$j?></span>
		<?
			}
		}
		echo("</div>");
	}
?>
<div class="sits__row additional-margin"></div>
<?
	for($i='I'; $i <= 'K'; $i++) {
		echo("<div class='sits__row'>");
		for($j='1'; $j <= '15'; $j++) {
			if(in_array($i.$j, $seat))
			{
		?>
			<span class="sits__place sits-price--middle sits-state--not" data-place='<?=$i.$j?>' data-price='20'><?=$i.$j?></span>
		<?
			} else {
		?>
			<span class="sits__place sits-price--middle" data-place='<?=$i.$j?>' data-price='20'><?=$i.$j?></span>
		<?
			}
		}
		echo("</div>");
	}
?>
                        <aside class="sits__checked">
                            <div class="checked-place">
                                
                            </div>
                            <div class="checked-result">
                                $0
                            </div>
                        </aside>
                        <footer class="sits__number">
                            <span class="sits__indecator">1</span>
                            <span class="sits__indecator">2</span>
                            <span class="sits__indecator">3</span>
                            <span class="sits__indecator">4</span>
                            <span class="sits__indecator">5</span>
                            <span class="sits__indecator">6</span>
                            <span class="sits__indecator">7</span>
                            <span class="sits__indecator">8</span>
                            <span class="sits__indecator">9</span>
                            <span class="sits__indecator">10</span>
                            <span class="sits__indecator">11</span>
                            <span class="sits__indecator">12</span>
                            <span class="sits__indecator">13</span>
                            <span class="sits__indecator">14</span>
                            <span class="sits__indecator">15</span>
                            <span class="sits__indecator">16</span>
                            <span class="sits__indecator">17</span>
                            <span class="sits__indecator">18</span>
														<span class="sits__indecator">19</span>
                        </footer>
                    </div>
                </div>
            </div>
                
            <div class="col-sm-12 visible-xs"> 
                <div class="sits-area--mobile">
                    <div class="sits-area--mobile-wrap">
                        <div class="sits-select">
                            <select name="sorting_item" class="sits__sort sit-row" tabindex="0">
                                    <option value="1" selected='selected'>A</option>
                                    <option value="2">B</option>
                                    <option value="3">C</option>
                                    <option value="4">D</option>
                                    <option value="5">E</option>
                                    <option value="6">F</option>
                                    <option value="7">G</option>
                                    <option value="8">I</option>
                                    <option value="9">J</option>
                                    <option value="10">K</option>
                                    <option value="11">L</option>
                            </select>
 
                            <select name="sorting_item" class="sits__sort sit-number" tabindex="1">
                                    <option value="1" selected='selected'>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
																		<option value="18">19</option>
                            </select>

                            <a href="#" class="btn btn-md btn--warning toogle-sits">Choose sit</a>
                        </div>
                    </div>

                    <a href="#" class="watchlist add-sits-line">Add new sit</a>

                    <aside class="sits__checked">
                            <div class="checked-place">
                                <span class="choosen-place"></span>
                            </div>
                            <div class="checked-result">
                                $0
                            </div>
                    </aside>

                    <img alt="" src="images/components/sits_mobile.png">
                </div>
            </div>   
                
            </div>
                

            </div>
        </section>
        </div>
      
        

        <div class="clearfix"></div>
        <form name='form1' id='film-and-time' class="booking-form" method='post' action=''>

            <input type='text' name='choosen-number' class="choosen-number">
            <input type='text' name='choosen-number--cheap' class="choosen-number--cheap">
            <input type='text' name='choosen-number--middle' class="choosen-number--middle">
            <input type='text' name='choosen-number--expansive' class="choosen-number--expansive">
            <input type='text' name='choosen-cost' class="choosen-cost">
            <input type='text' name='choosen-sits' class="choosen-sits">


						<input type='text' name='movie' value='<?=$movie?>'>
						<input type='text' name='city' value='<?=$city?>'>
						<input type='text' name='time' value='<?=$time?>'>
						<input type='text' name='date' value='<?=$date?>'>
						<input type='text' name='cinema' value='<?=$cinema?>'>


            <div class="booking-pagination booking-pagination--margin">
                    <a class="booking-pagination__prev" onclick='history.back();'>
                        <span class="arrow__text arrow--prev">prev step</span>
                        <span class="arrow__info">what&amp;where&amp;when</span>
                    </a>
                    <a class="booking-pagination__next" onclick='next_movie();'>
                        <span class="arrow__text arrow--next">next step</span>
                        <span class="arrow__info">checkout</span>
                    </a>
            </div>
        </form>
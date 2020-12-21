        <br>
<script>
		function next_movie()
		{
			form1.action="/~team17/userReservation/ticket";
			form1.submit();
		}
</script>

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
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Book a ticket <br><span class="order__descript">and have fun movie time</span></p>
                    <div class="order__control">
                        <a href="" class="order__control-btn active">Purchase</a>
                        <a href="book3-reserve.html" class="order__control-btn">Reserve</a>
                    </div>
                </div>
            </div>
                <div class="order-step-area">
                    <div class="order-step first--step order-step--disable ">1. What &amp; Where &amp; When</div>
                    <div class="order-step second--step order-step--disable">2. Choose a sit</div>
                    <div class="order-step third--step">3. Check out</div>
                </div>

            <div class="col-sm-12">
                <div class="checkout-wrapper">
                    <h2 class="page-heading">price</h2>
                    <ul class="book-result">
                        <li class="book-result__item">Tickets: <span class="book-result__count booking-ticket"><?=$number_cheap+$number_middle+$number_expansive?></span></li>
                        <li class="book-result__item">One item price: <span class="book-result__count booking-price">$20</span></li>
                        <li class="book-result__item">Total: <span class="book-result__count booking-cost">$<?=$cost?></span></li>
                    </ul>

                    <h2 class="page-heading">Choose payment method</h2>
                    <div class="payment">
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay1.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay2.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay3.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay4.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay5.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay6.png">
                        </a>
                        <a href="#" class="payment__item">
                            <img alt='' src="images/payment/pay7.png">
                        </a>
                    </div>

                    <h2 class="page-heading">Contact information</h2>
            
                    <form name='form1' id='contact-info' method='post' novalidate="" class="form contact-info">
												<input type='text' name='number' value='<?=$number?>' class="choosen-number">
												<input type='text' name='number_cheap' value='<?=$number_cheap?>' class="choosen-number--cheap">
												<input type='text' name='number_middle' value='<?=$number_middle?>' class="choosen-number--middle">
												<input type='text' name='number_expansive' value='<?=$number_expansive?>' class="choosen-number--expansive">
												<input type='text' name='cost' value='<?=$cost?>' class="choosen-cost">
												<input type='text' name='sits' value='<?=$sits?>' class="choosen-sits">


												<input type='text' name='movie' value='<?=$movie?>'>
												<input type='text' name='city' value='<?=$city?>'>
												<input type='text' name='time' value='<?=$time?>'>
												<input type='text' name='date' value='<?=$date?>'>
												<input type='text' name='cinema' value='<?=$cinema?>'>


                        <div class="contact-info__field contact-info__field-mail">
                            <input type='email' name='user-mail' placeholder='Your email' class="form__mail">
                        </div>
                        <div class="contact-info__field contact-info__field-tel">
                            <input type='tel' name='user-tel' placeholder='Phone number' class="form__mail">
                        </div>
                    </form>

                
                </div>
                
                <div class="order">
                    <a class="btn btn-md btn--warning btn--wide" onclick='next_movie();'>purchase</a>
                </div>

            </div>

        </section>
        

        <div class="clearfix"></div>

        <div class="booking-pagination">
                <a class="booking-pagination__prev" onclick='history.back();'>
                    <p class="arrow__text arrow--prev">prev step</p>
                    <span class="arrow__info">choose a sit</span>
                </a>
                <a href="#" class="booking-pagination__next hide--arrow">
                    <p class="arrow__text arrow--next">next step</p>
                    <span class="arrow__info"></span>
                </a>
        </div>
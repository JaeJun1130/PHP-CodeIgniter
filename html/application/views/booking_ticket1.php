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
        <?=$row->no?>
        <!-- Main content -->

        <section class="container">
            <div class="order-container">
                <div class="order">
                    <img class="order__images" alt='' src="images/tickets.png">
                    <p class="order__title">Thank you <br><span class="order__descript">you have successfully purchased tickets</span></p>
                </div>

                <div class="ticket">
                    <div class="ticket-position">
                        <div class="ticket__indecator indecator--pre"><div class="indecator-text pre--text">online ticket</div> </div>
                        <div class="ticket__inner">

                            <div class="ticket-secondary">
                                <span class="ticket__item">Ticket number <strong class="ticket__number"><?=$row->no?></strong></span>
                                <span class="ticket__item ticket__date">25/10/2013<?=$row->reservationday?></span>
                                <span class="ticket__item ticket__time">17:45<?=$time?></span>
                                <span class="ticket__item">Cinema: <span class="ticket__cinema">Cineworld</span></span>
                                <span class="ticket__item">Hall: <span class="ticket__hall">Visconti</span></span>
                                <span class="ticket__item ticket__price">price: <strong class="ticket__cost"><?=$cost?></strong></span>
                            </div>

                            <div class="ticket-primery">
                                <span class="ticket__item ticket__item--primery ticket__film">Film<br><strong class="ticket__movie"><?=$movie?></strong></span>
                                <span class="ticket__item ticket__item--primery">Sits: <span class="ticket__place">11F, 12F, 13F</span></span>
                            </div>


                        </div>
                        <div class="ticket__indecator indecator--post"><div class="indecator-text post--text">online ticket</div></div>
                    </div>
                </div>

                <div class="ticket-control">
                    <a href="#" class="watchlist list--download">Download</a>
                    <a href="#" class="watchlist list--print">Print</a>
                </div>

            </div>
        </section>
        
        <script type="text/javascript">
            $(document).ready(function() {
                $('.top-scroll').parent().find('.top-scroll').remove();
            });
        </script>
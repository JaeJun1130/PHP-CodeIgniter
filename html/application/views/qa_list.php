<?
  $session_no = $this->session->userdata('no');
  $session_name = $this->session->userdata('name');
?>

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
<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
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
	  .form-wrapper{
	  border-radius: 10px 10px 10px 10px / 10px 10px 10px 10px;
	  background-color:#EFEFEF;
	  margin-left:80px;
	  }
	  p{
	  font-family: 'Nanum Gothic Coding', monospace;
	  padding:20px;
	  color:gray;
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
									<h4 class="latest-text"><p class="c">Q&A</p> </h4>
									<div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li><a href="/~team17">Home</a></li>
											  <li class="active">Q&A</li>
											</ol>
										</div>
									</div>
								</div>

<!-- general -->
	<div class="general">
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
				</ul>







<section class="form4 cid-raTI7nYObn" id="form4-1">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10 col-lg-10 form-wrapper" data-form-type="formoid">            
                <div class="form-head">
					<center>
                    <h3 class="mbr-section-subtitle form-subtitle mbr-fonts-style align-center pb-3 display-4">
                        <p class="c">문의사항</p>
                    </h3>
                    <h5 class="mbr-section-title form-title mbr-fonts-style align-center display-5" style="color:gray;">
                       24시간 365일 언제든지 문의해주세요!
                    </h5>
					</center>
                </div>
				
                <div class="form1" data-form-type="formoid">
					<form class="form-horizontal m-t-30" name="form1" method="post" action="">

						<div data-form-alert="" hidden="">Thanks for filling out the form!</div>
                            <label class="form-label-outside mbr-lighter" for="form-1-firstname"></label>
                            <input type="text" class="form-control" name="name1" data-form-field="First Name" required="" id="firstname-form4-1" placeholder="<?=$session_name; ?> 님" readonly>
							<input type="hidden" class="form-control" name="name" data-form-field="First Name" required="" id="firstname-form4-1" value="<?=$session_name; ?>" readonly>
                        </div>

						<div class="form-group">
							<label><span class="help"> </span></label>
							<div class="form-inline">
							<input type="text" class="form-control" placeholder="Phone" name="tel1" size="30" maxlength="3" value="">-
							<input type="text" class="form-control" placeholder="" name="tel2" size="30" maxlength="4" value="">-
							<input type="text" class="form-control" placeholder="" name="tel3" size="30" maxlength="4" value="">
							</div>
						</div>

                        <div class="input-wrap" data-for="email">
                            <label class="form-label-outside mbr-lighter" for="form-1-email"></label>
                            <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form4-1" placeholder="Email">
                        </div>

                        <div class="form-group" data-for="message">
                            <label class="form-label-outside mbr-lighter" for="form-1-message"></label>
                            <textarea type="text" class="form-control" name="comment" rows="4" data-form-field="Message" id="message-form4-1" placeholder="Message"></textarea>
                        </div>
                    



						<div class="w3ls_footer_grid_left1_pos" style="border:0px; margin:10px; width:945px;">
								<center>
									<input type="submit" value="Submit" onClick="return confirm('제출할까요?')">

								</center>
						</div>
                    </form>
                </div>
            </div>
        </div>
</section>



								<div class="clearfix"> </div></div></div></div> 
												
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

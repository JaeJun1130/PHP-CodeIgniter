<?
  $session_no = $this->session->userdata('no');
?>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>

	<!-- usermember footer start -->
	<div class="faq">
<!-- general -->
	<div class="general_agileits_genres">
		<h4 class="latest-text w3_latest_text">내 정보</h4>
		<div class="container">
            <div class="agileits-single-top">
				<ol class="breadcrumb">
				  <li><a href="index.html">Home</a></li>
				  <li class="active">User Info</li>
				</ol>
			</div>
		</div>




<!-- usermember heade end -->		
<form name="form1" method="post" action="" enctype="multipart/form-data">
		<div class="container well">
			<center>
			
				<ol class="breadcrumb" id="detailnav">
					<li class=""><a class="change_info" href="/~team17/usermember/edit/no/<?=$session_no; ?>"><b>개인정보 변경</b></a></li>
					<li class=""><a href="/~team17/usermember/lists_book/no/<?=$session_no; ?>"><b>예매내역</b></a></li>
					<li class=""><a href="/~team17/usermember/lists_review/no/<?=$session_no; ?>"><b>내 댓글</b></a></li>	
					<li class=""><a href="/~team17/usermember/lists_qa/no/<?=$session_no; ?>"><b>내 문의</b></a></li>
					<li class=""><a href="/~team17/usermember/lists_bye/no/<?=$session_no; ?>"><b>회원탈퇴</b></a></li>
				</ol>
			</center><div style="height: 60px;" class="col-sm-2">
<b></b>
</div>

<div style="height: 60px;" class="col-sm-6">
	<b></b>
</div>
<br>

<div style="height: 40px;" class="col-sm-3"></div>
<div style="height: 40px;" class="col-sm-6">	
	<button class="checkout-button" onClick="return confirm('탈퇴할까요?')"><a href="/~team17/usermember/del/no/<?=$session_no; ?>" /> 탈퇴하기</a></button>
</div>
<div style="height: 40px;" class="col-sm-3"></div>

						
	<script>
	$(function(){
		$('.goodbye').click(function(){
			var pw=$("#edit_pw").val();
			var pw2=$("#edit_pw2").val();

			if(pw==""){
				alert("암호를 입력해주세요.");
				return false;
			}
			else if(pw != pw2) {
				alert("암호를 확인해주세요.");
				return false;
			}
			$.ajax({
				url: "/~team17/usermember/del/no/$no",
				type: "POST",
				data:{
					"pw":pw
				},
				dataType:"html",
				complete:function(xhr, textStatus) {
					var no = xhr.responseText;
					
					if(no == 1) {
						alert("탈퇴가 완료되었습니다.");
						location.href="/~team17";
					}
					else
						alert("암호가 일치하지 않습니다.");
				},
				error:function(request,status,error)
				{
					alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
				},
			});				
		});
	});
</script>	
		
		
<!-- usermember footer -->
	</div>

	</div>	
<!-- //general -->
	</div>
	</div>
</form>
<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
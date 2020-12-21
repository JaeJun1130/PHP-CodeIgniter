<?
  $session_no = $this->session->userdata('no');
  $tel1 = trim(substr($row->tel,0,3));
  $tel2 = trim(substr($row->tel,3,4));
  $tel3 = trim(substr($row->tel,7,4));
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
				</ol>
			</center><div style="height: 60px;" class="col-sm-2">
<b><input type="text" id="check_myinfo_password" class="form-control form-control-sm" value="이름" readonly></b>
</div>
<div style="height: 60px;" class="col-sm-4">
	<input type="text" name="name" value="<?=$row->name; ?>" class="form-control form-control-sm" readonly>
</div>
<div style="height: 60px;" class="col-sm-2">
	<b><input type="text" id="check_myinfo_password" class="form-control form-control-sm" value="아이디" readonly></b>
</div>
<div style="height: 60px;" class="col-sm-4">
	<input type="text" name="uid" value="<?=$row->uid; ?>" class="form-control form-control-sm" readonly>
</div>
<div style="height: 60px;" class="col-sm-2">
	<b><input type="text" class="form-control form-control-sm" value="비밀번호" readonly></b>
</div>
<div style="height: 60px;" class="col-sm-4">
	<input type="password" name="pwd" value="<?=$row->pwd; ?>" placeholder="암호를 입력하세요." class="form-control form-control-sm">
</div>
<div style="height: 60px;" class="col-sm-2">
	<b><input type="text" class="form-control form-control-sm" value="주소" readonly></b>
</div>
<div style="height: 60px;" class="col-sm-4">
	<input type="text" name="juso" value="<?=$row->juso; ?>"  class="form-control form-control-sm">
</div>
<div style="height: 60px;" class="col-sm-2">
	<b><input type="text" id="check_myinfo_password" class="form-control form-control-sm" value="연락처" readonly></b>
</div>
<div style="height: 60px;" class="col-sm-4 form-inline">
	<input type="text" name="tel1" value="<?=$tel1?>" class="form-control form-control-sm " maxlength="3" size="3">&nbsp;&nbsp; - &nbsp;&nbsp;	
		<input type="text" name="tel2" value="<?=$tel2?>" class="form-control form-control-sm " maxlength="4" size="4">&nbsp;&nbsp; - &nbsp;&nbsp;		
		<input type="text" name="tel3" value="<?=$tel3?>" class="form-control form-control-sm" maxlength="4" size="4">
<!-- <input type="text" name="tel" value="<?=$row->tel; ?>" class="form-control form-control-sm"> -->
</div>		 
<div style="height: 60px;"class="col-sm-2">
	<b><input type="text" id="check_myinfo_password" class="form-control form-control-sm" value="이메일" readonly></b>
</div>
<div style="height: 60px;" class="col-sm-4">
	<input type="text" name="email" value="<?=$row->email; ?>" class="form-control form-control-sm">
</div>

<br>

<div style="height: 40px;" class="col-sm-3"></div>
<div style="height: 40px;" class="col-sm-6">	
	<input style="width: 100%; height: 40px;" type="submit" class="btn btn-warning" value="변경하기">
</div>
<div style="height: 40px;" class="col-sm-3"></div>
		
		
		
<!-- usermember footer -->
	</div>

	</div>	
<!-- //general -->
	</div>
	</div>
</form>

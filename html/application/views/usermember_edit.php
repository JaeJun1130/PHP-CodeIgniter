<?
	//$row = (object) $row;

  $tel1 = trim(substr($row->tel,0,3));
  $tel2 = trim(substr($row->tel,3,4));
  $tel3 = trim(substr($row->tel,7,4));


  $birth1 = trim(substr($row->birth,0,4));
  $birth2 = trim(substr($row->birth,5,2));
  $birth3 = trim(substr($row->birth,8,2));

?>

<!-- <style> -->
<!-- 	@charset "utf-8"; -->
<!-- /* CSS Document */ -->
<!--  -->
<!-- html, body, form, fieldset, legend, ol, li { -->
<!-- 	margin: 0; -->
<!-- 	padding: 0; -->
<!-- 	} -->
<!--  -->
<!-- form { -->
<!--     background: #DDEDE8; -->
<!-- 	-moz-border-radius: 5px; -->
<!-- 	-webkit-border-radius: 5px; -->
<!-- 	-khtml-border-radius: 5px; -->
<!-- 	border-radius: 5px; -->
<!-- 	counter-reset: fieldsets; -->
<!-- 	padding: 20px; -->
<!-- 	width: 720px;	 -->
<!-- } -->
<!--  -->
<!-- 		 -->
<!-- form fieldset { -->
<!-- 	border: none; -->
<!-- 	margin-bottom: 10px; -->
<!-- } -->
<!-- 		 -->
<!-- form fieldset:last-of-type { -->
<!-- 	margin-bottom: 0; -->
<!-- } -->
<!-- 			 -->
<!-- form legend { -->
<!-- 	color: #384313; -->
<!-- 	font-size: 20px; -->
<!-- 	font-weight: bold; -->
<!-- 	padding-bottom: 10px; -->
<!-- 	text-shadow: 0 1px 1px #c0d576; -->
<!-- } -->
<!-- 				 -->
<!--  -->
<!-- 				 -->
<!-- form fieldset fieldset legend { -->
<!-- 	color: #111111; -->
<!-- 	font-size: 13px; -->
<!-- 	font-weight: normal; -->
<!-- 	padding-bottom: 0; -->
<!-- } -->
<!-- 			 -->
<!-- form ol li { -->
<!-- 	background: #b9cf6a; -->
<!-- 	background: rgba(255,255,255,.3); -->
<!-- 	border-color: #e3ebc3; -->
<!-- 	border-color: rgba(255,255,255,.6); -->
<!-- 	border-style: solid; -->
<!-- 	border-width: 2px; -->
<!-- 	-moz-border-radius: 5px; -->
<!-- 	-webkit-border-radius: 5px; -->
<!-- 	-khtml-border-radius: 5px; -->
<!-- 	border-radius: 5px; -->
<!-- 	line-height: 60px; -->
<!-- 	list-style: none; -->
<!-- 	padding: 5px 10px; -->
<!-- 	margin-bottom: 2px; -->
<!-- } -->
<!-- 							 -->
<!-- form ol ol li { -->
<!-- 	background: none; -->
<!-- 	border: none; -->
<!-- 	float: left; -->
<!-- } -->
<!-- 			 -->
<!-- form label { -->
<!-- 	float: left; -->
<!-- 	font-size: 16px; -->
<!-- 	width: 110px; -->
<!-- } -->
<!-- 				 -->
<!-- form fieldset fieldset label { -->
<!-- 	background:none no-repeat left 50%; -->
<!-- 	line-height: 20px; -->
<!-- 	padding: 0 0 0 30px; -->
<!-- 	width: auto; -->
<!-- } -->
<!-- 					 -->
<!-- 					 -->
<!-- form fieldset fieldset label:hover { -->
<!-- 	cursor: pointer; -->
<!-- } -->
<!-- 				 -->
<!-- form input:not([type=radio]) { -->
<!-- 	background: #ffffff; -->
<!-- 	border: none; -->
<!-- 	-moz-border-radius: 3px; -->
<!-- 	-webkit-border-radius: 3px; -->
<!-- 	-khtml-border-radius: 3px; -->
<!-- 	border-radius: 3px; -->
<!-- 	font: italic 15px �������,����,����; -->
<!-- 	outline: none; -->
<!-- 	padding: 5px; -->
<!-- 	width: 150px; -->
<!-- } -->
<!-- 					 -->
<!-- form input:not([type=submit]):focus, { -->
<!-- 	background: #eaeaea; -->
<!-- } -->
<!-- 					 -->
<!-- 				 -->
<!-- form button { -->
<!-- 	background: #384313; -->
<!-- 	border: none; -->
<!-- 	-moz-border-radius: 20px; -->
<!-- 	-webkit-border-radius: 20px; -->
<!-- 	-khtml-border-radius: 20px; -->
<!-- 	border-radius: 20px; -->
<!-- 	color: #ffffff; -->
<!-- 	display: block; -->
<!-- 	font: 16px �������,����,����; -->
<!-- 	letter-spacing: 1px; -->
<!-- 	margin: auto; -->
<!-- 	padding: 7px 25px; -->
<!-- 	text-shadow: 0 1px 1px #000000; -->
<!-- 	text-transform: uppercase; -->
<!-- } -->
<!-- 					 -->
<!-- form button:hover { -->
<!-- 	background: #1e2506; -->
<!-- 	cursor: pointer; -->
<!-- } -->
<!-- </style> -->

<form name="form1" method="post" action="" enctype="multipart/form-data" >
	<div id="content-wrapper">
		<div class="container-fluid">
			<div class="row">
	<fieldset>
	<legend>개인정보 수정</legend>
	<ol>
	  <li>
		<td>아이디</td>
		<input type="text" name="uid" value="<?=$row->uid; ?>" class="form-control form-control-sm" maxlength="20" size="20"equired autofocus>
		<? If (form_error("uid")==true) echo form_error("uid"); ?>
	  </li>

	  <li>
		<label for="pwd">비빌번호</label>
		<input type="password" name="pwd" value="<?=$row->pwd; ?>" class="form-control form-control-sm" maxlength="20" size="20"equired autofocus>
		<? If (form_error("pwd")==true) echo form_error("pwd"); ?>
	  </li>  

	   <li>
		<label for="name">이름</label>
		<input type="text" name="name" value="<?=$row->name; ?>" class="form-control form-control-sm" maxlength="20" size="20"equired autofocus>
		<? If (form_error("name")==true) echo form_error("name"); ?>
	  </li>

	   <li>
		<label for="birth">생년월일</label>
		<input type="text" name="birth_year" value="<?=$birth1?>" class="form-control form-control-sm" maxlength="4" size="4" equired autofocus>&nbsp;&nbsp;	<input type="text" name="birth_month" value="<?=$birth2?>" class="form-control form-control-sm" maxlength="2" size="2" equired autofocus>&nbsp;&nbsp;
		<input type="text" name="birth_day" value="<?=$birth3?>" class="form-control form-control-sm" maxlength="2" size="2" equired autofocus>&nbsp;
	  </li>

	  <li>
		<label for="tel">전화번호</label>
		<input type="text" name="tel1" value="<?=$tel1?>" class="form-control form-control-sm" maxlength="3" size="3">&nbsp;-&nbsp;
		<input type="text" name="tel2" value="<?=$tel2?>" class="form-control form-control-sm" maxlength="4" size="4">&nbsp;-&nbsp;
		<input type="text" name="tel3" value="<?=$tel3?>" class="form-control form-control-sm" maxlength="4" size="4">
	  </li>

	  <li>
		<label for="juso">주소</label>
		<input type="text" name="name" value="<?=$row->name; ?>" class="form-control form-control-sm" maxlength="20" size="20"equired autofocus>
	  </li>

	  <li>
		<label for="email">이메일</label>
		<input type="text" name="email" value="<?=$row->email; ?>" class="form-control form-control-sm" maxlength="50" size="20"equired autofocus>
		<? If (form_error("name")==true) echo form_error("name"); ?>
	  </li>

</ol>
	</fieldset>
			<fieldset>
				<button type="submit">저장</button>
				<button type="submit" onClick="history.back();">이전</button>
			</fieldset>
		</div>
	</div>
</div>
</form>
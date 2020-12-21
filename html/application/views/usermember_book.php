<?
  $session_no = $this->session->userdata('no');
  $session_name = $this->session->userdata('name');

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
			</center>
			<link rel="stylesheet" type="text/css" href="/~team17/team/list-css/table-style.css" />
			<table>
	<thead>
		<th style="text-align: center;">예매날짜</th>		
		<th style="text-align: center;">예매영화</th>
		<th style="text-align: center;">지점</th>
		<th style="text-align: center;">상영날짜</th>
		<th style="text-align: center;">좌석</th>
		<th style="text-align: center;">금액</th>
		
	</thead>
	<tbody>	
<?
    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no;
		$member_no=$row->member_no;
		if($member_no==$session_name){
?>
		<tr>						
			<td style='text-align: center;'><b><?=$row->startday; ?></b></td>
			<td style='text-align: center;'><img src="/~team17/team/images/poster/<?=$row->movie_pic; ?>" width="70" height="110"> &nbsp;<b><?=$row->movie_title; ?></b></td>	
			<td style='text-align: center;'><b><?=$row->area_no; ?></b></td>	
			<td style='text-align: center;'><b><?=$row->reserveday; ?></b></td>
			<td style='text-align: center;'><b><?=$row->seat_no; ?></b></td>
			<td style='text-align: center;'><b>$ <?=$row->total; ?></b></td>
			</tr>
<?
		}
	}
?>
				</tbody>
</table>	</div>
	</div>	

<br>

<div style="height: 40px;" class="col-sm-3"></div>
<div style="height: 40px;" class="col-sm-6">	
	
</div>
<div style="height: 40px;" class="col-sm-3"></div>
		
		
		
<!-- usermember footer -->
	</div>

	</div>	
<!-- //general -->
	</div>
	</div>
</form>

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
		<th width="10%" style="text-align: center;">No.</th>
		<th width="15%" style="text-align: center;">영화</th>
		<th width="60%" style="text-align: center;">댓글내용</th>
		<th width="15%" style="text-align: center;">평점</th>
		
	</thead>
	<tbody>	
<?
    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no;
		$name=$row->name;
		if($name==$session_name){
?>
		<tr>
			<td style='text-align: center;'><b><?=$row->no; ?></b></td>
			<td style='text-align: center;'><b><?=$row->movie_title; ?></b></td>		
			<td style='text-align: center;'><b><?=$row->detail; ?></b></td>
			<td style='text-align: center;'><b><?=$row->rank; ?> </b>점</td>
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

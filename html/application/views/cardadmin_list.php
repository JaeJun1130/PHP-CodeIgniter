       
		<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">&nbsp&nbsp결제내역</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/~team17/admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Reservation Status</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
				 <div class="col-12">
                        <div class="card">
                            <div class="card-body">
							<h4 class="card-title" >결제내역
								<!--<button class="btn btn-success" style="background:lightgray; border-color:lightgray; color:gray" onclick="location.href='/~team17/reserve/add'"> add </button>-->
								</h4>

                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr  style="background:#eeeeee">
											<th scope="col">번호</th>	
                                            <th scope="col">회원이름</th>
                                            <th scope="col">결제일</th>
											<th scope="col">카드번호</th>
											<th scope="col">좌석</th>
											<th scope="col">삭제</th>

                                        </tr>
                                    </thead>
										<?
										
											
	   
											foreach ($list1 as $row)                             // 연관배열 list를 row를 통해 출력한다.
											{
												$no=$row->no;                                    // 사용자번호
												$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
											// 0->직원, 1->관리자 
										?>
                                    <tbody>
									<tr>
										<td><?=$no; ?></td>
										<td><?=$row->member_name; ?></td>
										<td><?=$row->startday_date; ?></td>
										<td><?=$row->card_number; ?></td>
										<td><?=$row->seat_date; ?></td>
										<td><a href="/~team17/cardadmin/del<?=$tmp; ?> " class="btn btn-sm mycolor1" style="color:gray" onClick="return confirm('삭제할까요 ?');">삭제</a></td>
									</tr>
										<?
											}
										?>

                                    </tbody>
                                </table>
								<?=$pagination; ?>
                            </div>
                        </div>
                    </div>
				 </div>
            </div>
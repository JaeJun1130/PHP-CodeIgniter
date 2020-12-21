       
		<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">&nbsp&nbsp상영시간표</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/~team17/admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">schedule</li>
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
							<h4 class="card-title" >상영시간표 목록
								<button class="btn btn-success" style="background:lightgray; border-color:lightgray; color:gray" onclick="location.href='/~team17/time/add'"> add </button>
								</h4>
								
							</div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr  style="background:#eeeeee">
                                            <th scope="col">번호</th>
                                            <th scope="col">영화</th>
											<th scope="col">극장</th>
											<th scope="col">상영관</th>
											<th scope="col">날짜</th>
											<th scope="col">시작시간</th>
											<th scope="col">종료시간</th>
											<th scope="col" width="8%">수정/삭제</th>

                                        </tr>
                                    </thead>
										<?
										
											
	   
											foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
											{
												$no=$row->no;                                    // 사용자번호
												$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
											// 0->직원, 1->관리자 
										?>
                                    <tbody>
									<tr>
										<td><?=$no; ?></td>
										<td align="left"><?=$row->movie_title; ?></a></td>
										<td align="left"><?=$row->screen_name; ?></a></td>
										<td align="left"><?=$row->area_areaname; ?></a></td>
										<td><?=$row->day ?></a></td>
										<td><?=$row->start ?></a></td>
										<td><?=$row->end ?></a></td>
										<td><a href="/~team17/time/edit<?=$tmp; ?> " class="btn btn-sm mycolor1" style="color:gray">수정</a>/<a href="/~team17/time/del<?=$tmp; ?> " class="btn btn-sm mycolor1" style="color:gray" onClick="return confirm('삭제할까요 ?');">삭제</a></td>
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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">&nbsp&nbsp Q&A</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/~team17/admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Q&A</li>
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
								<h4 class="card-title" >고객센터
								</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr style="background:#eeeeee">
                                            <th scope="col">번호</th>
                                            <th scope="col">이름</th>
                                            <th scope="col">이메일</th>
											<th scope="col">휴대폰번호</th>
											<th scope="col">내용</th>
											<th scope="col">삭제</th>
                                        </tr>
                                    </thead>
										<?
											foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
											{
												$no=$row->no; // 사용자번호 
												$tel1 = trim(substr($row->phone,0,3));      // 전화 : 지역번호 추출
												$tel2 = trim(substr($row->phone,3,4));      // 전화 : 국번호 추출
												$tel3 = trim(substr($row->phone,7,4));      // 전화 : 번호 추출
												$phone = $tel1 . "-" . $tel2 . "-" . $tel3;       // 합치기
												$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
										?>
                                    <tbody>
									<tr>
										<td><?=$no; ?></td>
										<td><?=$row->name; ?></td>
										<td><?=$row->email; ?></td>
										<td><?=$phone; ?></td>
										<td><?=$row->comment; ?></td>

										<td>
										<a href="/~team17/qaadmin/del<?=$tmp; ?> " class="btn btn-sm mycolor1" style="color:gray" onClick="return confirm('삭제할까요 ?');">삭제</a></td>

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
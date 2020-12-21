       
		<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">&nbsp&nbsp고객</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/~team17/admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">member</li>
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
								<h4 class="card-title"  style="width:500px;" >고객목록</h4>
								<div class="input-group-append" style="width:100px">

								<button class="btn btn-success" style="background:lightgray; border-color:lightgray; color:gray" onclick="location.href='/~team17/member/add'"> add </button>
								</div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr style="background:#eeeeee">
                                            <th scope="col">번호</th>
                                            <th scope="col">아이디</th>
                                            <th scope="col">비밀번호</th>
                                            <th scope="col">이름</th>
											<th scope="col">생년월일</th>
											<th scope="col">이메일</th>
											<th scope="col">전화번호</th>
											<th scope="col">주소</th>
											<th scope="col"></th>
                                        </tr>
                                    </thead>
										<?
										
											
	   
											foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
											{
												$no=$row->no;                                    // 사용자번호
												$tel1 = trim(substr($row->tel,0,3));      // 전화 : 지역번호 추출
												$tel2 = trim(substr($row->tel,3,4));      // 전화 : 국번호 추출
												$tel3 = trim(substr($row->tel,7,4));      // 전화 : 번호 추출
												$tel = $tel1 . "-" . $tel2 . "-" . $tel3;       // 합치기
												$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
											// 0->직원, 1->관리자 
										?>
                                    <tbody>
									<tr>
										<td><?=$no; ?></td>
										<td><?=$row->uid; ?></td>
										<td><?=$row->pwd; ?></td>
										<td><?=$row->name; ?></td>
										<td><?=$row->birth; ?></td>
										<td><?=$row->email; ?></td>
										<td><?=$tel; ?></td>
										<td><?=$row->juso; ?></td>
										<td><a href="/~team17/member/edit<?=$tmp; ?> " class="btn btn-sm mycolor1" style="color:gray">수정</a>/<a href="/~team17/member/del<?=$tmp; ?> " class="btn btn-sm mycolor1" style="color:gray" onClick="return confirm('삭제할까요 ?');">삭제</a></td>
									</tr>
										<?
											}
										?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
				 </div>
            </div>
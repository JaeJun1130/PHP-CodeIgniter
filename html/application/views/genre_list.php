       
		<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">&nbsp&nbsp장르</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/~team17/admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">genre</li>
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
								<h4 class="card-title" >장르목록
								<button class="btn btn-success" style="background:lightgray; border-color:lightgray; color:gray" onclick="location.href='/~team17/genre/add'"> add </button>
								</h4>
								
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr  style="background:#eeeeee">
                                            <th scope="col" width="10%">번호</th>
                                            <th scope="col" width="80%">장르</th>
											<th scope="col" width="10%">수정/삭제</th>

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
										<td><?=$row->name; ?></td>
										<td><a href="/~team17/genre/edit<?=$tmp; ?> " class="btn btn-sm mycolor1" style="color:gray">수정</a>/<a href="/~team17/genre/del<?=$tmp; ?> " class="btn btn-sm mycolor1" style="color:gray" onClick="return confirm('삭제할까요 ?');">삭제</a></td>
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
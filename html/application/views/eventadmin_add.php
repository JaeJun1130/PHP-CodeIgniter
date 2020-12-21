<script>
		$(function() {
				$("#birth") .datetimepicker({
					locale: 'ko',
					format: 'YYYY-MM-DD',
					defaultDate: moment()
				});
		});
</script>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">&nbsp&nbsp이벤트 추가</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/~team17">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">add</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

			 <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h4 class="card-title">입력</h4>
                            <form class="form-horizontal m-t-30" name="form1" method="post" action="" enctype="multipart/form-data">
								<div class="form-group">
                                    <label>제목 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="name" name="name" maxlength="20" value="">
                                </div>
								<div class="form-group">
                                    <label>시작날짜 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="0000-00-00 형식으로 쓰세염" name="start" value=""  >
                                </div>
								<div class="form-group">
                                    <label>종료날짜 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="0000-00-00 형식으로 쓰세염" name="end" value=""  >
                                </div>
								<tr>
									<td width="20%" class="mycolor2" style="vertical-align:middle">
										대표사진
									</td>
									<td width="80%" align="left">
										<div class="form-inline">
											<input type="file" name="pic1" value="" class="form-control form-control-sm" >
										</div>
									</td>
								</tr>
								<tr>
									<td width="20%" class="mycolor2" style="vertical-align:middle">
										메인사진
									</td>
									<td width="80%" align="left">
										<div class="form-inline">
											<input type="file" name="pic2" value="" class="form-control form-control-sm" >
										</div>
									</td>
								</tr>

								<div align="center">
									<input type="submit" value="저장" class="btn btn-success">&nbsp;
								   <input  type="button" value="이전" class="btn btn-sm mycolor2" onclick="history.back();" style="width:54px; height:35px;">
								</div>
                            </form>
                        </div>

                    </div>
                </div>
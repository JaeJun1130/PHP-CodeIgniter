

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
                        <h4 class="page-title">&nbsp&nbsp영화뉴스 수정</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/~team17">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">edit</li>
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
                                    <label>뉴스제목 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="name" name="name" maxlength="50" value="<?=$row->name; ?>">
                                </div>

                                <div class="form-group">
                                    <label>업로드날짜 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="startday" name="startday" maxlength="20" value="<?=$row->startday; ?>">
                                </div>

								<div class="form-group">
                                    <label>비고 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="bigo" name="bigo" maxlength="" value="<?=$row->bigo; ?>">
                                </div>

								<tr>
								<div class="form-group">
									<label>대표사진 <span class="help"> </span></label>
									<input type="file" name="pic1" size="20" class="form-control form-control-sm"> <br>
								</div>
								<?
									if ($row->pic1)     // 이미지가 있는 경우
										echo("<img src='/~team17/news_img/$row->pic1' width='200’ class='img-fluid img-thumbnail'>");
									else                   // 이미지가 없는 경우
										echo("<img src='' width='200’ class='img-fluid img-thumbnail'>");
								?>
								</tr>

								<tr>
								<div class="form-group">
									<label>메인사진 <span class="help"> </span></label>
									<input type="file" name="pic2" size="20" class="form-control form-control-sm"> <br>
								</div>
								<?
									if ($row->pic2)     // 이미지가 있는 경우
										echo("<img src='/~team17/product_img/$row->pic2' width='200’ class='img-fluid img-thumbnail'>");
									else                   // 이미지가 없는 경우
										echo("<img src='' width='200’ class='img-fluid img-thumbnail'>");
								?>
								</tr>



								<div align="center">
									<input type="submit" value="저장" class="btn btn-success">&nbsp;
								   <input  type="button" value="이전" class="btn btn-sm mycolor2" onclick="history.back();" style="width:54px; height:35px;">
								</div>

                            </form>
                        </div>

                    </div>
                </div>
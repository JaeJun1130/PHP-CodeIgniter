

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
                        <h4 class="page-title">&nbsp&nbsp고객센터 수정</h4>
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
                            <form class="form-horizontal m-t-30" name="form1" method="post" action="">

								<div class="form-group">
                                    <label>영화 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="title" name="title" maxlength="20" value="<?=$row->title; ?>">
                                </div>

                                <div class="form-group">
                                    <label>감독 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="director" name="director" maxlength="20" value="<?=$row->director; ?>">
                                </div>

                                <div class="form-group">
                                    <label>배우 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="actor" name="actor" maxlength="20" value="<?=$row->actor; ?>">
                                </div>

                              

                               <div class="form-group">
                                    <label>구분<span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="gubun" name="gubun" value="<?=$row->gubun; ?>"  >
                                </div>

								<div class="form-group">
                                    <label>상영시간<span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="00(분)" name="runtime" value="<?=$row->runtime; ?>"  >
                                </div>

                                <div class="form-group">
                                    <label>배급 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="baegeup" name="baegeup" maxlength="20" value="<?=$row->baegeup; ?>">
                                </div>

                                <div class="form-group">
                                    <label>날짜 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="0000-00-00 형식으로 쓰세염" name="openday" maxlength="20" value="<?=$row->openday; ?>">
                                </div>

                                <div class="form-group">
                                    <label>평점 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="평점" name="rank" maxlength="20" value="<?=$row->rank; ?>">
                                </div>

								<div class="form-group">
                                    <label>줄거리 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="story" name="story" maxlength="500" value="<?=$row->story; ?>">
                                </div>

								<tr>
								<div class="form-group">
									<label>사진 <span class="help"> </span></label>
									<input type="file" name="pic" size="20" class="form-control form-control-sm"> <br>
								</div>
								<?
									if ($row->pic)     // 이미지가 있는 경우
										echo("<img src='/~team17/product_img/$row->pic' width='200’ class='img-fluid img-thumbnail'>");
									else                   // 이미지가 없는 경우
										echo("<img src='' width='200’ class='img-fluid img-thumbnail'>");
								?>
								</tr>

                                <div class="form-group">
                                    <label>동영상 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="trailer" name="trailer" maxlength="20" value="<?=$row->trailer; ?>">
                                </div>

								<div class="form-group">
                                    <label>장르<span class="help"> </span></label>
                                    <input type="hidden" name="genre_no" value="<?=set_value("genre_no"); ?> ">
										<select name="genre_no" class="form-control">
											<option value="">선택하세요.</option>
											<?
												$genre_no=set_value("genre_no");  
												foreach($list as $row1)
												{
													if($row->genre_no==$row1->no)
														echo("<option value='$row1->no' selected>$row1->name</option>");
													else
														echo("<option value='$row1->no'> $row1->name</option>");
												}
											?>
										</select>
                                </div>

								<div align="center">
									<input type="submit" value="저장" class="btn btn-success">&nbsp;
								   <input  type="button" value="이전" class="btn btn-sm mycolor2" onclick="history.back();" style="width:54px; height:35px;">
								</div>

                            </form>
                        </div>

                    </div>
                </div>
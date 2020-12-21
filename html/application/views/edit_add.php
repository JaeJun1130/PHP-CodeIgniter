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
                        <h4 class="page-title">&nbsp&nbsp상영시간표 추가</h4>
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
                            <form class="form-horizontal m-t-30" name="form1" method="post" action="">
								<div class="form-group">
                                    <label>영화<span class="help"> </span></label>
                                    <input type="hidden" name="movie_no" value="<?=set_value("movie_no"); ?> ">
										<select name="sel_movie_no" class="form-control">
											<option value="">선택하세요.</option>
											<?
												foreach($list1 as $row)
												{
													echo("<option value='$row->no'>$row->title</option>");
												}
											?>
										</select>
                                </div>
								<div class="form-group">
                                    <label>상영관<span class="help"> </span></label>
                                    <input type="hidden" name="screen_name" value="<?=set_value("screen_name"); ?> ">
										<select name="sel_screen_name" class="form-control">
											<option value="">선택하세요.</option>
											<?
												foreach($list2 as $row)
												{
													echo("<option value='$row->no'>$row->name</option>");
												}
											?>
										</select>
                                </div>
								<div class="form-group">
                                    <label>영화<span class="help"> </span></label>
                                    <input type="hidden" name="area_areaname" value="<?=set_value("area_areaname"); ?> ">
										<select name="sel_area_areaname" class="form-control">
											<option value="">선택하세요.</option>
											<?
												foreach($list3 as $row)
												{
													echo("<option value='$row->no'>$row->areaname</option>");
												}
											?>
										</select>
                                </div>


								<div class="form-group">
                                    <label>상영날짜<span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="0000-00-00" name="day" value="<?=$row->day; ?>"  >
                                </div>

								<div class="form-group">
                                    <label>시작시간<span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="" name="start" maxlength="20" value="<?=$row->start; ?>">
                                </div>
								<div class="form-group">
                                    <label>종료시간<span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="" name="end" maxlength="20" value="<?=$row->end; ?>">
                                </div>
								<div align="center">
									<input type="submit" value="저장" class="btn btn-success">&nbsp;
								   <input  type="button" value="이전" class="btn btn-sm mycolor2" onclick="history.back();" style="width:54px; height:35px;">
								</div>
                            </form>
                        </div>

                    </div>
                </div>
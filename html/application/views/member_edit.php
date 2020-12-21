<script>
		$(function() {
				$("#birth") .datetimepicker({
					locale: 'ko',
					format: 'YYYY-MM-DD',
					defaultDate: moment()
				});
		});
</script>
<?
		$tel1 = trim(substr($row->tel,0,3));
		$tel2 = trim(substr($row->tel,3,4));
		$tel3 = trim(substr($row->tel,7,4));
		?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">&nbsp&nbsp고객 수정</h4>
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
                                    <label>name <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="name" name="name" maxlength="20" value="<?=$row->name; ?>">
                                </div>
                                <div class="form-group">
                                    <label>ID <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="ID" name="uid" maxlength="20" value="<?=$row->uid; ?>">
                                </div>
								<div class="form-group">
                                    <label>password <span class="help"> </span></label>
                                    <input type="password" class="form-control" placeholder="password" name="pwd" maxlength="20" value="<?=$row->pwd; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="example-email">Email <span class="help"></span></label>
                                    <input type="email" id="example-email" name="email" class="form-control" placeholder="example@gmail.com" value="<?=$row->email; ?>">
                                </div>
								<div class="form-group">
                                    <label>생년월일 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="0000-00-00 형식으로 쓰세염" name="birth" value="<?=$row->birth; ?>"  class="form-control form-control-sm" >
                                </div>
								<div class="form-group">
                                    <label>전화번호 <span class="help"> </span></label>
									<div class="form-inline">
                                    <input type="text" class="form-control" placeholder="" name="tel1" size="3" maxlength="3" value="<?=$tel1; ?>">-
									<input type="text" class="form-control" placeholder="" name="tel2" size="4" maxlength="4" value="<?=$tel2; ?>">-
									<input type="text" class="form-control" placeholder="" name="tel3" size="4" maxlength="4" value="<?=$tel3; ?>">
									</div>
                                </div>
								<div class="form-group">
                                    <label>주소 <span class="help"> </span></label>
                                    <input type="text" class="form-control" placeholder="" name="juso" style="height:100px" value="<?=$row->juso; ?>">
                                </div>
								<div align="center">
									<input type="submit" value="저장" class="btn btn-success">&nbsp;
								   <input  type="button" value="이전" class="btn btn-sm mycolor2" onclick="history.back();" style="width:54px; height:35px;">
								</div>
                            </form>
                        </div>

                    </div>
                </div>
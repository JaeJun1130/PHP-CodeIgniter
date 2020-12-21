<?
	$tel1 = trim(substr($row->tel,0,3));
  $tel2 = trim(substr($row->tel,3,4));
  $tel3 = trim(substr($row->tel,7,4));

	$gender = $row->gender==0 ? "��" : "��";
?>

<div class="container-fluid " >
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
				<div class="row">
					<div class="col-12">
						<ol class="breadcrumb  mymargin5">
							<li class="breadcrumb-item">
								<a href="/~team12/index"><font color=blue> Dashboard</font></a>
							</li>
							<li class="breadcrumb-item active">ȸ��</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form name="form1" method="post" action="" enctype="multipart/form-data" >
		<div id="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
						<div class="row">
							<div class="col-12">
								<div class="card mb-3">
									<div class="card-header">
										<i class="fas fa-table"></i>ȸ�� ����
									</div>
									<div class align="left">
									</div>
									<div class="card-body">
										<div class="form-group mb-3">
											<label for="no">��ȣ</label>
											<div class="form-inline input-group-text">	
												<?=$row->no; ?>
											</div>
										</div>
										<div class="form-group mb-3">
												<span style="color:red;">* </span><label for="uid">���̵�</label>
												<div class="form-inline">
													<input type="text" name="uid" value="<?=$row->uid; ?>" class="form-control form-control-sm" maxlength="20" size="20">
													<? If (form_error("uid")==true) echo form_error("uid"); ?>
												</div>
											</div>
											<div class="form-group mb-3">
												<span style="color:red;">* </span><label for="pwd">��й�ȣ</label>
												<div class="form-inline">
													<input type="password" name="pwd" value="<?=$row->pwd; ?>" class="form-control form-control-sm" maxlength="20" size="20">
													<? If (form_error("pwd")==true) echo form_error("pwd"); ?>
												</div>
											</div>
											<div class="form-group mb-3">
												<span style="color:red;">* </span>
												<label for="name">�̸�</label>
												<div class="form-inline">
													<input type="text" name="name" value="<?=$row->name?>" class="form-control form-control-sm" maxlength="20" size="20">
													<? If (form_error("name")==true) echo form_error("name"); ?>
												</div>
											</div>
											<div class="form-group mb-3">
												<label for="birth">�������</label>
													<div class="form-inline">
														<input type="text" name="birth_year" value="" class="form-control form-control-sm" maxlength="4" size="4">&nbsp;��&nbsp;
														<input type="text" name="birth_month" value="" class="form-control form-control-sm" maxlength="2" size="2">&nbsp;��&nbsp;
														<input type="text" name="birth_day" value="" class="form-control form-control-sm" maxlength="2" size="2">&nbsp;��
													</div>
											</div>
											<div class="form-group mb-3">
												<label for="gender">����</label>
													<div class="form-inline input-group-text">
														<? if ($row->gender==0) { ?>
															<input type="radio" name="gender" value="0" checked> ��&nbsp;&nbsp;
															<input type="radio" name="gender" value="1" > ��
														<? } else { ?>
															<input type="radio" name="gender" value="0"> ��&nbsp;&nbsp;
															<input type="radio" name="gender" value="1" checked> ��
														<? } ?>
													</div>
											</div>
											<div class="form-group mb-3">
												<label for="tel">��ȭ��ȣ</label>
													<div class="form-inline">
														<input type="text" name="tel1" value="<?=$tel1?>" class="form-control form-control-sm" maxlength="3" size="3">&nbsp;-&nbsp;
														<input type="text" name="tel2" value="<?=$tel2?>" class="form-control form-control-sm" maxlength="4" size="4">&nbsp;-&nbsp;
														<input type="text" name="tel3" value="<?=$tel3?>" class="form-control form-control-sm" maxlength="4" size="4">
													</div>
											</div>
											<div class="form-group mb-3">
												<label for="juso">�ּ�</label>
												<div class="form-inline">
													<input type="text" name="juso" value="<?=$row->juso?>" class="form-control form-control-sm" maxlength="50" size="50">
												</div>
											</div>
											<div class="form-group mb-3">
												<label for="email">�̸���</label>
												<div class="form-inline">
													<input type="text" name="email" value="<?=$row->email?>" class="form-control form-control-sm" maxlength="50" size="50">
												</div>
											</div>
									</div>
								</div>  
							</div>
							<div class="col-3" >
							</div>
							<div class="col-3" >
								<input type="submit" value="����" class="btn btn-secondary btn-block text-uppercase">
							</div>
							<div class="col-3" >
								<input type="button" value="����" class="btn btn-secondary btn-block text-uppercase" onClick="history.back();">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	
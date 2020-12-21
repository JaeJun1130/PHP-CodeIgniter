
	<script>
	
    function find_text()
    {                                   // 값이 있는 경우, text1 값 전달
		form1.action="/~team17/graph/lists/text1/" + form1.text1.value +"/text2/" + form1.text2.value;
        form1.submit();
    }
	

	$(function() {
		$('#text1') .datetimepicker({
			locale: 'ko',
			format: 'YYYY-MM-DD',
			defaultDate: moment()
		});
		$('#text2') .datetimepicker({
			locale: 'ko',
			format: 'YYYY-MM-DD',
			defaultDate: moment()
		});

		$("#text1") .on("dp.change", function(e){
			find_text();

		});
		$("#text2") .on("dp.change", function(e){
			find_text();
		});
	});
	</script>
	<style>
	.card{
	margin-left:400px;
	}
	</style>



            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">&nbsp&nbsp통계</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="/~team17/admin">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">chart</li>
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
                        <div class="card">
                            <div class="card-body">
							<button class="btn btn-success" style="background:lightgray; border-color:lightgray; color:gray; margin-bottom:10px;" onclick="location.href='/~team17/graph1'"> 예매순위 보기 </button>

								<h4 class="card-title" >평점별 영화순위
								</h4>
                            </div>
			<?
				$str_label = "" ;
				$str_data = "" ;
				foreach ($list as $row)
				{
					$str_label .= " '$row->title' , ";
					$str_data .= $row->rank . ',' ;
				}
/*
				$str_label1 = "" ;
				$str_data1 = "" ;
				foreach ($list1 as $row1)
				{
					$str_label1 .= " '$row1->moive_title' , ";
					$str_data1 .= $row1->count . ',' ;
				}*/
			?>

			<script src = "/~team17/my/js/Chart.js"></script>
			<script src = "/~team17/my/js/utils.js"></script>

			<br><br>

			<style>
				canvas {
					-moz-user-select: none;
					-webkit-user-select: none;
					-ms-user-select: none;
					}
			</style>

			<div id="canvas-holder" style="width:60%">
				<canvas id = "chart-area"></canvas>
			</div>

			<script>
			var config = {
					type: "bar",
					data: {
						datasets: [{
							data: [ <?=$str_data; ?> ],
								backgroundColor: [
								window.chartColors.red,
								window.chartColors.orange,
								window.chartColors.yellow,
								window.chartColors.green,
								window.chartColors.blue,
								window.chartColors.gray,
								window.chartColors.purple,
								window.chartColors.red,
								window.chartColors.orange,
								window.chartColors.yellow,
								"rgba(255, 99, 132, 0, 7)",
								"rgba(255, 159, 64, 0, 7)",
								"rgba(255, 205, 86, 0, 7)",
								"rgba(75, 192, 192, 0, 7)",
								"rgba(153, 102, 255, 0, 7)",
								"rgba(201, 203, 207, 0, 7)",
								"rgba(54, 162, 235, 0, 7)",
								"rgba(255, 99, 132, 0, 7)",
								"rgba(255, 159, 64, 0, 7)",
								"rgba(255, 205, 86, 0, 7)",
								],
								label: "평점"
						}],
						labels: [ <?=$str_label; ?> ]
					},
					options: {
						responsive: true,
						legend: {
							position: 'top',
						},
						title: {
							display: false,
							text: "평점별 순위"
						},
						animation: {
							animateScale: true,
							animateRotate: true
						}
					}
				};


				
/*
				var config1 = {
					 type: 'doughnut',
					data: {
						datasets: [{
							data: [ <?=$str_data; ?> ],
								backgroundColor: [
								window.chartColors.red,
								window.chartColors.orange,
								window.chartColors.yellow,
								window.chartColors.green,
								window.chartColors.blue,
								window.chartColors.gray,
								window.chartColors.purple,
								window.chartColors.red,
								window.chartColors.orange,
								window.chartColors.yellow,
								"rgba(255, 99, 132, 0.2)",
								"rgba(255, 159, 64, 0, 7)",
								"rgba(255, 205, 86, 0, 7)",
								"rgba(75, 192, 192, 0, 7)",
								"rgba(153, 102, 255, 0, 7)",
								"rgba(201, 203, 207, 0, 7)",
								"rgba(54, 162, 235, 0, 7)",
								"rgba(255, 99, 132, 0, 7)",
								"rgba(255, 159, 64, 0, 7)",
								"rgba(255, 205, 86, 0, 7)",
								],
								label: "Dataset 1"
						}],
						labels: [ <?=$str_label; ?> ]
					},
					options: {
						responsive: true,
						legend: {
							position: 'top',
						},
						title: {
							display: false,
							text: "구분별 분포도"
						},
						animation: {
							animateScale: true,
							animateRotate: true
						}
					}
				};*/


				window.onload = function() {
					
					var ctx = document.getElementById('chart-area').getContext('2d');
					window.myDoughnut = new Chart(ctx, config);
				};

				</script>




				
					 </div>
				</div>
			 </div>
		</div>

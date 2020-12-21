<?
class Booking extends CI_Controller {
  // movie클래스 선언
  function __construct()                           // 클래스생성할 때 초기설정
  {
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("booking_m");    // 모델 movie_m 연결
    $this->load->helper(array("url","date"));
    $this->load->library('pagination');
    $this->load->library("upload");
	$this->load->library('image_lib');
  }
  public function index()                            // 제일 먼저 실행되는 함수
  {
    $this->lists();                                        // list 함수 호출
  }
  public function lists()
  {
    $uri_array=$this->uri->uri_to_assoc(3);
    $no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		$no1=array_key_exists("no1",$uri_array) ? $uri_array["no1"] : "" ;
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
		$data["no"]=$no;
		$data["no1"]=$no1;
    if ($text1=="")
      $base_url = "/booking/lists/no/$no";                        // $page_segment = 4;
    else
      $base_url = "/booking/lists/no/$no/text1/$text1";    // $page_segment = 6;
    $page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    $base_url="/~team17" .$base_url;

    $config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->booking_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수

		$data["no"]=$no;
		$data["movie_area"]=$this->input->post("movie_area",true);
		$data["movie_time"]=$this->input->post("movie_time",true);
		
    $data["text1"]=$text1;
    $data["list"]=$this->booking_m->getlisttt();   // 해당페이지 자료읽기
    $data["list2"]=$this->booking_m->time_list($no1);   // 해당페이지 자료읽기
	//$data["row"]=$this->booking_m->getrow2($no);
    $data["area_list"]=$this->booking_m->area_list($no);

	if($this->session->userdata('uid') != null){
		$this->load->view("main_header");
		$this->load->view("booking_list",$data,$start,$limit);    // 입력화면 표시
		$this->load->view("main_footer");
	}
	else{
		redirect("/~team17/booking/login");
	}
  }
    public function lists1()
  {
    $uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if ($text1=="")
      $base_url = "/booking/lists/page";                        // $page_segment = 4;
    else
      $base_url = "/booking/lists/text1/$text1/page";    // $page_segment = 6;
    $page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    $base_url="/~team17" .$base_url;

    $config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->booking_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수

    $data["text1"]=$text1;
    $data["list"]=$this->booking_m->getlist($text1,$start,$limit);   // 해당페이지 자료읽기
    $this->load->view("main_header");
    $this->load->view("booking_list1",$data,$start,$limit);    // 입력화면 표시
    $this->load->view("main_footer");
  }
    public function login()
	{
		$this->load->view("main_header");							// 상단 출력
		$this->load->view("main_login");			// reservation_list에 자료전달
		$this->load->view("main_footer");							// 하단 출력
	}

  public function seat()
	{
			$no = $this->input->post("movie_no",true);
			$data['movie_no']=$this->input->post("movie_no",true);
			$data['movie_date']=$this->input->post("movie_date",true);
			$data['movie_area']=$this->input->post("movie_area",true);
			$data['movie_time']=$this->input->post("movie_time",true);
			$data['movie_title']=$this->input->post("movie_title",true);
			$data['movie_sits']=$this->input->post("movie_sits",true);
			$data['movie_total']=$this->input->post("movie_total",true);
			$data['movie_counter']=$this->input->post("movie_counter",true);

			 $data["list"]=$this->booking_m->getlistt2($no);

//		$choosen_movie=$this->input->post("choosen_movie",true);
//		$choosen_city=$this->input->post("choosen_city",true);
//		$choosen_date=$this->input->post("choosen_date",true);
//		$choosen_cinema=$this->input->post("choosen_cinema",true);
//		$choosen_time=$this->input->post("choosen_time",true);
//
//		$data["list"] = $this->reservation_m->getseat();
//
//		$data['movie']=$choosen_movie;
//		$data['city']=$choosen_city;
//		$data['date']=$choosen_date;
//		$data['cinema']=$choosen_cinema;
//		$data['time']=$choosen_time;

		$this->load->view("main_header");							// 상단 출력
		$this->load->view("booking_seat",$data);			// reservation_list에 자료전달
		$this->load->view("main_footer");							// 하단 출력
	}

	
  public function bookinginfo()
	{
			$data['movie_no']=$this->input->post("movie_no",true);
			$data['movie_date']=$this->input->post("movie_date",true);
			$data['movie_area']=$this->input->post("movie_area",true);
			$data['movie_time']=$this->input->post("movie_time",true);
			$data['movie_title']=$this->input->post("movie_title",true);
			$data['movie_sits']=$this->input->post("movie_sits",true);
			$data['movie_total']=$this->input->post("movie_total",true);
			$data['movie_counter']=$this->input->post("movie_counter",true);

		$this->load->view("main_header");							// 상단 출력
		$this->load->view("booking_info",$data);			// reservation_list에 자료전달
		$this->load->view("main_footer");							// 하단 출력
	}

  public function bookingpay()
	{
			$data['movie_no']=$this->input->post("movie_no",true);
			$data['movie_date']=$this->input->post("movie_date",true);
			$data['movie_area']=$this->input->post("movie_area",true);
			$data['movie_time']=$this->input->post("movie_time",true);

			$data['movie_sits']=$this->input->post("movie_sits",true);
			$data['movie_total']=$this->input->post("movie_total",true);
			$data['movie_counter']=$this->input->post("movie_counter",true);

		$this->load->view("main_header");							// 상단 출력
		$this->load->view("booking_pay",$data);			// reservation_list에 자료전달
		$this->load->view("main_footer");							// 하단 출력
	}

	public function purchase()
	{
		$data['movie']=$this->input->post("movie",true);
		$data['city']=$this->input->post("city",true);
		$data['date']=$this->input->post("date",true);
		$data['cinema']=$this->input->post("cinema",true);
		$data['time']=$this->input->post("time",true);

		$data['number']=$this->input->post("choosen-number",true);
		$data['number_cheap']=$this->input->post("choosen-number--cheap",true);
		$data['number_middle']=$this->input->post("choosen-number--middle",true);
		$data['number_expansive']=$this->input->post("choosen-number--expansive",true);
		$data['cost']=$this->input->post("choosen-cost",true);
		$data['sits']=$this->input->post("choosen-sits",true);


		$this->load->view("main_header");							// 상단 출력
		$this->load->view("booking_purchase1", $data);			// reservation_list에 자료전달
		$this->load->view("main_footer");							// 하단 출력
	}
	public function ticket()
	{
		$text="";

		$date=$this->input->post("date",true);
		$time=$this->input->post("time",true);


		$data['movie']=$this->input->post("movie",true);
		$data['city']=$this->input->post("city",true);
		$data['date']=$date;
		$data['cinema']=$this->input->post("cinema",true);
		$data['time']=$time;

		$data['number']=$this->input->post("number",true);
		$data['number_cheap']=$this->input->post("number_cheap",true);
		$data['number_middle']=$this->input->post("number_middle",true);
		$data['number_expansive']=$this->input->post("number_expansive",true);
		$data['cost']=$this->input->post("cost",true);
		$data['sits']=$this->input->post("sits",true);

		$time1=$this->timetable_m->gettime($time);
		$time_no=$time1->no;


		$row=array(
				"timetable_no" => $time_no,
				"area_no" => "",
				"screening_no" => "",
				"coupon_no" => "",
				"seat_no" => "",
				"reservationday" => $date
			);
		$insert_id=$this->reservation_m->insert($row);

		$data['row']=$this->reservation_m->getid($insert_id);


		$this->load->view("main_header");							// 상단 출력
		$this->load->view("booking_ticket1", $data);			// reservation_list에 자료전달
		$this->load->view("main_footer");							// 하단 출력
	}
  public  function view()
  {
    $uri_array=$this->uri->uri_to_assoc(3);
    $no=array_key_exists("no",$uri_array) ? 
	$uri_array["no"] : "" ;
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
    $page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

    $data["text1"]=$text1;
    $data["page"]=$page;
    $data["row"] = $this->booking_m->getrow2($no);

    $this->load->view("main_header");
    $this->load->view("booking_list",$data);
    $this->load->view("main_footer");                      // 하단 출력
  }
public function del()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$this->booking_m->deleterow($no);
			redirect("/~team17/booking/lists" . $text1 . $page);            // 목록화면으로 돌아가기
		}
		public function add()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			if (!$_POST ) // 목록화면의 추가버튼 클릭한 경우
			{

				$this->load->view("main_header");
				$this->load->view("main_center");    // 입력화면 표시
				$this->load->view("main_footer");
			}
			 else              // 입력화면의 저장버튼 클릭한 경우
			 {
				$data=array(
				    'movie_no' => $this->input->post("movie_no",true),
				    'reserveday' => $this->input->post("movie_date",true),
				    'area_no' => $this->input->post("movie_area",true),
					'timetable_no' => $this->input->post("movie_time",true),
					'seat_no' => $this->input->post("movie_sits",true),
					'total' => $this->input->post("movie_total",true),
					'titck' => $this->input->post("movie_counter",true),
				    'member_no' => $this->input->post("movie_id",true),
					'startday' => $this->input->post("movie_startday",true)
				);

				$data1=array(
				    'member_name' => $this->input->post("movie_id",true),
				    'startday_date' => $this->input->post("movie_startday",true),
				    'card_number' => $this->input->post("card_number",true),
					'card_company' => $this->input->post("card_company",true),
					'card_cvc' => $this->input->post("card_cvc",true),
					'card_pw' => $this->input->post("card_pw",true),
					'seat_date' => $this->input->post("movie_sits",true)
				);

				

				 $result = $this->booking_m->insertrow($data);
				 $result = $this->booking_m->insertrow1($data1); 

				redirect("/~team17/booking/ok". $text1. $page);    //   목록화면으로 이동.
			 }
		 }

		 public function edit()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

		
			$this->load->library("form_validation");
			if (!$_POST) // 목록화면의 추가버튼 클릭한 경우
			{
				$data["list"] = $this->booking_m->getlist_genre();

				$this->load->view("main_header");
				$data["row"]=$this->booking_m->getrow($no);
				$this->load->view("booking_edit",$data);    // 입력화면 표시
				$this->load->view("main_footer");
			}
			 else              // 입력화면의 저장버튼 클릭한 경우
			 {
				$data=array(
				    'title' => $this->input->post("title",true),
				    'director' => $this->input->post("director",true),
				    'actor' => $this->input->post("actor",true),
					'genre_no' => $this->input->post("genre_no",true),
					'gubun' => $this->input->post("gubun",true),
					'runtime' => $this->input->post("runtime",true),
					'baegeup' => $this->input->post("baegeup",true),
				    'openday' => $this->input->post("openday",true),
					'rank' => $this->input->post("rank",true),
					'story' => $this->input->post("story",true),
					'trailer' => $this->input->post("trailer",true)
				);
				$picname = $this->call_upload();
				if($picname) $data["pic"] = $picname;

				    $result = $this->booking_m->updaterow($data,$no);
				 redirect("/~team17/booking/lists/". $text1. $page);    //   목록화면으로 이동.
			 }
		 }

	public function call_upload()
		{
			$config['upload_path']	= './poster';
			$config['allowed_types']	= 'gif|jpg|png'; 
			$config['overwrite']	= TRUE; 
			$config['max_size'] = 10000000;
			$config['max_width'] = 10000;
			$config['max_height'] = 10000;
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('pic')) 
				$picname="";
			else
			{
				$picname=$this->upload->data("file_name");

				$config['image_library'] = 'gd2';
				$config['source_image'] = './poster/' . $picname;
				$config['thumb_marker'] = '';
				$config['new_image'] = './poster/thumb';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 200;
				$config['height'] = 150;

				$this->image_lib->initialize($config);

				$this->image_lib->resize();
			}
			return $picname;
		}
			public function ok(){
		    $this->load->view("main_header");
			$this->load->view("booking_ok");
			$this->load->view("main_footer"); 
	}


}
?>
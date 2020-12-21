<?
    class Time extends CI_Controller {       // time클래스 선언
        function __construct()                           // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database();                     // 데이터베이스 연결
            $this->load->model("time_m");    // 모델 time_m 연결
			$this->load->helper(array("url", "date"));    //  helper 선언
			$this->load->library("pagination");
			date_default_timezone_set("Asia/Seoul");         // 지역설정




        }
        public function index()                            // 제일 먼저 실행되는 함수
        {
            $this->lists();                                        // list 함수 호출
        }
        public function lists()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : date("Y-m-d") ;

			$base_url = "/time/lists/text1/$text1/page";    // $page_segment = 6;
			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
			$base_url = "/~team17" . $base_url;


			$config["per_page"]	 = 10;  // 페이지당 표시할 line 수
			$config["total_rows"] = $this->time_m->rowcount($text1);  // 전체 레코드개수 구하기
			$config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
			$config["base_url"]	 = $base_url;                // 기본 URL
			$this->pagination->initialize($config);           // pagination 설정 적용

			$data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
			$data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

			$start=$data["page"];                 // n페이지 : 시작위치
			$limit=$config["per_page"];        // 페이지 당 라인수

			
			$data["text1"]=$text1;                                      
            $data["list"]=$this->time_m->getlist($text1,$start,$limit);   // 해당페이지 자료읽기
 

            $this->load->view("admin_header");                    // 상단출력(메뉴)
            $this->load->view("time_list",$data);           // time_list에 자료전달
            $this->load->view("admin_footer");                      // 하단 출력 
        }
		public function view()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
			$page = array_key_exists("page",$uri_array) ? 
			urldecode($uri_array["page"]) : "" ;



			$data["text1"]=$text1;
			$data["page"] = $page;
			$data["row"] = $this->time_m->getrow($no);

			$this->load->view("admin_header");                    // 상단출력(메뉴)
            $this->load->view("time_view",$data);           // time_list에 자료전달
            $this->load->view("admin_footer");                      // 하단 출력 
		}
		public function del()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$this->time_m->deleterow($no);
			redirect("/~team17/time/lists" . $text1 . $page);            // 목록화면으로 돌아가기
		}
		public function add()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$this->load->library("form_validation");

			$this->form_validation->set_rules("day","상영날짜","required");
			$this->form_validation->set_rules("start","시작시간","required");
			$this->form_validation->set_rules("end","종료시간","required");

			
			if ($this->form_validation->run()==FALSE ) // 목록화면의 추가버튼 클릭한 경우
			{

				$data["list1"] = $this->time_m->getlist_movie();
				$data["list2"] = $this->time_m->getlist_screen();
				$data["list3"] = $this->time_m->getlist_area();

				$this->load->view("admin_header");
				$this->load->view("time_add",$data);    // 입력화면 표시
				$this->load->view("admin_footer");
			}
			 else              // 입력화면의 저장버튼 클릭한 경우
			 {
				$data = array(
				"movie_no"	 => $this->input->post("movie_no",TRUE),
				"screen_no"	 => $this->input->post("screen_no",TRUE),
				"area_no"	 => $this->input->post("area_no",TRUE),
				"day"	 => $this->input->post("day",TRUE),
				"start"	 => $this->input->post("start",TRUE),
				"end"	 => $this->input->post("end",TRUE)

				);


				 $result = $this->time_m->insertrow($data); 

				 redirect("/~team17/time/lists" . $text1 . $page);    //   목록화면으로 이동.
			 }
		 }

		 public function edit()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$this->load->library("form_validation");

			$this->form_validation->set_rules("day","상영날짜","required");
			$this->form_validation->set_rules("start","시작시간","required");
			$this->form_validation->set_rules("end","종료시간","required");



			if ($this->form_validation->run()==FALSE ) // 목록화면의 추가버튼 클릭한 경우
			{

				$data["list1"] = $this->time_m->getlist_movie();
				$data["list2"] = $this->time_m->getlist_screen();
				$data["list3"] = $this->time_m->getlist_area();

				$this->load->view("admin_header");
				$data["row"]=$this->time_m->getrow($no);
				$this->load->view("time_edit",$data);    // 입력화면 표시
				$this->load->view("admin_footer");
			}
			 else              // 입력화면의 저장버튼 클릭한 경우
			 {
				$data = array(
				"movie_no"	 => $this->input->post("movie_no",TRUE),
				"screen_no"	 => $this->input->post("screen_no",TRUE),
				"area_no"	 => $this->input->post("area_no",TRUE),
				"day"	 => $this->input->post("day",TRUE),
				"start"	 => $this->input->post("start",TRUE),
				"end"	 => $this->input->post("end",TRUE)
				);


				 $result = $this->time_m->updaterow($data,$no);


				 redirect("/~team17/time/lists/". $text1. $page);    //   목록화면으로 이동.
			 }
		 }






	}
?>

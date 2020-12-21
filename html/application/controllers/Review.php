<?
    class Review extends CI_Controller { // login클래스 선언
        function __construct() // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database(); // 데이터베이스 연결
            $this->load->model("review_m"); // 모델 login_m 연결
			$this->load->model("movie_m");
         $this->load->helper(array("url", "date"));
        }
        public function index() // 제일 먼저 실행되는 함수
        {
        }

		public function add()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");

			if (!$_POST ) // 목록화면의 추가버튼 클릭한 경우
			{
				//$this->load->view("main_header");
				//$this->load->view("movie_view");    // 입력화면 표시
				//$this->load->view("main_footer");
			}
			 else              // 입력화면의 저장버튼 클릭한 경우
			 {
				$data=array(
				    'name' => $this->input->post("name",true),
					'rank' => $this->input->post("rank",true),
					'detail' => $this->input->post("detail",true),
					'movie_no' => $this->input->post("movie_no",true)
				);
				 $result = $this->review_m->insertrow($data); 



				   // $this->load->view("main_header");
					//$this->load->view("movie_view",$data,$data1);
					//$this->load->view("main_footer");    //   목록화면으로 이동.   //   목록화면으로 이동.
				
				redirect('/~team17/movie/lists');    //   목록화면으로 이동.
			 }
		 }

    }
?>
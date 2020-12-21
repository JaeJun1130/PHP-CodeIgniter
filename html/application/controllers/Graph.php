<?
    class Graph extends CI_Controller {       // graph클래스 선언
        function __construct()                           // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database();                     // 데이터베이스 연결
            $this->load->model("graph_m");    // 모델 graph_m 연결
			$this->load->helper(array("url", "date"));    //  helper 선언
			date_default_timezone_set("Asia/Seoul");         // 지역설정




        }
        public function index()                            // 제일 먼저 실행되는 함수
        {
            $this->lists();                                        // list 함수 호출
        }
        public function lists()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : date("Y-m-d",strtotime("-1 month"));        // 1달 전 
			$text2 = array_key_exists("text2",$uri_array) ? urldecode($uri_array["text2"]) : date("Y-m-d");


			//$base_url = "/~sale37/graph/lists/text1/$text1/text2/$text2/page";
    // $page_segment = 6;



			$data["rowcount"] = $this->graph_m->rowcount($text1,$text2);
			//$data["rowcount1"] = $this->graph_m->rowcount1($text1,$text2);
			$data["text1"]=$text1;  
			$data["text2"]=$text2;
            $data["list"]=$this->graph_m->getlist($text1,$text2);   // 해당페이지 자료읽기
			//$data["list1"]=$this->graph_m->getlist1();   // 해당페이지 자료읽기
			//$data["list2"]=$this->graph_m->getlist2($text1,$text2);   // 해당페이지 자료읽기
 
 

            $this->load->view("admin_header");                    // 상단출력(메뉴)
            $this->load->view("graph_list",$data);           // graph_list에 자료전달
            $this->load->view("admin_footer");                      // 하단 출력 
        }

	}
?>

<?
    class Qa extends CI_Controller {       // Member클래스 선언
        function __construct()                           // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database();                     // 데이터베이스 연결
            $this->load->model("qa_m");    // 모델 Member_m 연결
			$this->load->helper(array("url", "date"));    //  helper 선언
			$this->load->library("pagination");
			$this->load->library("upload");
			$this->load->library('image_lib');


        }
        public function index()                            // 제일 먼저 실행되는 함수
        {
            $this->add();                                        // list 함수 호출
        }
        public function lists()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

			if ($text1=="") 
				$base_url = "/qa/lists/page";                        // $page_segment = 4;
			else 
				$base_url = "/qa/lists/text1/$text1/page";    // $page_segment = 6;
			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;

			$base_url = "/~team17" . $base_url;


			$config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
			$config["total_rows"] = $this->qa_m->rowcount($text1);  // 전체 레코드개수 구하기
			$config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
			$config["base_url"]	 = $base_url;                // 기본 URL
			$this->pagination->initialize($config);           // pagination 설정 적용

			$data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
			$data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

			$start=$data["page"];                 // n페이지 : 시작위치
			$limit=$config["per_page"];        // 페이지 당 라인수

			
			$data["text1"]=$text1;                                      
            $data["list"]=$this->qa_m->getlist($text1,$start,$limit);   // 해당페이지 자료읽기
 

            $this->load->view("main_header");                    // 상단출력(메뉴)
            $this->load->view("qa_list",$data);           //		_list에 자료전달
            $this->load->view("main_footer");                      // 하단 출력 
        }
  public  function view()
  {
    $uri_array=$this->uri->uri_to_assoc(3);
    $no=array_key_exists("no",$uri_array) ? 
	$uri_array["no"] : "" ;
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
    $page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

	 if ($text1=="")
      $base_url = "/qa/lists/page";                        // $page_segment = 4;
    else
      $base_url = "/qa/lists/text1/$text1/page";    // $page_segment = 6;
    $page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    $base_url="/~team17" .$base_url;

    $config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->qa_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];

    $data["text1"]=$text1;
    $data["page"]=$page;
    $data["row"] = $this->qa_m->getrow($no);
	$data["list"]=$this->qa_m->getlist($text1,0,10); 

    $this->load->view("main_header");
    $this->load->view("qa_view",$data);
    $this->load->view("main_footer");                      // 하단 출력
  }
  public function add()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			if (!$_POST ) // 목록화면의 추가버튼 클릭한 경우
			{
				
				$this->load->view("main_header");
				$this->load->view("qa_list.php");    // 입력화면 표시
				$this->load->view("main_footer");
			}
			 else              // 입력화면의 저장버튼 클릭한 경우
			 {

				$tel1 = $this->input->post("tel1",true);
				$tel2 = $this->input->post("tel2",true);
				$tel3 = $this->input->post("tel3",true);
				$phone = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3); 
				$data=array(
				    'name' => $this->input->post("name",true),
				    'email' => $this->input->post("email",true),
				    'phone' => $phone,
					'comment' => $this->input->post("comment",true)

				);

				 $result = $this->qa_m->insertrow($data); 

				redirect("/~team17/qa/ok/". $text1 .$page);    //   목록화면으로 이동.
			 }
		 }
	public function ok(){
		    $this->load->view("main_header");
			$this->load->view("qa_ok");
			$this->load->view("main_footer"); 
	}



	}
?>

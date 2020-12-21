<?
class Movie extends CI_Controller {
  // movie클래스 선언
  function __construct()                           // 클래스생성할 때 초기설정
  {
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("movie_m");    // 모델 movie_m 연결
    $this->load->helper(array("url","date"));
    $this->load->library('pagination');
    $this->load->library('upload');
  }
  public function index()                            // 제일 먼저 실행되는 함수
  {
    $this->lists();                                        // list 함수 호출
  }
  public function lists()
  {
    $uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if ($text1=="")
      $base_url = "/movie/lists/page";                        // $page_segment = 4;
    else
      $base_url = "/movie/lists/text1/$text1/page";    // $page_segment = 6;
    $page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    $base_url="/~team17" .$base_url;

    $config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->movie_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수

    $data["text1"]=$text1;
    $data["list"]=$this->movie_m->getlist($text1,0,10);   // 해당페이지 자료읽기
	$data["list1"]=$this->movie_m->getlist_p();
	$data["list2"]=$this->movie_m->getlist_r();
//	$data["list3"]=$this->movie_m->getlist($text1,1,3);
//	$data["list4"]=$this->movie_m->getlist($text1,4,5);
//	$data["list5"]=$this->movie_m->getlist($text1,6,7);
//	$data["list6"]=$this->movie_m->getlist($text1,8,9);
//	$data["list7"]=$this->movie_m->getlist($text1,9,10);
	
    $this->load->view("main_header");
    $this->load->view("movie_list",$data);    // 입력화면 표시
    $this->load->view("main_footer");
  }
public function lists1()
  {
    $uri_array=$this->uri->uri_to_assoc(3);
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if ($text1=="")
      $base_url = "/movie/lists/page";                        // $page_segment = 4;
    else
      $base_url = "/movie/lists/text1/$text1/page";    // $page_segment = 6;
    $page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    $base_url="/~team17" .$base_url;

    $config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->movie_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수

    $data["text1"]=$text1;
   
	$data["list"]=$this->movie_m->getlist_t();

    $this->load->view("main_header");
    $this->load->view("movie_trailer",$data);    // 입력화면 표시
    $this->load->view("main_footer");
  }

  public  function view()
  {
    $uri_array=$this->uri->uri_to_assoc(3);
    $no=array_key_exists("no",$uri_array) ? 
	$uri_array["no"] : "" ;
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
    $page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

	 if ($text1=="")
      $base_url = "/movie/lists/page";                        // $page_segment = 4;
    else
      $base_url = "/movie/lists/text1/$text1/page";    // $page_segment = 6;
    $page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    $base_url="/~team17" .$base_url;

    $config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->movie_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];

    $data["text1"]=$text1;
    $data["page"]=$page;
    $data["row"] = $this->movie_m->getrow($no);
	$data["list"]=$this->movie_m->getlist($text1,0,10);
	$data["list2"]=$this->movie_m->getlist_review($no);
	$data["list3"]=$this->movie_m->getlist_except($no);

    $this->load->view("main_header");
    $this->load->view("movie_view",$data);
    $this->load->view("main_footer");                      // 하단 출력
  }
  public  function reserve()
  {
    $uri_array=$this->uri->uri_to_assoc(3);
    $no=array_key_exists("no",$uri_array) ? 
	$uri_array["no"] : "" ;
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
    $page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

	 if ($text1=="")
      $base_url = "/movie/lists/page";                        // $page_segment = 4;
    else
      $base_url = "/movie/lists/text1/$text1/page";    // $page_segment = 6;
    $page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    $base_url="/~team17" .$base_url;

    $config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->movie_m->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];

    $data["text1"]=$text1;
    $data["page"]=$page;
    $data["row"] = $this->movie_m->getrow($no);
	$data["list"]=$this->movie_m->getlist($text1,0,10); 

    $this->load->view("main_header");
    $this->load->view("reserve_list",$data);
    $this->load->view("main_footer");                      // 하단 출력
  }
}
  ?>
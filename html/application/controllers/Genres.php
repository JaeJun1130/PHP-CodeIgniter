<?
class Genres extends CI_Controller {
  // jepum클래스 선언
  function __construct()                           // 클래스생성할 때 초기설정
  {
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    //$this->load->model("genres_m");    // 모델 jepum_m 연결
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
            $this->load->view("main_header");                    // 상단출력(메뉴)
            $this->load->view("genres_list");           // member_list에 자료전달
            $this->load->view("main_footer");                      // 하단 출력 
        }
}
  ?>
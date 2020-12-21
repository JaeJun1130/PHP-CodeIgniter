<?
class Event_admin extends CI_Controller {
  // movie클래스 선언
  function __construct()                           // 클래스생성할 때 초기설정
  {
    parent::__construct();
    $this->load->database();                     // 데이터베이스 연결
    $this->load->model("event_am");    // 모델 movie_m 연결
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
    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;

    if ($text1=="")
      $base_url = "/event_admin/lists/page";                        // $page_segment = 4;
    else
      $base_url = "/event_admin/lists/text1/$text1/page";    // $page_segment = 6;
    $page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
    $base_url="/~team17" .$base_url;

    $config["per_page"]	 = 5;                              // 페이지당 표시할 line 수
    $config["total_rows"] = $this->event_am->rowcount($text1);  // 전체 레코드개수 구하기
    $config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
    $config["base_url"]	 = $base_url;                // 기본 URL
    $this->pagination->initialize($config);           // pagination 설정 적용

    $data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
    $data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

    $start=$data["page"];                 // n페이지 : 시작위치
    $limit=$config["per_page"];        // 페이지 당 라인수

    $data["text1"]=$text1;
    $data["list"]=$this->event_am->getlist($text1,$start,$limit);   // 해당페이지 자료읽기

    $this->load->view("admin_header");
    $this->load->view("eventadmin_list",$data,$start,$limit);    // 입력화면 표시
    $this->load->view("admin_footer");
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
    $data["row"] = $this->event_am->getrow($no);

    $this->load->view("admin_header");
    $this->load->view("adminmovie_view",$data);
    $this->load->view("admin_footer");                      // 하단 출력
  }
public function del()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$this->event_am->deleterow($no);
			redirect("/~team17/event/lists" . $text1 . $page);            // 목록화면으로 돌아가기
		}
		public function add()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

/*
			$this->load->library("form_validation");
			$this->form_validation->set_rules("title","영화","required|max_length[20]");
			$this->form_validation->set_rules("director","감독","required|max_length[20]");
			$this->form_validation->set_rules("actor","배우","required|max_length[50]");
			$this->form_validation->set_rules("genre","장르","required|max_length[20]");
			$this->form_validation->set_rules("gubun","구분","required|max_length[20]");
			$this->form_validation->set_rules("baegeup","배급","required");
*/

			if (!$_POST ) // 목록화면의 추가버튼 클릭한 경우
			{

				$this->load->view("admin_header");
				$this->load->view("eventadmin_add");    // 입력화면 표시
				$this->load->view("admin_footer");
			}
			 else              // 입력화면의 저장버튼 클릭한 경우
			 {
				$data=array(
				    'name' => $this->input->post("name",true),
				    'start' => $this->input->post("start",true),
				    'end' => $this->input->post("end",true)

				);
				$picname1 = $this->call_upload1();
				if($picname1) $data["pic1"] = $picname1;

				$picname2 = $this->call_upload2();
				if($picname2) $data["pic2"] = $picname2;

				 $result = $this->event_am->insertrow($data); 

				redirect("/~team17/event/lists/". $text1. $page);    //   목록화면으로 이동.
			 }
		 }

		 public function edit()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

		
			$this->load->library("form_validation");	/*
			$this->form_validation->set_rules("name","이름","required|max_length[20]");
			$this->form_validation->set_rules("uid","아이디","required|max_length[20]");
			$this->form_validation->set_rules("pwd","암호","required|max_length[20]");*/

			if (!$_POST) // 목록화면의 추가버튼 클릭한 경우
			{

				$this->load->view("admin_header");
				$data["row"]=$this->event_am->getrow($no);
				$this->load->view("eventadmin_edit", $data);    // 입력화면 표시
				$this->load->view("admin_footer");
			}
			 else              // 입력화면의 저장버튼 클릭한 경우
			 {
				$data=array(
				    'name' => $this->input->post("name",true),
				    'start' => $this->input->post("start",true),
				    'end' => $this->input->post("end",true)
				);
				$picname1 = $this->call_upload1();
				if($picname1) $data["pic1"] = $picname1;

				$picname2 = $this->call_upload2();
				if($picname2) $data["pic2"] = $picname2;

				    $result = $this->event_am->updaterow($data,$no);


				 redirect("/~team17/event/lists/". $text1. $page);    //   목록화면으로 이동.
			 }
		 }

	public function call_upload1()
		{
			$config['upload_path']	= './event_img';
			$config['allowed_types']	= 'gif|jpg|png|jpeg';
			$config['overwrite']	= TRUE; 
			$config['max_size'] = 10000000;
			$config['max_width'] = 10000;
			$config['max_height'] = 10000;
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('pic1')) 
				$picname1="";
			else
			{
				$picname1=$this->upload->data("file_name");

				$config['image_library'] = 'gd2';
				$config['source_image'] = './event_img/' . $picname1;
				$config['thumb_marker'] = '';
				$config['new_image'] = './event_img/thumb';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 200;
				$config['height'] = 150;

				$this->image_lib->initialize($config);

				$this->image_lib->resize();
			}
			return $picname1;
		}


		public function call_upload2()
		{
			$config['upload_path']	= './event_img';
			$config['allowed_types']	= 'gif|jpg|png|jpeg'; 
			$config['overwrite']	= TRUE; 
			$config['max_size'] = 10000000;
			$config['max_width'] = 10000;
			$config['max_height'] = 10000;
			$this->upload->initialize($config); 

			if (!$this->upload->do_upload('pic2')) 
				$picname2="";
			else
			{
				$picname2=$this->upload->data("file_name");

				$config['image_library'] = 'gd2';
				$config['source_image'] = './event_img/' . $picname2;
				$config['thumb_marker'] = '';
				$config['new_image'] = './event_img/main';
				$config['create_thumb'] = TRUE;
				$config['maintain_ratio'] = TRUE;
				$config['width'] = 200;
				$config['height'] = 150;

				$this->image_lib->initialize($config);

				$this->image_lib->resize();
			}
			return $picname2;
		}


}
?>
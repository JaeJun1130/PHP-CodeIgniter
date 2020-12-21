<?
    class Register extends CI_Controller {       // jjj클래스 선언
        function __construct()                           // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database();                     // 데이터베이스 연결
            $this->load->model("register_m");    // 모델 jjj_m 연결
			$this->load->helper(array("url", "date"));
			$this->load->library("pagination");
        }

	public function add()
	{

	if ($_POST)
         {
      


            $data=array( 
				'uid' => $this->input->post("Username", true),
				'pwd' => $this->input->post("Password", true),
				'name' => $this->input->post("Name", true),
				'birth' => $this->input->post("Birth", true),
				'juso' => $this->input->post("Juso", true),
				'tel' => $this->input->post("Phone", true),
				'email' => $this->input->post("Email", true)
               );
            $this->register_m->insertrow($data); 

            redirect("/~team17");    //   목록화면으로 이동.
         }
	}
}
?>

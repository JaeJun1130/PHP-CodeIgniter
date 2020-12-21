<?
    class Login extends CI_Controller { // login클래스 선언
        function __construct() // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database(); // 데이터베이스 연결
            $this->load->model("login_m"); // 모델 login_m 연결
         $this->load->helper(array("url", "date"));
        }
        public function index() // 제일 먼저 실행되는 함수
        {
        }
        public function check()
        {
         $uid=$this->input->post("Username", TRUE);
         $pwd=$this->input->post("Password", TRUE);

         if($uid == "admin" && $pwd == "1234"){
            redirect("/~team17/admin");
         }
         else{
            $row=$this->login_m->getrow($uid, $pwd);
            if($row){
               $data=array(
                  "uid" =>$row->uid,
                  "name" =>$row->name,
				   "no"=>$row->no
               );
            $this->session->set_userdata($data);
            
            redirect("/~team17");
            }   
         }
        }

      public function logout()
      {
         $data=array('uid', 'name');
         $this->session->unset_userdata($data);

         redirect("/~team17");   
      }
    }
?>
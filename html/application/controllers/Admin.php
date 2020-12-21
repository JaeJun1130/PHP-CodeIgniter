<?
class Admin extends CI_Controller {               // 클래스이름 첫 글자는 대문자
    public function index()                              // 제일 먼저 실행되는 함수
    {
        $this->load->view("admin_header"); 
        $this->load->view("admin_footer");     
    }
}
?>
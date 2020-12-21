<?
class Usermember extends CI_Controller {	// usermemberŬ���� ����
	function __construct()								// Ŭ���� ������ �� �ʱ⼳��
	{
		parent::__construct();
		$this->load->database();					// �����ͺ��̽� ����
		$this->load->model("usermember_m");		// �� userusermember_m ����
		$this->load->model("review_m");
		$this->load->model("booking_m");
		$this->load->model("qa_m");
		$this->load->helper(array("url", "date"));	
		 date_default_timezone_set("Asia/Seoul");// helper ����
	}

	public function index()						// ���� ���� ����Ǵ� �Լ�
	{
		$this->lists();								// list �Լ� ȣ��
	}

	public function lists()
	{
		//$text1=urldecode($this->uri->segment(4));			// URI: /usermember/lists/text1/��

		$uri_array=$this->uri->uri_to_assoc(3);
		$text1 = array_key_exists("text1", $uri_array) ? urldecode($uri_array["text1"]) : "";

		if ($text1=="")
			$base_url = "/usermember/lists/page";
		else
			$base_url = "/usermember/lists/text1/$text1/page";
		$page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")),"/")+1;
		$base_url = "/~team17" . $base_url;

		
		$config["total_rows"]=$this->usermember_m->rowcount($text1);		// ��ü �ڷᰳ��
		$config["uri_segment"]=$page_segment;
		$config["base_url"]=$base_url;


		$data["text1"]=$text1;			//text1 �� ������ ���� ó��
		$data["list"] = $this->usermember_m->getlist_m($text1);		// �ڷḦ �о� data�迭�� ����
		$this->load->view("main_header");							// ��� ���
		$this->load->view("usermember", $data);			// usermember_list�� �ڷ�����
		$this->load->view("main_footer");							// �ϴ� ���
	}
	public function lists_review()
	{
		//$text1=urldecode($this->uri->segment(4));			// URI: /usermember/lists/text1/��

		$uri_array=$this->uri->uri_to_assoc(3);
		$text1 = array_key_exists("text1", $uri_array) ? urldecode($uri_array["text1"]) : "";

		if ($text1=="")
			$base_url = "/usermember/lists/page";
		else
			$base_url = "/usermember/lists/text1/$text1/page";
		$page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")),"/")+1;
		$base_url = "/~team17" . $base_url;

		
		$config["total_rows"]=$this->usermember_m->rowcount($text1);		// ��ü �ڷᰳ��
		$config["uri_segment"]=$page_segment;
		$config["base_url"]=$base_url;


		$data["text1"]=$text1;			//text1 �� ������ ���� ó��
		$data["list"] = $this->review_m->getlist_my();		// �ڷḦ �о� data�迭�� ����
		$this->load->view("main_header");							// ��� ���
		$this->load->view("usermember_review", $data);			// usermember_list�� �ڷ�����
		$this->load->view("main_footer");							// �ϴ� ���
	}
	public function lists_book()
	{
		//$text1=urldecode($this->uri->segment(4));			// URI: /usermember/lists/text1/��

		$uri_array=$this->uri->uri_to_assoc(3);
		$text1 = array_key_exists("text1", $uri_array) ? urldecode($uri_array["text1"]) : "";

		if ($text1=="")
			$base_url = "/usermember/lists/page";
		else
			$base_url = "/usermember/lists/text1/$text1/page";
		$page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")),"/")+1;
		$base_url = "/~team17" . $base_url;

		
		$config["total_rows"]=$this->usermember_m->rowcount($text1);		// ��ü �ڷᰳ��
		$config["uri_segment"]=$page_segment;
		$config["base_url"]=$base_url;


		$data["text1"]=$text1;			//text1 �� ������ ���� ó��
		$data["list"] = $this->booking_m->getlist_my();		// �ڷḦ �о� data�迭�� ����
		$this->load->view("main_header");							// ��� ���
		$this->load->view("usermember_book", $data);			// usermember_list�� �ڷ�����
		$this->load->view("main_footer");							// �ϴ� ���
	}
	public function lists_qa()
	{
		//$text1=urldecode($this->uri->segment(4));			// URI: /usermember/lists/text1/��

		$uri_array=$this->uri->uri_to_assoc(3);
		$text1 = array_key_exists("text1", $uri_array) ? urldecode($uri_array["text1"]) : "";

		if ($text1=="")
			$base_url = "/usermember/lists/page";
		else
			$base_url = "/usermember/lists/text1/$text1/page";
		$page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")),"/")+1;
		$base_url = "/~team17" . $base_url;

		
		$config["total_rows"]=$this->usermember_m->rowcount($text1);		// ��ü �ڷᰳ��
		$config["uri_segment"]=$page_segment;
		$config["base_url"]=$base_url;


		$data["text1"]=$text1;			//text1 �� ������ ���� ó��
		$data["list"] = $this->qa_m->getlist1();		// �ڷḦ �о� data�迭�� ����
		$this->load->view("main_header");							// ��� ���
		$this->load->view("usermember_qa", $data);			// usermember_list�� �ڷ�����
		$this->load->view("main_footer");							// �ϴ� ���
	}
	public function lists_bye()
	{
		//$text1=urldecode($this->uri->segment(4));			// URI: /usermember/lists/text1/��

		$uri_array=$this->uri->uri_to_assoc(3);
		$text1 = array_key_exists("text1", $uri_array) ? urldecode($uri_array["text1"]) : "";

		if ($text1=="")
			$base_url = "/usermember/lists/page";
		else
			$base_url = "/usermember/lists/text1/$text1/page";
		$page_segment = substr_count(substr($base_url,0,strpos($base_url,"page")),"/")+1;
		$base_url = "/~team17" . $base_url;

		
		$config["total_rows"]=$this->usermember_m->rowcount($text1);		// ��ü �ڷᰳ��
		$config["uri_segment"]=$page_segment;
		$config["base_url"]=$base_url;


		$data["text1"]=$text1;			//text1 �� ������ ���� ó��
		$data["list"] = $this->usermember_m->getlist_m();		// �ڷḦ �о� data�迭�� ����
		$this->load->view("main_header");							// ��� ���
		$this->load->view("usermember_bye", $data);			// usermember_list�� �ڷ�����
		$this->load->view("main_footer");							// �ϴ� ���
	}
	public function view()
	{
		
		
		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no", $uri_array) ? $uri_array["no"] : "";
		$text1 = array_key_exists("text1", $uri_array) ? urldecode($uri_array["text1"]) : "";
		$page = array_key_exists("page", $uri_array) ? urldecode($uri_array["page"]) : "";

		$data["text1"]=$text1;
		$data["page"]=$page;

		$data["row"] = $this->usermember_m->getrow($no);

		$this->load->view("main_header");
		$this->load->view("usermember_list", $data);
		$this->load->view("main_footer");
	}

	public function del()
	{
		//$no = $this->uri->segment(4);

		$uri_array=$this->uri->uri_to_assoc(3);
		$no = array_key_exists("no", $uri_array) ? $uri_array["no"] : "";
		$text1 = array_key_exists("text1", $uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
		$page = array_key_exists("page", $uri_array) ? "/page/" . urldecode($uri_array["page"]) : "";

		$this->usermember_m->deleterow($no);
		redirect("/~team17");
	}

	public function add()
	{
		$uri_array=$this->uri->uri_to_assoc(3);
		$no    =array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		$text1 = array_key_exists("text1", $uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
		$page = array_key_exists("page", $uri_array) ? "/page/" . urldecode($uri_array["page"]) : "";

		$this->load->library("form_validation");
		$this->form_validation->set_rules("uid","���̵�","required|max_length[20]");
		$this->form_validation->set_rules("pwd","��й�ȣ","required|max_length[20]");
		$this->form_validation->set_rules("name","�̸�","required|max_length[20]");

		if ($this->form_validation->run()==FALSE)	// ���ȭ���� �߰���ư Ŭ���� ���
		{
			$this->load->view("main_header");
			$this->load->view("usermember_add");
			$this->load->view("main_footer");
		}
		else		// �Է�ȭ���� �����ư�� Ŭ���� ���
		{
			$birth1=$this->input->post("birth1",true);
			$birth2=$this->input->post("birth2",true);
			$birth3=$this->input->post("birth3",true);
			$birth=sprintf("%-4s%-2s%-2s", $birth1, $birth2, $birth3);

			$tel1=$this->input->post("tel1",true);
			$tel2=$this->input->post("tel2",true);
			$tel3=$this->input->post("tel3",true);
			$tel=sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);

			$data=array(
				"uid" => $this->input->post("uid", true),
				"pwd" => $this->input->post("pwd", true),
				"name" => $this->input->post("name", true),
				"birth" => $birth,
				"gender" => $this->input->post("gender", true),
				"tel" => $tel,
				"juso" => $this->input->post("juso", true),
				"email" => $this->input->post("email", true),
				"reg_date" => $this->input->post("reg_date",true)
			
			);
			$result = $this->usermember_m->insertrow($data);
			redirect("/~team17/usermember/lists");
		}
	}

		public function edit()
		{

			$uri_array=$this->uri->uri_to_assoc(3);
			$no=array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$this->load->library("form_validation");

			if (!$_POST) // ���ȭ���� �߰���ư Ŭ���� ���
			{
				$this->load->view("main_header");
				
				$data["row"]=$this->usermember_m->getrow($no);
				//var_dump($data);
				$this->load->view("usermember",$data);    // �Է�ȭ�� ǥ��
				$this->load->view("main_footer");
			}
			 else              // �Է�ȭ���� �����ư Ŭ���� ���
			 {
				$birth1=$this->input->post("birth1",true);
				$birth2=$this->input->post("birth2",true);
				$birth3=$this->input->post("birth3",true);
				$birth=sprintf("%-4s%-2s%-2s", $birth1, $birth2, $birth3);

				$tel1=$this->input->post("tel1", true);
				$tel2=$this->input->post("tel2", true);
				$tel3=$this->input->post("tel3", true);
				$tel=sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);


				$data=array(
				"uid" => $this->input->post("uid", true),
				"pwd" => $this->input->post("pwd", true),
				"name" => $this->input->post("name", true),
				"birth" => $birth,
				"tel" => $tel,
				"juso" => $this->input->post("juso", true),
				"email" => $this->input->post("email", true)
					);


				    $result = $this->usermember_m->updaterow($data,$no);


				 redirect('/~team17/usermember/edit/no/'. $no. $text1. $page);    //   ���ȭ������ �̵�.
			 }
		 }




}
?>
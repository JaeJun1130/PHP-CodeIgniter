<?
    class Usermember_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit )
        {	    
			if (!$text1)
			 $sql="select * from member order by name limit $start,$limit";
			else
			$sql="select * from member where name like '%$text1%' order by name limit $start,$limit";
// select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		public function getlist_m()
		{
			$sql="select * from member order by name";
			return $this->db->query($sql)->result();			// 쿼리실행, 결과 리턴
		}
		public function getrow($no)
		{
			$sql = "select * from member where no='$no'";
			return $this->db->query($sql)->row();
		}
		public function deleterow($no)  {
			$sql="delete from member where no=$no";
			return  $this->db->query($sql);
		}
		public function insertrow($row)
		{
			 return $this->db->insert("member",$row);
		}
		public function updaterow( $row, $no )
		{
			$where=array( "no"=>$no );
			return $this->db->update( "member", $row, $where );
		}
		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from member";
			else
				$sql="select * from member where name like '%$text1%'";
			return $this->db->query($sql)->num_rows();

		}




    }
?>

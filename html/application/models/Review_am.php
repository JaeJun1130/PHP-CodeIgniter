<?
    class Review_am extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit )
        {	    
			if (!$text1)
				$sql="select * from review order by name limit $start,$limit";
			else
      		    $sql="select * from review where name like '%$text1%' order by name limit $start,$limit";
// select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }

		function deleterow($no)  
		{
			$sql="delete from review where no=$no";
			return  $this->db->query($sql);
		}

		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from review";
			else
				$sql="select * from review where title like '%$text1%'";
			return $this->db->query($sql)->num_rows();

		}
    }
?>

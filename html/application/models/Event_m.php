<?
    class Event_m extends CI_Model     // 모델 클래스 선언
    {
		 public function getlist($text1,$start,$limit)
        {
			if (!$text1)
				$sql="select * from event order by no limit $start,$limit";
			else
      		    $sql="select * from event where title like '%" . $text1 . "%' order by no limit $start,$limit";
 				return $this->db->query($sql)->result();
        }
		 public function rowcount($text1)
        {
			if (!$text1)
				$sql="select * from event order by no";    // 전체 자료
			else
				$sql="select * from event where title like '%$text1%' order by no";
          
            return $this->db->query($sql)->num_rows();              // 쿼리실행, 결과 리턴
        }
			function getrow($no)  
			{
				$sql="select * from event where no=$no";
				return  $this->db->query($sql)->row();
			}
//		function getlist_gubun()
//		{
//			$sql="select * from gubun order by name46";
//			return $this->db->query($sql)->result();
//		}

		function deleterow($no)  {
			$sql="delete from event where no=$no";
			return  $this->db->query($sql);
		}
		function insertrow($row)
		{
			return $this->db->insert("event",$row);
		}
		function updaterow( $row, $no )
		{
			$where=array( "no"=>$no );
			return $this->db->update("event", $row, $where );
		}


	}

?>
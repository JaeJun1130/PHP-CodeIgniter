<?
    class Qaadmin_am extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit )
        {	    
			if (!$text1)
				$sql="select * from qa order by name limit $start,$limit";
			else
      		    $sql="select * from qa where name like '%$text1%' order by name limit $start,$limit";
// select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		function getrow($no)  
		{
			$sql="select * from qa where no=$no";
			return  $this->db->query($sql)->row();
		}
		function deleterow($no)  {
			$sql="delete from qa where no=$no";
			return  $this->db->query($sql);
		}
		function insertrow($row)
		{
			 return $this->db->insert("qa",$row);
		}
		function updaterow( $row, $no )
		{
			$where=array( "no"=>$no );
			return $this->db->update( "qa", $row, $where );
		}
		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from qa";
			else
				$sql="select * from qa where title like '%$text1%'";
			return $this->db->query($sql)->num_rows();

		}




    }
?>

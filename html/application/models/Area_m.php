<?
    class Area_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit )
        {	    
			if (!$text1)
			 $sql="select area.*, movie.title
				from area left join movie on area.movie_no=movie.no
				order by area.no limit $start,$limit";
			else
			$sql="select area.*, movie.title
			from area left join movie on area.movie_no=movie.no
			where movie.no like '%$text1%' order by movie.no limit $start,$limit";



 				return $this->db->query($sql)->result();
// select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		function getrow($no)  
		{
			$sql="select * from area where no=$no";
			return  $this->db->query($sql)->row();
		}
		function deleterow($no)  {
			$sql="delete from area where no=$no";
			return  $this->db->query($sql);
		}
		function insertrow($row)
		{
			 return $this->db->insert("area",$row);
		}
		function updaterow( $row, $no )
		{
			$where=array( "no"=>$no );
			return $this->db->update( "area", $row, $where );
		}
		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from area";
			else
				$sql="select * from area where areaname like '%$text1%'";
			return $this->db->query($sql)->num_rows();

		}

		public function getmovie()
		{
			$sql="select * from movie";
			return $this->db->query($sql)->result();

		}




    }
?>

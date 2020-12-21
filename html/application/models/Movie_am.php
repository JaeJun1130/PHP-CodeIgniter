<?
    class Movie_am extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit )
        {	    
			if (!$text1)
			 $sql="select movie.*, genre.name as genre_name
			 from movie left join genre on movie.genre_no=genre.no
			 order by movie.no limit $start,$limit";
			else
			$sql="select movie.*, genre.name as genre_name
			from movie left join genre on moive.genre_no=genre.no 
			where movie.no like '%$text1%' order by movie.no limit $start,$limit";
// select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		function getrow($no)  
		{
			$sql="select movie.*, genre.name as genre_name
			 from movie left join genre on movie.genre_no=genre.no
			 where movie.no=$no";
			return  $this->db->query($sql)->row();
		}
		function deleterow($no)  {
			$sql="delete from movie where no=$no";
			return  $this->db->query($sql);
		}
		function insertrow($row)
		{
			 return $this->db->insert("movie",$row);
		}
		function updaterow( $row, $no )
		{
			$where=array( "no"=>$no );
			return $this->db->update( "movie", $row, $where );
		}
		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from movie";
			else
			$sql="select * from movie where title like '%$text1%'";
			return $this->db->query($sql)->num_rows();
		}
		function getlist_genre()
		{
			$sql="select * from genre order by name";
			return $this->db->query($sql)->result();
		}
	




    }
?>

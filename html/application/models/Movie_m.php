<?
    class Movie_m extends CI_Model     // 모델 클래스 선언
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
 				return $this->db->query($sql)->result();
        }
		public function getlist1($no)
        {			
				$sql="select * from movie where movie.no ";
 				return $this->db->query($sql)->result();
        }
		public function getlist_t()
        {			
				$sql="select movie.trailer,movie.title from movie order by movie.no";
 				return $this->db->query($sql)->result();
        }
		public function getlist_p()
        {
			
				$sql="select * from movie order by rank DESC";
 				return $this->db->query($sql)->result();
        }
		public function getlist_r()
        {
			
				$sql="select * from movie order by openday DESC";
 				return $this->db->query($sql)->result();
        }
		public function getlist_review($no)
        {
			
				$sql="select * from review
					where review.movie_no=$no ";
 				return $this->db->query($sql)->result();
        }
		public function getlist_except($no)
        {			
				$sql="select * from movie where movie.no not like $no limit 7";
 				return $this->db->query($sql)->result();
        }
		 public function rowcount($text1)
        {
			if (!$text1)
				$sql="select * from movie order by no";    // 전체 자료
			else
				$sql="select * from movie where title like '%$text1%' order by no";
          
            return $this->db->query($sql)->num_rows();              // 쿼리실행, 결과 리턴
        }
			function getrow($no)  
			{
				$sql="select movie.*, genre.name as genre_name
			 from movie left join genre on movie.genre_no=genre.no
			 where movie.no=$no";
				return  $this->db->query($sql)->row();
			}
			function getrow1($no)  
			{
				$sql="select movie.no from movie where movie.no=$no";
				return  $this->db->query($sql)->row();
			}

//		function getlist_gubun()
//		{
//			$sql="select * from gubun order by name46";
//			return $this->db->query($sql)->result();
//		}

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
			return $this->db->update("movie", $row, $where );
		}


	}

?>
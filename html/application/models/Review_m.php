<?
    class Review_m extends CI_Model     // 모델 클래스 선언
    {
		 public function getlist($text1,$start,$limit)
        {
			if (!$text1)
				$sql="select review.*, movie.no as movie_no 
				from review left join movie on review.movie_no=movie.no
				order by review.name limit $start,$limit";
			else
      		    $sql="select review.* movie.no as movie_no 
				from review left join movie on review.movie_no=movie.no 
				where review.name like '%" . $text1 . "%' order by review.name limit $start,$limit";
 				return $this->db->query($sql)->result();
        }
		 public function getlist1()
        {
		
				$sql="select review.*, movie.no as movie_no 
				from review left join movie on review.movie_no=movie.no
				order by review.name";

 				return $this->db->query($sql)->result();
        }
		public function getlist_my()
        {
				$sql="select review.*, movie.title as movie_title 
				from review left join movie on review.movie_no=movie.no
				order by review.no";

 				return $this->db->query($sql)->result();
        }
/*
        public function getlist($text1,$start,$limit )
        {	    
			if (!$text1)
			 $sql="select movie.*, genre.name as genre_name
			 from movie left join genre on movie.genre_no=genre.no
			 order by movie.no limit $start,$limit";
			else
			$sql="select movie.*, genre.name as genre_name
			from movie left join genre on moive.genre_no=genre.no 
			where movie.no like '%$text1%' order by movie.no limit $start,$limit";// select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		*/


		function insertrow($row)
		{
			 return $this->db->insert("review",$row);
		}
    }
?>

<?
    class Graph_m1 extends CI_Model     // 모델 클래스 선언
    {
        public function getlist()
        {	  
			$sql="select reserve.movie_no as movie_no, sum(total) as price, movie.title as movie_title
               from reserve
			   left join movie on movie_no=movie.no
			   group by movie_no"; // select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		
		
		public function rowcount($text1,$text2)
		{
			$sql="select * from reserve "; 
			return $this->db->query($sql)->num_rows();

		}
		function getlist_movie()
		{
			$sql="select * from movie order by title";
			return $this->db->query($sql)->result();
		}

    }
?>

<?
    class Graph_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$text2)
        {	  
			$sql="select * from movie order by rank desc limit 10"; // select문 정의

            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }

		public function getlist1()
        {	  
			$sql="select reserve.movie_no as movie_no, sum(total) as price
               from reserve group by movie_no"; // select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		
		
		public function rowcount($text1,$text2)
		{
			$sql="select * from movie "; 
			return $this->db->query($sql)->num_rows();

		}
		public function rowcount1($text1,$text2)
		{
			$sql="select * from reserve "; 
			return $this->db->query($sql)->num_rows();

		}

		/*public function getlist1($text1,$text2)
        {	  
			$sql="select count(reserve.movie_no) as count, movie.title as movie_title 
			from left join movie on reserve.movie_no=movie.no
			order by count desc limit 10"; // select문 정의

            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		public function getlist2($text1,$text2){


		$sql="select movie_no, count(*) from reserve group by movie_no having count(*) >1";
		}*/

    }
?>

<?
    class Booking_am extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit )
        {	
			$sql="select reserve.*,movie.title as movie_title
				from reserve 
				left join movie on reserve.movie_no=movie.no 
                  order by reserve.no limit $start,$limit"; // select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		function getrow($no)  
		{
			$sql="select reserve.*,movie.title as movie_title
				from reserve 
				left join movie on reserve.movie_no=movie.no 
				where reserve.no=$no";

			return  $this->db->query($sql)->row();
		}
		function deleterow($no)  {
			$sql="delete from reserve where no=$no";
			return  $this->db->query($sql);
		}
		function insertrow($row)
		{
			 return $this->db->insert("reserve",$row);
		}
		function updaterow( $row, $no )
		{
			$where=array( "no"=>$no );
			return $this->db->update( "reserve", $row, $where );
		}
		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from reserve";
			else
				$sql="select * from reserve where no like '%$text1%'";
			return $this->db->query($sql)->num_rows();

		}

		function getlist_movie()
		{
			$sql="select * from movie order by title";
			return $this->db->query($sql)->result();
		}
		function getlist_screen()
		{
			$sql="select * from screen order by name";
			return $this->db->query($sql)->result();
		}
		function getlist_area()
		{
			$sql="select * from area order by areaname";
			return $this->db->query($sql)->result();
		}
		




    }
?>

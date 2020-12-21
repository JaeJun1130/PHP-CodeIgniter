<?
    class Time_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit )
        {	
			$sql="select time.*,movie.title as movie_title, screen.name as screen_name,area.areaname as area_areaname
				from time 
				left join movie on time.movie_no=movie.no 
				left join screen on time.screen_no=screen.no 
				left join area on time.area_no=area.no
                  order by time.no limit $start,$limit"; // select문 정의
            return $this->db->query($sql)->result();              // 쿼리실행, 결과 리턴
        }
		function getrow($no)  
		{
			$sql="select time.*,movie.title as movie_title, screen.name as screen_name,area.areaname as area_areaname
				from time 
				left join movie on time.movie_no=movie.no 
				left join screen on time.screen_no=screen.no 
				left join area on time.area_no=area.no
				where time.no=$no";

			return  $this->db->query($sql)->row();
		}
		function deleterow($no)  {
			$sql="delete from time where no=$no";
			return  $this->db->query($sql);
		}
		function insertrow($row)
		{
			 return $this->db->insert("time",$row);
		}
		function updaterow( $row, $no )
		{
			$where=array( "no"=>$no );
			return $this->db->update( "time", $row, $where );
		}
		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from time";
			else
				$sql="select * from time where day like '%$text1%'";
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

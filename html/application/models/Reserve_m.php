<?
    class reserve_m extends CI_Model     // 모델 클래스 선언
    {
		 public function getlist($text1,$start,$limit)
        {
			if (!$text1)
				$sql="select reserve.*, area.no as area_no
					from reserve left join area on reserve.area_no=area.no
					order by reserve.no limit $start,$limit";
			else
      		    $sql="select reserve.* area.no as area_no 
				from reserve left jpin area on reserve.area_no=area.no
				where reserve.no like '%" . $text1 . "%' order by reserve.no limit $start,$limit";
 				return $this->db->query($sql)->result();
        }
		public function getlist_m($text1,$start,$limit)
       {
			if (!$text1)
				$sql="select movie.*, genre.name as genre_name, area.no as area_no 
				from movie left join genre on movie.genre_no=genre.no 
				           left join area on area.movie_no = movie.no 
						   order by movie.no limit $start,$limit";
			else
      		    $sql="select * movie.* genre.name as genre_name
			
				from movie left joun genre on movie.genre_no=genre.no where movie.no like '%" . $text1 . "%' order by no limit $start,$limit";
 				return $this->db->query($sql)->result();

        }
//		public function getlist1()
//		{
//			$sql="select * from reserve order by reserve.no"
//			return $this->db->query($sql)->result();
//        }
//		 public function rowcount($text1)
//        {
//			if (!$text1)
//				$sql="select * from reserve order by title";    // 전체 자료
//			else
//				$sql="select * from reserve where title like '%$text1%' order by title";
//          
//            return $this->db->query($sql)->num_rows();              // 쿼리실행, 결과 리턴
//        }
			function getrow($no)  
			{
				$sql="select reserve.*, area.no as area_no

				from reserve left join area on reserve.area_no=area.no
				where reserve.no=$no";
				return  $this->db->query($sql)->row();
			}
//		function getlist_gubun()
//		{
//			$sql="select * from gubun order by name46";
//			return $this->db->query($sql)->result();
//		}

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
			return $this->db->update("reserve", $row, $where );
		}


	}

?>
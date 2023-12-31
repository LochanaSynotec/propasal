<?php

class Databases
{
	public $conn;
	public function __construct()
	{
		$this->conn = mysqli_connect("localhost", "root", "", "propasal");
		//$this->conn = mysqli_connect("sql106.epizy.com", "epiz_31962138", "Xu1LApfSTR", "epiz_31962138_exam");  
		if (!$this->conn) {
			echo 'Database Connection Error ' . mysqli_connect_error($this->conn);
		}
	}


	public function insert($table_name, $data)
	{
		$string = "INSERT INTO " . $table_name . " (";
		$string .= implode(",", array_keys($data)) . ') VALUES (';
		$string .= "'" . implode("','", array_values($data)) . "')";
		if (mysqli_query($this->conn, $string)) {
			//return true;  
			$last_id = $this->conn->insert_id;
			return array(true, $last_id);
		} else {
			echo mysqli_error($this->conn);
		}
	}


	public function select($sql)
	{
		$array = array();
		$query = $sql;
		$result = mysqli_query($this->conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$array[] = $row;
		}
		return $array;
	}



	function r($search_id, $SEARCH_VAL)
	{

    include 'route.php';


		$dis = '';
		$ID = 0;
		$s_id = $search_id;

		if ($SEARCH_VAL != '') {
			$like_val = '';
			$like_od_val = '';
			$likke_arr = explode(' ', $SEARCH_VAL);
			$likke_arr = array_map('trim', $likke_arr);
			$likke_arr = array_filter($likke_arr);
			$arr = count($likke_arr);
			$arr = $arr - 1;

			foreach ($likke_arr as $key => $value) {

				if ($value == '') {

				} else {
					if ($key == $arr) {
						$like_val .= 'all_tag LIKE\'%' . $value . '%\'';
						$like_od_val .= 'all_tag LIKE\'%' . $value . '%\'';
					} else {
						$like_val .= 'all_tag LIKE\'%' . $value . '%\'OR ';
						$like_od_val .= 'all_tag LIKE\'%' . $value . '%\'AND ';
					}
				}

			}
		}

		if ($s_id == 0 && $SEARCH_VAL == '') {

			$sql = "SELECT * FROM ad WHERE  STATUS='ACTIVE' ORDER BY ID DESC";


		} elseif ($s_id == 0 && $SEARCH_VAL != '') {

			$sql = "SELECT * FROM ad WHERE $like_val ORDER BY $like_od_val DESC, ID DESC ";

		} elseif ($s_id != 0 && $SEARCH_VAL == '') {
			$sql = "SELECT * FROM  ad WHERE ID<$s_id AND STATUS='ACTIVE'  ORDER BY ID DESC ";

		} elseif ($s_id != 0 && $SEARCH_VAL != '') {
			$sql = "SELECT * FROM  ad WHERE ID<$s_id  AND  $like_od_val AND(STATUS='ACTIVE' )  ORDER BY $like_od_val DESC, ID DESC";

		}

		$count = 0;
		$all = '';

		$query = $sql;
		$result = mysqli_query($this->conn, $query);
		$num_rows = mysqli_num_rows($result);
		while ($row = mysqli_fetch_assoc($result)) {
			if ($count < 10) {

				$id = $row['id'];
				$name = $row['name'];
				$slug = $row['slug'];
				$title = $row['title'];
				$gender = $row['gender'];
				$tag = $row['tag'];
				$des = $row['des'];
				$all = '';
				$page_path = route("female/$name",$slug);

				if (str_split($des)>250) {
					$des2 = substr_replace($des, "...<a href=''>Read more</a>", 250);
				} else {
					$des2 =$des ;
				}
				
				
				$arr = explode("#", $tag);

				foreach ($arr as $key => $val) {
					if ($key == 0) {

					} else {
						$all .= "<code><a href='$page_path'>#$val </a></code>";
					}


				}

				
				

				$dis .= "<div class='card card-color'>
					        <div class='card-body'>
					          <h4 class='card-title'><a href='$page_path'>$title</a></h4>
					          <p class='card-text '> $gender </p>
					          <p class='card-text des'>$des2  </p>
					          <div> $all </div>
					        </div>
					      </div>    
					      <br>   ";

			} else {
				break;
			}

			$count = $count + 1;
		}

		$sbtn = $num_rows - $count;


		if ($sbtn != 0) {
			$view_btn = 'YES';
		} else {
			$view_btn = 'NO';
		}



		$data["dis_i"] = $dis;
		$data["last_id"] = $id;
		$data["view_btn"] = $view_btn;
		$data["SEARCH_VAL"] = $SEARCH_VAL;
		$data["sql"] = $sql;
		echo json_encode($data);


	}


	
	function grooms($search_id, $SEARCH_VAL)
	{

    include 'route.php';


		$dis = '';
		$ID = 0;
		$s_id = $search_id;

		if ($SEARCH_VAL != '') {
			$like_val = '';
			$like_od_val = '';
			$likke_arr = explode(' ', $SEARCH_VAL);
			$likke_arr = array_map('trim', $likke_arr);
			$likke_arr = array_filter($likke_arr);
			$arr = count($likke_arr);
			$arr = $arr - 1;

			foreach ($likke_arr as $key => $value) {

				if ($value == '') {

				} else {
					if ($key == $arr) {
						$like_val .= 'all_tag LIKE\'%' . $value . '%\'';
						$like_od_val .= 'all_tag LIKE\'%' . $value . '%\'';
					} else {
						$like_val .= 'all_tag LIKE\'%' . $value . '%\'OR ';
						$like_od_val .= 'all_tag LIKE\'%' . $value . '%\'AND ';
					}
				}

			}
		}

		if ($s_id == 0 && $SEARCH_VAL == '') {

			$sql = "SELECT * FROM ad WHERE status='ACTIVE' AND gender='Male' ORDER BY ID DESC";


		} elseif ($s_id == 0 && $SEARCH_VAL != '') {

			$sql = "SELECT * FROM ad WHERE $like_val AND(status='ACTIVE' ) AND(gender='Male')  ORDER BY $like_od_val DESC, ID DESC ";

		} elseif ($s_id != 0 && $SEARCH_VAL == '') {
			$sql = "SELECT * FROM  ad WHERE ID<$s_id AND status='ACTIVE' AND(gender='Male')  ORDER BY ID DESC ";

		} elseif ($s_id != 0 && $SEARCH_VAL != '') {
			$sql = "SELECT * FROM  ad WHERE ID<$s_id  AND  $like_od_val AND(gender='Male')  ORDER BY $like_od_val DESC, ID DESC";

		}

		$count = 0;
		$all = '';

		$query = $sql;
		$result = mysqli_query($this->conn, $query);
		$num_rows = mysqli_num_rows($result);
		while ($row = mysqli_fetch_assoc($result)) {
			if ($count < 10) {

				$id = $row['id'];
				$name = $row['name'];
				$slug = $row['slug'];
				$title = $row['title'];
				$gender = $row['gender'];
				$tag = $row['tag'];
				$des = $row['des'];
				$all = '';
				$page_path = route("female/$name",$slug);

				if (str_split($des)>250) {
					$des2 = substr_replace($des, "...<a href=''>Read more</a>", 250);
				} else {
					$des2 =$des ;
				}
				
				
				$arr = explode("#", $tag);

				foreach ($arr as $key => $val) {
					if ($key == 0) {

					} else {
						$all .= "<code><a href='$page_path'>#$val </a></code>";
					}


				}

				
				

				$dis .= "<div class='card card-color'>
					        <div class='card-body'>
					          <h4 class='card-title'><a href='$page_path'>$title</a></h4>
					          <p class='card-text '> $gender </p>
					          <p class='card-text des'>$des2  </p>
					          <div> $all </div>
					        </div>
					      </div>    
					      <br>   ";

			} else {
				break;
			}

			$count = $count + 1;
		}

		$sbtn = $num_rows - $count;


		if ($sbtn != 0) {
			$view_btn = 'YES';
		} else {
			$view_btn = 'NO';
		}



		$data["dis_i"] = $dis;
		$data["last_id"] = $id;
		$data["view_btn"] = $view_btn;
		$data["SEARCH_VAL"] = $SEARCH_VAL;
		$data["sql"] = $sql;
		echo json_encode($data);


	}

	function brides($search_id, $SEARCH_VAL)
	{

    include 'route.php';


		$dis = '';
		$ID = 0;
		$s_id = $search_id;

		if ($SEARCH_VAL != '') {
			$like_val = '';
			$like_od_val = '';
			$likke_arr = explode(' ', $SEARCH_VAL);
			$likke_arr = array_map('trim', $likke_arr);
			$likke_arr = array_filter($likke_arr);
			$arr = count($likke_arr);
			$arr = $arr - 1;

			foreach ($likke_arr as $key => $value) {

				if ($value == '') {

				} else {
					if ($key == $arr) {
						$like_val .= 'all_tag LIKE\'%' . $value . '%\'';
						$like_od_val .= 'all_tag LIKE\'%' . $value . '%\'';
					} else {
						$like_val .= 'all_tag LIKE\'%' . $value . '%\'OR ';
						$like_od_val .= 'all_tag LIKE\'%' . $value . '%\'AND ';
					}
				}

			}
		}

		if ($s_id == 0 && $SEARCH_VAL == '') {

			$sql = "SELECT * FROM ad WHERE status='ACTIVE' AND gender='Female' ORDER BY ID DESC";


		} elseif ($s_id == 0 && $SEARCH_VAL != '') {

			$sql = "SELECT * FROM ad WHERE $like_val AND(status='ACTIVE' ) AND(gender='Female')  ORDER BY $like_od_val DESC, ID DESC ";

		} elseif ($s_id != 0 && $SEARCH_VAL == '') {
			$sql = "SELECT * FROM  ad WHERE ID<$s_id AND status='ACTIVE' AND(gender='Female')  ORDER BY ID DESC ";

		} elseif ($s_id != 0 && $SEARCH_VAL != '') {
			$sql = "SELECT * FROM  ad WHERE ID<$s_id  AND  $like_od_val AND(gender='Female')  ORDER BY $like_od_val DESC, ID DESC";

		}

		$count = 0;
		$all = '';

		$query = $sql;
		$result = mysqli_query($this->conn, $query);
		$num_rows = mysqli_num_rows($result);
		while ($row = mysqli_fetch_assoc($result)) {
			if ($count < 10) {

				$id = $row['id'];
				$name = $row['name'];
				$slug = $row['slug'];
				$title = $row['title'];
				$gender = $row['gender'];
				$tag = $row['tag'];
				$des = $row['des'];
				$all = '';
				$page_path = route("female/$name",$slug);

				if (str_split($des)>250) {
					$des2 = substr_replace($des, "...<a href=''>Read more</a>", 250);
				} else {
					$des2 =$des ;
				}
				
				
				$arr = explode("#", $tag);

				foreach ($arr as $key => $val) {
					if ($key == 0) {

					} else {
						$all .= "<code><a href='$page_path'>#$val </a></code>";
					}


				}

				
				

				$dis .= "<div class='card card-color'>
					        <div class='card-body'>
					          <h4 class='card-title'><a href='$page_path'>$title</a></h4>
					          <p class='card-text '> $gender </p>
					          <p class='card-text des'>$des2  </p>
					          <div> $all </div>
					        </div>
					      </div>    
					      <br>   ";

			} else {
				break;
			}

			$count = $count + 1;
		}

		$sbtn = $num_rows - $count;


		if ($sbtn != 0) {
			$view_btn = 'YES';
		} else {
			$view_btn = 'NO';
		}



		$data["dis_i"] = $dis;
		$data["last_id"] = $id;
		$data["view_btn"] = $view_btn;
		$data["SEARCH_VAL"] = $SEARCH_VAL;
		$data["sql"] = $sql;
		echo json_encode($data);


	}


}
?>
<?php 

/**
 * 
 */
class DBOperation
{
	private $con;
	
	function __construct()
	{
		include_once("../database/db.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function addCategory($parent,$cat){
		$pre_stmt = $this->con->prepare("INSERT INTO `categories`(`parent_cat`, `category_name`, `status`) VALUES (?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("isi",$parent,$cat,$status);
		$result = $pre_stmt->execute() or die($this->con->error);
		if ($result) {
			return "CATEGORY ADDED";
		}else{
			return 0;
		}
	}
	public function getAllRecord($table){
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = array();
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}
		return "NO_DATA";
	}
}
//$opr = new DBOperation();
//echo "<pre>";
//print_r($opr->getAllRecord("categories"));
//$opr = new DBOperation();
//echo $opr->addCategory(1,"Mobiles");
 ?>
<?php
	
	include_once("connect_to_database.php");
	function get_attempted($teamid)
	{
		$query = "SELECT * FROM user_response where teamid = $teamid ";
		$result = mysql_query($query) or die(mysql_error());
		$nrows = mysql_num_rows($result);
		$return_arr = array();
		while($row = mysql_fetch_array($result))
		{
			extract($row);
			array_push($return_arr, $questionid);
		}
		return $return_arr;
	}
?>

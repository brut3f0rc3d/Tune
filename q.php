<?php
	$server = "localhost";
	$username ="root";
	$password ="tiger";
	$db = "test";

	$connection = new mysqli($server, $username, $password, $db);

	if($connection->connect_error){
		die("Connection failed ".$connection->connect_error);
	}
	//echo "Connected.<br>";
	$json = array();
	$search = $_GET['q'];
	if(!is_null($search)){
		if($search===""){
			echo json_encode($json);
		}
		else{
			$query = "SELECT * FROM songs WHERE song_name LIKE '".$search."%'";
		//echo "Query generated : ".$query."<br>";
		$result = $connection->query($query);
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$json[] = $row['song_name'];
			}
		}
		echo json_encode($json);
		}
		
	}
?>
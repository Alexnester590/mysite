<?php


$conn = new mysqli("127.0.0.1", "Alex", "1");
  
  if ($conn->connect_error) {
    die("Ошибка: не удается подключиться: " . $conn->connect_error);
  } 
  mysqli_select_db($conn, "sightings");


if($_GET['action'] == 'getSightingsByType'){
		$type = htmlspecialchars($_GET['type']);
		$sql = "SELECT sighting_id, sighting_date, creature_type, creature_distance, creature_weight, creature_height, creature_color, 
		sighting_latitude, sighting_longitude FROM sightings where creature_type = '$type' order by sighting_date ASC ";
		
		$result = mysqli_query($conn, $sql);
		
		$sightings = array();

		while ($row = mysqli_fetch_array($result)) {
			array_push($sightings, array('id' => $row['sighting_id'], 'date' => $row['sighting_date'], 'type' => $row['creature_type'], 'distance' => $row['creature_distance'], weight => $row['creature_weight'], 
					'height' => $row['creature_height'], 'color' => $row['creature_color'], 'lat' => $row['sighting_latitude'], 'long' => $row['sighting_longitude']
				)
			);
		}
		echo json_encode(array("sightings" => $sightings));
		
	}

/* 				$result2 = mysqli_query($conn, "SELECT * FROM sightings");
 */				
 
 if($_GET['action'] == 'getSightingsTypes'){
 $result3 = mysqli_query($conn, "SELECT distinct(creature_type) FROM sightings");


/* $sightings = array();

while ($row = mysqli_fetch_array($result2)) {
array_push($sightings, array('fname' => $row['first_name'], 'lname' => $row['last_name'],
'gender' => $row['gender'], 'time' => $row['finish_time'],
 'date5' => $row['date55'], 'name5' => $row['name55'], 'lat5' => $row['lat55'], 'long5' => $row['long55']));
}

echo json_encode(array("sightings" => $sightings)); */

$sightings3 = array();

while ($row = mysqli_fetch_array($result3)) {
array_push($sightings3, array('creature_type' => $row['creature_type']));
}

echo json_encode(array("creature_type" => $sightings3));
}
		exit;



?>
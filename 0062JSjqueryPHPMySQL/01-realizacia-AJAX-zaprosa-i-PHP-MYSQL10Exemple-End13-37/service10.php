<?php
$conn = mysqli_connect("127.0.0.1", "Alex", "1");
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
  echo 'Подключение к базе данных.<br>';
  mysqli_select_db($conn, "sightings");
  echo $_POST["txtFirstName"];
		$name5 = htmlspecialchars($_POST['creature_type']);
		$date5 = htmlspecialchars($_POST['sighting_date']);
		$fname = htmlspecialchars($_POST['txtFirstName']);
		$lname = htmlspecialchars($_POST['txtLastName']);
		$gender = htmlspecialchars($_POST['ddlGender']);
		$minutes = htmlspecialchars($_POST['txtMinutes']);
		$seconds = htmlspecialchars($_POST['txtSeconds']);
		if(preg_match('/[^\w\s]/i', $fname) || preg_match('/[^\w\s]/i', $lname)) {
			fail('Invalid name provided.');
		}
		if( empty($fname) || empty($lname) ) {
			fail('Please enter a first and last name.');
		}
		if( empty($gender) ) {
			fail('Please select a gender.');
		}
		if( empty($minutes) || empty($seconds) ) {
			fail('Please enter minutes and seconds.');
		}
		$time = $minutes.":".$seconds;

		$sql  = "INSERT INTO sightings (sighting_date, creature_type, creature_distance, creature_weight, creature_height, creature_color, sighting_latitude, sighting_longitude)
		          VALUES ('$my_date', '$type', '$distance', '$weight', '$height', '$color', '$lat', '$long') ";
		$result2 = mysqli_query($conn, "SELECT * FROM runners");
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$runners = array();

echo json_encode(array("runners" => $runners));
echo "$name";
?>
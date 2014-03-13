<?php

$mysqli = @new mysqli('127.0.0.1', 'codeup', 'password', 'codeup_mysqli_test_db');

if ($mysqli->connect_errno) {
		throw new Exception('Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' 
			. $mysqli->connect_error . PHP_EOL);
} 

$create_parks = 'CREATE TABLE national_parks (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    state VARCHAR(50) NOT NULL,
	description VARCHAR(240) NOT NULL,
	date_established DATE NOT NULL,
    area_in_acres FLOAT(10, 2) DEFAULT 0,
    PRIMARY KEY (id)
	);';

$parks = [
			['name' => 'Canyonlands', 'state' => 'Utah', 'description' => 
			'This landscape was eroded into canyons, buttes, and mesas by the Colorado River, 
			Green River, and their tributaries, which divide the park into three districts. 
			There are rock pinnacles and other naturally sculpted rock, as well as artifacts 
			from Ancient Pueblo Peoples.', 'date_established' => '1964-09-12',
			'area_in_acres' => 337597.83],
			
			['name' => 'Cuyahoga Valley', 'state' => 'Ohio', 'description' => 'This park along 
			the Cuyahoga River has waterfalls, hills, trails, and displays about early rural living. 
			The Ohio and Erie Canal Towpath Trail follows the Ohio and Erie Canal, where mules towed 
			canal boats. The park has numerous historic homes, bridges, and structures. The park also 
			offers a scenic train ride with various trips available.', 'date_established' 
			=> '2000-10-11', 'area_in_acres' => 32860.73],
			
			['name' => 'Glacier', 'state' => 'Montana', 'description' => "Part of Waterton 
			Glacier International Peace Park, this park has 26 remaining glaciers and 130 
			named lakes under the tall Rocky Mountain peaks. There are historic hotels and a 
			landmark road in this region of rapidly receding glaciers. These mountains, formed 
			by an overthrust, have the world\'s best sedimentary fossils from the Proterozoic era", 
			'date_established' => '1910-05-11', 'area_in_acres' => 1013572.41],

			['name' => 'Grand Teton', 'state' => 'Wyoming', 'description' => "Grand Teton is the 
			tallest mountain in the Teton Range. The park\'s Jackson Hole valley and reflective 
			piedmont lakes contrast with the tall mountains, which abruptly rise from the 
			sage-covered valley", 'date_established' => '1929-02-26', 'area_in_acres' => 309994.66],

			['name' => 'Haleakala', 'state' => 'Hawaii', 'description' => "The Haleakalā 
			volcano on Maui has a very large crater with many cinder cones, Hosmer\'s Grove of 
			alien trees, and the native Hawaiian Goose. The Kipahulu section has numerous pools 
			with freshwater fish. This National Park has the greatest number of endangered species", 
			'date_established' => '1916-08-01', 'area_in_acres' => 1013572.41],

			['name' => 'Joshua Tree', 'state' => 'California', 'description' => 'Covering 
			parts of the Colorado and Mojave Deserts and the Little San Bernardino Mountains, 
			this is the home of the Joshua tree. Across great elevation changes are sand dunes, 
			dry lakes, rugged mountains, and granite monoliths.', 'date_established' => 
			'1994-10-31', 'area_in_acres' => 789745.47],

			['name' => 'Lake Clark', 'state' => 'Alaska', 'description' => 'The region around 
			Lake Clark has four active volcanoes, including Mount Redoubt, rivers, glaciers, 
			and waterfalls. There are temperate rainforests, a tundra plateau, and three mountain 
			ranges.', 'date_established' => '1980-12-02', 'area_in_acres' => 2619733.21],

			['name' => 'Olympic', 'state' => 'Washington', 'description' => 'Situated on the 
			Olympic Peninsula, this park ranges from Pacific shoreline with tide pools to 
			temperate rainforests to Mount Olympus. The glaciated Olympic Mountains overlook 
			the Hoh Rain Forest and Quinault Rain Forest, the wettest area of the continental 
			United States.', 'date_established' => '1938-06-29', 'area_in_acres' => 922650.86],

			['name' => 'Virgin Islands', 'state' => 'US Virgin Islands', 'description' => 
			"The island of Saint John has rich human and natural history. There are Taino 
			archaeological sites and ruins of sugar plantations from Columbus\'s time. Past 
			the pristine beaches are mangroves, seagrass beds, coral reefs and algal plains.", 
			'date_established' => '1956-08-02', 'area_in_acres' => 14688.87],

			['name' => 'Zion', 'state' => 'Utah', 'description' => 'This geologically unique 
			area has colorful sandstone canyons, high plateaus, and rock towers. Natural 
			arches and exposed formations of the Colorado Plateau make up a large wilderness of 
			four ecosystems', 'date_established' => '1919-11-19', 'area_in_acres' => 146597.60]

	];

if (!$mysqli->query($create_parks)) {
	throw new Exception('Failed to create table: (' . $mysqli->errno . ') ' .
		$mysqli->error . PHP_EOL);
}

foreach ($parks as $park) {
	$park_data = "INSERT INTO national_parks (name, state, description, date_established,
		area_in_acres) VALUES ('" . $park['name'] . "', '" . $park['state'] . "', '"
		. $park['description'] . "', '" . $park['date_established'] . "', '" . 
		$park['area_in_acres'] . "');";

	if (!$mysqli->query($park_data)){
		throw new Exception("Insert failed: (" . $mysqli->errno . ") " . $mysqli->error . PHP_EOL);
	}
}

?>
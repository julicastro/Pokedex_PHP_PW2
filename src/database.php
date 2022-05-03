    <?php

	function conectarAMySQL()
	{
		$servername = "localhost";
		$database = "db_pokedex";
		$username = "root";
		$password = "";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";


		$sql = "SELECT * FROM pokemon";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while ($row = $result->fetch_assoc()) {
				echo "id: " . $row["id"] . " - Name: " . $row["nombre"];
			}
		} else {
			echo "0 results";
		}
		$conn->close();
	}




	?>


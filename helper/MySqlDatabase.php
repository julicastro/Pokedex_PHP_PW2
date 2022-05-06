<?php

class MySqlDatabase
{
    private $servername;
    private $username;
    private $password;
    private $database;

    private $conn;

    public function __construct($servername, $username, $password, $database) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connect();
    }

    public function __destruct(){
        $this->disconnect();
    }

    public function query($sql) {
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result , MYSQLI_ASSOC);
    }

    private function connect() {
        $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        if (!$conn) {
            die('Connection failed: ' . mysqli_connect_error());
        }
        $this->conn = $conn;
        $this->querySelect($conn);
    }

    private function querySelect($conn){
        $sql = "SELECT * FROM pokemon";
		
		

		$result = $conn->query($sql);
        /*
		if ($result->num_rows > 0) {
			// output data of each row
			while ($row = $result->fetch_assoc()) {
				echo "id: " . $row["id"] . " - Name: " . $row["nombre"];
			}
		} else {
			echo "0 results";
		}
        */
    }


    private function disconnect() {
        mysqli_close($this->conn);
    }

}


<?php
$email = filter_input(INPUT_POST, 'email');
$pass = filter_input(INPUT_POST, 'pass');


			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "nsumail";
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error()){
				die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
			}
			else{
				$sql = "INSERT INTO register (email,pass)
				values ('$email','$pass')";
				if ($conn->query($sql)){
					header("Location:index.php");
				}
				else{
					echo "Error: ". $sql ."". $conn->error;
				}
				$conn->close();
			}

?>
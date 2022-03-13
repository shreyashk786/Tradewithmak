
		<?php

		$user = 'root';
        $password = ''; 
        $database = 'tradewithmak'; 
        $servername='localhost';
        $mysqli = new mysqli($servername, $user, $password, $database) or die("Unable to connect");
		
		if ($mysqli->connect_error) {
            die('Connect Error (' . 
            $mysqli->connect_errno . ') '. 
            $mysqli->connect_error);
        }
		
        $uname = $_REQUEST['uname'];
        $username = $_REQUEST['usrnm'];
        $address = $_REQUEST['addr'];
        $phone = $_REQUEST['phn'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['dob'];
		
        $sql = "INSERT into userdashboard values('$uname','$username','$address','$phone','$email','$dob')";
		
		if(mysqli_query($mysqli, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
            echo '<script>window.location.href = "index.php";</script>';
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($mysqli);
		}		
		mysqli_close($mysqli);
		?>
	<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "college");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$student_name = $_REQUEST['box1'];
		$dob = $_REQUEST['box2'];
		$address = $_REQUEST['box3'];
		$mob_no = $_REQUEST['box4'];
		$email = $_REQUEST['box5'];
        $password=$_REQUEST['box6'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO college VALUES ('$student_name',
			'$dob','$address','$mob_no',$email','$password');
		
		if(mysqli_query($conn, $sql)){
			echo success;

			echo nl2br($'student_name' $'dob' $'address' $mob_no $'email' $'password');
		} else{
			echo mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
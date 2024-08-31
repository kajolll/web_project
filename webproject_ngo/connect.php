<?php
	
		$fname=filter_input(INPUT_POST, "fname");
		$lname=filter_input(INPUT_POST, "lname");
		$email=filter_input(INPUT_POST, "email");
		$phno=filter_input(INPUT_POST, "phno");
		$sex=filter_input(INPUT_POST, "sex");
		$pwd=filter_input(INPUT_POST, "pwd");
		if(!empty($fname) && !empty($lname) && !empty($sex) && !empty($email) && !empty($phno) && !empty($) &&  !empty($pwd) 	
		{
			$hostname = "localhost";
			$username1 = "root";
			$password1 = "";
			$dbname = "ngo";
			$conn=new mysqli($hostname, $username1, $password1 ,$dbname);
			if(mysqli_connect_error())
			{
				die("could not connect to database,ERROR: ".mysqli_connect_error());
			}
			else
			{
				$sql= "INSERT INTO customer(first_name,last_name,email_id,ph_no,gender,password) VALUES('$fname','$lname','$email','$phno','$sex','$pwd')";
				if($conn->query($sql))
				{
					echo "inserted successfully"; 
				}
				else
				{
					echo "error: ".$sql ."".$conn->error;
				}
				$conn->close();
			}
		}
		else
		{
		echo "fields empty";
		die();
		}
?>
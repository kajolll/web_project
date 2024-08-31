<?php

//processing form

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$address=$_POST['Cust_address'];
$email=$_POST['Email'];
$cust_ph=$_POST['Cust_phno'];
$username=$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];

	if(!empty($fname) && !empty($lname) && !empty($gender) && !empty($address) && !empty($email) && !empty($cust_ph) && !empty($username) && !empty($password) && !empty($password2)){

		include('new.php');
		if($password === $password2){
			mysqli_query($dbc, "INSERT INTO customer(f_name,l_name,gender,cust_address,cust_email,cust_phno) VALUES('$fname','$lname','$gender','$address','$email','$cust_ph')");
			  $i = mysqli_query($dbc, "SELECT customer_id FROM customer where f_name='$fname'");
  $row1 = mysqli_fetch_array($i);
  $sno = $row1['customer_id'];
			mysqli_query($dbc, "INSERT INTO log_in(sno,Username,Password) VALUES('$sno','$username','$password')");
			echo "username and password created"; 
		
		$registered = mysqli_affected_rows($dbc);
		echo $registered." row is affected, everything worked fine! Customers infomation recorded.";
		 echo'<script>alert("YOUR DETAILS RECORDED")</script>';
            header("refresh:0.4;url=hom_pg.html");
	}

	}else{
		echo "<p style='color:red;'>ERROR: please fill all values of form</p>";
	}


}else{

	echo"NO form has been submitted. Please complete the form.";
}

?>
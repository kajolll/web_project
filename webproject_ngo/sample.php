<?php
	mysql_connect("localhost","root","");
	mysql_select_db("ngo");
	if(isset($_REQUEST("submit")))
	{
		$user=$_REQUEST("user");
		$pass=$_REQUEST("pass");
		$query=mysql_query("select * from volunteer where email_id='$user'&& password='$pass' ");
		$rc=$mysql_num_rows($query);
		if($rc==true)
		{
			header('Location: home.html');
		}
		else
		{
			echo "<script type='text/javascript'>alert('LOGIN FAILED!!')</script>";
		}
	}
?>
<form>
				<input type="text" id="usr" name="user" placeholder="Enter Email" required />
				<br/><br/><br/>
				<input type="password" id="pwd" name="pass" placeholder="Enter password"/>
				<br/><br/><br/>
				<input type="submit" name="login-button" value="LOGIN" />
				<br/><br/><br/><br/><br/>
				<h4> Don't have an account?</h4>
				<a href="signup.html"><h5>Sign up now!</h5>
				</a>
			</form>
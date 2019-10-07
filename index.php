<?php
//require('dbconn.php');
require_once('Dao/connection.php');
?>


<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>BusKaro</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="BusKaro, 24x7 Institute Bus Booking Portal" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->
	<!-- JQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>BusKaro</h1>
	<h3>Book Bus Tickets On The Go</h3>

	<br>

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="Dao/userLogin.php" method="post">
				<p> Sign In As </p>
				<select name="Type" id="type">
					<option value="Student">Student</option>
					<option value="Faculty">Faculty</option>
					<option value="Staff">Staff</option>
					<!--<option value="Guest">Guest</option>-->
				</select>
				<br>
				<br>
				<input type="number" Name="UserID" placeholder="User ID" required="">
				<input type="password" Name="Password" placeholder="Password" required="">

				<div class="send-button">
					<!--<form>-->
						<input type="submit" name="signin" value="Sign In">
				</div>
			</form>
			<div class="clear"></div>
		</div>

		<div class="register">
			<h2>Sign Up</h2>
			<form action="Dao/userLogin.php" method="post">
				<p> Sign Up As </p>
				<select name="Type" id="Type">
					<option value="Student">Student</option>
					<option value="Faculty">Faculty</option>
					<option value="Staff">Staff</option>
					<!--<option value="Guest">Guest</option>-->
				</select>
				<br> <br>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#Type').on('change', function(){
							if(this.value == 'Faculty'){
								$("#batch").hide();
								$("#dept").show();
							}
							else if(this.value == 'Staff'){
								$("#batch").hide();
								$("#dept").hide();
							}
							else if(this.value == 'Student'){
								$("#batch").show();
								$("#dept").show();
							}
						});
					});
				</script>
				<input type="number" Name="UserID" placeholder="User ID" required="">
				<input type="text" Name="Name" placeholder="Name" required>
				<input type="password" Name="Password" placeholder="Password" required>
				<div id='batch'>
				    <input type="number" Name="Batch" placeholder="Batch">
				</div>
				<div id = 'dept'>
				<p> Department </p>
				<select name="Dept" id="Dept">
					<option value="CSE">CSE</option>
					<option value="ECE">ECE</option>
					<option value="ME">ME</option>
					<option value="NS">NS</option>
				</select>
				</div>

				<br>

				<p> Blood Group </p>
				<select name="BloodG" id="BloodG">
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>

				<br><br>

                <div class="send-button">
                    <input type="submit" name="signup" value="Sign Up">
                </div>
            </form>
			<p>By creating an account, you agree to our <a class="underline" href="tandc.php">Terms</a></p>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	<div class="footer w3layouts agileits">
    	<p><span class="copyleft">&copy;</span> 2018 BusKaro. </a></p>
		<p><a class="underline" href="aboutus.php">About the Project</a></p>
	</div>

<?php



/*
if(isset($_POST['signup']))
{
	$userID=$_POST['UserID'];
	$password=md5($_POST['Password']);
	$name=$_POST['Name'];
	$batch=$_POST['Batch'];
	$dept=$_POST['Dept'];
	$bloodG=$_POST['BloodG'];
	$type=$_POST['Type'];

	$conn->query('SET autocommit = OFF;');

	$sql0 = "START TRANSACTION;";
	$sql1="INSERT INTO buskaro.passenger (ID,Type,Pwd) VALUES ('$userID','$type','$password');";
	if($type=='Student')
	{
		$sql2="INSERT INTO buskaro.student (RollNo, SName, Batch, Branch, BloodG) VALUES ('$userID','$name', '$batch', '$dept', '$bloodG');";
	}
	else if($type=='Faculty')
		$sql2="INSERT INTO buskaro.faculty (FID, FName, Dept, BloodG) VALUES ('$userID','$name', '$dept', '$bloodG');";
	else if($type=='Staff')
		$sql2="INSERT INTO buskaro.staff (EID, EName, BloodG) VALUES ('$userID','$name','$bloodG');";
	//else if($type=='Guest')
	//	$sql2="INSERT INTO buskaro.guest (GID, GName, Batch, Branch, DoB, BloodG) VALUES ('$userID','$name', '$batch', '$dept', '$bloodG');";
	if (($conn->query($sql0) === TRUE) && ($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) ){
		echo "<script type='text/javascript'>alert('Registration Successful')</script>";
		$conn->query('COMMIT;');
	} else {
		$conn->query('ROLLBACK;');
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<script type='text/javascript'>alert('User Exists ".$conn->error."')</script>";
	}
}
*/
?>

</body>
<!-- //Body -->

</html>

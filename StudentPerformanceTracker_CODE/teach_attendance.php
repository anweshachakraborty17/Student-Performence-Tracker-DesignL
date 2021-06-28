<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Portal</title>
    <link rel="stylesheet" href="design.css">
     <link rel="stylesheet" href="navigation.css">
</head>
<body>
	<div class="main_container" id="home">

	<div class="navbar">
	    <div class="logo">
			<a href="#">Student Performance Tracker</a>
		</div>
		    <div class="navbar_items">
			  <ul>
				<li><a href="home.php">LOGOUT</a></li>
			    <li><a href="home.php">CONTACT US</a></li>
			    <li><a href="teach_login.php">TEACHER</a></li>
			    <li><a href="home.php">HOME</a></li>
			  </ul>
		    </div>
	</div> 
<div class="banner_image">
        <div class="form-box">
        	<div class="button-box">
                <div>
                <h2><center>Update Attendance</center></h2></div>
                </div>
	<form method="POST">
		<input type="text" name="stud_id" id="stud_name" class="input-field" placeholder="Enter Student ID" required>
		<input type="text" name="sub_id" id="stud_name" class="input-field" placeholder="Enter Subject ID" required>
		<div>
			<select id="month" name="month" class="input-field" required>
				<option value="Select a Month" selected>Select a Month</option>
				<option value="January">January</option>
				<option value="February">February</option>
				<option value="March">March</option>
				<option value="April">April</option>
				<option value="May">May</option>
				<option value="June">June</option>
				<option value="July">July</option>
				<option value="August">August</option>
				<option value="September">September</option>
				<option value="October">October</option>
				<option value="November">November</option>
				<option value="December">December</option>
            </select>
		</div>
		<input type="number" name="total" id="total"class="input-field" placeholder="Enter Total Attendance" required>
		<input type="number" name="attendance" id="attendance"class="input-field" placeholder="Enter Attendance" required>
		<div>
        <button type="submit" name="submit" value="Submit" class="submit-btn"> Submit </button>
        </div>
	</form>


	<!-- Create/Insert data into db  -->
	<?php
	                 
	$host = 'localhost';  
	$username = 'root';  
	$password = '';
	$dbname='spt';
	$conn=mysqli_connect ($host , $username , $password) or die("unable to connect to host");  
	mysqli_select_db ($conn,"spt") or die("unable to connect to database");

	if (isset($_POST['submit'])) {
		$stud_id = $_POST['stud_id'];
		$sub_id = $_POST['sub_id'];
		$month = $_POST['month'];
		$total = $_POST['total'];
		$attendance = $_POST['attendance'];
		

		//checking before inserting is it exist in db or not
		$sql = "SELECT * FROM `attendance` WHERE stud_id='$stud_id' AND sub_id='$sub_id' AND month='$month'";
		$result = $conn->query($sql);

		//if these not exist then create
		if ($result->num_rows == 0) {
			// output data of each row

			$sql = "INSERT INTO attendance (stud_id, sub_id, month, total, attendance)VALUES ('$stud_id', '$sub_id', '$month', '$total', '$attendance')";
			if ($conn->query($sql) === TRUE)
				echo "<script>alert('submitted successfully')</script>";
			else
				echo "<script>alert('not submitted')</script>";
		} else {
			echo "<script>alert('Already updated')</script>";
		}
	}
	?>

</div>
</div>
</body>

</html>
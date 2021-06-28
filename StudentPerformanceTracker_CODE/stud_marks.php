<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
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
          <li><a href="stud_login.php">STUDENT</a></li>
          <li><a href="home.php">HOME</a></li>
        </ul>
        </div>
  </div> 
	<div class="banner_image">
        <div class="form-box">
        	<div class="button-box">
                <div>
                <h2><center>View Result</center></h2></div>
                </div>
	     <form method="POST" action="marks_chart.php">
            <input type="text" name="stud_id" id="stud_name" class="input-field" placeholder="Student ID" required>
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
		<div>
        <button type="submit" name="submit" value="Submit" class="submit-btn"> Submit </button>
    </div>
	</form>

	<!-- <form method="POST" action="marks_chart.php">
		<p>
		<p><input placeholder="* Enter Student ID" type="text" name="stud_id" required></p>

		<div>
			<label for="month">Select Month:</label>
			<select id="month" name="month">
				<option value="January" selected>January</option>
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
		<input type="submit" name="submit" value="Submit">
		</p>
	</form> -->
	</div>
</div>
</body>

</html>
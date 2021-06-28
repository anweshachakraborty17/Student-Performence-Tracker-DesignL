<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="portal.css">
</head>
<body>
	<!--Welcome-->
    <div class="main_container" id="home">
	
	<div class="navbar">
		<div class="logo">
			<a href="#">Student Performance Tracker</a>
		</div>
		<div class="navbar_items">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="admin_login.php">Admin</a></li>
			    <li><a href="home.php">Contact Us</a></li>
			    <li><a href="home.php">logout</a></li>
			</ul>
		</div>
	</div>

	<div class="banner_image">
	<button type="submit" onclick="location.href='teach_details.php'"class="submit-btn bb1"><b>TEACHER DETAILS</b></button>
    <button type="submit" onclick="location.href='stud_details.php'"class="submit-btn bb2"><b>STUDENT DETAILS</b></button>


	</div>
</div>
</body>
</html>
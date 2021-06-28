<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Desk</title>
    <link rel="stylesheet" href="layout.css">
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
          <li><a href="admin_login.php">ADMIN</a></li>
          <li><a href="home.php">HOME</a></li>
        </ul>
        </div>
  </div> 
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div>
                <h2><center>Admin Login</center></h2></div>
               
            </div>
                <form id="login" class="input-group" action="validation_a.php" method="post">
                      <input type="email" name="admin_email" id="admin_email" class="input-field" placeholder="User Id" required> 
                      <input type="text" name="admin_password" id="admin_password" class="input-field" placeholder="Enter Password" required>
                      <input type="checkbox" class="chech-box"><span>Remember Password</span>
                      <button type="submit" class="submit-btn"> Login </button>
                </form>
                
              </div>
            </div>

</body>

</html>
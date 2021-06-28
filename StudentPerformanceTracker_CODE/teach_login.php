<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Desk</title>
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
          <li><a href="teach_login.php">TEACHER</a></li>
          <li><a href="home.php">HOME</a></li>
        </ul>
        </div>
  </div> 
<div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
                <form id="login" class="input-group" action="validation_t.php" method="post">
                      <input type="email" name="t_email" id="t_email" class="input-field" placeholder="User Id" required> 
                      <input type="text" name="t_password" id="t_password" class="input-field" placeholder="Enter Password" required>
                      <input type="checkbox" class="chech-box"><span>Remember Password</span>
                      <button type="submit" class="submit-btn"> Login </button>
                </form>
          <form id="register" class="input-groupss" action="reg_t.php" method="post">
          <input type="text" name="t_name" id="t_name" class="input-field" placeholder="Teacher Name" required>
          <input type="text" name="sub_id" id="sub_id" class="input-field" placeholder="Subject Code" required>
          <input type="text" name="sub_name" id="sub_name" class="input-field" placeholder="Subject Name" required>
          <input type="text" name="t_phno" id="t_phno" class="input-field" placeholder="Contact No" required>
          <input type="email" name="t_email" id="t_email" class="input-field" placeholder="Email" required> 
          <input type="password" name="t_password" id="t_password" class="input-field" placeholder="Enter Password" required>
          <button type="submit" class="submit-btn"> Submit </button>
        </form>
        </div>
        </div>

<script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");
    function register() {
    x.style.left = "-400px";
    y.style.left= "50px";
    z.style.left = "110px";
}
    function login() {
    x.style.left = "50px";
    y.style.left= "450px";
    z.style.left = "0px";
}
</script>


</body>

</html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <link rel="stylesheet" href="chart.css">
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
    <div class="banner_image">
        <div class="form-box">
          <div class="button-box">
                <div>
                <h2><center>Marks Chart</center></h2></div>
                </div>
<?php
$con = mysqli_connect("localhost", "root", "", "spt");
if($con){
  echo "";
}
else{
  echo "Connection Error...";
}
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="chart_div"></div>
<script>
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawColColors);

function drawColColors() {
    var data = google.visualization.arrayToDataTable([
        ['sub_id', 'total','marks'],
        <?php
         $stud_id = $_POST['stud_id'];
         $month = $_POST['month'];
        $sql = "select * from `result` where stud_id='$stud_id' and month='$month'";
        $fire = mysqli_query($con,$sql);
        if($fire->num_rows !=0){
        while($result = mysqli_fetch_assoc($fire)){
          echo "['".$result['sub_id']."',".$result['total'].",".$result['marks']."],";
        }
      }
      else{
          echo "Not Present";
      }
        ?>
        
      ]);

var options = {
title: 'Students Marks ',
// colors: ['#9575cd', '#33ac71'],
hAxis: {
title: 'Subject Code'
},
vAxis: {
title: 'Marks'
}
};

var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
chart.draw(data, options);
}

</script>
  </div>
</div>
</body>

</html>
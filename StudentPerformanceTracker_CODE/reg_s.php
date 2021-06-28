
<?php
error_reporting(0);
header('location:stud_login.php');
session_start();
$con = mysqli_connect('localhost', 'root');
if ($con) {
    // echo "connection successul";
    mysqli_select_db($con, 'spt');
    $stud_name = $_POST['stud_name'];
    $stud_id = $_POST['stud_id'];
    $stud_year = $_POST['stud_year'];
    $stud_sem = $_POST['stud_sem'];
    $stud_dept = $_POST['stud_dept'];
    $stud_phno = $_POST['stud_phno'];
    $stud_email = $_POST['stud_email'];
    $stud_password = $_POST['stud_password'];

    $sql = "select * from `spt`.`student_login` where `stud_email` = '$stud_email' && `stud_password` = '$stud_password'";
    $result = mysqli_query($con, $sql);

    $num = $result->num_rows;

    if ($num==1) {
        echo "duplicate data";
    } else {
        $qy = "insert into `spt`.`student_login`
    (`stud_id`,`stud_name`,`stud_year`,`stud_sem`,`stud_dept`,`stud_phno`,`stud_email`,`stud_password`) 
    values('$stud_id','$stud_name','$stud_year','$stud_sem','$stud_dept','$stud_phno','$stud_email','$stud_password')";
        mysqli_query($con, $qy);
    }
} else {
    echo "connection error";
}
?>
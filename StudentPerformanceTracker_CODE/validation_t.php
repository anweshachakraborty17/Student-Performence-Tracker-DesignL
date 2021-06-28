
<?php
// error_reporting(0);
// header('location:home.php');
session_start();
$con = mysqli_connect('localhost', 'root');
if ($con) {
    // echo "connection successfull";

    mysqli_select_db($con, 'spt');
    $t_email = $_POST['t_email'];
    $t_password = $_POST['t_password'];

    $sql = "select * from `spt`.`teacher_login` where `t_email` = '$t_email' and `t_password` = '$t_password'";
    $result = mysqli_query($con, $sql);

    // $num = mqsqli_num_rows($result);
    $num = $result->num_rows;

    if ($num == 1) {
        echo "Successfully login";
        header('location:teach_portal.php');
    } else {
        header('location:teach_login.php');
    }
} else {
    echo "no connection";
}

?>
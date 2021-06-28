<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>

<body>

    <div>
        <h2>SignIn Form</h2>
        <form action="reg_t.php" method="post">
            <div>
                <label for="t_name">Name</label>
                <input type="text" name="t_name" id="t_name">
            </div>
            <div>
                <label for="sub_id">Subject code</label>
                <input type="text" name="sub_id" id="sub_id">
            </div>
            <div>
                <label for="sub_name">Subject name</label>
                <input type="text" name="sub_name" id="sub_name">
            </div>
            <div>
                <label for="t_phno">Phone no.</label>
                <input type="number" name="t_phno" id="t_phno">
            </div>
            <div>
                <label for="t_email">Email</label>
                <input type="email" name="t_email" id="t_email">
            </div>
            <div>
                <label for="t_password">Password</label>
                <input type="password" name="t_password" id="t_password">
            </div>
            <button type="submit">Signin</button>
        </form>
    </div>
</body>

</html>
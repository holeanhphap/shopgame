<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Gender = $_POST['gender'];
        $num = $_POST['number'];
        $address = $_POST['add'];
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {

            $query = "insert into shopgame (fname, lname, gender, cnum, address, email, pass) values ('$firstname', '$lastname', '$Gender', '$num', '$address', '$gmail', '$password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Đăng kí thành công.')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signup.css  ">
    <title>Đăng kí</title>
</head>
<body>
    <div class="signup">
        <h1>Đăng kí</h1>
        <h4>Đăng kí miễn phí</h4>
        <form method="POST">
            <label>Họ:</label>
            <input placeholder="Nhập tại đây." type="text" name="fname" required>
            <label>Tên:</label>
            <input placeholder="Nhập tại đây." type="text" name="lname" required>
            <label>Giới tính:</label>
            <input placeholder="Nhập tại đây." type="text" name="gender" required>
            <label>Số điện thoại:</label>
            <input placeholder="Nhập tại đây." type="tel" name="number" required>
            <label>Địa chỉ:</label>
            <input placeholder="Nhập tại đây." type="text" name="add" required>
            <label>E-mail:</label>
            <input placeholder="Nhập tại đây." type="email" name="mail" required>
            <label>Mật khẩu:</label>
            <input placeholder="Nhập tại đây." type="password" name="pass" required>
            <input placeholder="Nhập tại đây." type="submit" name="" value="submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our <br>
            <a href="#">Terms and Condition</a>anh <a href="#">Policy Prevaci</a>
        </p>
        <p>Bạn đã có tài khoản<a href="./login.php"> Đăng nhập tại đây</a></p>
    </div>
</body>
</html>
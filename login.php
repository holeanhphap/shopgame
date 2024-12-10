<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail = $_POST['mail'];
        $password = $_POST['pass'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from shopgame where email = '@gmail' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        header("location: index.php");
                        die;
                    }
                }
            }
            echo "<script type='text/javascript'> alert('Tên người dùng hoặc mật khẩu sai.')</script>";
        }
        else{
            echo "<script type='text/javascript'> alert('Tên người dùng hoặc mật khẩu sai.')</script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./signup.css  ">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="login">
        <h1>Đăng nhập</h1>
        <form method="POST">
            <label>E-mail:</label>
            <input placeholder="Nhập tại đây." type="email" name="mail" required>
            <label>Mật khẩu:</label>
            <input placeholder="Nhập tại đây." type="password" name="pass" required>
            <input placeholder="Nhập tại đây." type="submit" name="" value="submit">
        </form>
        <p>Not have an account? <a href="./signup.php">Sign Up here</a></p>
</body>
</html>
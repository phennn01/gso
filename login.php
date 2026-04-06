<?php
session_start();
include("db_connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password)){
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);
    if($result) {}
        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] === $password){
                $_SESSION['user_id'] = $user_data['user_id'];
                header("Location: index.php");
                die;
            }
        }
        
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center; /* horizontal */
            align-items: center;     /* vertical */
            background-color: #0f172a;
            font-family: Arial, sans-serif;
        }

        .box {
            background: #1e293b;
            padding: 30px;
            width: 300px;
            border-radius: 10px;
            text-align: center;
        }

        .input {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            background: #3b82f6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background: #2563eb;
        }
    </style>
</head>

<body>

<div class="box">
    <form method="post" action="login.php">
        <h2 style="color:white;">Login</h2>

        <input class="input" type="text" name="user_name" placeholder="user_name">
        <input class="input" type="password" name="password" placeholder="password">

        <input class="btn" type="submit" value="Login">

        <input type="button" type="sign up">
        <a href="signup.php">signup</a>
    </form>
</div>

</body>
</html>


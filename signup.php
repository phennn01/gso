<?php
session_start();
include("db_connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password']; 

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $user_id = random_num(20); 

        $query = "insert into users (user_id,user_name,password) values 
('$user_id','$user_name','$password')"; 
             mysqli_query($con, $query); 


        header("Location: login.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}
?>


 
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center; /* horizontal center */
            align-items: center;     /* vertical center */
            background-color: #0f172a;
            font-family: Arial, sans-serif;
        }

        #box {
            background-color: #1e293b;
            padding: 30px;
            width: 300px;
            border-radius: 10px;
            text-align: center;
        }

        #text {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        #button {
            width: 100%;
            padding: 10px;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #button:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>

<div id="box">  
    <form method="post"> 
        <div style="font-size: 20px; margin: 10px; color: white;">Signup</div>  

        <input class="input" type="text" name="user_name" placeholder="Username"><br><br>
    <input class="input" type="password" name="password" placeholder="Password"><br><br>
    <input class="button" type="submit" value="Save"><br><br> 
    <a href="login.php"></a>

    </form> 
</div> 

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <title>User Registration and Login System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 50px;
            color: #333;
        }

        h2 {
            color: #555;
        }

        p {
            color: #777;
        }

        form {
            display: inline-block;
            margin-top: 20px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>User Registration and Login System</h1>

    <h2>Welcome!</h2>
    <p>Register or login to continue.</p>

    <!-- Button to register -->
    <form action="register.php" method="get">
        <input type="submit" value="Register">
    </form>

    <!-- Button to login -->
    <form action="login.php" method="get">
        <input type="submit" value="Login">
    </form>
</body>
</html>

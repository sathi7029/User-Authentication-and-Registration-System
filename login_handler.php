<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user inputs from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "user_auth");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve the user's hashed password from the database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row["password"];

        // Verify the entered password against the hashed password
        if (password_verify($password, $hashedPassword)) {
            echo "Login successful! Welcome, " . $username . "!";
        } else {
            echo "Invalid password. Please try again.";
        }
    } else {
        echo "Username not found. Please register first.";
    }

    // Close the connection
    mysqli_close($conn);
}
?>
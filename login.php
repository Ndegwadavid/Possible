<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // retrieve user input
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // perform validation on user input
    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all required fields";
    } else {
        // connect to database and insert user data
        $db_host = "localhost";
        $db_user = "your_database_username";
        $db_pass = "your_database_password";
        $db_name = "your_database_name";
        
        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Registration successful";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    }
}
?>

<?php
$servername = "localhost"; // Use the appropriate server name
$db_username = "root";     // Your database username
$db_password = "";         // Your database password
$dbname = "intellewrite_db"; // The name of your database

// Create a connection to the database
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pass = $_POST['password'];
    $confirm_pass = $_POST['confirm_password'];

    // Basic validation for empty fields
    if (empty($user) || empty($email) || empty($pass) || empty($confirm_pass)) {
        echo "All fields are required!";
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit();
    }

    // Validate if passwords match
    if ($pass !== $confirm_pass) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password for security
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sss", $user, $email, $hashed_password);

        // Execute the statement
        if ($stmt->execute()) {
            echo "Account created successfully!";
        } else {
            echo "Error: Unable to create account. Please try again later.";
        }

        $stmt->close();
    } else {
        echo "Error preparing the statement: " . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Intellewrite</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f4f4f4;
}

.account-container {
    background-color: #ffffff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 400px;
}

.logo-container img {
    width: 80px;
    height: auto;
}

h1 {
    font-size: 24px;
    color: #1a237e;
    margin: 20px 0 10px 0;
}

p {
    font-size: 14px;
    color: #1a237e;
    margin-bottom: 30px;
}

.input-group {
    margin-bottom: 20px;
    text-align: left;
}

label {
    display: block;
    margin-bottom: 5px;
    font-size: 14px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fce4ec;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #7b1fa2;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #4a148c;
}
</style>
<body>
    <div class="account-container">
        <div class="logo-container">
            <img src="intellewrite.png" alt="Intellewrite Logo">
        </div>
        <h1>INTELLEWRITE</h1>
        <p>Intellectual Writing Space</p>
        <form id="createaccount" method="POST" action="create-account.php">
            <div class="input-group">
                <label for="username">User Name</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <button type="submit" >Create a new account</button>
            
        </form>
       
    </div>


    

    <script src="javascript.js"></script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Example hard-coded credentials (replace with database logic if needed)
    $valid_username = 'user';
    $valid_password = 'pass';

    if ($username === $valid_username && $password === $valid_password) {
        echo "Welcome, " . htmlspecialchars($username);
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Intellewrite</title>
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

.login-container {
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

.create-account {
    display: block;
    margin-top: 20px;
    color: #1a237e;
    text-decoration: none;
    font-size: 14px;
}

.create-account:hover {
    text-decoration: underline;
}

    </style>
<body>
<script src="javascript.js"></script>
    <div class="login-container">
        <div class="logo-container">
            <img src="intellewrite.png" alt="Intellewrite Logo">
        </div>
        <h1>INTELLEWRITE</h1>
        
        <form id="loginForm" method="POST" action="login.php">
            <div class="input-group">
                <label for="username">User Name</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Log in/Sign up</button>
        </form>
        <a href="createaccount.php">Create a new account</a>
      </div>
    <script src="script.js"></script>
</body>
</html>
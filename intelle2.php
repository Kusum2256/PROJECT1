<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You can add authentication logic here.
    if ($username == 'user' && $password == 'pass') {
        echo "Welcome, " . $username;
    } else {
        echo "Invalid login credentials.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intellewrite</title>
   
</head>
<style>
    /* General styles */

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #4a148c; /* Blue color for the header */
        
        color: white;
    }

    header .logo {
        display: flex;
        align-items: center;
        background-color: white; /* White background for the logo */
        padding: 10px;
    
    }

    header .logo img {
        width: 50px;
        height: 50px;
    }

    header h1 {
        margin-left: 10px;
        font-size: 24px;
        color: #4a148c; /* Blue color for the text next to the logo */
    }

    header p {
        font-size: 12px;
        margin-left: 10px;
        color: #4a148c; /* Blue color for the slogan */
    }

    nav ul {
        list-style: none;
        display: flex;
        margin: 0;
    }

    nav ul li {
        margin-right: 20px;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-size: 16px;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }

    /* Main content */
    main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;
    text-align: right; /* Align text to the right */
     /* Reverse the order of content */
}
main .content {
    margin-right: 50px; /* Add some space between the text and the image */
}

main .content h2 {
    font-size: 32px;
    color: #333;
}

main .illustration img {
    width: 400px;
    margin-left: 20px; /* Add space between image and text */
}

   

    /* Footer */
    footer {
        text-align: center;
        background-color: #4a148c;
        color: white;
        padding: 10px 0;
        position: absolute;
        width: 100%;
        bottom: 0;
    }

    </style>
<body>
<script src="javascript.js"></script>
    <header>
        <div class="logo">
            <img src="intellewrite.png" alt="Intellewrite Logo">
            <h1>INTELLEWRITE</h1>
            <p>Intellectual Writing Space</p>
        </div>
        <nav>
            <ul>
            <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="post.php">Post</a></li>
                <li><a href="loginpage.php">Login</a></li>
            </ul>
        </nav>
        
    </header>
    <main>
    <h2>"Share and Explore Intellectual Content."</h2>
        <div class="content">
            
            <div class="illustration">
                <img src="intellewrite2.png" alt="Illustration of writing and exploring">
            </div>
        </div>
     
    </main>
    <footer>
        <p>&copy; 2024 Intellewrite</p>
    </footer>
</body>
</html>

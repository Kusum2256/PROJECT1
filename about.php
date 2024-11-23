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



   
h1, h2 {
    color: #333;
}

p {
    color: #666;
    line-height: 1.6;
}

ul {
    list-style: square inside;
    margin-top: 10px;
}

ul li {
    color: #444;
    margin-bottom: 8px;
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
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="post.php">Post</a></li>
                <li><a href="loginpage.php">Login</a></li>
            </ul>
        </nav>
        
    </header>
    <section class="about-section">
        <div class="container">
            <h1>About INTELLEWRITE</h1>
            <div class="content">
                <h2>Introduction to INTELLEWRITE</h2>
                <p><strong>Platform Overview:</strong> INTELLEWRITE is an innovative space designed to enhance and support creative writing, academic writing, or any intellectual composition.</p>
                <p><strong>Target Audience:</strong> Writers, students, researchers, and anyone passionate about crafting quality content.</p>
                <p><strong>Mission Statement:</strong> Empower users by providing tools and resources for intellectual growth and skill development in writing.</p>

                <h2>Key Features of INTELLEWRITE</h2>
                <ul>
                    <li>Writing Tools: Grammar check, plagiarism check, and style suggestions.</li>
                    <li>Collaboration: Users can collaborate with peers, share drafts, and receive feedback.</li>
                    <li>Personalized Space: Create a personalized writing space, store drafts, and track progress.</li>
                    <li>Topic Suggestions: Brainstorm topics for intellectual or creative writing.</li>
                </ul>

                <h2>Why INTELLEWRITE?</h2>
                <p><strong>Skill Development:</strong> Helps users improve writing, critical thinking, and research skills.</p>
                <p><strong>Community Engagement:</strong> Encourages discussion and intellectual exchange in a community of like-minded individuals.</p>
                <p><strong>Resources and Support:</strong> Access to writing guides, workshops, and expert advice.</p>

                <h2>Our Vision and Values</h2>
                <p><strong>Vision:</strong> To foster a global community of writers who thrive on creativity, intellect, and continuous learning.</p>
                <p><strong>Core Values:</strong> Integrity, innovation, collaboration, and the pursuit of excellence in writing.</p>

                <h2>Testimonials</h2>
                <p>“INTELLEWRITE has significantly improved my writing skills, and I’ve received valuable feedback from other users!” - User A</p>
                <p>“The personalized space feature helps me keep my work organized and on track.” - User B</p>

                <h2>Call to Action</h2>
                <p>Join INTELLEWRITE today and start your writing journey with our innovative tools and community support!</p>
                <button onclick="joinNow()">Join Now</button>
            </div>
        </div>
    </section>
    <script src="script.js"></script>

    
</body>
</html>

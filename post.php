
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = $_POST['content'];
    $file = $_FILES['file'];

    // Check if content is empty
    if (empty($content)) {
        echo "Please enter some content.";
        exit;
    }

    // Check if a file was uploaded without errors
    if ($file['error'] == 0) {
        $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
        $fileType = mime_content_type($file['tmp_name']); // Get the MIME type of the file

        // Validate file type
        if (in_array($fileType, $allowedTypes)) {
            $uploadDir = "uploads/";
            $uploadFile = $uploadDir . basename($file["name"]);

            // Move the uploaded file
            if (move_uploaded_file($file["tmp_name"], $uploadFile)) {
                echo "File uploaded successfully.";
            } else {
                echo "Failed to upload the file.";
            }
        } else {
            echo "Invalid file type. Only .jpg, .png, and .pdf files are allowed.";
        }
    } else {
        echo "No file uploaded or an error occurred.";
    }

    // Saving content (for demonstration, echoing content)
    echo "<h3>Your post:</h3>";
    echo nl2br(htmlspecialchars($content));
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intellewrite - Intellectual Writing Space</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: white;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0px 0px 3px blue;
    text-align: center;
    width: 600px;
}

header {
    margin-bottom: 20px;
}

header .logo {
    display: inline-block;
}

h1 {
    color: #303F9F;
    margin-bottom: 5px;
}

p {
    color: #666;
    font-size: 14px;
}

.quote {
    font-style: italic;
    color: #888;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

textarea {
    width: 100%;
    height: 250px;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    resize: none;
}

input[type="file"] {
    margin-bottom: 15px;
}

button {
    background-color: #1976D2;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #1565C0;
}

    </style>
<body>
  <script src="javascript.js"></script>
    <div class="container">
        <header> 
            <div class="logo">
                <img src="intellewrite.png" alt="Intellewrite Logo" width="60">
            </div>
            <h1>INTELLEWRITE</h1>
            <p>Intellectual Writing Space</p> 
        </header>

        <div class="quote">
            <p>"Let your thoughts flow freely, trusting that your inner voice will guide the pen."</p>
        </div>

        <form action="submit_post.php" method="POST" enctype="multipart/form-data">
            <textarea name="content" placeholder="Write your content ..."></textarea>
            <input type="file" name="file" accept=".jpg, .jpeg, .png, .pdf">
            <button type="submit">Submit Post</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

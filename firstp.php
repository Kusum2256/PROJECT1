<!DOCTYPE html>

<html lang="en">
  
  <head>
    <style>
        body {
    font-family: Arial, sans-serif;
    
    margin: 0;
    padding: 20px;
}



h1 {
    text-align: center;
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border-radius: 4px;
    border: 2px solid purple;
}

button {
    margin-top: 15px;
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

#responseMessage {
    margin-top: 20px;
    text-align: center;
}
img{
    width: 5%;
    padding: 10px;
    margin-top: 5px;
}

        </style>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blog Using PHP And MySQL</title>

    <link rel="stylesheet" href="styles/style.css">

  </head>

  <body>
  <img src= "intellewrite.png" > 

    <div class="top-bar">
  
      <span id="topBarTitle">Blog | New Post</span>

    </div>

    <div class="writing-section">

      <form action="blog_post_process.php" method="POST" enctype="multipart/form-data">

        <input id="blogTitle" name="blogtitle" type="text" placeholder="Blog Title..." autocomplete="off">
        
        <br>
        
        <span id="dateLabel">Date: </span>
        
        <input id="blogDate" name="blogdate" readonly></input>
        
        <br><br>
        
        <input type="file" name="uploadimage">
        
        <br><br>
       
      
        <textarea id="blogPara" name="blogpara" cols="75" rows="10" type="text" placeholder="Blog Paragraph..."   autocomplete="off"></textarea>

        <br><br>
        
        <button id="saveBtn" type="submit">Save Post</button>

      </form>

      <br>

      <center><a style="text-decoration: none;" href="index.php" id="saveBtn">Go to Home Page</a></center>
      
    </div>

    <script src="scripts/script.js"></script>

  </body>
  
</html>


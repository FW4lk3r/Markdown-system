<?php 

    //table

    //inserting data to database

    //connection to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "markdown-system";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";


    //verify the form
    if($_POST['submit']){

        //get the text
        $title = htmlspecialchars($_POST['title']);
        $comment = htmlspecialchars($_POST['comment']);

        //insert into database
        $query = "INSERT INTO XXXXXX () VALUES ();";
        mysqli_query($conn, $query);

        //redirect
        header("Location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Markdown System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
</head>
<body>
    
    <form action="#" method="post">
        <input type="text" name="title" placeholder="Title">
        <textarea name="comment" id="teste" cols="30" rows="10" placeholder="Your comment"></textarea>
        <button type="submit">Send your comment</button>
    </form>

    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde =  new SimpleMDE({ element: document.getElementById("teste") });
    </script>
</body>
</html>
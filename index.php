<?php 

    //data of the database

    //table

    //inserting data to database

    //connection to database

    //verify the form
    if($_POST['submit']){

        //get the text

        //insert into database

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
        <textarea name="teste" id="teste" cols="30" rows="10" placeholder="Your comment"></textarea>
        <button type="submit">Send your comment</button>
    </form>

    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde =  new SimpleMDE({ element: document.getElementById("teste") });
    </script>
</body>
</html>
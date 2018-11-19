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
    
        <textarea name="teste" id="teste" cols="30" rows="10" placeholder="écrivez ici"></textarea>
    </form>

    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde =  new SimpleMDE({ element: document.getElementById("teste") });
    </script>
</body>
</html>
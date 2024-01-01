<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>It's Working home</h1>

    <form action="<?php echo site_url('home/newUser');?>" method="post">

<input type="text" placeholder="Enter the text" name="email">
<button type="submit">submit</button>


    </form>
</body>
</html>
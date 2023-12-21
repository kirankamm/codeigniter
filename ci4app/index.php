<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php var_dump($data ['name']) ?>
<?php for($i=0; $i<count($data['name']); $i++): ?>
     <h1><?php echo $data['name'] [$i] ?> </h1>

     <?php endfor; ?>

  <h1> This is index web page <h1>  


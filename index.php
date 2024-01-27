<?php 
include_once './pages/header.php';
$header = new Header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>
<body>
    <?php $header->render();?>
    <main>This is the new </main>
</body>
</html>
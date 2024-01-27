<?php 
include_once 'header.php';
$header = new Header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/main.css">
    <script src="./scripts/main.js" type="text/javascript"></script>
</head>
<body>
    <?php $header->render();?>
</body>
</html>
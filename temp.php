<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <?php
            $linksList = array("Home","Tabs","Pages","Account");
            for($i = 0; $i < count($linksList); $i++)
            {
                ?>
                <a href="#"><?php echo $linksList[$i] ?></a>
                <?php
            }
            ?>
        </nav>
    </header>
</body>
</html>
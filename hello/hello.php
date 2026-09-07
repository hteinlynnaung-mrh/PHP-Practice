<?php
    $mode = "dark";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <h1>Hello PHP</h1>
    <?php if($mode == "dark") : ?> <!-- alternate writing way for php and html-->
        <div style="padding: 20px; background: #222; color: white">
            Lorem ipsum dolor sit amet.
        </div>
    <?php else : ?> <!-- no need to use { } use : -->
        <div style="padding: 20px; background: #ddd; color: black">
            Lorem ipsum dolor sit amet.
        </div>
    <?php endif ?>  <!-- no need to put ; for only one line -->

</body>
</html>
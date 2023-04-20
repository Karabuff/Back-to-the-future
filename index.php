<?php

$presentTime = new Datetime;

$destinationTime = new DateTime('2025-06-09 17:06:00');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>

<body>

<p>DESTINATION TIME</p>
    <div class=time>
    <div>
            <p>Month</p>
            <p><?php echo $destinationTime->format('M') ?></p>
        </div>
        <div>
            <p>Day</p>
            <p><?php echo $destinationTime->format('d') ?></p>

        </div>

        <div>
            <p>year</p>
            <p><?php echo $destinationTime->format('Y') ?></p>
        </div>

        <div>

            <p><?php echo $destinationTime->format('A') ?></p>
        </div>
        <div>
            <p>HOUR</p>
            <p><?php echo $destinationTime->format('h') ?></p>
        </div>
        <div>
            <p>Min</p>
            <p><?php echo $destinationTime->format('i') ?></p>
        </div>

    </div>
    <p>PRESENT TIME</p>
    <div class="time">

        <div>
            <p>Month</p>
            <p><?php echo $presentTime->format('M') ?></p>
        </div>
        <div>
            <p>Day</p>
            <p><?php echo $presentTime->format('d') ?></p>

        </div>

        <div>
            <p>year</p>
            <p><?php echo $presentTime->format('Y') ?></p>
        </div>

        <div>

            <p><?php echo $presentTime->format('A') ?></p>
        </div>
        <div>
            <p>HOUR</p>
            <p><?php echo $presentTime->format('h') ?></p>
        </div>
        <div>
            <p>Min</p>
            <p><?php echo $presentTime->format('i') ?></p>
        </div>

    </div>
</body>

</html>
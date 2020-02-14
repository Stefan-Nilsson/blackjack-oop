<?php require 'game.php'; ?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
    <title>Blackjack Game</title>
</head>
<body>

<form method="post">
    <input type="hidden" name="startGame">
    <h2><button type="submit" class="btn btn-danger">Start</button></h2>
</form>

<form method="post">
    <input type="hidden" name="hit" value="1">
    <h2> <button type="submit" class="btn btn-danger">Hit</button></h2>
</form>

</body>
</html>

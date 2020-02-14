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
    <input type="hidden" name="surrender">
    <button type="submit" class="btn btn-danger">Surrender</button>
    <div name="surrenderText" class="form-control alert alert-danger"><?php echo ('')?></div>
    <!-- insert commment/pop up: You lost the round-->
</form>

<form method="post">
    <input type="hidden" name="stand">
    <button type="submit" class="btn btn-danger">Stand</button>
</form>

<form method="post">
    <input type="hidden" name="hit" value="1">
    <button type="submit" class="btn btn-danger">Hit</button>
</form>

<form method="post">
    <input type="hidden" name="refresh">
    <button type="submit" class="btn btn-danger">Refresh</button>
</form>

<footer>Nothing to find here.</footer>
<style>
    footer {
        text-align: center;
    }
</style>
</body>
<!--
        <fieldset>
            <legend>Products</legend>
            <?php /*foreach ($products AS $i => $product): */?>
                <label>
                    <input type="checkbox" value="1" name="products[<?php /*echo $i */?>]"/> <?php /*echo $product['name'] */?> -
                    &euro; <?php /*echo number_format($product['price'], 2) */?></label><br />
            <?php /*endforeach; */?>
        </fieldset>
        <fieldset>
            <legend>Order type</legend>
            <?php /*foreach ($orderTypes AS $i => $orderType): */?>
                <label>
                    <input type="checkbox" value="1" name="orderTypes[<?php /*echo $i */?>]"/> <?php /*echo $orderType['name'] */?> -
                    &euro; <?php /*echo number_format($orderType['price'], 2) */?></label><br />
            <?php /*endforeach; */?>
        </fieldset>
        <button type="submit" class="btn btn-primary">Order!</button>
        <?php
/*        // whatIsHappening();

        */?>

    </form>-->
</html>
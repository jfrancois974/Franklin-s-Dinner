<?php

    const TITLE = "Menu Item || Franklin's Fine Dining ";
    include "_partials/header.php";

    // Strip bad characters function
    // Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
    function strip_bad_chars( $input) {

        $output = preg_replace("/[^a-zA-Z0-9_-]/","", $input);
        return $output;
    }

    if (isset($_GET['item'])) {

        $menuItem = strip_bad_chars($_GET['item']);

        $dish = $menuItems[$menuItem];

    }

    // Calculate suggested Tip

function suggestedTIp($price, $tip){

        $totalTip = $price * $tip;
        $fmt = numfmt_create( 'de_DE', NumberFormatter::CURRENCY );
        echo numfmt_format_currency($fmt,$totalTip, "EUR");
    }

?>

    <hr>

<!--Dish Area Start-->
    <div id="dish">
        <h1>
            <?php echo $dish["title"]; ?> <span class="price"> <?php echo $dish["price"]; ?><sup>€</sup> </span>
        </h1>
        <p><?php echo $dish["blurb"]; ?></p>
        <br>

        <p><strong>Suggested beverage: <?php echo $dish["drink"]; ?></strong></p>
        <p><em>Suggested Tip: <?php suggestedTIp($dish["price"], 0.20); ?></em></p>
    </div>
<!--Dish Area Start-->

    <hr>

    <a href="menu.php" class="button previous">&laquo; Back to Menu</a>


<?php include_once "_partials/footer.php"; ?>
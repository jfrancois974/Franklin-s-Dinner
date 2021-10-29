<?php
    define('TITLE', "Menu || Franklin's Fine Dining");
    include_once ('_partials/header.php');
?>

<!--Menu Area Start-->
    <div id="menu-items">
        <h1>Our Delicious Menu</h1>
        <p>Like our team, our menu is very small &mdash; but dang, does it ever pack a punch!</p>
        <p><em>Click any menu item to learn more about it. </em></p>

        <hr>
        
        <ul>
            <?php foreach ($menuItems as $dish => $menuItem) { ?>
            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $menuItem["title"]; ?> </a><?php echo $menuItem["price"]; ?><sup>€</sup></li>

            <?php } ?>
        </ul>
    </div>
<!--Menu Area End-->


<?php include "_partials/footer.php";?>

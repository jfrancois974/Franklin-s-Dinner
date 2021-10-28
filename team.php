<?php
    const TITLE = "Team || Franklin's Fine Dining";
    include_once ('_partials/header.php');
?>

<!--    Team members Area-->
    <div id="teams-members" class="cf">
        <h1>Our Team at Franklin's</h1>
        <hr>
        <p>We're small, but mighty. Franklin's Fine Dining has been a family-owned and run business since the dirty thirties, and we're proud of it! When you get these three together, you never know what can happen. But you can count on one thing: <strong>The best food you've ever had. Ever.</strong></p>
        <hr>
        
        <?php foreach ($teamMembers as $teamMember):?>
            <div class="member">
                <img src="img/<?php echo $teamMember["img"]; ?>.png"
                     alt="<?php echo $teamMember["name"]; ?>">
                <h2><?php echo $teamMember["name"]; ?></h2>
                <p><?php echo $teamMember["bio"]; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
<!--    End Team members Area-->
<?php include_once ('_partials/footer.php');

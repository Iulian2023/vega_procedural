<?php $theme = "themes/baseUser.html.php"; ?>

<?php
    $title = <<<HTML
Accueil
HTML;
?>

<h1 class="text-center my-3 dispaly-5">Hello <?= $_SESSION['user']['first_name'] ?></h1>
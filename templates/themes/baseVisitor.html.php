<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vega<?= isset($title) ? " - $title" : "" ?></title>

        <!-- Seo -->
        
        <meta name="robots" content="index, follow">
        <meta name="description" content="<?= isset($description) ? $description : ''?>">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="/build/app.css">
    </head>
    <body class="bg-light-vega">

    <!-- Navbar -->
    <?php include TEMPLATES . "/layouts/navbar/navbarVisitor.html.php"; ?>

    <!-- The specific content page -->
    <main class="container-fluid">
        <?= $content ?? "" ?>
    </main>

    <!-- footer -->
    <?php include TEMPLATES . "/layouts/footer/footerVisitor.html.php"; ?>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
<?php $theme = "themes/baseVisitor.html.php"; ?>

<?php
    $title = <<<HTML
Conexion
HTML;
?>

<?php
    $description = <<<HTML
Connectez-vous
HTML;
?>

<h1 class="text-center my-3 display-5">Connexion</h1>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-5 mx-auto p-4 shadow rounded bg-white">

            <?php if( isset($_SESSION['success']) && !empty($_SESSION['success']) ) : ?>
                <div class="text-center alert alert-success alert-dismissible fade show" role="alert">
                    <?= $_SESSION['success']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['success']); ?>
            <?php endif ?>

            <?php if(isset($_SESSION['bad_credentials']) && !empty($_SESSION['bad_credentials'])) : ?>
                <div class="alert alert-danger text-center" role='alert'>
                    <?= $_SESSION['bad_credentials']; ?>
                </div>
                <?php unset($_SESSION['bad_credentials']); ?>
            <?php endif ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <div class="text-danger"><?= formErrors('email'); ?></div>
                    <input type="email" name="email" id="email" class="form-control" autofocus value="<?= old('email'); ?>">
                </div>
                <div class="mb-3">
                    <label for="password">Mot de passe</label>
                    <div class="text-danger"><?= formErrors('password'); ?>
                </div>
                    <input type="password" name="password" id="password" class="form-control" autofocus>
                <div class="mb-3" d-none>
                    <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
                </div>
                <div class="mb-3" d-none>
                    <input type="hidden" name="honey_pot" value="">
                </div>
                </div>
                <div class="mb-3">
                    <input formnovalidate type="submit" value="Se connecter" class="btn btn-primary shadow">
                </div>
            </form>
        </div>
    </div>
</div>
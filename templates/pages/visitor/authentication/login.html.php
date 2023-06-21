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
            <form action="" method="post">
                <div class="mb-3">
                    <label for="email">Email</label>
                    <div class="text-danger"><?= formErrors('email'); ?></div>
                    <input type="email" name="email" id="email" class="form-control" autofocus value="<?= old('email'); ?>">
                </div>
                <div class="mb-3">
                    <label for="password">Mot de passe</label>
                    <div class="text-danger"><?= formErrors('password'); ?></div>
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
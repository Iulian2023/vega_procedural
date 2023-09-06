<?php $theme = "themes/baseUser.html.php"; ?>

<?php
    $title = <<<HTML
Modification du mot de passe
HTML
?>

<?php
    $description = <<<HTML
Modification du mot de passe
HTML
?>

<h1 class="text-center my-3 display-5">Modifier mon mot de passe</h1>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto shadow p-4 bg-warning">
            <form method="post">
                <div class="mb-3">
                    <label for="currentPassword">Mot de passe actuel</label>
                    <div class="text-danger"><?= formErrors('currentPassword') ?></div>
                    <input type="password" name="currentPassword" id="currentPassword" class="form-control" autofocus value="<?= old('currentPassword') ?: ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="newPassword">Nouveau Mot de passe actuel</label>
                    <div class="text-danger"><?= formErrors('newPassword') ?></div>
                    <input type="password" name="newPassword" id="newPassword" class="form-control" value="<?= old('newPassword') ?: ''; ?>">
                </div>
                <div class="mb-3">
                    <label for="confirmNewPassword">Confirmation du nouveau Mot de passe actuel</label>
                    <div class="text-danger"><?= formErrors('confirmNewPassword') ?></div>
                    <input type="password" name="confirmNewPassword" id="confirmNewPassword" class="form-control">
                </div>
                <div class="mb-3 d-none">
                    <input type="hidden" name="csrf_token" value="<?= csrf_token() ?>">
                </div>
                <div class="mb-3 d-none">
                    <input type="hidden" name="honey_poy" value="">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Modifier" class="btn btn-info shadow">
                </div>
            </form>
        </div>
    </div>
</div>
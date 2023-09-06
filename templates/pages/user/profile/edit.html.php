<?php $theme = "themes/baseUser.html.php"; ?>

<?php
    $title = <<<HTML
Modification du profil
HTML;
?>

<?php
    $description = <<<HTML
Modification du profil
HTML;
?>

<h1 class="text-center my-3 display-5">Modifier mon profil</h1>

<div class="container">
    <div class="col-md-6 mx-auto p-4 shadow bg-success">
        <form method="post">
            <div class="mb-3">
                <label for="firstName">Prénom</label>
                <div class="text-danger"><?= formErrors('firstName') ?></div>
                <input type="text" name="firstName" id="firstName" class="form-control" autofocus value="<?= old('firstName') ?: $user['first_name'] ?>">
            </div>
            <div class="mb-3">
                <label for="lastName">Prénom</label>
                <div class="text-danger"><?= formErrors('lastName') ?></div>
                <input type="text" name="lastName" id="lastName" class="form-control" value="<?= old('lastName') ?: $user['last_name'] ?>">
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <div class="text-danger"><?= formErrors('email') ?></div>
                <input type="text" name="email" id="email" class="form-control" value="<?= old('email') ?: $user['email'] ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-outline-light shadow" value="Modifier">
            </div>
        </form>
    </div>
</div>
<?php $theme = "themes/baseUser.html.php"; ?>

<?php
    $title = <<<HTML
Profil
HTML
?>

<?php
    $description = <<<HTML
Vega - Espace d'administration - Profil
HTML
?>

<h1 class="text-center my-3 display-5">Mon Profil</h1>

<div class="container ">
    <div class="row">
        <div class="col-md-6 mx-auto shadow p-4 bg-success">
            <div class="card text-start">
                <div class="card-body bg-success-subtle">
                    <p class="cart-title">
                        <strong>Prénom</strong> : <?= protect($user['first_name']); ?> </p>
                        <p class="cart-text">
                        <strong>Nom</strong> : <?= protect($user['last_name']); ?> </p>
                        <p class="cart-text">
                        <strong>Email</strong> : <?= protect($user['email']); ?> </p>
                        <p class="cart-text">
                        <strong>Role</strong> : <?php foreach(json_decode($user['roles']) as $role) : ?>
                            <?php if ($role === "ROLE_USER"): ?>
                                <span class="badge text-bg-dark"><?= $role ?></span>
                            <?php endif ?>
                        <?php endforeach ?>
                    </p>
                    <div class="d-flex justify-content-center align-items-center my-3 gap-3">
                    <a href="/user/profile/edit" class="btn btn-secondary shadow">Modifier le profil</a>
                    <a href="" class="btn btn-danger shadow">Modifier le mot de passe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $theme = "/themes/baseVisitor.html.php"; ?>

<h1 class="text-center my-3 display-5">Inscription</h1>

<div class="container">
    <div class="row">
        <div class="col-md-9 col-lg-6 mx-auto shadow bg-white rounded p-4">
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="firstName">Prénom</label>
                                <div class="text-danger"><?= formErrors('firstName'); ?></div>
                            <input type="text" name="firstName" id="firstName" class="form-control" value="<?=old('firstName');?>" autofocus>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="lastName">Nom</label>
                            <div class="text-danger"><?= formErrors('lastName'); ?></div>
                            <input type="text" name="lastName" id="lastName" class="form-control" value="<?=old('lastName');?>" >
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <div class="text-danger"><?= formErrors('email'); ?></div>
                        <input type="email" name="email" id="email" class="form-control" value="<?=old('email');?>">
                    </div>
                    <div class="mb-3">
                        <label for="password">Mot de passe</label>
                        <div class="text-danger"><?= formErrors('password'); ?></div>
                        <input type="password" name="password" id="password" class="form-control" value="<?=old('passworld');?>">
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword">Confirmation du mot de passe</label>
                        <div class="text-danger"><?= formErrors('confirmPassword'); ?></div>
                        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" >
                    </div>
                    <div class="mb-3 d-none">
                        <input type="hidden" name="csrf_token" value="<?= csrf_token(); ?>">
                    </div>
                    <div class="mb-3 d-none">
                        <input type="hidden" name="honey_pot" value="">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary shadow" value="S'inscrire">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  
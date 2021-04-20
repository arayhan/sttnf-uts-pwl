<?php session_start(); ?>
<?php require_once('config/koneksi.php'); ?>

<?php include_once('components/site/top-code.php'); ?>

<?php include('components/menu.php'); ?>

<div class="container rounded my-5 d-flex justify-content-center">
    <div class="card" style="width: 500px; max-width: 100%; margin: 50px 0;">
        <div class="card-body">
            <h3 class="text-center">Login</h3>
            <hr class="my-3">
            <form method="post" action="controllers/memberController.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="ion-person"></i></div>
                            </div>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="ion-key"></i></div>
                            </div>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-right" name="action" value="login" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>

<?php include_once('components/site/bottom-code.php'); ?>
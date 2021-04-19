<?php require_once('config/koneksi.php'); ?>

<?php include_once('components/site/top-code.php'); ?>

<?php include('components/header.php'); ?>
<?php include('components/menu.php'); ?>

<div class="container">
    <div class="row py-5">
        <div class="col-md-9">
            <?php include('components/main.php'); ?>
        </div>
        <div class="col-md-3">
            <?php include('components/sidebar.php'); ?>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>

<?php include_once('components/site/bottom-code.php'); ?>
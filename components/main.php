<div>
    <?php
    // echo "HALAMAN : " . $_REQUEST['hal'];

    if (!empty($_REQUEST['hal'])) {
        $hal = $_REQUEST['hal'];
        include_once $hal . '.php';
    } else {
        include_once 'home.php';
    }
    ?>
</div>
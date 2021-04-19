<div>
    <?php
    if (!empty($_REQUEST['page'])) {
        $hal = $_REQUEST['page'];
        include_once $hal . '.php';
    } else {
        include_once 'home.php';
    }
    ?>
</div>
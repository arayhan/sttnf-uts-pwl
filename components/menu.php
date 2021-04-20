<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">A.Rayhan.P</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=about-us">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?page=data-pegawai">Data Pegawai</a>
                        </div>
                    </li>
                    <?php if (!isset($_SESSION['MEMBER'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link d-lg-none" href="index.php?page=login">Login</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item dropdown d-lg-none">
                            <form method="post" action="controllers/memberController.php">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?= $_SESSION['MEMBER']['fullname']; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <button class="dropdown-item" name="action" value="logout">Logout</button>
                                </div>
                            </form>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <?php if (!isset($_SESSION['MEMBER'])) { ?>
                <a href="login.php" class="btn btn-primary d-none d-lg-block">Login</a>
            <?php } else { ?>
                <div class="dropdown d-none d-lg-block">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $_SESSION['MEMBER']['fullname']; ?>
                    </button>
                    <form method="post" action="controllers/memberController.php">
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <button class="dropdown-item" name="action" value="logout">Logout</button>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>
    </nav>
</div>
<section class="navigation container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">Mini-Stack-Overflow</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link text-black" href="signin.php">Sign-In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="signup.php">Sign-Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="logout.php">Logout</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black">User: <?php echo $_SESSION['username'] ?> </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
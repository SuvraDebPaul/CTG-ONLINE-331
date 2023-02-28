<?php @include "../core/User.php" ?>
<?php @include "header.php" ?>
<?php @include "nav.php" ?>
<section class="login">
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 offset-2 me-auto">
                <div class="heading text-center mb-4 alert alert-warning py-2">
                    <h4>Please Enter Your User Name And Password</h4>
                </div>
                <div>
                    <?php
                    if (isset($_POST['signin'])) {
                        $userName = htmlspecialchars($_POST['userName']);
                        $Password = md5(htmlspecialchars($_POST['password']));
                        $userStudent = new User();
                        if (isset($userName) && isset($Password)) {
                            $authenticStudent = count($userStudent->checkUserStudentCredential($userName, $Password));
                            if ($authenticStudent == 1) {
                                session_start();
                                $_SESSION['username'] =  $userName;
                                header("location:\CTG%20Online%20331\Assignment-2\index.php");
                            } else if ($authenticStudent < 1) {
                                echo '<p class="text-center mb-4 alert alert-danger py-2">User Credential Does Not Match </p>';
                            }
                        }
                    }
                    if (isset($_POST['signup'])) {
                        header("location:\CTG%20Online%20331\Assignment-2\Pages\signup.php");
                    }
                    ?>
                </div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label class="mb-1" for="UserName">User Name</label>
                        <input type="text" class="form-control" id="UserName" name="userName" placeholder="Please Enter Your User Name">
                    </div>
                    <div class="form-group mt-3">
                        <label class="mb-1" for=" password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="row mt-4">
                        <div class="d-grid col-6">
                            <button type="submit" class="btn btn-primary" name="signin">Sign In</button>
                        </div>
                        <div class="col-6 d-grid">
                            <button type="submit" class="btn btn-danger" name="signup">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php @include "footer.php" ?>
<?php @include "../core/User.php"; ?>

<?php @include "header.php"; ?>
<?php @include "nav.php" ?>

<section class="signupStudent">
    <div class="container">
        <div class="row mt-3">
            <div class="col-10 offset-1 me-auto">
                <div class="heading text-center mb-4 alert alert-warning py-2">
                    <h4>Please Submit User Name & Password for Registration</h4>
                </div>
                <div>
                    <?php
                    if (isset($_POST['register'])) {
                        $userName = htmlspecialchars($_POST['userName']);
                        $Password = md5(htmlspecialchars($_POST['password']));
                        $userStudent = new User();
                        if (isset($userName) && isset($Password)) {
                            $authenticStudent = count($userStudent->checkUserStudent($userName));
                            if ($authenticStudent == 0) {
                                $userStudent->userStudent($userName, $Password);
                                header("location:\CTG%20Online%20331\Assignment-2\index.php");
                            } else if ($authenticStudent > 0) {
                                echo '<p class="text-center mb-4 alert alert-danger py-2">User Credential Already Exists Please Login</p>';
                            }
                        }
                    }
                    if (isset($_POST['login'])) {
                        header("location:\CTG%20Online%20331\Assignment-2\Pages\Login.php");
                    }
                    ?>
                </div>
                <form action="" method="POST">

                    <div class="row">
                        <div class="form-group col-6">
                            <label class="my-2" for="userName">User Name</label>
                            <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name">
                        </div>
                        <div class="form-group col-6">
                            <label class="my-2" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6 d-grid">
                            <button type="submit" class="btn btn-danger" name="register">Register As Student</button>
                        </div>
                        <div class="col-6 d-grid">
                            <button type="submit" class="btn btn-success" name="login">Already Have An Account (Login)</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
















<?php @include "footer.php"; ?>
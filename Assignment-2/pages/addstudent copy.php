<?php @include "header.php"; ?>
<?php @include "nav.php" ?>

<section class="signupStudent">
    <div class="container">
        <div class="row mt-3">
            <div class="col-10 offset-1 me-auto">
                <div class="heading text-center mb-4 alert alert-warning py-2">
                    <h4>Please Fill Up And Submit Students User Name & Password for Registration</h4>
                </div>
                <div>
                    <?php
                    if (isset($_POST['register'])) {
                        $fisrtName = htmlspecialchars($_POST['fName']);
                        $lastName = htmlspecialchars($_POST['lName']);
                        $userName = htmlspecialchars($_POST['userName']);
                        $Password = md5(htmlspecialchars($_POST['password']));
                        $class = htmlspecialchars($_POST['class']);
                        $section = htmlspecialchars($_POST['section']);
                        $rollNumber = htmlspecialchars($_POST['rollNumber']);
                        $gender = htmlspecialchars($_POST['gender']);
                        $student = new student();
                        if (isset($fisrtName) && isset($lastName) && isset($userName) && isset($Password) && isset($userEmail) && isset($rollNumber)) {
                            $authenticStudent = $student->studentUserCheck($userName, $Password);
                            if ($authenticStudent == 0) {
                                $student->studentUser($fisrtName, $lastName, $userName, $Password, $userEmail, $rollNumber);
                                header("location:\CTG%20Online%20331\Assignment-2\index.php");
                            } else if ($authenticStudent > 0) {
                                $student->studentUserCheck($userName, $Password);
                                echo '<p class="text-center mb-4 alert alert-danger py-2">User Profile Already Exists Please Login</p>';
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
                            <label class="my-2" for="fName">First Name</label>
                            <input type="text" class="form-control" id="fName" name="fName" placeholder="First Name">
                        </div>
                        <div class="form-group col-6">
                            <label class="my-2" for="lName">Last Name</label>
                            <input type="text" class="form-control" id="lName" name="lName" placeholder="Last Name">
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="my-2" for="class">Class</label>
                            <input type="text" class="form-control" id="class" name="class" placeholder="Class">
                        </div>
                        <div class="form-group col-6">
                            <label class="my-2" for="section">Section</label>
                            <input type="text" id="section" name="section" class="form-control" placeholder="Section">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="my-2" for="rollNumber">Roll Number</label>
                            <input type="text" class="form-control" id="rollNumber" name="rollNumber" placeholder="Roll Number">
                        </div>
                        <div class="form-group col-6 mt-4">
                            <label class="mt-4" for="gender">Gender</label>
                            <div class="form-check form-check-inline">
                                <input class="mt-4form-check-input" type="radio" name="gender" id="gender_male" value="M">
                                <label class="mt-4form-check-label" for="gender_male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="mt-4form-check-input" type="radio" name="gender" id="gender_female" value="F">
                                <label class="mt-4form-check-label" for="gender_female">Female</label>
                            </div>
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
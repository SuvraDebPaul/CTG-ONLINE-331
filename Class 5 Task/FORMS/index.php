<?php
include @"functions/Sum.php";
include @"functions/userInfo.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Vendors/Bootstrap 5.2.3/bootstrap.min.css">
    <link rel="stylesheet" href="Vendors/Font Awsome 6.1/all.min.css">

    <title>Forms Practice & Sanitization of Input Data</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row text-center text-bg-dark p-2">
            <div class="col-12">
                <h2 class="text-warning">My First Form Design & Development with PHP</h2>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Task One -->
                    <h5>1.Take a form with two input fields (GET Request). Now when submit the form it will output
                        the sum of the two input fields values.</h5>
                    <br>
                    <form method="GET">
                        <div class="form-group row mb-2">
                            <label for="num1" class="col-sm-2 col-form-label fw-bold">Number 1 :</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="num1" id="num1" value="<?php echo $inputNumber1; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="num2" class="col-sm-2 col-form-label fw-bold">Number 2 :</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="num2" id="num2" value="<?php echo $inputNumber2; ?>">
                            </div>
                        </div>
                        <div class="d-grid mt-2">
                            <button type="submit" class="btn btn-primary fw-bold">SUBMIT FORM</button>
                        </div>
                    </form>
                    <br>
                    <h3 class="fw-bold text-bg-warning p-2 rounded">RESULT</h3>
                    <h3 class="p-2 text-bg-light rounded"> <?php echo $inputNumber1 . " + " . $inputNumber2 . " = " . $totalSum  ?> </h3>
                    <br>
                    <!-- Task Two -->
                    <h5>2.Take a form with 3 input fields, they are named, first_name, last_name, age, gender.
                        Use POST method , then when submit the form it will show all the input fields data</h5>
                    <form method="POST">
                        <div class="form-group row mb-2">
                            <label for="fName" class="col-sm-2 col-form-label">FIRST NAME :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="fName" id="fName" placeholder="Please Enter Your First Name" value="<?php echo $firstName; ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="lName" class="col-sm-2 col-form-label">LAST NAME :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="lName" id="lName" placeholder="Please Enter Your Last Name" value="<?php echo $lastName; ?>">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="age" class="col-sm-2 col-form-label">AGE :</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="age" id="age" placeholder="Please Enter Your Age" value="<?php echo $age; ?>">
                            </div>
                        </div>
                        <h4 class="mt-3">GENDER</h4>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" <?php echo $defaultGenderM ?>>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" <?php echo $defaultGenderF ?>>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="d-grid mt-2">
                            <button type="submit" class="btn btn-primary">SUBMIT FORM</button>
                        </div>
                    </form>
                    <br>
                    <h3 class="fw-bold text-bg-warning p-2 rounded">RESULT</h3>
                    <div class="p-2 text-bg-light rounded">
                        <h3> FIRST NAME : <?php echo $firstName; ?> </h3>
                        <h3> LAST NAME : <?php echo $lastName; ?> </h3>
                        <h3> AGE : <?php echo $age ?> </h3>
                        <h3> GENDER : <?php echo $gender ?> </h3>
                    </div>

                    <br>
                </div>
            </div>
        </div>
    </div>



    <script src="Vendors/Bootstrap 5.2.3/bootstrap.bundle.min.js"></script>
    <script src="Vendors/Font Awsome 6.1/all.min.js"></script>
</body>

</html>
<?php @include "core/Students.php" ?>

<section class="main mt-5">
    <div class=" search container">
        <div class="row">
            <div class="col-10 offset-1 me-auto">
                <div>
                    <p>
                        <?php

                        ?>
                    </p>
                </div>
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="col-2">
                            <select class="form-select" id="Sclass" name="Sclass">
                                <option selected disabled>Select Class</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <select class="form-select" id="section" name="section">
                                <option selected disabled>Select Section</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <input type="number" class="form-control" id="rollNumber" name="rollNumber" placeholder="Roll Number">
                            </div>
                        </div>
                        <div class="col-auto ">
                            <button type="submit" class="btn btn-warning px-5" name="search">Search</button>
                            <button type="submit" class="btn btn-success px-5 ms-2" name="reset">Reset</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <div class="container tables mt-5">
        <div class="row">
            <div class="col-10 offset-1 me-auto">
                <table class="table table-striped table-bordered text-center">
                    <thead class="table-info">
                        <tr>
                            <th scope="col">ID No.</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Class</th>
                            <th scope="col">Roll No.</th>
                            <th scope="col">Section</th>
                            <th scope="col">Grade</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $students = new Students();
                        if (isset($_REQUEST['search'])) {
                            $name = '';
                            $class = '';
                            $section = '';
                            $roll = '';
                            $name = htmlspecialchars($_REQUEST['name']);
                            $class = $_REQUEST['Sclass'];
                            $section = $_REQUEST['section'];
                            $roll = $_REQUEST['rollNumber'];
                            $searchStudents = $students->searchStudent($name, $class, $section, $roll);
                            foreach ($searchStudents as $student) { ?>
                                <tr>
                                    <th scope="row"><?php echo "S-" . $student['class'] . "-" . $student['id'] ?></th>
                                    <td><?php echo $student['name'] ?></td>
                                    <td><?php echo $gender = ($student['gender'] == "M" ? "Male" : "Female") ?></td>
                                    <td><?php echo $student['class'] ?></td>
                                    <td><?php echo $student['roll'] ?></td>
                                    <td><?php echo $student['section'] ?></td>
                                    <td><?php echo $student['total'] ?></td>
                                    <td>
                                        <a href="#" class=""><i class="fa-solid fa-eye"></i></a>
                                        <a href="#" class="mx-3"><i class=" fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class=""><i class=" fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        } elseif (isset($_REQUEST['reset'])) {
                            $allStudents = $students->findAllStudents();
                            foreach ($allStudents as $student) : ?>
                                <tr>
                                    <th scope="row"><?php echo "S-" . $student['class'] . "-" . $student['id'] ?></th>
                                    <td><?php echo $student['name'] ?></td>
                                    <td><?php echo $gender = ($student['gender'] == "M" ? "Male" : "Female") ?></td>
                                    <td><?php echo $student['class'] ?></td>
                                    <td><?php echo $student['roll'] ?></td>
                                    <td><?php echo $student['section'] ?></td>
                                    <td><?php echo $student['total'] ?></td>
                                    <td>
                                        <a href="#" class=""><i class="fa-solid fa-eye"></i></a>
                                        <a href="#" class="mx-3"><i class=" fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class=""><i class=" fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                            <?php  } else {
                            $allStudents = $students->findAllStudents();
                            foreach ($allStudents as $student) : ?>
                                <tr>
                                    <th scope="row"><?php echo "S-" . $student['class'] . "-" . $student['id'] ?></th>
                                    <td><?php echo $student['name'] ?></td>
                                    <td><?php echo $gender = ($student['gender'] == "M" ? "Male" : "Female") ?></td>
                                    <td><?php echo $student['class'] ?></td>
                                    <td><?php echo $student['roll'] ?></td>
                                    <td><?php echo $student['section'] ?></td>
                                    <td><?php echo $student['total'] ?></td>
                                    <td>
                                        <a href="#" class=""><i class="fa-solid fa-eye"></i></a>
                                        <a href="#" class="mx-3"><i class=" fa-solid fa-pen-to-square"></i></a>
                                        <a href="#" class=""><i class=" fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                        <?php
                            endforeach;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
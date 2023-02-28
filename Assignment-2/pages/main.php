<?php @include "core/Students.php" ?>

<section class="main mt-5">
    <div class=" search container">
        <div class="row">
            <div class="col-10 offset-1 me-auto">
                <form action="" method="POST" class="row g-6">
                    <div class="col-2">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <input type="number" class="form-control" id="rollNumber" placeholder="Class">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <input type="number" class="form-control" id="rollNumber" placeholder="Section">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <input type="number" class="form-control" id="rollNumber" placeholder="Roll Number">
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="submit" name="search" class="btn btn-warning px-5 mx-4">Search</button>
                    </div>
                    <div class="col-2">
                        <button type="submit" name="addStudent" class="btn btn-success px-4">Add Student</button>
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
                        $allStudents = $students->findAllStudents();
                        foreach ($allStudents as $student) : ?>
                            <tr>
                                <th scope="row"><?php echo "S-" . $student['class'] . "-" . $student['id'] ?></th>
                                <td><?php echo $student['name'] ?></td>
                                <td><?php echo $student['class'] ?></td>
                                <td><?php echo $student['roll'] ?></td>
                                <td><?php echo $student['section'] ?></td>
                                <td><?php echo $student['total'] ?></td>
                                <td><a href="">View</a> | <a href="">Edit</a> | <a href="">Delete</a></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
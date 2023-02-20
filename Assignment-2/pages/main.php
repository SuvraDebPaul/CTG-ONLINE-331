<section class="main mt-5">
    <div class=" search container">
        <div class="row">
            <div class="col-10 offset-1 me-auto">
                <form class="row g-3">
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="number" class="form-control" id="rollNumber" placeholder="Roll Number">
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-warning px-5 mx-4">Search</button>
                        <button type="submit" class="btn btn-success px-5">Reset</button>
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
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Class</th>
                            <th scope="col">Roll No.</th>
                            <th scope="col">Section</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>Six</td>
                            <td>2</td>
                            <td>A</td>
                            <td><a href="">Edit</a> | <a href="">Delete</a></td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>Six</td>
                            <td>2</td>
                            <td>A</td>
                            <td><a href="">Edit</a> | <a href="">Delete</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>Six</td>
                            <td>2</td>
                            <td>A</td>
                            <td><a href="">Edit</a> | <a href="">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
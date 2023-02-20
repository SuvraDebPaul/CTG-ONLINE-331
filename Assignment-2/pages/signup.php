<?php @include "header.php" ?>
<section class="signup">
    <div class="container">
        <div class="row mt-3">
            <div class="col-10 offset-1 me-auto">
                <div class="heading text-center mb-4 alert alert-warning py-2">
                    <h4>Please Fill Up And Submit Your Information To Register</h4>
                </div>
                <form>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="my-2" for="fName">First Name</label>
                            <input type="text" class="form-control" id="fName" name="fName" placeholder="First Name">
                        </div>
                        <div class="form-group col-6">
                            <label class="my-2" for="lName">Last Name</label>
                            <input type="text" class="form-control" id="lName" name="lName" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="my-2" for="userName">User Name</label>
                            <input type="text" class="form-control" id="userName" name="userName">
                        </div>
                        <div class="form-group col-6">
                            <label class="my-2" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label class="my-2" for="userEmail">Email</label>
                            <input type="text" class="form-control" id="userEmail" name="userEmail">
                        </div>
                        <div class="form-group col-6">
                            <label class="my-2" for="phoneNumber">Phone Number</label>
                            <input type="number" id="phoneNumber" name="phoneNumber" class="form-control">
                        </div>
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
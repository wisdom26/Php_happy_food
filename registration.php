<?php

//header file is included here
include 'inc/header.php';

//user file is included here
include 'lib/user.php';
$user = new user;



//if user logged in redirect user to index page
session::userLogin();



if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $userRegi = $user->userRegistration($_POST);
}

?>

<!-- body area started form here -->

<div class="container w-50 mt-5">
    <div class="card">
        <div class="card-header bg-dark">
            <h5 class="text-white">Create a new account</h5>
        </div>
        <div class="card-body">
<?php

if(isset($userRegi)){
    echo $userRegi;
}

?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" class="it">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" class="it">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" class="it">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" class="it">
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" id="cpassword" class="it">
                </div>
                <div class="form-check">
                    <input type="checkbox" name="terms" class="form-check-input" id="terms">
                    <label class="form-check-label" for="terms">I agree with terms and conditions</label>
                </div>
                <button type="submit" name="submit" class="btn btn-sm btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>
</div>
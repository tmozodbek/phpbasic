
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<?php

    $email = null;
    $username = null;
    $password = null;
    if(isset($_POST['email']) && !empty($_POST['email']) &&
        (isset($_POST['username']) && !empty($_POST['username'])) &&
        (isset($_POST['username']) && !empty($_POST['username'])) ){
            
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];

            if(strlen($username) < 6){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Username address must not be less than 6!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }

            if(strlen($password) < 6){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Password  must not be less than 6!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }
    }

?>

<div class="col-md-3">
    <form method="post" action="index.php">
        <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" value = "<?= $email ?>" name="email" placeholder="Enter email...">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
        <label for="exampleInputUsername1">Username</label>
        <input type="text" class="form-control" id="exampleInputUsername1" value = "<?= $username ?>" name="username"  placeholder="Enter username...">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" value = "<?= $password ?>" name="password" placeholder="Password...">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
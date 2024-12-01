<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>
<?php 
require_once 'includes/signup_view.inc.php';
require_once 'includes/config_session_inc.php';

include ('header.php');




?>
<br><br>
<div class="container my-5">
        <div class="row">
        <form action="includes/signup.inc.php" method="POST">
    <div class="mb-3">
        <label for="nom" class="form-label">NomComplet</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="NomComplet" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email address" required>
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label">Password</label>
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
check_signup_errors(); 
include ('footer.php');
?>          
        </div>
    </div>
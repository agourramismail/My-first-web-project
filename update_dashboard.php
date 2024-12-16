<?php
include 'includes/update_dashboard.inc.php';
require 'dashboard.php';
?>
<div class="container my-5">
        <div class="row">
        <form action="includes/signup.inc.php" method="POST">
    <div class="mb-3">
        <label for="nom" class="form-label"></label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="NomComplet" value="<?= htmlspecialchars($user['nom']) ?>" >
    </div>
    <div class="mb-3">
        <label for="email" class="form-label"></label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email address" value="<?= htmlspecialchars($user['email']) ?>">
    </div>
    <div class="mb-3">
        <label for="pwd" class="form-label"></label>
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" value="<?= htmlspecialchars($user['pwd']) ?>" >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
        </form>         
        </div>
</div>
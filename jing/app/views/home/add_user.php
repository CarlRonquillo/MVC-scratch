<?php include('header.php'); ?>

<!-- Default form register -->
<form class="text-center border border-light p-5" action="http://localhost/jing/public/home/save" method="post">

    <p class="h4 mb-4">Sign up</p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input name="Username" type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
        </div>
        <div class="col">
            <!-- Last name -->
            <input name="Password" type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
        </div>
    </div>

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Sign in</button>

    <hr>

</form>
<!-- Default form register -->

<?php include('footer.php'); ?>
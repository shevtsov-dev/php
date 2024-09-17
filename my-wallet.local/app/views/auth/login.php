<h2>Login</h2>
<div class="col-md-12">
    <form class="needs-validation <?php if (isset($error)) { ?>was-validated<?php } ?>" method="POST" action="/login">

        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">UserName</label>
            <input name="username" type="text" class="form-control" id="validationCustom03" required="">
            <?php if (isset($error)) { ?>
                <div class="invalid-feedback">
                    error username
                </div>
            <?php } ?>
        </div>

        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="validationCustom03" required="">
            <?php if (isset($error)) { ?>
                <div class="invalid-feedback">
                    error pass
                </div>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
<div class="col-md-6">
    <div class="btn-group" style="margin-top: 10px">
        <a href="/register" class="btn btn-danger">Register</a>
    </div>
</div>

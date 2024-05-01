<form action="login_user" method="post">
    <div class="mb-3">
        <label for="email" class="form-label">E-Mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <div class="mb-3 mt-3">
        <button type="submit" class="btn btn-primary mb-3">Submit</button>
    </div>
    <div class="mb-3 mt-3">
        <a href="<?= base_url('registration_page') ?>" type="button" class="btn btn-primary mb-3">Register</a>
    </div>
</form>
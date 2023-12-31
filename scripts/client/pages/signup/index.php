<?php require_once __DIR__ . "/../template/header.php" ?>
<?php require_once __DIR__ . "/../template/navbar.php" ?>

<style>
    <?php include '../../public/css/pages/signup.css'; ?>
</style>

<section id="signup">
    <div class="reg-ctn">
        <h1 class="reg-title">Create an Account</h1>
        <div class="reg-form-ctn">
            <form id="register-form" method="post" action="index.php" role="form">
                <label for="username">USERNAME <span class="required-field">*</span></label>
                <input type="text" id="username" name="username" aria-required="true">

                <label for="password">PASSWORD <span class="required-field">*</span></label>
                <input type="password" id="password" name="password" aria-required="true">

                <label for="name">DISPLAY NAME <span class="required-field">*</span ></label>
                <input type="text" id="name" name="name" aria-required="true">

                <!-- Error Message -->
                <div id="error-message" role="alert"></div>

                <button type="submit">Sign Up</button>
            </form>
        </div>

        <div class="lgn-link-ctn">
            <p>Have an account? <a href="../login/index.php" class="lgn-link">Login</a></p>
        </div>
    </div>
</section>

<?php require_once __DIR__ . "/../template/footer.php" ?>

<script>
	<?php include '../../public/js/signup.js'; ?>
</script>

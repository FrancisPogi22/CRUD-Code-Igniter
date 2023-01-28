<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/icons/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/authentication.css') ?>">
    <title>Legendary</title>
</head>

<body">
    <div class="container-fluid">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="<?= base_url('authentication/checkUser') ?>" method="POST" class="sign-in-form">
                    <?= csrf_field() ?>
                    <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                        <div class="alert alert-danger fade show" id="success-alert" role="alert"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif; ?>
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" class="form-input-fields" placeholder="Enter Email Address" value="<?= set_value('email'); ?>" autocomplete="off"/>
                        <!-- <span class="text-danger"><?= isset($validation) ? display_errors($validation, 'email') : '' ?></span> -->
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <i class="bi bi-eye-slash" id="sign-in-show-password"></i>
                        <input type="password" name="password" id="sign-in-password-field" class="form-input-fields" placeholder="Enter Password" />
                        <!-- <span class="text-danger"><?= isset($validation) ? display_errors($validation, 'password') : '' ?></span> -->
                    </div>
                    <input type="submit" value="Sign In" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </form>
                
                <form action="<?= base_url('authentication/registerUser'); ?>" method="POST" class="sign-up-form">
                    <?= csrf_field() ?>
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="bi bi-person-fill"></i>
                        <input type="text" name="fullname" class="form-input-fields" placeholder="Enter Full Name" autocomplete="off" />
                    </div>
                    <div class="input-field">
                        <i class="bi bi-envelope-fill"></i>
                        <input type="email" name="email" class="form-input-fields" placeholder="Enter Email Address" autocomplete="off" />
                    </div>
                    <div class="input-field">
                        <i class="bi bi-calendar-check"></i>
                        <input type="date" name="birthday" class="form-input-fields"/>
                    </div>
                    <div class="input-field">
                        <i class="bi bi-key-fill"></i>
                        <i class="bi bi-eye-slash" id="sign-up-show-password"></i>
                        <input type="password" name="password" id="sign-up-password-field" class="form-input-fields" placeholder="Enter Password" />
                    </div>
                    <div class="input-field">
                        <i class="bi bi-shield-lock-fill"></i>
                        <input type="password" name="Cpassword" class="form-input-fields" placeholder="Enter Confirm Password" />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="bi bi-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container" id="panel-body">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                    <a href="<?= site_url('/'); ?>" class="btn transparent pt-2" id="sign-up-btn">Homepage</a>
                </div>
                <img src="<?= base_url('assets/img/login.svg') ?>" class="image" alt="image" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                    <a href="<?= site_url('/'); ?>" class="btn transparent pt-2" id="sign-up-btn">Homepage</a>
                </div>
                <img src="<?= base_url('assets/img/authLogo.svg') ?>" class="image" alt="image" />
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/font-awesome/js/all.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/authentication.js') ?>"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/icons/bootstrap-icons.css') ?>">
    <title>Edit Profile</title>
</head>

<body>

    <div class="row col-lg-8 border rounded mx-auto mt-5 p-1 shadow-lg">
        <div class="col-md-4 text-center">
            <img src="<?= base_url('assets/img/default.png'); ?>" alt="image" class="js-image img-fluid rounded" style="width: 180px;height 180px;object-fit: cover">
            <div>
                <div class="mb-3">
                    <input onchange="changeImage(this.files[0])" class="form-control mt-3" type="file" id="formFile">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="h2">Edit Profile</div>
            <form action="/profile/userProfileEdit" method="POST">
                <table class="table table-striped">
                    <tr>
                        <th colspan="2">User Details:</th>
                    </tr>
                    <tr>
                        <th><i class="bi bi-person"></i> Full Name</th>
                        <td>
                            <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name" value="<?= $userInfo['fullname']?>">
                            <div><small class="js-error js-error-fullname text-danger"></small></div>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-envelope"></i> Email</th>
                        <td>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="<?= $userInfo['email']?>">
                            <div><small class="js-error js-error-email text-danger"></small></div>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-calendar-check"></i> Birthday</th>
                        <td>
                            <input type="date" class="form-control" name="birthday" value="<?= $userInfo['birthday']?>">
                            <div><small class="js-error js-error-birthday text-danger"></small></div>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-key-fill"></i> Password</th>
                        <td>
                            <input type="password" class="form-control" name="password" placeholder="Enter New Password">
                            <div><small class="js-error js-error-password text-danger"></small></div>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="bi bi-shield-lock"></i> Confirm Password</th>
                        <td>
                            <input type="password" class="form-control" name="Cpassword" placeholder="Enter Confirm Password" required>
                            <div><small class="js-error js-error-Cpassword text-danger"></small></div>
                    </td>
                    </tr>
                </table>
                <div class="p-2">
                    <button type="submit" class="btn btn-success float-end">Change Profile</button>

                    <a href="<?= site_url('dashboard/userDashboard'); ?>">
                        <label class="btn btn-secondary">Cancel</label>
                    </a>
                </div>
            </form>
            <?php
            
            
            ?>
        </div>
    </div>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/profile/changeProfile.js'); ?>"></script>
</body>

</html>
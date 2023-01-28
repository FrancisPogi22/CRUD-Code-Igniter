<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/icons/bootstrap-icons.css') ?>">
    <title>User Profile</title>
</head>

<body>
    <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div id="alertMsg" class="alert alert-success fade show" role="alert"><?= session()->getFlashdata('success'); ?></div>
    <?php endif; ?>
    <div class="row col-lg-8 border rounded mx-auto mt-5 p-1 shadow-lg">

        <div class="col-md-4 text-center">

            <img src="<?= base_url('assets/img/profile.jpg'); ?>" alt="image" class="img-fluid rounded" style="width: 180px;height 180px;object-fit: cover">
            <div>
                <a href="<?= site_url('dashboard/userDashboard'); ?>" style="text-decoration: none;">
                    <button class="mx-auto m-1 btn-md btn btn-secondary">Cancel</button>
                </a>
                <a href="<?= site_url('profile/userDetails'); ?>" style="text-decoration: none;">
                    <button class="mx-auto m-1 btn-md btn btn-info">Edit Profile</button>
                </a>
                <a href="<?= site_url('authentication/logout'); ?>" style="text-decoration: none;">
                    <button class="mx-auto m-1 btn-md btn btn-danger">Logout</button>
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="h2">User Profile</div>
            <table class="table table-striped">
                <tr>
                    <th colspan="2">User Details:</th>
                </tr>
                <tr>
                    <th><i class="bi bi-person"></i> Full Name</th>
                    <td><?= ucFirst($userInfo['fullname']); ?></td>
                </tr>
                <tr>
                    <th><i class="bi bi-envelope"></i> Email</th>
                    <td><?= ($userInfo['email']); ?></td>
                </tr>
                <tr>
                    <th><i class="bi bi-calendar-check"></i> Birthday</th>
                    <td><?= ($userInfo['birthday']); ?></td>
                </tr>
            </table>
        </div>
    </div>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/jquery/jquery.js') ?>"></script>
    <script>
        $(document).ready(function() {
            $(".alert-success")
                .fadeTo(2000, 500)
                .slideUp(500, function() {
                    $(".alert-success").slideUp(500);
                });
        });
    </script>
</body>

</html>
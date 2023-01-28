<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title><?= $title; ?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="">
                <h4><?= $title; ?></h4>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Birthday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= ucFirst($userInfo['fullname']); ?></td>
                            <td><?= $userInfo['email']?></td>
                            <td><?= $userInfo['birthday']?></td>
                            <td><a href="<?= site_url('authentication/logout'); ?>">Logout</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/jquery/jquery.js') ?>"></script>
</body>
</html>
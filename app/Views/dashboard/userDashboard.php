<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
                <div class="logo_name">Legendary</div>
            </div>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <form action="searchUser" method="POST">
                    <i class="fa-solid fa-magnifying-glass bx-search"></i>
                    <input type="text" name="userName" placeholder="Search People. . ." autocomplete="off">
                </form>
            </li>
            <li>
                <a href="userDashboard">
                    <i class="fa-solid fa-border-all"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="<?= site_url('profile/userProfile'); ?>">
                    <i class="fa-solid fa-user-tie"></i>
                    <span class="links_name">User</span>
                </a>
            </li>
            <li>
                <a href="userDashboard">
                    <i class="fa-solid fa-message"></i>
                    <span class="links_name">Message</span>
                </a>
            </li>
            <li>
                <a href="userDashboard">
                    <i class="fa-solid fa-gear"></i>
                    <span class="links_name">Setting</span>
                </a>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <div class="profile_details">
                    <img src="<?= base_url('assets/img/profile.jpg'); ?>">
                    <div class="name_job">
                        <div class="name"><?= $userInfo['fullname'] ?></div>
                        <div class="job"><?= $userInfo['email'] ?></div>
                    </div>
                </div>
                <a href="<?= site_url('authentication/logout'); ?>" class="form">
                    <i class="fa-solid fa-right-from-bracket" id="log_out"></i>
                </a>
            </div>
        </div>
    </div>

    <div id="search" class="home_content">
        <table id="example" class="table table-striped content-table" style="width:100%">
            <h4><?= $title; ?></h4>
            <?php if (isset($search)) { ?>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Birthday</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($search as $user) : ?>
                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['fullname'] ?></td>
                            <td><?= $user['birthday'] ?></td>
                            <td><?= $user['email'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php } ?>
        </table>
    </div>

    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/jquery/jquery.js') ?>"></script>
    <script src="<?= base_url('assets/js/dashboard.js'); ?>"></script>
</body>

</html>
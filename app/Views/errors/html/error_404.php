<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
    <title><?= lang('Errors.pageNotFound') ?></title>

    <style>
        div.logo {
            height: 200px;
            width: 155px;
            display: inline-block;
            opacity: 0.08;
            position: absolute;
            top: 2rem;
            left: 50%;
            margin-left: -73px;
        }

        body {
            height: 100%;
            background: #74b9ff;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #777;
            font-weight: 300;
        }

        h1 {
            font-weight: lighter;
            letter-spacing: normal;
            font-size: 3rem;
            margin-top: 0;
            margin-bottom: 0;
            color: #222;
        }

        .wrap {
            max-width: 1024px;
            margin: 5rem auto;
            padding: 2rem;
            background: #fff;
            text-align: center;
            border: 1px solid #efefef;
            border-radius: 0.5rem;
            position: relative;
            box-shadow: 0 0 30px #222;
        }

        pre {
            white-space: normal;
            margin-top: 1.5rem;
        }

        code {
            background: #fafafa;
            border: 1px solid #efefef;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            display: block;
        }

        p {
            margin-top: 1.5rem;
        }

        .footer {
            margin-top: 2rem;
            border-top: 1px solid #efefef;
            padding: 1em 2em 0 2em;
            font-size: 85%;
            color: #999;
        }

        .error-img img{
            max-width: 50%;
            max-height: auto;
        }

        .btn{
            width: 150px;
            background-color: #5995fd;
            height: 49px;
            border-radius: 49px;
            color: #fff;
            font-weight: 600;
            transition: 0.5s;
        }

        .btn:hover{
            background: #5995fd;
            color: #222;
        }

        a:active,
        a:link,
        a:visited {
            color: #dd4814;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="error-img">
            <img src="<?= base_url('assets/img/error_404.svg') ?>" alt="image" />
        </div>
        
        <h1>Page Not Found!</h1>

        <p>
            <?php if (ENVIRONMENT !== 'production') : ?>
                <?= nl2br(esc($message)) ?>
            <?php else : ?>
                <?= lang('Errors.sorryCannotFind') ?>
            <?php endif ?>
        </p>
        <a onclick="history.back()">
            <input class="btn solid" value="GO BACK"></input>
        </a>
    </div>

    <script src="<?= base_url('assets/font-awesome/js/all.js') ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>
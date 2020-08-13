<?php
$ver = time();
?>
<!DOCTYPE html>
<html lang="vi" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>LifeStyle</title>
    <link href="/assets/css/guide.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="/assets/css/styles.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="/assets/css/responsive.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,700,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'common/header.php'; ?>
    <?php include 'common/nav.php'; ?>
    <section id="single-product">
        <div class="breadcrumb-list">
            <ul class="breadcrumb site-w">
                <li><a class="breadcrumb-item" href="/">Trang chủ</a></li>
                <li><span class="breadcrumb-item">Trang cá nhân của bạn</span></li>
            </ul>
        </div>
        <div class="account-page site-w">

        </div>
    </section>
    <?php include 'common/footer.php'; ?>
</body>

</html>

<?php
$ver = time();
?>
<!DOCTYPE html>
<html lang="vi" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> - Der Charme Jewelry</title>
    <link href="/assets/css/guide.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="/assets/css/styles.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="/assets/css/responsive.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,700,900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'common/header.php'; ?>
    <?php include 'common/nav.php'; ?>
    <div class="thankyou-content">
        <h2 class="text-success">Cảm ơn bạn đã mua hàng của chúng tôi!!!</h2>
        <p class="my-4">Đơn hàng của bạn đã được đặt thành công. ID đơn hàng của bạn là # 9869572</p>
        <div class="button-list">
            <button type="button" class="btn btn-success font-16">Xem đơn hàng</button>
        </div>
    </div>
    <?php include 'common/footer.php'; ?>
</body>

</html>

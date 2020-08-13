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
    <div class="error-container">
        <h1>oh no...</h1>
        <h3>We have had an error</h3>
        <h4>Error 404</h4>
        <p>Rấ tiếc! Chúng tôi dường như không thể tìm thấy trang này<br>
            Nhưng vì bạn đang ở đây, hãy xem một số sản phẩm tốt nhất của chúng tôi dưới đây.
        </p>
    </div>
    <div class="related-products site-w">
        <div class="related-products-title">
            Gợi ý cho bạn hôm nay
        </div>
        <div class="product-list">
            <?php $displayCount = 8 ?>
            <?php include 'common/item.php'; ?>
        </div>
    </div>
    <?php include 'common/footer.php'; ?>
</body>

</html>

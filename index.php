<?php
$ver = date('idmY');
?>
<!DOCTYPE html>
<html lang="vi" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/images/favicon.png?v=<?= $ver ?>">
    <title>LifeStyle</title>
    <link href="assets/css/guide.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="assets/css/styles.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="assets/css/slide.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="assets/css/responsive.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,700,900&display=swap" rel="stylesheet">
</head>

<body id="main-body">
    <?php include 'common/header.php'; ?>
    <?php include 'common/nav.php'; ?>
    <?php include 'include/banner.php'; ?>
    <main class="homepage">
        <div class="site-w">
            <div class="list-events">
                <div class="single-event">
                    <a href="/" class="event-link"><img src="/images/events/1.jpg" alt=""></a>
                </div>
                <div class="single-event">
                    <a href="/" class="event-link"><img src="/images/events/2.jpg" alt=""></a>
                    <a href="/" class="event-link"><img src="/images/events/3.jpg" alt=""></a>
                </div>
                <div class="single-event">
                    <a href="/" class="event-link"><img src="/images/events/4.jpg" alt=""></a>
                </div>
            </div>
        </div>
        <div class="site-w show-product hottrend">
            <h2 class="content-title ">Xu hướng tìm kiếm</h2>
            <div class="product-list">
                <?php $displayCount = 4 ?>
                <?php include 'common/item.php'; ?>
            </div>
        </div>
        <div class="dercharme-deal">
            <div class="site-w">
                <a class="deal-image" href="#">
                    <img src="/images/deals/1.jpg" alt="">
                </a>
                <div class="deal-content">
                    <div class="text-box-header">
                        <h3>Nhẫn cưới</h3>
                        <p class="sub-header">
                            Nhẫn Vàng trắng 10K đính đá ECZ Swarovski True Love
                        </p>
                    </div>
                    <div class="deal-info">
                        <p class="deal-deascription">
                            Tiết kiệm 13%
                        </p>
                    </div>
                    <div class="prices">
                        <p class="price">
                            <span class="new-price">3.681.000 đ</span>
                            <span class="divider"></span>
                            <span class="old-price">3.999.000 đ</span>
                        </p>
                    </div>
                    <a class="buynow" href="#">
                        <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" style="height: 20px;" xmlns="http://www.w3.org/2000/svg"><path d="m504.399 185.065c-6.761-8.482-16.904-13.348-27.83-13.348h-98.604l-53.469-122.433c-3.315-7.591-12.157-11.06-19.749-7.743-7.592 3.315-11.059 12.158-7.743 19.75l48.225 110.427h-178.458l48.225-110.427c3.315-7.592-.151-16.434-7.743-19.75-7.591-3.317-16.434.15-19.749 7.743l-53.469 122.434h-98.604c-10.926 0-21.069 4.865-27.83 13.348-6.637 8.328-9.086 19.034-6.719 29.376l52.657 230c3.677 16.06 17.884 27.276 34.549 27.276h335.824c16.665 0 30.872-11.216 34.549-27.276l52.657-230.001c2.367-10.342-.082-21.048-6.719-29.376zm-80.487 256.652h-335.824c-2.547 0-4.778-1.67-5.305-3.972l-52.657-229.998c-.413-1.805.28-3.163.936-3.984.608-.764 1.985-2.045 4.369-2.045h85.503l-3.929 8.997c-3.315 7.592.151 16.434 7.743 19.75 1.954.854 3.99 1.258 5.995 1.258 5.782 0 11.292-3.363 13.754-9l9.173-21.003h204.662l9.173 21.003c2.462 5.638 7.972 9 13.754 9 2.004 0 4.041-.404 5.995-1.258 7.592-3.315 11.059-12.158 7.743-19.75l-3.929-8.997h85.503c2.384 0 3.761 1.281 4.369 2.045.655.822 1.349 2.18.936 3.983l-52.657 230c-.528 2.301-2.76 3.971-5.307 3.971z"/><path fill="#333" d="m166 266.717c-8.284 0-15 6.716-15 15v110c0 8.284 6.716 15 15 15s15-6.716 15-15v-110c0-8.284-6.715-15-15-15z"/><path fill="#333" d="m256 266.717c-8.284 0-15 6.716-15 15v110c0 8.284 6.716 15 15 15s15-6.716 15-15v-110c0-8.284-6.716-15-15-15z"/><path fill="#333" d="m346 266.717c-8.284 0-15 6.716-15 15v110c0 8.284 6.716 15 15 15s15-6.716 15-15v-110c-.001-8.284-6.716-15-15-15z"/></svg>
                        <span>Mua ngay</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="site-w show-product">
            <h2 class="content-title ">Sản phẩm bán chạy</h2>
            <div class="product-list">
                <?php $displayCount = 8 ?>
                <?php include 'common/item.php'; ?>
            </div>
        </div>
        <div class="site-w show-product">
            <h2 class="content-title ">Bộ sưu tập cưới</h2>
            <div class="product-list">
                <?php $displayCount = 8 ?>
                <?php include 'common/item.php'; ?>
            </div>
        </div>
    </main>

    <?php include 'common/footer.php'; ?>
    <script src="assets/js/slick.js?v=<?= $ver ?>"></script>
    <script type="text/javascript">
    $('#slides').slick({
        dots: !1,
        centerMode: true,
        slidesToShow: 1,
        autoplay: !1,
        autoplaySpeed: 2000,
        variableWidth: true
    });

    </script>
</body>
</html>

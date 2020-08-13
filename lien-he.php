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
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.1930432347366!2d105.80810402921858!3d21.00176775114026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac99b2fdfe67%3A0xbd0aa5cda5c28264!2zTmfDtSAzIE5ow6JuIEjDsmEsIE5ow6JuIENow61uaCwgVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2sus!4v1597293224400!5m2!1sen!2sus" width="100%" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <main class="homepage">

        <div class="site-w show-product hottrend">
            <style media="screen">
                .form-group {
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    padding: 7px 10px;
                }

                .form-group label {
                    min-width: 180px;
                    text-align: right;
                    margin: 0;
                    padding: 0 15px 0 0
                }
            </style>

            <form class="customerInfo ng-untouched ng-pristine ng-valid">
                <div class="contact-form">
                    <div class="form-group">
                        <label for="customerName">Họ tên người nhận</label>
                        <input class="form-control" id="customerName" name="full_name" placeholder="Họ tên người nhận" type="text">
                    </div>
                    <div class="form-group">
                        <label for="customerPhone">Điện thoại người nhận</label>
                        <input class="form-control" id="customerPhone" name="phone" placeholder="Điện thoại người nhận" type="text">
                    </div>
                    <div class="form-group">
                        <label for="customerEmail">Email</label>
                        <input class="form-control" id="customerEmail" name="email" placeholder="Email" type="email">
                    </div>
                    <div class="form-group">
                        <label for="customerAddress">Địa chỉ</label>
                        <input class="form-control" id="customerAddress" name="address" placeholder="Địa chỉ" type="text">
                    </div>
                    <div class="form-group">
                        <label for="customerProvince">Tỉnh/Thành phố</label>
                        <select id="customerProvince" name="location_id">
                            <option value="-1" >-- Chọn Tỉnh / Thành --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="customerDistrict">Quận/Huyện</label>
                        <select id="customerDistrict" name="district_id">
                            <option value="-1" >-- Chọn Quận / Huyện --</option>
                        </select>
                    </div>
                    <div class="form-group customerNote">
                        <label for="customerNote">Ghi chú</label>
                        <textarea class="form-control" id="customerNote" name="note" placeholder="Nhập ghi chú" rows="3"></textarea>
                    </div>
                    <div class="form-group customerNote">
                        <label></label>
                        <button class="button sent-request"> Gửi yêu cầu </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="site-w show-product hottrend">
            <h2 class="content-title ">Xu hướng tìm kiếm</h2>
            <div class="product-list">
                <?php $displayCount = 4 ?>
                <?php include 'common/item.php'; ?>
            </div>
        </div>
    </main>
    <?php include 'common/footer.php'; ?>
</body>
</html>

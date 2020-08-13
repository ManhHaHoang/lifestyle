<?php
$ver = time();
?>
<!DOCTYPE html>
<html lang="vi" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="/images/favicon.png?v=<?= $ver ?>">
    <title>LifeStyle | Giỏ hàng</title>
    <link href="assets/css/guide.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="assets/css/styles.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="assets/css/responsive.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,700,900&display=swap" rel="stylesheet">
</head>

<body id="main-body">
    <?php include 'common/header.php'; ?>
    <?php include 'common/nav.php'; ?>

    <section id="cart">
        <div class="breadcrumb-list">
            <ul class="breadcrumb site-w">
                <li><a class="breadcrumb-item" href="/">Trang chủ</a></li>
                <li><span class="breadcrumb-item">Giỏ hàng của bạn</span></li>
            </ul>
        </div>
        <div class="site-w customer-info">
            <div class="checkout-address">
                <div class="checkout-address-header">
                    <div class="checkout-address-header-text">
                        <svg class="shopee-svg-icon icon-location-marker" height="16" viewBox="0 0 12 16" width="12">
                            <path d="M6 3.2c1.506 0 2.727 1.195 2.727 2.667 0 1.473-1.22 2.666-2.727 2.666S3.273 7.34 3.273 5.867C3.273 4.395 4.493 3.2 6 3.2zM0 6c0-3.315 2.686-6 6-6s6 2.685 6 6c0 2.498-1.964 5.742-6 9.933C1.613 11.743 0 8.498 0 6z" fill-rule="evenodd"></path>
                        </svg>
                        Địa chỉ nhận hàng
                    </div>
                    <div id="add-address" class="checkout-address-manage-buttons">
                        <button class="stardust-button checkout-address-add-new-btn" onclick="openFormAddAddress()">
                            <svg class="stardust-icon" enable-background="new 0 0 10 10" viewBox="0 0 10 10">
                                <path stroke="none" d="m10 4.5h-4.5v-4.5h-1v4.5h-4.5v1h4.5v4.5h1v-4.5h4.5z"></path>
                            </svg>
                            Thêm địa chỉ mới
                        </button>
                    </div>
                </div>
                <div class="checkout-address-selection">
                    <div id="address-default" class="checkout-address-row">
                        <div class="checkout-address-user-detail">Hoàng Mạnh Hà - 0979210900</div>
                        <div class="checkout-address-address-summary">Số 6 Lê Văn Thiêm, Thanh Xuân, Hà Nội</div>
                        <div class="checkout-address-default-label">Mặc định</div>
                    </div>
                    <!-- <div class="checkout-address-row">
                        <div class="checkout-address-user-detail">Không tìm thấy địa chỉ nhận hàng</div>
                        <div class="checkout-address-address-summary"></div>
                        <div class="checkout-address-default-label"></div>
                    </div> -->
                    <div id="change-address" class="checkout-address-change-btn" onclick="changeAddress(this)">
                        Thay đổi
                    </div>
                </div>
                <div id="edit-address" class="checkout-address-edit-addresses hidden">
                    <div class="stardust-radio-group">
                        <label for="choose-address-1">
                            <input id="choose-address-1" type="radio" class="choose-input" name="choose-address" value="" checked>
                            <span class="choose-type"></span>
                            <div class="checkout-address-user-detail">Hoàng Mạnh Hà (+84) 979210900</div>
                            <div class="checkout-address-address-summary">Số 6 Lê Văn Thiêm (Trước cửa Vinmart), Phường Nhân Chính, Quận Thanh Xuân, Hà Nội</div>
                            <div class="checkout-address-default-label">Mặc định</div>
                        </label>
                    </div>
                    <div class="stardust-radio-group">
                        <label for="choose-address-2">
                            <input id="choose-address-2" type="radio" class="choose-input" name="choose-address" value="" checked>
                            <span class="choose-type"></span>
                            <div class="checkout-address-user-detail">Kiều Tuấn Anh (+84) 364697377</div>
                            <div class="checkout-address-address-summary">Số 6 Lê Văn Thiêm (Trước cửa Vinmart), Phường Nhân Chính, Quận Thanh Xuân, Hà Nội</div>
                        </label>
                    </div>
                    <div class="checkout-address-edit-addresses-btns">
                        <button class="stardust-button stardust-button--primary checkout-address-submit-btn" onclick="saveButton()">Hoàn thành</button>
                        <button class="stardust-button checkout-address-cancel-btn" onclick="cancelButton(this)">Trở lại</button>
                    </div>
                </div>
                <div class="add-new-address">
                    <form id="customer-new-address" class="new-address" novalidate>
                        <div class="new-address-title">
                            Thêm 1 Địa Chỉ Mới
                        </div>
                        <div class="form-group">
                            <label>Tên người nhận <span class="require-field">*</span></label>
                            <input class="form-control" type="text" name="delivery_full_name" required="">
                            <div class="error-message js-validation-name"></div>
                        </div>
                        <div class="form-group">
                            <label class="first-text">Số điện thoại <span class="require-field">*</span></label>
                            <input class="form-control" type="tel" name="delivery_phone" required="">
                            <div class="error-message js-validation-phone"></div>
                        </div>
                        <div class="form-group">
                            <label class="first-text">Địa chỉ giao hàng: <span class="require-field">*</span></label>
                            <input class="form-control" name="delivery_address" id="delivery_address" required="">
                            <div class="error-message js-validation-address"></div>
                        </div>
                        <div class="form-group">
                            <label class="first-text">Tỉnh thành <span class="require-field">*</span></label>
                            <select name="delivery_location_id" class="form-control" id="delivery_location_id" required="">
                                <option value="">-- Chọn tỉnh thành --</option>
                            </select>
                            <div class="error-message js-validation-location"></div>
                        </div>
                        <div class="form-group">
                            <label class="first-text">Quận/Huyện <span class="require-field">*</span></label>
                            <select name="district_delivery_id" class="form-control" id="district_delivery_id" required="">
                                <option value="">-- Chọn quận/ huyện --</option>
                            </select>
                            <div class="error-message js-validation-district"></div>
                        </div>
                        <div class="form-group">
                            <label class="first-text">Phường/Xã <span class="require-field">*</span></label>
                            <select name="commune_delivery_id" class="form-control" id="commune_delivery_id" required="">
                                <option value="">-- Chọn phường/ xã --</option>
                            </select>
                            <div class="error-message js-validation-commune"></div>
                        </div>
                        <div class="form-group">
                            <label for="default_receive">
                                <input type="checkbox" class="default-input" name="default_receive" id="default_receive" />
                                <span class="default-type"></span>
                                Đặt làm địa chỉ mặc định
                            </label>
                        </div>
                        <div class="popup-form-footer">
                            <button onclick="closeForm()" type="reset" class="btn cancel-btn">Đóng</button>
                            <button onclick="saveForm()" type="submit" class="btn btn-solid-primary">Lưu lại</button>
                        </div>
                        <span class="close-popup-form" onclick="closeForm()">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" xml:space="preserve"><path fill="#666" d="M11.5,10l8.2-8.2c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0L10,8.6L1.7,0.3c-0.4-0.4-1-0.4-1.4,0 c-0.4,0.4-0.4,1,0,1.4L8.6,10l-8.3,8.3c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0l8.3-8.3l8.3,8.3c0.4,0.4,1,0.4,1.4,0 c0.4-0.4,0.4-1,0-1.4L11.5,10z"></path></svg>
                        </span>
                    </form>
                    <div class="new-address-dummy" onclick="closeForm()"></div>
                </div>
            </div>
        </div>
        <div class="site-w cart-container">
            <div class="cart-wrapper cart-head">
                <div class="cart-item cart-item-sortby">#</div>
                <div class="cart-item cart-item-info">Sản phẩm</div>
                <div class="cart-item cart-item-variation"></div>
                <div class="cart-item cart-money">
                    <div class="cart-item cart-item-price">Đơn giá</div>
                    <div class="cart-item cart-item-qty">Số lượng</div>
                    <div class="cart-item cart-item-total">Thành tiền</div>
                </div>
                <div class="cart-item cart-item-action"></div>
            </div>

            <?php
            $cartItem = [
                ["1", "product-1.jpg", "Nhẫn cưới kim cương vàng trắng 14K Chung đôi", "2840000", "3300000", "2", "Tuổi vàng: 14K"],
                ["2", "product-2.jpg", "Nhẫn Vàng trắng 14K đính ngọc trai Akoya", "12914000","","1", "Màu: Vàng"],
                ["3", "product-3.jpg", "Nhẫn Vàng trắng 14K đính đá Sapphire", "9992000","12992000","1", ""],
                ["4", "product-4.jpg", "Nhẫn nam Kim cương Vàng trắng 14K", "37309000", "","1", "Màu:Trắng"],
                ["5", "product-5.jpg", "Nhẫn Kim cương Vàng trắng 14K True Love", "39624000","","1", "Tuổi vàng: 14K"],
            ]
            ?>
            <?php foreach ($cartItem as $key => $value) { ?>
                <div class="cart-wrapper cart-body">
                    <div class="cart-item cart-item-sortby"><?= $value[0] ?></div>
                    <div class="cart-item cart-item-info">
                        <div class="cart-item-image">
                            <a href="product-detail">
                                <img src="images/<?=$value[1]?>" alt="<?=$value[2]?>">
                            </a>
                        </div>
                        <a href="cart-product-detail" class="cart-item-name">
                            <?=$value[2]?>
                        </a>
                    </div>
                    <div class="cart-item cart-item-variation">
                        <?=$value[6]?>
                    </div>
                    <div class="cart-item cart-money">
                        <div class="cart-item cart-item-price">
                            <?php $oldPrice = ($value[3] != "" && $value[3] > 0 ) ? $value[3] : 0; ?>
                            <?php $salePrice = ($value[4] != "" && $value[4] > 0 ) ? $value[4] : 0; ?>
                            <?php $qty = $value[5] ?>
                            <span class="sale-pPrice">
                                <?= number_format($value[3], 0, ",", ".") . ' ₫' ?>
                            </span>
                            <span class="old-price">
                                <?php if ($value[4] != "" && $value[4] > 0):?>
                                    <?= number_format($value[4], 0, ",", ".") . ' ₫' ?>
                                <?php endif;?>
                            </span>
                        </div>
                        <div class="cart-item cart-item-qty">
                            <div class="cart-qty-box">
                                <button class="form-control" type="button">
                                    <svg class="qty-icon" viewBox="0 -192 426.66667 426" xmlns="http://www.w3.org/2000/svg"><path fill="#999" d="m405.332031 43h-384c-11.773437 0-21.332031-9.558594-21.332031-21.332031 0-11.777344 9.558594-21.335938 21.332031-21.335938h384c11.777344 0 21.335938 9.558594 21.335938 21.335938 0 11.773437-9.558594 21.332031-21.335938 21.332031zm0 0"/></svg>
                                </button>
                                <input class="form-control" type="number" placeholder="1" min="1" max="9" value="<?=$value[5]?>">
                                <button class="form-control" type="button">
                                    <svg class="qty-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><path fill="#999" d="M492,236H276V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v216H20c-11.046,0-20,8.954-20,20s8.954,20,20,20h216 v216c0,11.046,8.954,20,20,20s20-8.954,20-20V276h216c11.046,0,20-8.954,20-20C512,244.954,503.046,236,492,236z"/></svg>
                                </button>
                            </div>
                        </div>
                        <div class="cart-item cart-item-total">
                            <?php $totalPrice = ($oldPrice * $qty);
                            echo number_format($totalPrice, 0, ",", ".") . ' ₫';
                            ?>
                        </div>
                    </div>
                    <div class="cart-item cart-item-action">
                        <span id="deleteItem<?= $value[0] ?>" class="delete-item">
                            <svg class="delete-icon" viewBox="-40 0 427 427.00131" xmlns="http://www.w3.org/2000/svg"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"/><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/></svg>
                        </span>
                    </div>
                </div>
            <?php } ?>
            <div class="cart-wrapper cart-footer">
                <div class="cart-item item-info">
                    <label for="">Lời nhắn</label>
                    <textarea name="name" rows="2" class="form-control" placeholder="Gửi lời nhắn cho chúng tôi"></textarea>
                </div>
                <div class="cart-item payment-box">
                    <div class="payment-item sub-total">
                        <span>Tổng tiền hàng <small>(6 sản phẩm)</small>:</span> <span class="payment-price">105.519.000₫</span>
                    </div>
                    <div class="payment-item shipping-fee">
                        <span>Phí vận chuyển:</span> <span class="payment-price">0₫</span>
                    </div>
                    <div class="payment-item order-total-price">
                        <span>Tổng thanh toán:</span> <span class="payment-price">105.519.000₫</span>
                    </div>

                </div>
            </div>
            <div class="checkout-wrapper">
                <a href="page-checkout.html" class="btn btn-success checkout-buynow">
                    <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m504.399 185.065c-6.761-8.482-16.904-13.348-27.83-13.348h-98.604l-53.469-122.433c-3.315-7.591-12.157-11.06-19.749-7.743-7.592 3.315-11.059 12.158-7.743 19.75l48.225 110.427h-178.458l48.225-110.427c3.315-7.592-.151-16.434-7.743-19.75-7.591-3.317-16.434.15-19.749 7.743l-53.469 122.434h-98.604c-10.926 0-21.069 4.865-27.83 13.348-6.637 8.328-9.086 19.034-6.719 29.376l52.657 230c3.677 16.06 17.884 27.276 34.549 27.276h335.824c16.665 0 30.872-11.216 34.549-27.276l52.657-230.001c2.367-10.342-.082-21.048-6.719-29.376zm-80.487 256.652h-335.824c-2.547 0-4.778-1.67-5.305-3.972l-52.657-229.998c-.413-1.805.28-3.163.936-3.984.608-.764 1.985-2.045 4.369-2.045h85.503l-3.929 8.997c-3.315 7.592.151 16.434 7.743 19.75 1.954.854 3.99 1.258 5.995 1.258 5.782 0 11.292-3.363 13.754-9l9.173-21.003h204.662l9.173 21.003c2.462 5.638 7.972 9 13.754 9 2.004 0 4.041-.404 5.995-1.258 7.592-3.315 11.059-12.158 7.743-19.75l-3.929-8.997h85.503c2.384 0 3.761 1.281 4.369 2.045.655.822 1.349 2.18.936 3.983l-52.657 230c-.528 2.301-2.76 3.971-5.307 3.971z"></path><path fill="#333" d="m166 266.717c-8.284 0-15 6.716-15 15v110c0 8.284 6.716 15 15 15s15-6.716 15-15v-110c0-8.284-6.715-15-15-15z"></path><path fill="#333" d="m256 266.717c-8.284 0-15 6.716-15 15v110c0 8.284 6.716 15 15 15s15-6.716 15-15v-110c0-8.284-6.716-15-15-15z"></path><path fill="#333" d="m346 266.717c-8.284 0-15 6.716-15 15v110c0 8.284 6.716 15 15 15s15-6.716 15-15v-110c-.001-8.284-6.716-15-15-15z"></path></svg> MUA NGAY
                </a>
            </div>
        </div>
    </section>


    <?php include 'common/footer.php'; ?>
</body>
</html>

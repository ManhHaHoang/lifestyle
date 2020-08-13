<?php
$ver = time();
?>
<!DOCTYPE html>
<html lang="vi" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/favicon.png?v=<?= $ver ?>">
    <title>LifeStyle | Chi tiết sản phẩm</title>
    <link href="assets/css/guide.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="assets/css/styles.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="assets/css/responsive.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,700,900&display=swap" rel="stylesheet">
</head>

<body id="main-body">
    <?php include 'common/header.php'; ?>
    <?php include 'common/nav.php'; ?>
    <section id="single-product">
        <div class="breadcrumb-list">
            <ul class="breadcrumb site-w">
                <li><a class="breadcrumb-item" href="/">Trang chủ</a></li>
                <li><a class="breadcrumb-item" href="/">Danh mục sản phẩm</a></li>
                <li><span class="breadcrumb-item">Nhẫn cưới Vàng trắng 10K đính đá</span></li>
            </ul>
        </div>
        <div class="product-detail-wrapper site-w">
            <div class="product-box">
                <div class="expanded-image">
                    <!-- Expanded image -->
                    <img id="expandedImg" src="images/product-1.jpg" style="width:100%">
                    <!-- Image text -->
                    <div id="imgtext"></div>
                </div>

                <div class="gallery-thumb">
                    <div class="thumb-item active">
                        <img class="thumbnail" src="images/product-1.jpg" alt="" onclick="changeImage(this);">
                    </div>
                    <?php for ($i=2; $i < 6; $i++) { ?>
                        <div class="thumb-item">
                            <img class="thumbnail" src="images/product-<?= $i ?>.jpg" alt="" onclick="changeImage(this);">
                        </div>
                    <?php } ?>
                </div>

            </div>
            <div class="product-content">
                <h1 class="product-name-dk">Nhẫn cưới Vàng trắng 10K đính đá</h1>
                <div class="product-attr">
                    <div class="attr-item product-sku">
                        SKU: <span class="attr">GNXM00W000100</span>
                    </div>
                    <div class="attr-item product-origin">
                        Xuất xứ: <span class="attr">Việt Nam</span>
                    </div>
                    <div class="attr-item product-category">
                        Danh mục: <span class="attr">Nhẫn cưới</span>
                    </div>
                </div>
                <div class="product-material">
                    Chất liệu: <span class="attr">Vàng</span>
                </div>
                <div class="product-price">
                    <span class="new-price">
                        2.840.000 đ
                    </span>
                    <span class="old-price">
                        3.300.000 đ
                    </span>
                    <span class="your-save">
                        Giảm: 13%
                    </span>
                </div>
                <div class="product-variant">
                    Không rõ size nhẫn của bạn? <span class="size-guide" onclick="openSizeGuide()">Cách đo nhẫn</span>
                </div>
                <div class="product-variant">
                    <label class="variant-label">
                        Kích cỡ
                    </label>
                    <select class="variant-attr" name="">
                        <option value="">Chọn kích cỡ</option>
                        <option value="">8</option>
                        <option value="">9</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                        <option value="">13</option>
                    </select>
                </div>
                <div class="product-variant">
                    <span class="variant-label">
                        Tuổi vàng:
                    </span>
                    <div class="variant-attr">
                        <?php
                        $goldLabel = [
                            "14K",
                            "18K",
                            "20K",
                            "24K",
                        ]
                        ?>
                        <label class="gold-label" for="gold-10k">
                            <input id="gold-10k" type="radio" name="label-gold" value="" disabled>
                            <span>10K</span>
                        </label>
                        <?php foreach ($goldLabel as $key => $goldLabel) { ?>
                            <label class="gold-label" for="gold-<?= $goldLabel ?>">
                                <input id="gold-<?= $goldLabel ?>" type="radio" name="label-gold" value="">
                                <span><?= $goldLabel ?></span>
                            </label>
                        <?php }?>

                    </div>
                </div>
                <div class="product-buy">
                    <label class="variant-label">Số lượng</label>
                    <div class="product-buy-action">
                        <div class="input-quantity">
                            <button class="form-control btn-frist"><svg class="svg-icon " enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0"><polygon points="4.5 4.5 3.5 4.5 0 4.5 0 5.5 3.5 5.5 4.5 5.5 10 5.5 10 4.5"></polygon></svg></button>
                            <input class="form-control quantity" type="number" value="1">
                            <button class="form-control  btn-last"><svg class="svg-icon icon-plus-sign" enable-background="new 0 0 10 10" viewBox="0 0 10 10" x="0" y="0"><polygon points="10 4.5 5.5 4.5 5.5 0 4.5 0 4.5 4.5 0 4.5 0 5.5 4.5 5.5 4.5 10 5.5 10 5.5 5.5 10 5.5"></polygon></svg></button>
                        </div>
                        <span class="product-status">
                            18 sản phẩm có sẵn
                        </span>
                    </div>
                </div>
                <div class="buynow-action">
                    <a class="add-to-cart" href="#">
                        <span>Thêm vào giỏ hàng</span>
                    </a>
                    <a class="buynow" href="cart">
                        <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" style="height: 20px;" xmlns="http://www.w3.org/2000/svg"><path d="m504.399 185.065c-6.761-8.482-16.904-13.348-27.83-13.348h-98.604l-53.469-122.433c-3.315-7.591-12.157-11.06-19.749-7.743-7.592 3.315-11.059 12.158-7.743 19.75l48.225 110.427h-178.458l48.225-110.427c3.315-7.592-.151-16.434-7.743-19.75-7.591-3.317-16.434.15-19.749 7.743l-53.469 122.434h-98.604c-10.926 0-21.069 4.865-27.83 13.348-6.637 8.328-9.086 19.034-6.719 29.376l52.657 230c3.677 16.06 17.884 27.276 34.549 27.276h335.824c16.665 0 30.872-11.216 34.549-27.276l52.657-230.001c2.367-10.342-.082-21.048-6.719-29.376zm-80.487 256.652h-335.824c-2.547 0-4.778-1.67-5.305-3.972l-52.657-229.998c-.413-1.805.28-3.163.936-3.984.608-.764 1.985-2.045 4.369-2.045h85.503l-3.929 8.997c-3.315 7.592.151 16.434 7.743 19.75 1.954.854 3.99 1.258 5.995 1.258 5.782 0 11.292-3.363 13.754-9l9.173-21.003h204.662l9.173 21.003c2.462 5.638 7.972 9 13.754 9 2.004 0 4.041-.404 5.995-1.258 7.592-3.315 11.059-12.158 7.743-19.75l-3.929-8.997h85.503c2.384 0 3.761 1.281 4.369 2.045.655.822 1.349 2.18.936 3.983l-52.657 230c-.528 2.301-2.76 3.971-5.307 3.971z"/><path fill="#333" d="m166 266.717c-8.284 0-15 6.716-15 15v110c0 8.284 6.716 15 15 15s15-6.716 15-15v-110c0-8.284-6.715-15-15-15z"/><path fill="#333" d="m256 266.717c-8.284 0-15 6.716-15 15v110c0 8.284 6.716 15 15 15s15-6.716 15-15v-110c0-8.284-6.716-15-15-15z"/><path fill="#333" d="m346 266.717c-8.284 0-15 6.716-15 15v110c0 8.284 6.716 15 15 15s15-6.716 15-15v-110c-.001-8.284-6.716-15-15-15z"/></svg>
                        <span>Mua ngay</span>
                    </a>
                </div>
                <ul class="product-features">
                    <li>
                        <a href="chinh-sach-doi-tra">
                            <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 206.108 206.108" style="enable-background:new 0 0 206.108 206.108;" xml:space="preserve"><path d="M152.774,69.886H30.728l24.97-24.97c3.515-3.515,3.515-9.213,0-12.728c-3.516-3.516-9.213-3.515-12.729,0L2.636,72.523 c-3.515,3.515-3.515,9.213,0,12.728l40.333,40.333c1.758,1.758,4.061,2.636,6.364,2.636c2.303,0,4.606-0.879,6.364-2.636 c3.515-3.515,3.515-9.213,0-12.728l-24.97-24.97h122.046c19.483,0,35.334,15.851,35.334,35.334s-15.851,35.334-35.334,35.334H78.531 c-4.971,0-9,4.029-9,9s4.029,9,9,9h74.242c29.408,0,53.334-23.926,53.334-53.334S182.182,69.886,152.774,69.886z"/></svg>
                            <span>Miễn phí đổi đến 14 ngày</span>
                        </a>
                    </li>
                    <li>
                        <a href="ve-precita/#7-cam-ket-yeu-thuong">
                            <svg class="feature-icon" viewBox="-41 0 374 374.10622" xmlns="http://www.w3.org/2000/svg"><path d="m287.664062 75.746094-140.605468-74.921875c-2.085938-1.113281-4.585938-1.097657-6.65625.039062l-136.714844 74.921875c-2.242188 1.230469-3.6328125 3.582032-3.6328125 6.140625v97.867188c.0820315 80.449219 47.7460935 153.230469 121.4570315 185.460937l18.976562 8.269532c1.773438.773437 3.792969.777343 5.570313.007812l21.382812-9.234375c75.078125-31.53125 123.921875-105.015625 123.929688-186.445313v-95.925781c0-2.585937-1.425782-4.964843-3.707032-6.179687zm-10.292968 102.105468c-.015625 75.816407-45.503906 144.226563-115.410156 173.566407l-.046876.023437-18.621093 8.039063-16.179688-7.058594c-68.613281-30-112.984375-97.742187-113.0625-172.628906v-93.722657l129.761719-71.117187 133.558594 71.167969zm0 0"/><path d="m92.167969 175.253906c-2.511719-2.941406-6.929688-3.289062-9.871094-.777344-2.941406 2.507813-3.289063 6.929688-.777344 9.867188l36.976563 43.300781c2.46875 2.890625 6.792968 3.285157 9.738281.886719l86.117187-70.0625c3-2.4375 3.453126-6.847656 1.011719-9.847656-2.4375-2.996094-6.847656-3.453125-9.847656-1.011719l-80.8125 65.742187zm0 0"/></svg>
                            <span>Đúng chất lượng</span>
                        </a>
                    </li>
                    <li>
                        <a href="ve-precita/#7-cam-ket-yeu-thuong">
                            <svg class="feature-icon" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m397.398 115.314c-2.719-4.709-7.785-7.634-13.223-7.634h-259.97c-5.438 0-10.504 2.925-13.222 7.634l-18.553 32.133c-2.074 3.592-.843 8.185 2.749 10.259 3.591 2.074 8.185.843 10.259-2.749l14.288-24.747 54.224 93.918h-108.448l22.926-39.71c2.074-3.592.843-8.186-2.749-10.259-3.592-2.076-8.186-.843-10.259 2.749l-27.746 48.058c-2.633 4.559-2.045 10.261 1.461 14.189l195.778 219.273c2.304 2.581 5.61 4.062 9.071 4.064h.006c3.458 0 6.763-1.478 9.069-4.055l196.176-219.276c3.514-3.928 4.104-9.633 1.469-14.198zm-127.364 108.815h-70.069l54.224-93.919 54.224 93.919h-.651c-4.148 0-7.51 3.363-7.51 7.51 0 4.148 3.363 7.51 7.51 7.51h3.616l-57.371 194.718-57.024-194.717h73.051c4.148 0 7.51-3.363 7.51-7.51.001-4.148-3.362-7.511-7.51-7.511zm51.388-7.51-54.224-93.919h108.448zm5.617 22.531h112.051l-167.074 186.747zm115.839-15.021h-108.448l54.224-93.918zm-310.144-101.429h108.448l-54.224 93.918zm48.597 116.45 54.699 186.776-166.763-186.776z"/><path d="m435.948 434.498c-.357-.238-.734-.445-1.127-.619-4.768-2.109-9.165-4.6-13.069-7.401-3.369-2.418-8.062-1.647-10.481 1.723-2.418 3.37-1.647 8.062 1.723 10.481 2.29 1.644 4.711 3.195 7.246 4.644-16.22 9.255-27.469 22.514-32.978 38.907-5.509-16.39-16.756-29.648-32.972-38.903 16.218-9.255 27.465-22.514 32.973-38.906.076.226.154.451.231.676 1.364 3.917 5.644 5.986 9.563 4.623 3.917-1.364 5.986-5.645 4.623-9.563-.571-1.637-1.072-3.338-1.493-5.054l-3.122-12.754c-1.109-4.529-5.14-7.692-9.803-7.692s-8.694 3.163-9.804 7.693l-3.121 12.753c-5.321 21.737-21.772 33.083-34.635 38.774-.393.174-.77.381-1.128.62-2.96 1.973-4.726 5.274-4.726 8.831s1.767 6.858 4.726 8.831c.357.239.734.445 1.128.62 12.863 5.69 29.313 17.037 34.635 38.774l3.122 12.754c1.109 4.529 5.14 7.692 9.803 7.692s8.694-3.163 9.803-7.693l3.122-12.753c5.321-21.737 21.772-33.083 34.635-38.774.392-.174.769-.381 1.127-.619 2.96-1.972 4.727-5.274 4.727-8.832s-1.768-6.86-4.728-8.833z"/><path d="m471.565 103.656c-.358-.239-.735-.446-1.129-.62-8.321-3.681-13.486-9.41-15.351-17.028l-1.573-6.43v-.001c-.969-3.954-4.489-6.716-8.559-6.716 0 0-.001 0-.002 0-4.071.001-7.59 2.764-8.557 6.717l-1.574 6.43c-1.865 7.618-7.03 13.347-15.351 17.028-.393.174-.771.381-1.129.62-2.53 1.687-4.041 4.511-4.04 7.552 0 3.041 1.512 5.864 4.043 7.55.357.238.733.445 1.126.619 8.322 3.681 13.486 9.41 15.351 17.029l1.574 6.428c.968 3.955 4.487 6.717 8.558 6.718h.002c4.071 0 7.59-2.761 8.559-6.717l1.574-6.429c1.865-7.618 7.03-13.347 15.351-17.028.392-.174.769-.38 1.126-.619 2.531-1.686 4.042-4.509 4.043-7.55-.001-3.043-1.512-5.866-4.042-7.553zm-26.613 18.354c-2.506-4.123-5.809-7.746-9.851-10.803 4.043-3.057 7.346-6.68 9.852-10.803 2.506 4.123 5.809 7.746 9.851 10.803-4.043 3.057-7.346 6.679-9.852 10.803z"/><path d="m65.695 87.002 2.255 9.21c1.03 4.207 4.775 7.146 9.106 7.146 4.332 0 8.077-2.939 9.106-7.146l2.255-9.21c3.642-14.874 14.969-22.669 23.831-26.59.393-.174.77-.381 1.127-.62 2.719-1.812 4.342-4.845 4.342-8.112 0-3.268-1.622-6.301-4.341-8.114-.358-.239-.735-.446-1.129-.62-8.861-3.92-20.188-11.715-23.83-26.589l-2.255-9.21c-1.03-4.208-4.775-7.147-9.107-7.147-4.331 0-8.076 2.939-9.106 7.146l-2.255 9.21c-3.64 14.874-14.968 22.669-23.829 26.589-.393.174-.771.381-1.128.62-2.72 1.814-4.342 4.847-4.342 8.115s1.624 6.301 4.343 8.113c.357.238.734.445 1.126.619 8.862 3.92 20.19 11.716 23.831 26.59zm11.36-57.739c4.139 9.06 10.824 16.634 19.789 22.416-8.964 5.782-15.65 13.357-19.789 22.417-4.139-9.06-10.825-16.634-19.789-22.417 8.964-5.782 15.65-13.357 19.789-22.416z"/></g></svg>
                            Đúng hàm lượng
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-body site-w">
            <ul class="detail-tab">
                <li class="tablinks" onclick="openTab(event, 'defaultTabContent')">Chi tiết</li>
                <li class="tablinks" onclick="openTab(event, 'defaultTabComment')">Bình luận</li>
            </ul>
            <div id="defaultTabContent" class="tabcontent">
                <p>Giá sản phẩm thay đổi tùy thuộc vào trọng lượng vàng.</p>
                <p>Nhẫn là một trong những phụ kiện không thể thiếu của phái đẹp nhằm định hình phong cách lịch lãm. BST nhẫn được chế tác từ chất liệu vàng 18K kết hợp đá màu không chỉ mang lại tính thẩm mỹ cao mà còn là yếu tố phong thủy mang đến may mắn và thành công. </p>

                <h3 class="tab-list-title">Thông số</h3>
                <div id="content_features" class="wysiwyg-content content-features">
                    <div class="product-feature-line">
                        <span class="product-feature-label">Thương hiệu:</span>
                        <div class="product-feature-value">PNJ</div>
                    </div>
                    <div class="product-feature-line">
                        <span class="product-feature-label">Loại đá chính:</span>
                        <div class="product-feature-value">Diamond</div>
                    </div>
                    <div class="product-feature-line">
                        <span class="product-feature-label">Loại đá phụ (nếu có):</span>
                        <div class="product-feature-value">Không gắn đá</div>
                    </div>
                    <div class="product-feature-line">
                        <span class="product-feature-label">Trọng lượng vàng tham khảo (phân vàng):</span>
                        <div class="product-feature-value">3.76520</div>
                    </div>
                    <div class="product-feature-line">
                        <span class="product-feature-label">Chủng loại:</span>
                        <div class="product-feature-value">Nhẫn</div>
                    </div>
                    <div class="product-feature-line">
                        <span class="product-feature-label">Tuổi vàng:</span>
                        <div class="product-feature-value">Vàng 14K</div>
                    </div>
                    <div class="product-feature-line">
                        <span class="product-feature-label">Hotline</span>
                        <div class="product-feature-value"><a href="tel:0979210900">097.921.0900</a></div>
                    </div>
                </div>
                <div id="content_files" class="wysiwyg-content content-files"> </div>
                <div id="content_tags" class="wysiwyg-content content-tags"> </div>


            </div>
            <div id="defaultTabComment" class="tabcontent" style="display: none;">

            </div>
        </div>
        <div class="related-products site-w">
            <div class="related-products-title">
                Sản phẩm liên quan
            </div>
            <div class="product-list">
                <?php $displayCount = 4 ?>
                <?php include 'common/item.php'; ?>
            </div>
        </div>
    </section>
    <div id="size-guide" class="size-guide-wrapper">
        <div class="size-guide-content">
            <p> HƯỚNG DẪN ĐO SIZE NHẪN </p>
            <div class="answer">
                <img src="images/size-guide-2.png" alt="">
                <p>Lấy số đo quanh ngón tay</p>
                <ul>
                    <li>Bước 1: Dùng một sợi dây (hoặc thước dây/ chỉ/ giấy bản nhỏ) quấn quanh ngón tay đeo nhẫn, đánh dấu chỗ tiếp giáp.</li>
                    <li>Bước 2: Đo chiều dài đoạn dây vừa đo.</li>
                    <li>Bước 3: Lấy chiều dài đó trừ độ dày đai nhẫn nhân 2 (tùy theo mẫu nhẫn có độ dày khác nhau).</li>
                    <li class="step-img center"><img alt="Độ dày đai nhẫn" class="pict image-lazyload" data-src="images/image-update/img-hd-do-size/do-day-nhan1.jpg"></li>
                    <li>Bước 4: Sau đó chia cho 3.14 là đường kính nhẫn.</li>
                    <li>Bước 5: Bạn đối chiếu đường kính bạn vừa đo (theo mm) với bảng kích thước nhẫn bên trên. Kích thước nhẫn của bạn tương ứng với size số ghi dưới vòng tròn.</li>
                </ul>
                <p><i><u>Chú ý:</u> </i> Nếu khi thời tiết lạnh ngón tay của bạn có thể nhỏ hơn bình thường bạn nên cộng thêm cho chu vi là 1 mm còn khi thời tiết nóng thì ngược lại, trừ đi 1 mm. Trường hợp xương khớp ngón tay của bạn to, thì bạn nên đo chu vi ở gần khớp (không phải trên khớp) Sao cho khi đeo nhẫn dễ vào nhưng không bị tuột mất.</p>
                <img src="images/size-guide.jpg" alt="">
                <p>Nếu có một chiếc nhẫn khác để đo, cách chính xác nhất là bạn dùng một chiếc nhẫn có độ rộng và kiểu dáng tương tự bạn định mua và làm theo các bước sau:</p>
                <p>- Bạn dùng thước để đo đường kính bên trong của chiếc nhẫn.</p> <p>- Bạn đối chiếu số mm của thước với kích thước đường kính của bảng kích thước nhẫn bên trên.</p>
                <p>- Kích thước nhẫn của bạn tương ứng với size số ghi dưới vòng tròn. Sau khi chọn size nhẫn, nhân viên PNJ sẽ gọi điện thoại xác nhận yêu cầu của bạn và tư vấn cụ thể để đảm bảo đáp ứng đúng yêu cầu của bạn.</p>
                <div class="mp-note">
                    <strong><u>Lưu ý:</u></strong> <br> <p>- Size nhẫn phổ biến của PNJ thường có đối với nhẫn nữ là size 8 - 12 và đối với nhẫn nam là size 14 - 18</p> <p>- Trường hợp size nhẫn bạn đo được không có, PNJ sẽ đặt làm trong thời gian tối đa là 2 tuần và chỉ áp dụng cho trang sức bằng vàng.</p>
                </div>
            </div>
            <span class="close-tab" onclick="closeSizeGuide()">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                    <path class="st0" d="M11.5,10l8.2-8.2c0.4-0.4,0.4-1,0-1.4c-0.4-0.4-1-0.4-1.4,0L10,8.6L1.7,0.3c-0.4-0.4-1-0.4-1.4,0
                    c-0.4,0.4-0.4,1,0,1.4L8.6,10l-8.3,8.3c-0.4,0.4-0.4,1,0,1.4c0.4,0.4,1,0.4,1.4,0l8.3-8.3l8.3,8.3c0.4,0.4,1,0.4,1.4,0
                    c0.4-0.4,0.4-1,0-1.4L11.5,10z"></path>
                </svg>
            </span>
        </div>
        <div class="size-guide-entry" onclick="closeSizeGuide()"></div>
    </div>
    <?php include 'common/footer.php'; ?>
</body>
</html>

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
    <title>LifeStyle | Tìm kiếm sản phẩm</title>
    <link href="assets/css/guide.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="assets/css/styles.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="assets/css/responsive.css?v=<?= $ver ?>" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,700,900&display=swap" rel="stylesheet">
</head>

<body id="main-body">
    <?php include 'common/header.php'; ?>
    <?php include 'common/nav.php'; ?>
    <section id="category-list">
        <div class="breadcrumb-list">
            <ul class="breadcrumb site-w">
                <li><a class="breadcrumb-item" href="/">Trang chủ</a></li>
                <li><a class="breadcrumb-item" href="/">Danh mục sản phẩm</a></li>
                <li><span class="breadcrumb-item">Nhẫn cưới Vàng trắng 10K đính đá</span></li>
            </ul>
        </div>
        <div class="category-page site-w">
            <div class="category-sidebar">
                <div class="widget-filter">
                    <div class="widget-title">
                        Giá sản phẩm
                    </div>
                    <div class="widget-content">
                        <?php
                            $priceLabel = [
                                ["price-1","Dưới 5.000.000₫"],
                                ["price-2","5.000.000d - 7.000.000₫"],
                                ["price-3","7.000.000₫ - 9.000.000₫"],
                                ["price-4","9.000.000₫ - 11.000.000₫"],
                                ["price-5","Trên 11.000.000₫"],
                            ];
                        ?>
                        <?php foreach ($priceLabel as $key => $value) { ?>
                            <label class="filter-label" for="<?= $value[0] ?>">
                                <input id="<?= $value[0] ?>" type="checkbox" name="collection" value="">
                                <span></span> <?= $value[1] ?>
                            </label>
                        <?php }?>
                    </div>
                </div>
                <div class="widget-filter">
                    <div class="widget-title">
                        Tuổi vàng
                    </div>
                    <div class="widget-content">
                        <?php
                            $goldLabel = [
                                "14K",
                                "18K",
                                "20K",
                                "24K",
                            ];
                        ?>
                        <label class="filter-label filter-gold" for="gold-10K">
                            <input id="gold-gold-10K" type="radio" name="label-gold" value="" checked>
                            <span></span> Vàng 10K
                        </label>
                        <?php foreach ($goldLabel as $key => $goldLabel) { ?>
                            <label class="filter-label filter-gold" for="gold-<?= $goldLabel ?>">
                                <input id="gold-<?= $goldLabel ?>" type="radio" name="label-gold" value="">
                                <span></span> Vàng <?= $goldLabel ?>
                            </label>
                        <?php }?>
                    </div>
                </div>
                <div class="widget-filter">
                    <div class="widget-title">
                        Bộ sưu tập
                    </div>
                    <div class="widget-content">
                        <?php
                            $collectionLabel = [
                                ["collection-1","Nhẫn cưới kim cương"],
                                ["collection-2","BST La Nuit"],
                                ["collection-3","BST Delicat"],
                                ["collection-4","Nhẫn cưới phay"],
                                ["collection-5","BST Lisse trơn"],
                                ["collection-6","BST Le Soleil"],
                                ["collection-7","Khác"],
                            ];
                        ?>
                        <?php foreach ($collectionLabel as $key => $value) { ?>
                            <label class="filter-label" for="<?= $value[0] ?>">
                                <input id="<?= $value[0] ?>" type="checkbox" name="collection" value="">
                                <span></span> <?= $value[1] ?>
                            </label>
                        <?php }?>
                    </div>
                </div>
                <div class="widget-filter">
                    <div class="widget-title">
                        Màu sắc
                    </div>
                    <div class="widget-content">
                        <?php
                            $colorLabel = [
                                ["color-1","Màu vàng"],
                                ["color-2","Màu trắng"],
                                ["color-3","Màu Hồng"],
                                ["color-4","Trắng - Vàng"],
                                ["color-5","Trắng - Hồng"],
                            ];
                        ?>
                        <?php foreach ($colorLabel as $key => $value) { ?>
                            <label class="filter-label" for="<?= $value[0] ?>">
                                <input id="<?= $value[0] ?>" type="checkbox" name="collection" value="">
                                <span></span> <?= $value[1] ?>
                            </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="sidebar-dummy" onclick="openFilter()"></div>
            <div class="category-product">
                <div class="results-info">
                    <h1 class="keyword-name">Nhẫn cưới</h1>
                    <span class="filter-name is-mobile" onclick="openFilter()">
                        <svg xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" class="filter-icon" viewBox="0 0 16 16" x="0px"
                        xmlns="http://www.w3.org/2000/svg" y="0px"><path d="M15.9,0.8C15.7,0.3,15.2,0,14.6,0H1.4c-0.6,0-1,0.3-1.3,0.8C-0.1,1.4,0,1.9,0.4,2.3l6.1,6.1v6.9c0,0.3,0.2,0.5,0.4,0.6 C7,16,7.1,16,7.2,16c0.2,0,0.3-0.1,0.5-0.2L9,14.6c0.3-0.3,0.5-0.6,0.5-1V8.4l6.1-6.1C16,1.9,16.1,1.4,15.9,0.8z M15.3,2L9.2,8.1 L9,8.3v0.3v5.1c0,0.2-0.1,0.5-0.3,0.6l-1.3,1.2c-0.1,0.1-0.2,0.1-0.3,0c0,0-0.1-0.1-0.1-0.2V8.2L0.7,2C0.4,1.7,0.4,1.3,0.5,1 c0.1-0.3,0.4-0.6,0.8-0.6h13.3c0.4,0,0.7,0.3,0.8,0.6C15.6,1.3,15.6,1.7,15.3,2z"></path></svg> Bộ lọc
                    </span>
                    <div class="sortby-wrapper">
                        <label for="">Sắp xếp:</label>
                        <div class="filter-list">
                            <span id="filterChoose" onclick="openFillterList()">Mặc định</span>
                            <?php
                                $filterList = [
                                    ["new-product","Sản phẩm mới nhất"],
                                    ["best-buy","Sản phẩm mua nhiều"],
                                    ["low-to-hight","Giá từ thấp đến cao"],
                                    ["hight-to-low","Giá từ cao đến thấp"],
                                ];
                            ?>
                            <ul id="filterList" class="sort-items" name="">
                                <?php foreach ($filterList as $key => $value) { ?>
                                    <li onclick="selectFilter(this)" class="sort-item"><?=$value[1]?></li>
                                <?php } ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <?php $displayCount = 20 ?>
                    <?php include 'common/item.php'; ?>
                </div>

                <nav id="pagination">
                    <ul class="pagination">
                        <li class="page-item disabled" aria-page="true">
                            <a class="page-link" href="#">« <span class="is-mobile">Trước</span></a>
                        </li>
                        <li class="page-item is-desktop"><a class="page-link" href="#">1</a></li>
                        <li class="page-item is-desktop active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item is-desktop"><a class="page-link" href="#">3</a></li>
                        <li class="page-item is-desktop"><a class="page-link" href="#">4</a></li>
                        <li class="page-item is-desktop"><a class="page-link" href="#">5</a></li>
                        <li class="page-item" aria-page="true">
                            <a class="page-link" href="#"><span class="is-mobile">Sau</span> »</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </section>
    <?php include 'common/footer.php'; ?>
</body>
</html>

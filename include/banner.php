<style media="screen">
.main-banner {
    position: relative;
    margin-bottom: 45px;
}

#slides {
    position: relative;
    padding: 0px;
    margin: 0px;
    height: 450px;
    overflow: hidden;
    display: block;
}


.slide {
    box-sizing: border-box;
    background: #333;
    color: #fff;
    display: block;
}

.slide img {
    width: auto;
    height: 100%;
    object-fit: contain;
}

</style>
<div class="main-banner">
    <div id="slides">
        <?php for ($i=1; $i < 6; $i++) { ?>
                <a class="slide" href="/">
                    <img src="/images/banner/<?= $i?>.png" alt="">
                </a>
        <?php } ?>
    </div>
</div>

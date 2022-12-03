<?php get_header(); ?>
<div id="main-content-wp" class="pt-0 clearfix detail-product-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pl-0">
                <div class="secion" id="breadcrumb-wp">
                    <div class="secion-detail">
                        <ul class="list-item clearfix ">
                            <li>
                                <a href="" title="">Trang chủ</a>
                            </li>
                            <li>
                                <a href="" title="">Điện thoại</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wp-inner d-flex">
        <?php get_sidebar(); ?>
        <div class="main-content">
            <div class="section" id="detail-product-wp">
                <div class="section-detail clearfix">
                    <div class="thumb-wp">
                        <a href="" title="" id="main-thumb">
                            <img id="zoom" src="admin/<?php echo $images[0]["image"] ?>"/>
                        </a>
                        <div id="list-thumb" class="owl-carousel">
                            <?php if ($images != null) ?>
                            <?php foreach ($images as $image) { ?>
                                <div class="thumbnail">
                                    <img class="thumbnail__image" src="admin/<?php echo $image["image"] ?>"/>
                                </div>
                            <?php } ?>
                            <?php ?>
                        </div>
                    </div>
                    <div class="thumb-respon-wp">
                        <img src="public/images/img-pro-01.png" alt="">
                    </div>
                    <div class="info">
                        <h3 class="product-name"> <?php echo !empty($product["p_name"]) ? $product["p_name"] : "" ?></h3>
                        <div class="desc">
                            <?php echo !empty($product["detail"]) ? $product["detail"] : "" ?>
                        </div>
                        <div class="color">
                            <?php if ($colors != null) { ?>
                                <?php if (count($colors) == 1) { ?>
                                    <div class="color__infor color__infor--active"
                                         color-id="<?php echo $colors[0]['color_id']; ?>">
                                        <?php echo $colors[0]['name']; ?>
                                    </div>
                                <?php } else { ?>
                                    <?php foreach ($colors as $key => $color) { ?>
                                        <div class="color__infor <?php echo $key == 0 ? "color__infor--active" : "" ?>"
                                             color-id="<?php echo $color['color_id']; ?>">
                                            <?php echo $color['name']; ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <div class="num-product">
                            <span class="title">Số lượng: </span>
                            <span class="status"><?php echo $inventory != null || isset($_SESSION["cart"]) ? $inventory["quantity"] : "" ?></span>
                        </div>
                        <div class="d-flex align-items-center pt-2 pb-3">
                            <div id="num-order-wp">
                                <button type="button" class="minus"><i class="fa-solid fa-minus"></i></button>
                                <input type="text"
                                       class="quantity"
                                       data-price="<?php echo !empty($product["price"]) ? $product["price"] : "" ?>"
                                       data-quantity=" <?php echo $inventory != null ? $inventory["quantity"] : "" ?>"
                                       value="01">

                                <button type="button"
                                        data-quantity=" <?php echo $inventory != null ? $inventory["quantity"] : "" ?>"
                                        class="plus"><i class="fa-solid fa-plus"></i></button>
                            </div>
                            <p class="price price-item mb-0 mr-4"> <?php echo !empty($product["price"]) ? currency_format($product["price"]) : "" ?></p>
                        </div>
                        <a href="cart.html" type="submit" title="Thêm giỏ hàng"
                           class="add-cart add-cart--detail"
                           data-id="<?php echo !empty($product["product_id"]) ? $product["product_id"] : "" ?>">
                            Thêm giỏ hàng
                        </a>
                        <button title="Mua ngay" class="buy-now">Mua ngay</button>
                    </div>
                </div>
            </div>
            <div class="section" id="post-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Mô tả sản phẩm</h3>
                </div>
                <div class="section-detail">
                    <?php echo !empty($product["exceprt"]) ? $product["exceprt"] : "" ?>
                </div>
            </div>
            <div class="section" id="same-category-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phầm cùng loại</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-17.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-18.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-19.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-20.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-21.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-22.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                        <li>
                            <a href="" title="" class="thumb">
                                <img src="public/images/img-pro-23.png">
                            </a>
                            <a href="" title="" class="product-name">Laptop HP Probook 4430s</a>
                            <div class="price">
                                <span class="new">17.900.000đ</span>
                                <span class="old">20.900.000đ</span>
                            </div>
                            <div class="action clearfix">
                                <a href="" title="" class="add-cart fl-left">Thêm giỏ hàng</a>
                                <a href="" title="" class="buy-now fl-right">Mua ngay</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>


<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-image: url(./assets/img/bg-img/breadcumb.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>Vehiculos</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Shop Grid Area Start ##### -->
<section class="shop_grid_area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">


                    <!-- ##### Single Widget ##### -->
                    <div class="widget price mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Filtrar por</h6>
                        <!-- Widget Title 2 -->
                        <p class="widget-title2 mb-30">Precio</p>

                        <div class="widget-desc">
                            <div class="slider-range">
                                <div data-min="40" data-max="90" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                </div>
                                <div class="range-price">Rango: $40.00 - $90.00</div>
                            </div>
                        </div>
                    </div>


                    <!-- ##### Single Widget ##### -->
                    <div class="widget brands mb-50">
                        <!-- Widget Title 2 -->
                        <p class="widget-title2 mb-30">Marca</p>
                        <div class="widget-desc">
                            <ul>
                                <?php foreach($this->model->getBrands() as $brand): ?>
                                    <li><a href="?c=Publishment&a=filterBy&field=brand&value='<?php echo $brand->brand ?>'"><?php echo $brand->brand ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">
                                    <p><span><?php echo count($this->model->getPublishments()); ?></span> productos encontrados</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <?php foreach($this->publishments as $key=>$publishment): ?>
                            <!-- Single Product -->
                            <div class="col-12 col-sm-12 col-lg-6"> 
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="<?php echo $publishment->thumbnail; ?>" alt="">

                                        <!-- Favourite -->
                                        <div class="product-favourite">
                                            <a href="#" class="favme fa fa-heart"></a>
                                        </div>
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <h6><?php echo $publishment->name; ?></h6>
                                        <p class="product-price"> $<?php echo $publishment->price; ?></p>

                                        <?php if(isset($_SESSION['valid']) &&  $_SESSION['valid']): ?>
                                        <!-- Hover Content -->
                                            <div class="hover-content">
                                                <!-- Add to Cart -->
                                                <div class="add-to-cart-btn">
                                                    <a href="#buyModal" rel="modal:open" class="btn essence-btn">Comprar</a>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Shop Grid Area End ##### -->

    
<div id="buyModal" class="modal" style="margin-top: 100px;">
    <h4>Esta seguro que desea comprar este vehiculo?</h4>
    <div class="row">
        <div class="col-md-6">
            <a href="?c=Login&a=logout" class="btn essence-btn">Si</a>
        </div>
        <div class="col-md-6">
            <a rel="modal:close" class="btn essence-btn">No</a>
        </div>
    </div>
</div>
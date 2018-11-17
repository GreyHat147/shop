<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-image: url(./assets/img/bg-img/breadcumb.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>Crear Publicación</h2>
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
            <div class="col-12 col-md-8 offset-md-2">
                <div class="checkout_details_area mt-50 clearfix">

                    <div class="cart-page-heading mb-30">
                        <h5>Vehículo</h5>
                    </div>

                    <form action="?c=Publishment&a=create" method="post">
                        <div class="row">
                            <div class="col-12">
                                <label for="name">Nombre <span>*</span></label>
                                <input type="text" class="form-control" id="name" value="" required autocomplete="off" name="name">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="vehicle_type">Tipo de vehículo <span>*</span></label>
                                <select class="w-100" id="vehicle_type" name="vehicle_type">
                                    <option value="C">Carro</option>
                                    <option value="M">Moto</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="brand">Marca</label>
                                <input type="text" class="form-control" id="brand" value="" name="brand">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="model">Modelo <span>*</span></label>
                                <input type="text" class="form-control" id="model" value="" required name="model">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="type">Tipo</label>
                                <input type="text" class="form-control" id="type" value="" name="type">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="status">Estado <span>*</span></label>
                                <select class="w-100" id="status" name="status">
                                    <option value="N">Nuevo</option>
                                    <option value="U">Usado</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="price">Precio <span>*</span></label>
                                <input type="number" step="any" class="form-control" id="price" value="" required name="price">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="accesories">Accesorios</label>
                                <textarea class="form-control" name="accesories" id="accesories" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="city">Ciudad</label>
                                <input type="text" class="form-control" id="cityPublish" value="" name="city">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="thumbnail">Url de la Imagen</label>
                                <input type="text" class="form-control" id="thumbnail" value="" name="thumbnail">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn essence-btn">Crear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Shop Grid Area End ##### -->
<div class="card h-100">
    <a href="products/item1.php">
        <img src="<?php echo $item['image'] ?>" alt="Item 1" class="img-card-top" />
    </a>
    <div class="card-body">
        <p class="card-title border-bottom" style="font-weight: bolder;">
            <?php echo $item['name'] ?>
        </p>
        <p class="card-text">
            <span class="price"><?php echo $item['currency'] . ' ' . $item['price']  ?></span>
            <button data-bs-toggle="modal" data-bs-target="#item<?php echo $item['id'] ?>-modal"
                class="btn btn-danger btn-sm float-end">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
        </p>
    </div>
</div>
<!-- Vertically centered modal -->
<div class="modal fade" id="item<?php echo $item['id'] ?>-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h6 class="modal-title">Specify Measurements for <?php echo $item['name'] ?></h6>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="units">Units</label>
                                <select name="units" id="units" class="form-control">
                                    <option value="cm">Centimeters</option>
                                    <option value="inch">Inches</option>
                                    <option value="meters">Meters</option>
                                    <option value="feet">Feet</option>
                                    <option value="yards">Yards</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="height">Height</label>
                                <input type="text" class="form-control" placeholder="e.g 5.4" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="width">Width</label>
                                <input type="text" class="form-control" placeholder="e.g 5.4" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal" role="button">
                        <i class="fa-solid fa-close"></i> Close
                    </button>
                    <button class="btn btn-success btn-sm">
                        <i class="fa-solid fa-cart-plus"></i>
                        Add to Cart
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
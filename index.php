<!DOCTYPE html>
<html lang="en">
<?php
$title = "Home";
include('components/head.php');
?>

<body>
    <?php
    include('components/header.php');
    ?>

    <main class="container">
        <!-- Our Contents for each Page -->
        <div class="row">
            <div class="col-md-9 my-auto">
                <?php include("components/home-carousel.php"); ?>
            </div>
            <div class="col-md-3">
                <?php
                include('components/categories.php');
                ?>
            </div>
        </div>
        <br>
        <h4 class="card-title">Popular Items
            <a href="pages/recent.php" class="btn btn-dark btn-sm float-end">
                <i class="fa-solid fa-list"></i>
                All
            </a>
        </h4>
        <?php
        $popularItems = [
            [
                'id' => 1,
                'name' => 'Sweatshirt',
                'image' => '/assets/images/styles.jpg',
                'price' => '50,000',
                'currency' => 'UGX',
            ],
            [
                'id' => 2,
                'name' => 'Trousers | Bereya',
                'image' => '/assets/images/bereya.jpg',
                'price' => '65,000',
                'currency' => 'UGX',
            ],
            [
                'id' => 3,
                'name' => 'Balenciaga',
                'image' => '/assets/images/balenciaga.jpg',
                'price' => '140,000',
                'currency' => 'UGX',
            ],
            [
                'id' => 4,
                'name' => 'Gucci',
                'image' => '/assets/images/gucci.jpg',
                'price' => '110,000',
                'currency' => 'UGX',
            ],
        ];

        ?>
        <div class="popular">
            <div class="row g-2 w-100">
                <?php
                foreach ($popularItems as $item) {
                ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <?php
                        include('components/item.php');
                        ?>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recently Added Items
                    <a href="pages/recent.php" class="btn btn-dark btn-sm float-end">
                        <i class="fa-solid fa-list"></i>
                        All
                    </a>
                </h4>
            </div>
        </div>
        <div class="row g-2">
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card my-2 h-100">
                    <a href="details/item1.php">
                        <img src="assets/images/styles.jpg" alt="Item 1" class="img-card-top" />
                    </a>
                    <div class="card-body">
                        <p class="card-title border-bottom" style="font-weight: bolder;">Item 1</p>
                        <p class="card-text">
                            <span class="price">UGX 50,000</span>
                            <button data-bs-target="#item1-modal" data-bs-toggle="modal"
                                class="btn btn-danger btn-sm float-end">
                                <i class="fa-solid fa-cart-plus"></i>
                            </button>
                        </p>
                    </div>
                </div>
                <!-- Vertically centered modal -->
                <div class="modal fade" id="item1-modal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form action="" method="post">
                                <div class="modal-header">
                                    <h6 class="modal-title">Specify Measurements for Item 1</h6>
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
                                    <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal"
                                        role="button">
                                        <i class="fa-solid fa-close"></i> Close
                                    </button>
                                    <button class="btn btn-success btn-sm">
                                        <i class="fa-solid fa-cart-plus"></i>
                                        Add to Cart</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card my-2 h-100">
                    <img src="assets/images/styles.jpg" alt="Item 1" class="img-card-top">
                    <div class="card-body">
                        <h6 class="card-title">Item 1</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card my-2 h-100">
                    <img src="assets/images/styles2.jpg" alt="Item 1" class="img-card-top">
                    <div class="card-body">
                        <h6 class="card-title">Item 1</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card my-2 h-100">
                    <img src="assets/images/styles.jpg" alt="Item 1" class="img-card-top">
                    <div class="card-body">
                        <h6 class="card-title">Item 1</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card my-2 h-100">
                    <img src="assets/images/styles2.jpg" alt="Item 1" class="img-card-top">
                    <div class="card-body">
                        <h6 class="card-title">Item 1</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card my-2 h-100">
                    <img src="assets/images/styles2.jpg" alt="Item 1" class="img-card-top">
                    <div class="card-body">
                        <h6 class="card-title">Item 1</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card my-2 h-100">
                    <img src="assets/images/styles.jpg" alt="Item 1" class="img-card-top">
                    <div class="card-body">
                        <h6 class="card-title">Item 1</h6>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card my-2 h-100">
                    <img src="assets/images/styles2.jpg" alt="Item 1" class="img-card-top">
                    <div class="card-body">
                        <h6 class="card-title">Item 1</h6>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php
    include("components/footer.php");
    ?>
</body>

</html>
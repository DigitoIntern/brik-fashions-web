<?php
include("../components/head.php");
include('../components/header.php');
?>

<main class="container py-2">
    <h1 class="text-center">Categories</h1>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <?php
            include('../components/categories.php');
            ?>
        </div>
    </div>
</main>


<?php

include("../components/footer.php");

?>
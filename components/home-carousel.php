<!-- Carousel place -->
<div id="home-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#home-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> -->

    <div class="carousel-inner">
        <?php

        $sql = "SELECT * FROM promotions;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>
        <div class="carousel-item <?php echo $row['id'] == 1 ? 'active' : '' ?>">
            <img src="<?php echo $row['image_url'] ?>" class="d-block w-100" alt="<?php echo $row['title'] ?>">
            <div class="carousel-caption d-none d-md-block">
                <h3>
                    <?php echo $row['title'] ?>
                </h3>
                <p><?php echo $row['description'] ?></p>
            </div>
        </div>
        <?php
            }
        }

        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#home-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#home-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
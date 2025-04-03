<!-- Categories with icons -->
<ul class="list-group card">
    <?php

    $sql = "SELECT * FROM categories;";
    $categories = $conn->query($sql);

    if ($categories->num_rows > 0) {
        // output data of each row
        while ($cat = $categories->fetch_assoc()) {
    ?>

    <li class="list-group-item">
        <a class="nav-link" aria-current="page" href="categories/<?php echo $cat['slug'] ?>">
            <i class="<?php echo $cat['icon'] ?>"></i>
            <?php echo $cat['name'] ?>
        </a>
    </li>
    <?php
        }
    }
    ?>


</ul>
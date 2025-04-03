<!DOCTYPE html>
<html lang="en">

<?php
    $title = "Admin";
    include("../components/head.php");
?>

<body class="container-fluid">
    <?php
    include ("admin-components/header.php");
?>
    <main class="w-100 mt-4 pt-5">
        <div class="row">
            <div class="col-md-2">
                <?php
                $current_page = 'dashboard';
                    include("admin-components/sidebar.php");
                ?>
            </div>
            <div class="col-md-10 pt-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text">This is the Dashboard</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('admin-components/footer.php'); ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<?php
    $title = "Promotions | Admin";
    include("../../components/head.php");
?>

<body class="container-fluid">
    <?php
    include ("../admin-components/header.php");
?>
    <main class="w-100  mt-4 pt-5">
        <div class="row">
            <div class="col-md-2">
                <?php
                $current_page = 'promotions';
                    include("../admin-components/sidebar.php");
                ?>
            </div>
            <div class="col-md-10 pt-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title">Promotions</h3>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="/admin/promotions/new.php" class="btn btn-dark btn-sm">
                                    <i class="fa fa-plus"></i> Add Promotion
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Promotions content</p>
                        <table class="table table-sm table-hover table-stripped table-bordered">
                            <thead>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM promotions;";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td>
                                        <img src="<?php echo $row['image_url'];  ?>" alt="Promotion Image" height="70px"
                                            width="100px" style="border-radius: 10px;object-fit:cover;" />
                                    </td>
                                    <td>
                                        <?php echo $row['title']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['status']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['created_at']; ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="/admin/categories/edit.php" class="btn btn-sm btn-primary">
                                            <i class="fa fa-edit"></i>
                                        </a>

                                        <a href="/admin/categories/show.php" class="btn btn-sm btn-dark">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="/admin/categories/delete.php" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                }else {
                                    echo "<tr><td colspan='3'>No Records Found!</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('../admin-components/footer.php'); ?>

</body>

</html>
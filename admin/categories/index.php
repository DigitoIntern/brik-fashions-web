<!DOCTYPE html>
<html lang="en">

<?php 

$title = "Categories | Admin";
include("../../components/head.php");

?>

<body class="container-fluid">
    <?php
    include("../admin-components/header.php");
?>
    <main class="w-100 mt-4 pt-5">
        <div class="row">
            <div class="col-md-2">
                <?php 
                $current_page = 'categories';
                    include("../admin-components/sidebar.php");
                ?>
            </div>

            <div class="col-md-10 pt-2">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8">
                                <h4 class="card-title">Categories</h4>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="/admin/categories/new.php" class="btn btn-sm btn-dark">
                                    <i class="fa fa-plus"></i> Add Category
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-hover table-stripped table-bordered">
                            <thead class="text-center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM categories;";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td class="text-center"><i class="<?php echo $row['icon']; ?>"></i></td>
                                    <td><?php echo $row['status']; ?></td>
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
                                } else {
                                    echo "<tr><td colspan='5'>No Categories Found!</td></td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    include("../admin-components/footer.php");
?>
</body>

</html>
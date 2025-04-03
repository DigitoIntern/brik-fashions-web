<!DOCTYPE html>
<html lang="en">

<?php 

$title = "New Category | Admin";
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
                                <h4 class="card-title">Add New Category</h4>
                            </div>
                            <div class="col-md-4 text-end">
                                <a href="/admin/categories" class="btn btn-sm btn-dark">
                                    <i class="fa fa-list"></i> All Categories
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/admin/categories/save.php" method="post">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <p>Enter Details of a category to create</p>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter Name" required>
                                        <label for="name">Category Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="slug" class=" form-control" id="slug"
                                            placeholder="Enter Slug" required>
                                        <label for="slug">Slug</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="icon" class="form-control" id="icon"
                                            placeholder="fa fa-folder-open" required>
                                        <label for="icon">Icon (fontawesome)</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea name="description" class="form-control" id="description"
                                            placeholder="Enter Description" rows="7"></textarea>
                                        <label for="name">Category Description</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select name="status" id="status" class="form-control" required>
                                            <option value="" class="disabled">Select Status</option>
                                            <option value="active"><i class="fa fa-check"></i> Active</option>
                                            <option value="active"><i class="fa fa-close"></i> Inactive</option>
                                        </select>
                                        <label for="status">Status</label>
                                    </div>
                                    <div class="pt-3 text-end">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-save"></i>
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
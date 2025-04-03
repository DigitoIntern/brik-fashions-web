<?php
include '../../components/head.php';

$name = '';
$slug = '';
$description = '';
$icon ='';
$status = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $slug = test_input($_POST["slug"]);
    $description = test_input($_POST["description"]);
    $icon = test_input($_POST["icon"]);
    $status = test_input($_POST["status"]);

    
    $sql = "INSERT INTO categories (name, slug, description, icon, status)
    VALUES ('$name', '$slug', '$description', '$icon', '$status')";

    if ($conn->query($sql) === TRUE) {
        header('location: /admin/categories');
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

include '../admin-components/footer.php';
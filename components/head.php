<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Brik Fashions</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="/assets/css/custom.css" />
</head>

<?php
$servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "brik_fashions_db";

$username = "fowyrqkh_brik_fashions";
$password = "Brik@Fashions2025";
$dbname = "fowyrqkh_brik_fashions";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
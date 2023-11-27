<?php
include 'koneksi.php';

// Ambil data dari formulir
$product_name = $_POST['product_name'];
$category_id = $_POST['category_id'];

// Proses upload gambar
$target_dir = "uploads/"; // Sesuaikan dengan nama folder yang diinginkan
$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);

// Insert data ke database
$query = "INSERT INTO products (product_name, category_id, image) VALUES ('$product_name', $category_id, '$target_file')";
mysqli_query($koneksi, $query);

// Redirect ke halaman products.php atau halaman lain sesuai kebutuhan
header("Location: products.php");
exit();
?>

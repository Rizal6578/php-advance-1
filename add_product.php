<?php
include 'koneksi.php';

// Query untuk mendapatkan data kategori
$query = "SELECT * FROM categories";
$categories = mysqli_query($koneksi, $query);
?>

<form action="process_add_product.php" method="post" enctype="multipart/form-data">
    Nama Produk: <input type="text" name="product_name" required><br>
    Kategori: 
    <select name="category_id">
        <?php
        while ($row = mysqli_fetch_assoc($categories)) {
            echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
        }
        ?>
    </select><br>
    Gambar: <input type="file" name="product_image" accept="image/*" required><br>
    <input type="submit" value="Tambah Produk">
</form>

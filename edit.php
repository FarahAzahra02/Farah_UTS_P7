<?php
require './config/db.php';

// Ambil data produk berdasarkan ID
$id_produk = $_GET['id'];
$result = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id_produk");
$product = mysqli_fetch_assoc($result);

// Logika update data produk setelah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_name = $_POST["new_name"];
    $new_price = $_POST["new_price"];

    // Periksa apakah ada file gambar yang diunggah
    if ($_FILES['new_image']['name'] != '') {
        $new_image = $_FILES['new_image']['name'];
        $temp_name = $_FILES['new_image']['tmp_name'];
        move_uploaded_file($temp_name, './uploads/' . $new_image);
    } else {
        // Jika tidak ada gambar yang diunggah, gunakan gambar lama
        $new_image = $product['image'];
    }

    // Update data produk ke dalam database
    mysqli_query($db_connect, "UPDATE products SET name = '$new_name', price = $new_price, image = '$new_image' WHERE id = $id_produk");

    // Redirect kembali ke halaman view.php setelah proses edit selesai
    header("Location: show.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            flex-direction: column; /* Mengatur arah kolom untuk kontennya */
        }

        form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            text-align: center;
            display: flex;
            flex-direction: column; /* Mengatur arah kolom untuk elemen-elemen di dalam form */
            margin-top: 20px; /* Jarak atas */
        }

        h1 {
            color: #ff69b4; /* Warna pink */
            margin: 0 0 20px; /* Jarak bawah dan atas garis */
            border-bottom: 2px solid black; /* Garis bawah hitam */
            padding-bottom: 10px; /* Ruang di bawah garis */
            width: 100%; /* Lebar 100% */
            text-align: center; /* Rata tengah */
        }

        label {
            display: block;
            margin-bottom: 10px; /* Jarak bawah */
            text-align: left; /* Rata kiri */
            font-weight: bold; /* Teks tebal */
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: calc(100% - 22px); /* Menyesuaikan lebar dengan padding */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc; /* Warna abu-abu muda */
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #ff69b4; /* Warna pink */
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
            margin-top: 20px; /* Jarak atas */
        }

        input[type="submit"]:hover {
            background-color: #d6458a; /* Warna pink saat hover */
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Edit Produk</h1>

        <label for="new_name">Nama Produk</label>
        <input type="text" id="new_name" name="new_name" value="<?= $product['name']; ?>" required>

        <label for="new_price">Harga Produk</label>
        <input type="number" id="new_price" name="new_price" value="<?= $product['price']; ?>" required>

        <label for="new_image">Gambar Produk</label>
        <input type="file" id="new_image" name="new_image">

        <!-- Menampilkan gambar produk yang sudah ada -->
        <img src="./uploads/<?= $product['image']; ?>" alt="Gambar Produk" style="max-width: 200px; margin-bottom: 10px;">

        <input type="submit" value="Simpan">
    </form>
</body>
</html>

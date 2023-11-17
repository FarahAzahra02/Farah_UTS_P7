<?php
require './config/db.php';

// Ambil ID produk yang akan dihapus
$id_produk = $_GET['id'];

// Jika formulir konfirmasi dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Jika pengguna mengonfirmasi penghapusan
    if (isset($_POST['confirm_delete']) && $_POST['confirm_delete'] == 'yes') {
        // Hapus data produk dari database
        mysqli_query($db_connect, "DELETE FROM products WHERE id = $id_produk");

        // Redirect kembali ke halaman view.php setelah proses hapus selesai
        header("Location: show.php");
        exit();
    } else {
        // Jika pengguna membatalkan penghapusan
        header("Location: show.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Produk</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            width: 400px; /* Lebarkan kotak */
            text-align: center;
        }

        h1 {
            color: #ff69b4; /* Warna pink */
            margin-bottom: 20px; /* Jarak bawah */
            border-bottom: 2px solid black; /* Tambahkan garis bawah */
            padding-bottom: 10px; /* Berikan ruang di bawah garis */
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        p {
            margin-bottom: 15px; /* Jarak bawah */
        }

        .radio-group {
            display: flex;
            justify-content: center;
            margin-bottom: 20px; /* Jarak bawah */
        }

        label {
            display: inline-block;
            margin-right: 20px; /* Jarak antar tombol */
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #ff69b4; /* Warna pink */
            color: #fff;
            cursor: pointer;
            padding: 10px;
            border: none;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #d6458a; /* Warna pink saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus Produk</h1>
        <form action="" method="post">
            <div>
                <p>Apakah Anda yakin ingin menghapus data ini?</p>

                <div class="radio-group">
                    <label>
                        <input type="radio" name="confirm_delete" value="yes" required> Ya
                    </label>

                    <label>
                        <input type="radio" name="confirm_delete" value="no" required> Tidak
                    </label>
                </div>
            </div>

            <br>

            <input type="submit" value="Konfirmasi">
        </form>
    </div>
</body>
</html>



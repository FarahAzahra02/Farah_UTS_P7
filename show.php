<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
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

        h1 {
            color: #ff69b4; /* Warna pink */
            text-align: center;
            margin-bottom: 20px; /* Jarak bawah */
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        th,
        td {
            border: 1px solid #000; /* Warna hitam, border lebih tebal */
            padding: 8px;
            text-align: center; /* Rata tengah */
        }

        th {
            background-color: #ff69b4; /* Warna pink */
            color: #fff;
            font-weight: bold; /* Teks tebal */
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            display: inline-block; /* Agar bisa diatur alignment */
        }

        .edit-btn {
            background-color: #3498db; /* Warna biru */
            color: #fff;
        }

        .delete-btn {
            background-color: #e74c3c; /* Warna merah */
            color: #fff;
        }

        .add-btn {
            background-color: #ff69b4; /* Warna pink */
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px; /* Jarak atas */
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <h1>Data Produk</h1>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Gambar Produk</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require './config/db.php';

                $products = mysqli_query($db_connect, "SELECT * FROM products");
                $no = 1;

                while ($row = mysqli_fetch_assoc($products)) {
            ?>
                <tr>
                    <td><?= $no++; ?>.</td>
                    <td><?= $row['name']; ?></td>
                    <td><?= number_format($row['price'], 0, ',', '.'); ?></td>
                    <td><a href="unduh.php/<?= rawurlencode($row['image']); ?>" download>unduh</a></td>
            
                    <td>
                        <a class="edit-btn" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                        <a class="delete-btn" href="delete.php?id=<?= $row['id']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="create.php" class="add-btn">Tambahkan Produk</a>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
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

        form {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333; /* Warna abu-abu tua */
            margin-bottom: 40px; /* jarak tulisan dengan kolom */
        }

        input {
            width: 100%;
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
            margin-top: 20px; /* Jarak antara input dan tombol */
        }

        input[type="submit"]:hover {
            background-color: #d6458a; /* Warna pink saat hover */
        }

        a {
            display: block;
            margin-top: 20px; /* Jarak antara tombol dan link */
            text-decoration: none;
            color: #3498db; /* Warna biru */
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="./backend/create.php" method="post" enctype="multipart/form-data">
        <h1>Tambah Produk</h1>
        <input type="text" name="name" placeholder="Input nama produk" required>
        <input type="number" name="price" placeholder="Input harga produk" required>
        <input type="file" name="image" accept=".jpg, .jpeg, .png" required>
        <input type="submit" value="Simpan" name="submit">
        <a href="show.php">Lihat data produk</a>
    </form>
</body>
</html>

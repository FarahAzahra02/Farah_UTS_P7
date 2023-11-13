<?php 
    session_start();
    if($_SESSION['role']!= 'user'){
        session_destroy();
        header('Location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
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

        .welcome-container {
            text-align: center;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 400px;
        }

        h1 {
            color: #000; /* Warna hitam */
            font-size: 40px; /* Ukuran huruf besar */
            margin-bottom: 20px; /* Jarak ke bawah */
            border-bottom: 2px solid #ccc; /* Garis bawah */
            padding-bottom: 10px; /* Ruang bawah garis */
        }

        .user-name {
            color: #000; /* Warna hitam untuk nama pengguna */
            font-size: 30px; /* Ukuran huruf sedang */
            font-weight: bold; /* Teks tebal */
            font-style: italic; /* Teks miring */
            margin-bottom: 20px; /* Jarak ke bawah */
        }

        a {
            text-align: center;
            padding: 10px;
            background-color: #ff69b4; /* Warna pink */
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block; /* Membuat elemen a menjadi inline-block untuk menempatkannya di samping */
        }

        a:hover {
            background-color: #d6458a; /* Warna pink saat hover */
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Selamat datang</h1>
        <div class="user-name"><?php echo $_SESSION['name'];?></div>
        <a href="./backend/logout.php">Logout</a>
    </div>
</body>
</html>

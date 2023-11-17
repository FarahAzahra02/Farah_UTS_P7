<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
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

        .login-container {
            width: 22rem;
            text-align: center;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 1rem;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            margin-bottom: 1rem;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn-pink {
            background-color: #ff69b4;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px;
            cursor: pointer;
        }

        .btn-pink:hover {
            background-color: #d6458a;
        }

        .notification {
            position: fixed;
            top: 10px;
            right: 10px;
            padding: 10px;
            border-radius: 4px;
            font-weight: bold;
            z-index: 9999;
        }

        .success {
            background-color: #4caf50;
            color: #fff;
        }

        .error {
            background-color: #f44336;
            color: #fff;
        }
    </style>
</head>
<body>
    <section class="login-container">
        <h1>Login</h1>
        <form action="./backend/login.php" method="post">
            <div class="mb-4">
                <input type="email" name="email" placeholder="Masukkan email Anda" class="form-control">
            </div>
            <div class="mb-4">
                <input type="password" name="password" placeholder="Masukkan password Anda" class="form-control">
            </div>
            <div class="mb-4">
                <input type="submit" value="Login" name="submit" class="btn btn-pink">
            </div>
        </form>
    </section>

    <script>
        // Fungsi untuk menampilkan notifikasi
        function displayNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.innerHTML = message;

            document.body.appendChild(notification);

            setTimeout(() => {
                notification.remove();
            }, 3000); // Hapus notifikasi setelah 3 detik
        }
    </script>
</body>
</html>

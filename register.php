<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            color: #333;
        }

        input {
            margin: 10px 0;
            padding: 8px;
            width: 100%;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #ff69b4; 
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #d6458a;
        }
    </style>
</head>
<body>
    <form action="./backend/register.php" method="post">
        <h1>Register</h1>
        <input type="text" name="name" placeholder="Masukkan nama Anda" required>
        <input type="email" name="email" placeholder="Masukkan email Anda" required>
        <input type="password" name="password" placeholder="Masukkan password Anda" required>
        <input type="password" name="confirm" placeholder="Masukkan konfirmasi password Anda" required>
        <input type="submit" value="Daftar" name="submit">
    </form>
</body>
</html>

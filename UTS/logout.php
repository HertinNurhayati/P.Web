<?php
// Memulai session
session_start();

// Menghapus semua data session
session_unset();

// Menghancurkan session
session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout | Travel</title>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Assistant', sans-serif;
            background-color: #666;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logout-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logout-box h2 {
            margin-bottom: 20px;
        }

        .logout-box p {
            margin-bottom: 15px;
        }

        .logout-box form {
            margin-top: 20px;
        }

        .logout-box button {
            background-color:  #c86b85;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-box button:hover {
            background-color:  #b55070;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="logout-box">
            <h2>Logout</h2>
            <p>Anda telah berhasil logout.</p>
            <p>Klik tombol di bawah ini untuk kembali ke halaman login</p>
            <form action="login.php" method="post">
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
session_start();
if(isset($_POST['submit'])){
    include 'konekdb.php';

    $user = $_POST['user'];//mengambil nilai username
    $pass = MD5($_POST['pass']); //mengambil nilai password

    //mencocokkan username & pass dengan database
    $stmt = $conn->prepare("SELECT * FROM tb_user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $c = $result->fetch_object();
        $_SESSION['status_login'] = false;
        $_SESSION['adn_global']  = $c;
        $_SESSION['id'] = $c->user_id;

    // Set cookies
    setcookie("username", $user, time() + (86400 * 30), "/"); // 86400 = 1 hari
    setcookie("password", $pass, time() + (86400 * 30), "/");
    
        echo '<script>window.location="index.html";</script>'; // Arahkan ke halaman index
    } else {
        echo '<script>alert("Username atau Password Anda Salah !");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Travel</title>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- untuk Font Awesome -->
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

        .box-login {
            background-color: #fff;
            padding: 100px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 800px;
        }

        .form-group {
            margin-bottom: 40px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input-control {
            width: 100%;
            padding: 15px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            background-color:  #c86b85;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color:  #c86b85;
        }

    </style>
</head>

<body id="bg-login">
    <div class="container">
        <div class="box-login">
            <h2>Login</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="user">Username</label>
                    <input type="text" name="user" id="user" class="input-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" class="input-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Login" class="login-btn">
                </div>
                <div class="form-group">
                    <a href="index.html" class="login-btn"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>


<?php
require 'functionscv.php';

    if(isset($_POST["submit"])){
        if (proses_reg($_POST) > 0){
            echo "<script>
                alert('Berhasil Registrasi!');
                return true;
            </script>";
        }
        else {
            echo "<script>
            alert('Gagal Registrasi!');
            return false;
        </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@600&family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
            body {
                font-family: Arial, sans-serif;
                background: #1F232B;
                background-size: cover;
                margin: 0;
                padding: 0;
                color: white;
            }

            .container {
                width: 400px;
                height: 370px;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                padding: 20px;
                border: 1px solid #858AFA;       
                border-radius: 8px;
            }

            h1 {
                margin: 5px 10px 30px;
                text-align: center;
                text-shadow: 3px 3px #858AFA;
                font-family: "Edu SA Beginner", cursive;
                font-size: 45px;
            }

            .form-group {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            
            input {
                margin: 6px;
                width: 45ch;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-shadow: 3px 3px #858AFA;
            }

            button {
                width: 48ch;
                color: white;
                margin-top: 4ch;
                font-weight: bolder;
                padding: 10px;
                background: #858AFA;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                border: 1px solid rgba(255, 255, 255, .3);
                box-shadow: 3px 3px #858AFA;
            }   
            
            button:hover {
                background: #6364FF;
            }
    </style>
</head>

<body>
    <div class="container">
        <h1>Registrasi</h1>
        <form action="berandavc.php" method="post">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username">
                <input type="email" id="email" name="email" placeholder="Email" required>
                <input type="password" id="password" name="password" placeholder="Password" required>
                <input type="password" id="konfirmpass" name="konfirmpass" placeholder="Konfirmasi Password" required>
                <button type="submit" name="submit">Daftar</button> 
            </div>
        </form>
    </div>
</body>

</html>

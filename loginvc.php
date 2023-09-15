<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@600&family=Libre+Baskerville&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: Arial, sans-serif;
            background: #1F232B;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        .container {
            text-align: center;
            border: 1px solid #858AFA;   
            width: 400px;
            height: 350px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
        }
        
        .container button:first-child {
            border: 0;
            cursor: pointer;
            background: transparent;
            color: #fff;
            font-family: "Edu SA Beginner", cursive;
            font-size: 25px;
            text-shadow: 3px 4px #858AFA;   
        }

        .form-group {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-bottom: 15px;
        }

        input {
            width: 45ch;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 3px 3px #858AFA;
            margin-bottom: 20px;
        }
            
        .submit {
            width: 48ch;
            font-weight: bolder;
            padding: 10px;  
            background: #858AFA;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, .3);
            box-shadow: 3px 3px #858AFA;
        }

        .submit:hover {
                background: #6364FF;
            }

    </style>
</head>
<body>
    <div class="container">
        <button>
                <h1>VersCons</h1>
        </button>
        <form action="berandavc.php" method="post">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
        </form>
        <button class="submit" type="submit" name="submit">Masuk</button> 
        <p>Tidak Memiliki Akun? <a style="color: #6364FF;" href="regvc.php">Daftar</a></p>
    </div>
</body>
</html>
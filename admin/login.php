<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
           
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            width: 400px;
        }
        .login-container .illustration {
            width: 90%;
            padding: 20px;
        }
        .login-container .form-container {
            width: 100%;
            padding: 20px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group-text {
           font-size: 20px;
        }
        .btn-login {
            width: 100%;
            background: #6A5ACD;
            color: white;
            padding: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        .btn-login:hover {
            background: #483D8B;
        }
        
    </style>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="login-container">
        
        <div class="form-container">
            <h3 class="text-center">Login as Admin</h3>
            <form action="verify_admin.php" method="POST">
                <div class="input-group">
                    <span class="input-group-text">🕵🏻</span>
                    <input type="email" name="admin_email" class="form-control"  required>
                </div>
                <div class="input-group">
                    <span class="input-group-text">🔐</span>
                    <input type="password" name="admin_password" class="form-control" required>
                </div>
                <button type="submit" class="btn-login">LOGIN</button>
               
            </form>
        </div>
    </div>
</body>
</html>

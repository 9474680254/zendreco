<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
           
        }
        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 2em;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
        }
        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }
        .login-btn {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
        }
        .login-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
   



<div class="login-container">
    <h1>Student Login</h1>
    <form action="login_process.php" method="POST">
        <div class="form-group">
            <label for="student-email">Email:</label>
            <input type="email" id="student-email" name="email" required>
        </div>
        <div class="form-group">
            <label for="student-password">Password:</label>
            <input type="password" id="student-password" name="password" required>

        </div>
        <div class="form-group">
            <label for="student-password"> confarm Password:</label>
            <input type="password" id="student-password" name="password1" required>
            
        </div>
        <button type="submit" class="login-btn">Login</button>
    </form>
</div>


</body>
</html>




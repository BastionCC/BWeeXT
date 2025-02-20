<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .signin-container {
            background-color: #fff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .signin-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .signin-container input {
            width: 100%;
            padding: 10px;
            margin: 15px 0;
            border: 1px solid #ccc;
            border-radius:4px;
        }
        .signin-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .signin-container button:hover {
            background-color:rgb(53, 179, 59);
        }
        .signin-container .forgot-password {
            text-align: center;
            margin-top: 10px;
        }
        .signin-container .forgot-password a {
            text-decoration: none;
            color: #007BFF;
        }
        .signin-container .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signin-container">
        <h2>Sign In</h2>
       <form action="/submit" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <button type="submit">Sign In</button>
        </form>

        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
    </div>
</body>
</html>
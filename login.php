<!DOCTYPE  html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet"
    href="style.css">
</head>
<body>
<div class="login-container">
    <h2>Login Admin</h2>
    <form action="proses_login.php" method="post">
        <label>Username</label>
        <input type="text" name="username">
        <br><br>
        <label>Password</label>
        <input  type="passworrd" name="password">
        <br><br>
        <label>
            <input type="checkbox" name="remember">
            Remember Me
        </label>
            <button type="submit">Login</button>
    </form>
</div>
</body>
</html>

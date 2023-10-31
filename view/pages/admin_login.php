<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form action="http://localhost/backend-pi/controller/admin/login.php" method="post">
        <input
            type="text"
            name="admin"
            id="text"
            placeholder="Usuário-ADM"
        /><br>
        <input
            type="password"
            name="admPass"
            id="password"
            placeholder="Senha"
        /><br>
        <input type="submit" value="Login" />
    </form>
</body>
</html>

<html lang="fr">
<head>
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form action="signin.php" method="POST">
    Username: <input type="text" name="username"/><br/>
    Password: <input type="text" name="password"/><br/>
    <input type="submit" value="Connexion"/>
</form>
<td>
    <a href="{{ route('users.create') }}">
        <button type="button">Inscription</button>
    </a>
</td>
</body>
</html>

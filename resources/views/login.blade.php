@section('content')

    <html lang="fr">
    <head>
        <title>Login</title>
    </head>
    <body>
    <h1>Login</h1>
    <form action="signin.php" method="POST">
        Username: <input type="text" name="username" /><br />
        Password: <input type="text" name="password" /><br />
        <input type="submit" value="Register" />
    </form>
    </body>
    </html>

@endsection

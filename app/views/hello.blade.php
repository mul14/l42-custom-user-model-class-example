<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>

    {{ Form::open() }}

        <p>
            {{ Form::text('email', 'admin@admin.com') }}
        </p>

        <p>
            <input type="password" name="password" value="123">
        </p>

        <p>
            {{ Form::submit('Login') }}
        </p>

    {{ Form::close() }}

</body>
</html>

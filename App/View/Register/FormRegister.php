<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <form action="/register/validation" method="POST">
            <input type="hidden" value="<?= $model->id ?>" name="id" />
            <p><input type="text" name="user" value='<?= $model->user ?>' id="user" placeholder="Your user" autofocus=""/></p>
            <input type="password" name="pass1" value='<?= $model->pass1 ?>' id="pass1" placeholder="Your pass"/>
            <input type="password" name="pass2" value='<?= $model->pass2 ?>' id="pass2" placeholder="Confirm your pass"/>
            <p><button type="submit">Sign in</button>
            <p><a href="/login/form">Back</a>
        </form>
</body>
</html>
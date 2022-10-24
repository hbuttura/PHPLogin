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
        <form action="/login/validation" method="POST">
            <input type="text" name="user" value='<?= $model->user ?>' id="user" placeholder="Your user" autofocus=""/>
            <input type="passowrd" name="pass" value='<?= $model->pass ?>' id="pass" placeholder="Your pass"/>
            <button type="submit">Sign in</button>
        </form>
</body>
</html>
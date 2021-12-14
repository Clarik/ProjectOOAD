<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h2>OOAD App</h2>
        <div class="login">
            <form action="" method="POST" class="d-flex flex-column">
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
                <label for="passowrd">Password</label>
                <input type="password" id="password" name="passoword">
                <br>
                <button class="btn btn-outline-primary" type="submit">LOGIN</button>
                <br>
                <p>Didn't have an account? Sign up now!</p>
                <a href="/register" class="btn btn-outline-primary">SIGN UP</a>
            </form>
        </div>
    </div>
</body>
</html>
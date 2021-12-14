<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<header>
    <div class="d-flex justify-content-between align-items-center bg-primary p-1">
      <div class="navbar-brand ms-2 p-2 fs-4">
        <a href="/home" class="nav-link active text-white" >
          <h1>
            OOAD
          </h1>
        </a>
      </div>
      <div class="me-5">
        <button type="button" class="btn btn-primary">Login</button>
        
        <button type="button" class="btn btn-success" style="color:$green-300">Sign Up</button>
      </div>
    </div>
  </header>
<body>
    @yield('content')
</body>
</html>
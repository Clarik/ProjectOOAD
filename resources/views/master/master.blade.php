<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<header>
    <div class="d-flex justify-content-between align-items-center">
      <div class="left w-50 d-flex justify-content-start">
        <div class="navbar-brand ms-2 p-2 fs-4">
          <a href="/home" class="nav-link active">
            <h1>OOAD App</h1>
          </a>
        </div>
        <form class="form-inline my-2 my-lg-0 d-flex align-items-center">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 ms-2" type="submit">Search</button>
        </form>
      </div>
      <div class="right w-50 justify-content-around align-items-center px-5">
        <nav class="navbar navbar-expand-lg">
          <ul class="container-fluid nav">
            <li class="nav-item">
              <a href="/home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">Jobs</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false">Profile</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a href="" class="dropdown-item">View Profile</a>
                <div class="dropdown-divider"></div>
                <a href="/login" class="dropdown-item">Logout</a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
</header>
<body>
    @yield('content')
</body>
</html>
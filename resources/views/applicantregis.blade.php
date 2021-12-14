<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applicant Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <form class="container d-flex flex-column justify-content-center align-items-center min-vh-100">

        <h1>Register</h1>
        <h6>as Applicant</h1>

            <div class="form-group p-2">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username">
            </div>

            <div class="form-group p-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
    

            <div class="form-group p-2">
                <label for="pass">Password</label>
                <input type="password" class="form-control" id="pass" placeholder="Password">
            </div>

            <div class="form-group p-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Applicant Name">
            </div>

            <div class="form-group p-2">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Phone Number">
            </div>

            <div class="form-group p-2">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Address">
            </div>

            <div class="form-group p-2">
                <label for="dob">DOB</label>
                <input type="date" class="form-control" id="dob">
            </div>

            <button type="button" class="btn btn-success mt-2">Register</button>

    </form>
</body>

</html>
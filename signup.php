<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/css.css" rel="stylesheet">
</head>
<body class="bg-dark">
   <div class="d-flex justify-content-center align-content-center">
       <div class="bg-light mt-5 p-5 rounded-3" style="width: 400px;">
            <h3 class="mb-5 text-center">
                Signup
            </h3>
            <div class="form-floating mb-4">
                <input type="email" id="email" class="form-control" placeholder="email">
                <label for="username">Email</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" id="username" class="form-control" placeholder="username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating mb-4">
                <input type="text" id="password" class="form-control" placeholder="password">
                <label for="password">Password</label>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="checkbox">
                <label for="checkbox">I agree to the terms and conditions and privacy policy</label>
            </div>
            <a href="index.html" class="btn btn-primary btn-lg col-12">Signup</a>
            <hr class="my-4">
            <a href="./login.php" class="btn btn-outline-primary btn-lg col-12">Login</a>
       </div>

   </div>
</body>
</html>
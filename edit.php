
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
        <script src="./js/bootstrap.bundle.min.js"></script>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/css.css" rel="stylesheet">

    </head>
    <body class="bg-dark">
    <?php include 'nav.php';?>


    <div class="d-flex justify-content-center align-content-center" >
       <div class="bg-light mt-5 p-5 rounded-3" style="width: 400px;">
            <h3 class="mb-5 text-center text.black">
                Edit Profile
            </h3>
            <center>
                <img class="img-fluid rounded-circle mb-5" src="./images/default.png" width="200" height="200">
            </center>
            <div class="mb-3">
                <label for="formFile" class="form-label">Choose New Picture Profile </label>
                <input class="form-control" type="file" id="picture" accept="image/*">
                <div class="valid-feedback">
                    Successfully updated
                </div>
            </div>
            <div class="form-floating mb-4">
                <input type="text" id="username" class="form-control" placeholder="username">
                <label for="username">Username</label>
                <div class="valid-feedback">
                    Successfully updated
                </div>
            </div>

            <div class="form-floating mb-4">
                <input type="password" id="oldpassword" class="form-control" placeholder="oldpassword">
                <label for="oldpassword">Old Password</label>
                <div class="valid-feedback">
                    Successfully updated
                </div>
                <div id="oldpassword" class="invalid-feedback">
                    Your old passwordis incorrect.
                </div>
            </div>
            <div class="form-floating mb-4">
                <input type="password" id="newpassword" class="form-control" placeholder="newpassword">
                <label for="newpassword">New Password</label>
                <div class="valid-feedback">
                    Successfully updated
                </div>
                <div id="newpassword" class="invalid-feedback">
                    Your old passwordis incorrect.
                </div>
            </div>
            <hr class="my-4">

            <a href="./index.php" class="btn btn-primary btn-lg col-12">Save</a>
       </div>

   </div>
        
    </body>
    </html>
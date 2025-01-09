<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./assets/js/1fd84f7b4a.js" crossorigin="anonymous"></script>
    <title>Forgot Password? | MEK Library</title>
</head>
<body style="background-color: rgba(198, 236, 59, 0.827);">
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="row">
            <div class="col-md-12 login-form">
                <div class="card mb-3" style="max-width: 900px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="./assets/images/clay-banks-GX8KBbVmC6c-unsplash.jpg" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h1 class="card-title fw-bold">MEK LIBRARY</h5>
                          <p class="card-text">Enter email to reset password</p>

                          <form action="./reset-password.php">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                          <hr>
                          <a href="./index.php" class="card-link link-underline-light">Back to Login</a>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</body>
</html>
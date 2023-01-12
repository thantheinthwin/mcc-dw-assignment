<html>
    <head>
        <title>Global Wild Swimming and Camping</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="../public/scripts/scrollFadeIn.js" defer></script>
        <script src="../public/scripts/activePage.js" defer></script>

        <link rel="icon" type="image/x-icon" href="../src/logo and icons/logo.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../public/global.css">
    </head>
    <body>
        <?php include('navbar.php'); ?>

        <div class="container-fluid p-4 z-1 position-relative bg-dirt">
            <div class="row justify-content-center p-2">
                <div class="card col-6 col-lg-3 shadow p-5 m-5">
                    <div class="row text-center">
                        <h1 class="display-1">Log In</h1>
                        <h1 class="lead">Glad to see you !</h1>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-10 my-3">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group col-10 my-3">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-check col-8 my-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-success col-8 my-3 shadow">Login</button>
                        <div class="col-8 d-flex justify-content-end my-3">
                            <a href="" class="text-decoration-none link-grey">Forgot password?</a>
                        </div> 
                        <div class="text-between-line d-flex justify-content-center col-10 my-3">
                            <div class="border p-2 rounded fs-5">OR</div>
                        </div>
                        <div class="d-flex justify-content-center my-3">
                            <i class="fa-brands fa-google fs-2 link-grey mx-3"></i>
                            <i class="fa-brands fa-facebook-f fs-2 link-grey mx-3"></i>
                            <i class="fa-brands fa-linkedin-in fs-2 link-grey mx-3"></i>
                        </div>
                        <div class="col-8 my-3 d-flex justify-content-evenly">
                            <div>Need an account?</div>
                            <a href="../public/sign_up.php" class="link-grey">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
    </body>
</html>
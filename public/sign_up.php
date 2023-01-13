<html>
    <head>
        <title>Global Wild Swimming and Camping</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="../public/scripts/scrollFadeIn.js" defer></script>
        <script src="../public/scripts/activePage.js" defer></script>

        <link rel="icon" type="image/x-icon" href="../src/logo and icons/logo.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../public/global.css">
    </head>
    <body>
        <?php include('navbar.php'); ?>

        <div class="container-fluid p-5 z-1 position-relative bg-dirt">
            <div class="row justify-content-center p-3">
                <div class="card col-6 col-lg-5 col-xl-3 shadow p-5 m-5">
                    <div class="d-flex justify-content-center">
                        <div class="col-3">
                            <img src="../src/logo and icons/logo.svg" class="img-fluid">
                        </div>
                    </div>
                    <div class="row text-center mb-5">
                        <h1 class="display-1">Sign Up</h1>
                        <h1 class="lead">Get started with your account !</h1>
                    </div>
                    <div class="row">
                        <form method="post">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col mb-3">
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="password" class="form-control" id="password" placeholder="password" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="date" placeholder="date">
                                            <label for="date" class="col-form-label">Date of birth</label>
                                        </div>         
                                    </div>
                                    <div class="col-12">
                                        <div class="row mb-3">
                                            <label for="gender" class="col-form-label">Gender</label>
                                            <div id="gender" class="d-flex">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="Gender" id="male" value="male" checked>
                                                    <label class="form-check-label" for="female">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check mx-3">
                                                    <input class="form-check-input" type="radio" name="Gender" id="female" value="female">
                                                    <label class="form-check-label" for="female">
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row justify-content-center">
                                            <button type="submit" class="btn btn-success col-6 my-3 shadow">Sign Up</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
    </body>
</html>
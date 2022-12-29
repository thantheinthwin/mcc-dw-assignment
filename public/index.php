<html>
    <head>
        <title>Global Wild Swimming and Camping</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="../src/logo and icons/icon.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../public/global.css">
    </head>
    <body>
        <!-- Nav bar -->
        <nav class="navbar navbar-expand-lg bg-light sticky-top w-100">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="../src/logo and icons/logo.png" alt="GWSC" style="width: 3rem;">
                    <span class="h3 d-lg-none align-middle">GWSC</span>
                    <span class="h3 d-none d-lg-inline mx-2 align-middle">Global Wild Swimming and Camping</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end fs-5" id="navbarScroll">
                    <ul class="navbar-nav my-2 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Sign in</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 mx-lg-4" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- context -->
        <div class="w-100" style="background-color: #F0EBCE;">
            <div>
                <!-- slideshow -->
                <div id="slideshow" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner h-50">
                        <div class="carousel-item active">
                        <img src="../src/images/slideshow 1.jpg" class="d-block w-100 object-fit-cover image-fluid" alt="...">
                        </div>
                        <div class="carousel-item h-50">
                        <img src="../src/images/slideshow 2.jpg" class="d-block w-100 object-fit-cover image-fluid translate-middle-y" alt="...">
                        </div>
                        <div class="carousel-item h-50">
                        <img src="../src/images/slideshow 3.jpg" class="d-block w-100 object-fit-cover image-fluid translate-middle-y" alt="...">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="">
            <div class="container-fluid p-4" style="background-color: #395144;">
                <div class="row">
                    <div class="col-md-6 card p-0" style="border: solid 0.5rem #AA8B56; box-shadow: 0px 0px 8px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8509.275866238171!2d96.11219103169645!3d17.042732197144275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19976cf791c21%3A0xf840acae908abb4e!2sHlawga%20National%20Park%20Mode!5e0!3m2!1sen!2smm!4v1672126855008!5m2!1sen!2smm" width="100%" height="100%" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6 p-5">
                        <h2 class="text-uppercase mt-3 font-weight-bold text-white">Contact</h2>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" placeholder="First Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control mt-2" placeholder="Last Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control mt-2" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control mt-2" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="comment" style="resize: none; height: max-content;"></textarea>
                                        <label for="comment">Comments</label>
                                    </div>
                                </div>
                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                            <label class="form-check-label text-white" for="invalidCheck2">Accept the conditions</label>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-12 mt-2">
                                    <button class="btn btn-light" type="submit">Submit</button>
                                </div>   
                            </div>
                        </form>
                        <div class="text-white">
                            <h2 class="text-uppercase mt-4 font-weight-bold">connect with us</h2>

                            <i class="fas fa-phone mt-3"></i> <a href="tel:+" class="link-light text-decoration-none">(+95) 926498657</a><br>
                            <i class="fas fa-phone mt-3"></i> <a href="tel:+" class="link-light text-decoration-none">(+95) 954674562</a><br>
                            <i class="fa fa-envelope mt-3"></i> <a href="" class="link-light text-decoration-none">hlawgarnationalpark@info.com</a><br>
                            <div class="my-4">
                                <a href="#"><i class="fab fa-facebook fa-3x text-white mx-1"></i></a>
                                <a href="#"><i class="fab fa-linkedin fa-3x text-white mx-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
<html>
    <head>
        <title>Global Wild Swimming and Camping</title>
        <link rel="icon" type="image/x-icon" href="../src/logo_and_icons/logo.svg"> 
    </head>
    <body>
        <?php include('navbar.php'); ?>

        <div class="container-fluid p-4 z-1 position-relative bg-dirt">
            <div class="row justify-content-center m-5">
                <div class="card col-10 col-lg bg-light py-3 px-4 shadow">
                    <div class="row">
                        <div class="col-12 col-lg-6 card p-0 map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8509.275866238171!2d96.11219103169645!3d17.042732197144275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19976cf791c21%3A0xf840acae908abb4e!2sHlawga%20National%20Park%20Mode!5e0!3m2!1sen!2smm!4v1672126855008!5m2!1sen!2smm" width="100%" height="100%" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-12 col-lg-6 p-5">
                            <div class="row border-bottom pt-4"></div>
                            <h2 class="text-uppercase mt-3 font-weight-bold">Contact</h2>
                            <form method="POST">
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
                                                <label class="form-check-label" for="invalidCheck2">Accept the conditions</label>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </div>   
                                </div>
                            </form>
                            <div>
                                <h2 class="text-uppercase mt-4 font-weight-bold">connect with us</h2>

                                <i class="fas fa-phone mt-3"></i> <a href="tel:+" class="text-decoration-none link-dark">(+95) 926498657</a><br>
                                <i class="fas fa-phone mt-3"></i> <a href="tel:+" class="text-decoration-none link-dark">(+95) 954674562</a><br>
                                <i class="fa fa-envelope mt-3"></i> <a href="" class="text-decoration-none link-dark">hlawgarnationalpark@info.com</a><br>
                                <div class="my-4">
                                    <a href="#"><i class="fab fa-facebook fa-3x mx-1 link-dark"></i></a>
                                    <a href="#"><i class="fab fa-linkedin fa-3x mx-1 link-dark"></i></a>
                                </div>
                            </div>
                            <div class="row border-top pt-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <?php include('footer.php'); ?>
    </body>
</html>
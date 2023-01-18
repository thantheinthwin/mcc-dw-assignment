<html>
    <head>
        <title>Global Wild Swimming and Camping</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="../public/scripts/scrollFadeIn.js" defer></script>

        <link rel="icon" type="image/x-icon" href="../src/logo and icons/logo.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../public/css/global.css">
    </head>
    <?php 
        require_once 'config.php';

        //adding new visitor
        $visitor_ip = $_SERVER["REMOTE_ADDR"];

        //checking if the visitor is unique
        $query = "SELECT * FROM visitor_count WHERE ip_address='$visitor_ip'";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Retriving Query Error>br>".$query);
        }
        $total_visitors = mysqli_num_rows($result);
        if($total_visitors<1){
            $query = "INSERT INTO visitor_count(ip_address) VALUES ('$visitor_ip')";
            $result = mysqli_query($connection, $query);
        }

        //retriving existing visitors
        $query = "SELECT * FROM visitor_count;";
        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Retriving Query Error<br>".$query);
        }
        $total_visitors = mysqli_num_rows($result);
        $_SESSION["visitor"] = $total_visitors;
    ?>
    <body>
        <!-- Footer -->
        <footer class="sticky-bottom z-0">
            <div class="container-fluid p-4 bg-green">
                <!-- Second row -->
                <div class="row text-light">
                    <div class="col-6 col-lg">
                        <h3 class="display-5">Contact</h3>
                        <span>Email us :&nbsp<a href="" class="link-light text-decoration-none">hlawgarnationalpark@info.com</a></span><br>
                        <span>Phone no :&nbsp<a href="tel:+" class="link-light text-decoration-none">(+95) 926498657</a></span><br>
                        <div class="card shadow w-50 text-dark text-center p-2 mt-2">
                            <p class="fw-bold fs-3"><span>Visitors :</span><?= $_SESSION["visitor"] ?></p>
                        </div>
                    </div>
                    <div class="col-6 pt-4">
                        <form action="">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <input type="text" class="w-100 form-control" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col input-group">
                                    <input type="text" class="w-50 form-control" placeholder="First Name" required>
                                    <input type="text" class="w-50 form-control" placeholder="LastName" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <textarea class="w-100 form-control" placeholder="Leave a comment here" id="comment" style="resize: none; height: max-content;"></textarea>
                                        <label for="comment">Comments</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col form-group">
                                    <button class="btn btn-light w-100" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col d-none d-lg-block text-end">
                        <h1 class="display-5">Follow Us</h1>
                        <a href="#"><i class="fab fa-facebook fa-3x mx-1 link-light"></i></a>
                        <a href="#"><i class="fab fa-linkedin fa-3x mx-1 link-light"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-3x mx-1 link-light"></i></a>
                    </div>
                </div>

                <!-- Third row -->
                <div class="row">
                    <hr>
                    <div class="col">
                        <a href="#" class="text-decoration-none link-light">Term of Use</a>
                        <span class="d-none d-lg-inline text-light">|</span>
                        <a href="#" class="text-decoration-none link-light link">Privacy Policy</a>
                    </div>
                    <div class="col text-end">
                        <span class="text-light">&#169; <a href="#" class="text-decoration-none link-light text-uppercase">Thant Hein Thwin</a>, All Rights Reserved</span>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
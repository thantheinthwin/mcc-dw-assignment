<html>
    <head>
        <title>Global Wild Swimming and Camping</title>

        <link rel="icon" type="image/x-icon" href="../src/logo_and_icons/logo.svg">
    </head>

    
    
    <body>
        <?php include('navbar.php'); ?>
        
        <?php
            require_once 'config.php';
            $emessage = "";
            $_SESSION["login_attempts"] = 0;

            //lock timer
            $timer = 600;

            if(isset($_SESSION["locked"])){
                $difference = time() - $_SESSION["locked"];
                if($difference > $timer){
                    unset($_SESSION["locked"]);
                    unset($_SESSION["login_attempts"]);
                }
            }
            
            if(isset($_POST["login"])){
                $email = trim($_POST["email"]);
                $password = $_POST["password"];

                $statement = mysqli_prepare($connection, "SELECT admin_id, password FROM admin WHERE admin_email = ?");
                mysqli_stmt_bind_param($statement, "s", $email);
                mysqli_stmt_execute($statement);
                mysqli_stmt_bind_result($statement, $id, $pwd);
                if(mysqli_stmt_fetch($statement)){
                    if(password_verify($password, $pwd)){
                        $_SESSION["admin_id"] = $id;
                        echo "<script>";
                        echo "window.location.href = '../public/index.php'";
                        echo "</script>";
                    }
                    else{
                        $_SESSION["login_attempts"] += 1;
                        $_SESSION["error"] = "Password does not match.";
                    }
                }

                else{
                    mysqli_stmt_close($statement);
                    $statement = mysqli_prepare($connection, "SELECT user_id, username, password FROM user WHERE email = ?");
                    mysqli_stmt_bind_param($statement, "s", $email);
                    mysqli_stmt_execute($statement);
                    mysqli_stmt_bind_result($statement, $id, $name, $pwd);

                    if(mysqli_stmt_fetch($statement)){
                        if(password_verify($password, $pwd)){
                            $_SESSION["user_id"] = $id;
                            $_SESSION["username"] = $name;
                            echo "<script>";
                            echo "window.location.href = '../public/information.php'";
                            echo "</script>";
                        }
                        else{
                            $_SESSION["login_attempts"] += 1;
                            $_SESSION["error"] = "Password does not match";
                        }
                    }
                    else{
                        $_SESSION["login_attempts"] += 1;
                        $_SESSION["error"] = "Email not found.";
                    }
                }
            }
        ?>

        <div class="container-fluid p-5 z-1 position-relative bg-dirt">
            <div class="row justify-content-center p-3">
                <div class="card col-6 col-lg-5 col-xl-3 shadow p-5 m-5">
                    <div class="row text-center">
                        <h1 class="display-1">Log In</h1>
                        <h1 class="lead">Glad to see you !</h1>
                    </div>
                    <div class="row">
                        <form method="POST">
                            <div class="form-group col my-3">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" value="" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group col my-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" value="" name="password" id="password" placeholder="Password" required maxlength="20">
                            </div>
                            <div class="form-check col my-3">
                                <input type="checkbox" class="form-check-input" id="remember_me">
                                <label class="form-check-label" for="remember_me">Remember me</label>
                            </div>
                            <div class="row justify-content-center text-center">
                                <?php if(isset($_SESSION["error"])) { ?>
                                    <p class="text-danger my-3"><?= $_SESSION["error"]; ?></p>
                                <?php unset($_SESSION["error"]); } ?>
                                <?php 
                                    if($_SESSION["login_attempts"] > 2) {
                                        $_SESSION["locked"] = time();
                                        echo '<p class="text-danger my-3"> Locked for 10 minutes </p>';
                                    } else { ?>
                                    <button type="submit" name="login" class="btn btn-success col-6 my-3 shadow">Login</button>
                                <?php } ?>
                            </div>
                            <div class="col d-flex justify-content-end my-3">
                                <a href="" class="text-decoration-none link-grey">Forgot password?</a>
                            </div> 
                            <div class="text-between-line d-flex justify-content-center col my-3">
                                <div class="border p-2 rounded fs-5">OR</div>
                            </div>
                            <div class="d-flex justify-content-center my-3">
                                <i class="fa-brands fa-google fs-2 link-grey mx-3"></i>
                                <i class="fa-brands fa-facebook-f fs-2 link-grey mx-3"></i>
                                <i class="fa-brands fa-linkedin-in fs-2 link-grey mx-3"></i>
                            </div>
                            <div class="col my-3 d-flex justify-content-evenly">
                                <div>Need an account?</div>
                                <a href="../public/sign_up.php" class="link-grey">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php include('footer.php'); ?>
    </body>
</html>
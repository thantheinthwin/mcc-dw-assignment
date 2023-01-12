<html>
    <head>
        <title>Global Wild Swimming and Camping</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="../public/scripts/scrollFadeIn.js" defer></script>

        <link rel="icon" type="image/x-icon" href="../src/logo and icons/logo.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../public/global.css">
    </head>
    <body>
        <!-- navbar -->
        <?php include('navbar.php'); ?>

        <!-- body -->
        <div class="w-100">
            <div class="position-relative col z-1 bg-light shadow pb-5">
                <div class="row-4">
                    <!-- slideshow -->
                    <div id="slideshow" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="position-absolute w-100 z-1 h-100 container-fluid">
                                    <div class="text-white position-absolute top-50 start-50 translate-middle" id="carousel-cover">
                                        <p class="display-6">Nature benefit you</p>
                                        <h1 class="display-1">Experience everything nature has to offer</h1>
                                    </div>
                                </div>
                                <img src="../src/images/slideshows/slideshow 1.jpg" class="d-block w-100 object-fit-cover image-fluid slideshow" alt="...">
                            </div>
                            <div class="carousel-item">
                                <div class="position-absolute w-100 z-1 h-100 container-fluid">
                                    <div class="text-white position-absolute top-50 start-50 translate-middle" id="carousel-cover">
                                        <p class="display-6">Choose a healthy environment</p>
                                        <h1 class="display-1">Take only memory, leave only footprints</h1>
                                    </div>
                                </div>
                                <img src="../src/images/slideshows/slideshow 2.jpg" class="d-block w-100 object-fit-cover image-fluid slideshow" alt="...">
                            </div>
                            <div class="carousel-item">
                                <div class="position-absolute w-100 z-1 h-100 container-fluid">
                                    <div class="text-white position-absolute top-50 start-50 translate-middle" id="carousel-cover">
                                        <p class="display-6">Live your life <br> in the most peaceful way</p>
                                        <h1 class="display-1">Can you hear the outdoor calling for you</h1>
                                    </div>
                                </div>
                                <img src="../src/images/slideshows/slideshow 3.jpg" class="d-block w-100 object-fit-cover image-fluid slideshow" id="slideshow-item" alt="...">
                            </div>
                            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button> -->
                        </div>
                    </div>

                    <!-- context -->
                    <div class="container position-relative w-100">
                        <!-- What we have -->
                        <div class="row justify-content-center position-absolute z-1 top-0 position-middle">
                            <div class="col-10 text-center bg-white shadow">
                                <div class="row mb-2">
                                    <div class="col mt-3">
                                        <h1 class="">Find yourself outside</h1>
                                        <div class="row justify-content-center">
                                            <div class="col-8">
                                                <p class="lead fs-4 text">Discover and book tent camping, RV parks, cabins, treehouses, and glamping.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Icon -->
                                <div class="row p-4">
                                    <div class="col">
                                        <div class="row justify-content-center">
                                            <div class="col-6 mb-2" id="svgs">
                                                <img src="../src/logo and icons/tent.svg" class="img-fluid">
                                            </div>
                                            <div class="lead">
                                                Camping
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-center">
                                            <div class="col-6 mb-2" id="svgs">
                                                <img src="../src/logo and icons/fishing.svg" class="img-fluid">
                                            </div>
                                            <div class="lead">
                                                Fishing
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-center">
                                            <div class="col-6 mb-2" id="svgs">
                                                <img src="../src/logo and icons/lake.svg" class="img-fluid">
                                            </div>
                                            <div class="lead">
                                                Swimming
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-center">
                                            <div class="col-6 mb-2" id="svgs">
                                                <img src="../src/logo and icons/forest.svg" class="img-fluid">
                                            </div>
                                            <div class="lead">
                                                Explore
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Info -->
                        <div class="row">
                            <div class="mt-10">
                                <div class="container mt-info-heading">
                                    <div class="row text-center justify-content-center mt-5 mt-lg-0">
                                        <!-- roadmap -->
                                        <div class="position-relative mt-info">
                                            <div class="col position-absolute top-50 start-50 translate-middle">
                                                <h1 class="text-uppercase roadmaps">About</h1>
                                            </div>  
                                            <h2 class="mt-info-heading">Welcome to <br> Global Wild Camping and Swimming</h4>
                                        </div>

                                        <!-- roadmap context -->
                                        <div class="row mt-3">
                                            <p class="text">
                                                GWSC was first established in 1995 in order to protect the area around the Hlawga lake.
                                                Here, you can observe the wildlife animals in their natural habitat closely.
                                                You can create a recreation zone for the public and relax peacefully and the other purpose of this park is to spread awareness of environmental conservation.
                                            </p>
                                        </div>

                                        <!-- accommodation -->
                                        <div class="row justify-content-center mt-5">
                                            <div class="col-10 mt-3 shadow p-4">
                                                <div class="row">
                                                    <div class="col">
                                                        <h3 class="display-6">For accommodations</h3>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-center">
                                                    <div class="col-lg col-4 border-end mt-3">
                                                        <div class="row justify-content-center mb-2" id="svgs">
                                                            <div class="col-8">
                                                                <img src="../src/logo and icons/trailer.svg" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <span class="text-uppercase">30 camper sites</span>
                                                    </div>
                                                    <div class="col-lg col-4 border-end mt-3">
                                                        <div class="row justify-content-center mb-2" id="svgs">
                                                            <div class="col-8">
                                                                <img src="../src/logo and icons/rv.svg" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <span class="text-uppercase">25 caravan sites*</span>
                                                    </div>
                                                    <div class="col-lg col-4 lg-border-end mt-3">
                                                        <div class="row justify-content-center mb-2" id="svgs">
                                                            <div class="col-8">
                                                                <img src="../src/logo and icons/tent (2).svg" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <span class="text-uppercase">50 tent sites</span>
                                                    </div>
                                                    <div class="col-lg col-4 border-end mt-3">
                                                        <div class="row justify-content-center mb-2" id="svgs">
                                                            <div class="col-8">
                                                                <img src="../src/logo and icons/glamp.svg" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <span class="text-uppercase">10 glamp sites*</span>
                                                    </div>
                                                    <div class="col-lg col-4 mt-3">
                                                        <div class="row justify-content-center mb-2" id="svgs">
                                                            <div class="col-8">
                                                                <img src="../src/logo and icons/cabin.svg" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <span class="text-uppercase">10 cabin sites</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="position-relative mb-5">
                                                <div class="position-absolute top-50 start-50 translate-middle min-vw-100">
                                                    <h1 class="text-uppercase roadmaps mt-5">Ways to stay</h1>
                                                </div>  
                                                <h2 class="mt-info-heading">Choose how you want to relax</h4>
                                            </div>
                                            <div class="flex col-lg mx-3 card shadow">
                                                <div class="row justify-content-center">
                                                    <div class="card-img-wrapper">
                                                        <img src="../src/images/camp 1.jpg" class="card-img-top">
                                                    </div>
                                                    <div class="mt-3">
                                                        <h3 class="">Camping are for tents</h3>
                                                        <p class="text">
                                                            Pitch your tent and relax next to the fire.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex col-lg mx-3 card shadow">
                                                <div class="row justify-content-center">
                                                    <div class="card-img-wrapper">
                                                        <img src="../src/images/rv 1.jpg" class="card-img-top">
                                                    </div>
                                                    <div class="mt-3">
                                                        <h3 class="">Trailers and RV spots</h3>
                                                        <p class="text">
                                                            Camp in style from the comfort of your vehicle.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex col-lg mx-3 card shadow">
                                                <div class="row justify-content-center">
                                                    <div class="card-img-wrapper">
                                                        <img src="../src/images/glamping 1.jpg" class="card-img-top">
                                                    </div>
                                                    <div class="mt-3">
                                                        <h3 class="">Cabins and glamping</h3>
                                                        <p class="text">
                                                            Find comfort and convenience with a cabin or lodge.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-10 mb-5">
                                            <div class="col-12 col-lg-6 p-5">
                                                <div class="row align-middle justify-content-center">
                                                    <!-- roadmap -->
                                                    <div class="position-relative mt-5">
                                                        <div class="col position-absolute start-50 bottom-0 mb-lg-4 pb-lg-2 mb-xxl-0 pb-xxl-0 translate-middle">
                                                            <h1 class="roadmaps text-uppercase">Activity</h1>
                                                        </div>  
                                                        <h2 class="mt-info-heading">Change the way you travel, <br>be closer to nature.</h4>
                                                    </div>

                                                    <!-- roadmap context -->
                                                    <div class="row mt-3">
                                                        <p class="text">
                                                            Forget how you lived your life normally.<br> Be more close to nature.<br> Be more adventurous.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 p-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="row mb-3">
                                                            <div class="col-6" id="svgs">
                                                                <img src="../src/logo and icons/badges/trekking.svg" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <div class="row text-start">
                                                            <h5>Trekking</h5>
                                                            <p class="text">
                                                                Some clinically proven benefits of spending time in nature include; reduction in stress and blood pressure and improved sleep and energy levels. 
                                                                In our increasingly fast paced society, reduction of stress and increased emotional well being is one of the most important health benefits of trekking!
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row mb-3">
                                                            <div class="col-6" id="svgs">
                                                                <img src="../src/logo and icons/badges/hiking.svg" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <div class="row text-start">
                                                            <h5>Hiking</h5>
                                                            <p class="text">
                                                            Hiking is proven to have many health benefits, ranging from physical exercise you get when out on the trail, to emotional or mental relief that comes from being in nature. 
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row mb-3">
                                                            <div class="col-6" id="svgs">
                                                                <img src="../src/logo and icons/badges/canoeing.svg" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <div class="row text-start">
                                                            <h5>Canoeing</h5>
                                                            <p class="text">
                                                            There's nothing like exercise in the fresh air to make you feel good about yourself. From an epic adventure to a gentle paddle, 
                                                            being outside and close to nature can lower your stress levels, help you sleep better and make you a happier person overall.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row mb-3">
                                                            <div class="col-6" id="svgs">
                                                                <img src="../src/logo and icons/badges/camping.svg" class="img-fluid">
                                                            </div>
                                                        </div>
                                                        <div class="row text-start">
                                                            <h5>Camping</h5>
                                                            <p class="text">
                                                            Disconnect from technology and reconnect with nature. Revitalize your relationships with your families.
                                                            Learn new skills. Reduce stress and increase physical fitness.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <?php include('footer.php'); ?>
    </body>
</html>
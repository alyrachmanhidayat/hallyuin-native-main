<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hallyuin</title>

    <!-- CSS-->
    <link href="../css/main-style.css" rel="stylesheet" type="text/css">
    <link href="../css/product_details.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="../js/details.js"></script>

    <!-- CSS-->
    <!-- <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->


    <!-- Custom fonts-->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->

    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- Custom styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<div class="container-fluid w-100">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
        <div class="container margin-10 h-100 w-100">
            <a class="navbar-brand" href="v_index.php">
                <img src="../assets/logo.png" alt="logo" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <form class="d-flex mx-auto w-75" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0 d-flex align-items-center">
                    <li class="nav-item">
                        <div class="cart-icon">
                            <a class="nav-link" href="v_cart.php">
                                <img src="../assets/online-shopping.png" alt="">
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <img src="../assets/heart.png" alt="">
                        </a>
                    </li>
                    <li class="nav-item separator">
                        <span>|</span>
                    </li>
                    <li class="nav-item dropdown divider">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hello "user"
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="p-2 fa-regular fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="p-2 fa-solid fa-right-from-bracket"></i>
                                    LogOut
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- content -->
    <div class="container">

        <div class="product-content product-wrap clearfix product-deatil">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <div id="myCarousel-2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel-2" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel-2" data-slide-to="1"></li>
                                <li data-target="#myCarousel-2" data-slide-to="2"></li>
                                <li data-target="#myCarousel-2" data-slide-to="3"></li>
                                <li data-target="#myCarousel-2" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <img src="../assets/book-2.jpeg" class="d-block w-100" alt />
                                </div>

                                <div class="carousel-item">
                                    <img src="../assets/book-3.jpeg" class="d-block w-100" alt />
                                </div>

                                <div class="carousel-item">
                                    <img src="../assets/book-4.jpeg" class="d-block w-100" alt />
                                </div>

                                <div class="carousel-item">
                                    <img src="../assets/book-5.jpeg" class="d-block w-100" alt />
                                </div>

                                <div class="carousel-item">
                                    <img src="../assets/book-6.jpeg" class="d-block w-100" alt />
                                </div>
                            </div>
                            <a class="left carousel-control-prev" href="#myCarousel-2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon bg-secondary rounded"></span>
                            </a>
                            <a class="right carousel-control-next" href="#myCarousel-2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon bg-secondary rounded"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="label-container">
                        <div class="stock-label">Ready Stock</div>
                    </div>
                    <h2 class="name">
                        Jumpy Dumpty Klee Mug - Genshin Impact (360ml 11x15cm)
                        <small>By Mihoyo</a></small>
                    </h2>
                    <hr />
                    <h3 class="price-container">
                        IDR 380,000

                    </h3>
                    <div class="product-count">
                        <label for="size">Quantity</label>
                        <form action="#" class="display-flex">
                            <div class="qtyminus">-</div>
                            <input type="text" name="quantity" value="1" class="qty">
                            <div class="qtyplus">+</div>
                        </form>
                    </div>
                    <button class="wishlist-button">Add to Wishlist</button>
                    <button class="cart-button">Add to Cart</button>
                    <hr />
                    <div class="product-description">
                        <h3>Product Detail:</h3>
                        <ul>
                            <li>Capacity: 360ml</li>
                            <li>Heat Resistant Capacity: 0-100°C</li>
                        </ul>
                        <p>Material: Glass</p>
                        <p>Copyright miHoYo All Rights Reserved</p>
                    </div>
                    <div class="info-container">
                        <p class="info-label">Character</p>
                        <button class="info-button">Klee</button>
                    </div>
                    <div class="info-container">
                        <p class="info-label">Category</p>
                        <button class="info-button">Merchandise - Mug</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="bg-dark text-center text-white">
        <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-facebook-f"></i>
                </a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-twitter"></i>
                </a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-google"></i>
                </a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-instagram"></i>
                </a>

                <!-- LinkedIn -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-linkedin-in"></i>
                </a>

                <!-- GitHub -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                    <i class="fab fa-github"></i>
                </a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Text -->
            <section class="mb-4">
                <p>
                    Hallyuin adalah aplikasi e-commerce khusus Kpopers yang menyediakan berbagai macam merchandise,
                    album, dan
                    pernak-pernik Kpop. Kami berkomitmen untuk memberikan pengalaman belanja yang menyenangkan dan
                    memuaskan
                    bagi para penggemar Kpop di seluruh dunia. Temukan produk favorit Anda dan dukung idola kesayangan
                    Anda
                    bersama kami.
            </section>
            <!-- Section: Text -->

            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Home</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="v_cart.php" class="text-white">CART</a>
                            </li>
                            <li>
                                <a href="v_products.php" class="text-white">PRODUCTS</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Contact Us</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="#!" class="text-white">INSTAGRAM</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">GMAIL</a>
                            </li>
                            <li>
                                <a href="#!" class="text-white">FACEBOOK</a>
                            </li>
                            <li>
                                <a href="https://wa.me/+6285950330404" class="text-white">WHATSAPP</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase">Products</h5>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <a href="https://www.instagram.com/weareone.exo/" class="text-white">EXO</a>
                            </li>
                            <li>
                                <a href="https://ibighit.com/bts/eng/" class="text-white">BTS</a>
                            </li>
                            <li>
                                <a href="https://www.blackpinkmusic.com/" class="text-white">BLACK PINK</a>
                            </li>
                            <li>
                                <a href="https://aespa.com/" class="text-white">AESPA</a>
                            </li>
                        </ul>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-white" href="#">hallyuin.com</a>
        </div>
        <!-- Copyright -->
    </footer>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Bootstrap core JavaScript-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Custom scripts for all pages-->
    <!-- <script src="js/sb-admin-2.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    </body>

</html>
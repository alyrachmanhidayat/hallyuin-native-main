<!DOCTYPE html>
<html lang="en">
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
    <link href="/hallyuin-native-main/css/main-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom fonts-->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> -->

    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

    <!-- Custom styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid w-100">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary w-100">
            <div class="container margin-10 h-100 w-100">
                <a class="navbar-brand" href="#">
                    <img src="/hallyuin-native-main/assets/logo.png" alt="logo" width="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <form class="d-flex mx-auto w-75" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <div class="cart-icon">
                                <a class="nav-link" href="#">
                                    <img src="/hallyuin-native-main/assets/online-shopping.png" alt="">
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <img src="/hallyuin-native-main/assets/heart.png" alt="">
                            </a>
                        </li>
                        <li class="nav-item separator">
                            <span>|</span>
                        </li>
                        <li class="nav-item dropdown divider">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Hello "user"
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="p-2 fa-regular fa-user"></i> Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="p-2 fa-solid fa-right-from-bracket"></i>Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="h-100 gradient-custom">
            <div class="container py-5">
                <div class="row d-flex justify-content-center my-4">
                    <div class="col-md-7">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Shopping Cart</h5>
                            </div>
                            <div class="card-body">
                                <!-- Single item -->
                                <div class="row item">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        <!-- Image -->
                                        <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                            <img src="C:\Users\gin06\Downloads\hallyuin-native-main FE\hallyuin-native-main FE\hallyuin-native-main\assets\book-12.jpeg" class="w-100" alt="Album" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(238, 13, 13, 0.2)"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <!-- Data -->
                                        <p><strong>ALBUM</strong></p>
                                        <p>deskripsi abcdefghijklmnopqrstuvwxyz </p>
                                        <p>Kategori : </p>
                                        <button type="button" class="btn btn-detele" style="color: rgb(255, 255, 255); background-color: #fc0505;">Delete</button>
                                        <button type="button" class="btn btn-move-to-wishlist" style="color: rgb(255, 255, 255); background-color: #f2d541;" onclick="moveToWishlist(this)">Add to Wishlist</button>

                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <!-- Quantity -->
                                        <div class="d-flex mb-4" style="max-width: 300px">
                                            <button class="btn btn-primary px-3 me-2 decrement" style="background-color: #7D009E;">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input min="0" name="quantity" value="1" type="number" class="form-control quantity" />
                                            <button class="btn btn-primary px-3 ms-2 increment" style="background-color: #7D009E;">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- Price -->
                                        <p class="text-start text-md-center price" data-unit-price="45.000">
                                            <strong>45.000</strong>
                                        </p>
                                    </div>
                                </div>
                                <!-- Single item -->
                                <hr class="my-4" />
                                <!-- Single item -->
                                <div class="row item">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        <!-- Image -->
                                        <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                            <img src="C:\Users\gin06\Downloads\hallyuin-native-main FE\hallyuin-native-main FE\hallyuin-native-main\assets\book-16.jpeg" class="w-100" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <!-- Data -->
                                        <p><strong>ALBUM</strong></p>
                                        <p>deskripsi abcdefghijklmnopqrstuvwxyz </p>
                                        <p>Kategori : </p>
                                        <button type="button" class="btn btn-detele" style="color: rgb(255, 255, 255); background-color: #fc0505;">Delete</button>
                                        <button type="button" class="btn btn-move-to-wishlist" style="color: rgb(255, 255, 255); background-color: #f2d541;">Add to Wishlist</button>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <!-- Quantity -->
                                        <div class="d-flex mb-4" style="max-width: 300px">
                                            <button class="btn btn-primary px-3 me-2 decrement" style="background-color: #7D009E;">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <input min="0" name="quantity" value="1" type="number" class="form-control quantity" />
                                            <button class="btn btn-primary px-3 ms-2 increment" style="background-color: #7D009E;">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- Price -->
                                        <p class="text-start text-md-center price" data-unit-price="45.000">
                                            <strong>45.000</strong>
                                        </p>
                                    </div>
                                </div>
                                <!-- Single item -->
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <p><strong>WISHLIST ITEM</strong></p>
                                <div class="row item">
                                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                        <!-- Image -->
                                        <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                            <img src="D:\Folder Fayyadh\PemWeb\hallyuin\assets\bts-album-suga-agust-d-tour-d-day-the-original-37706295804085_1000x.jpeg" class="w-100" alt="Album" />
                                            <a href="#!">
                                                <div class="mask" style="background-color: rgba(238, 13, 13, 0.2)"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                        <!-- Data -->
                                        <p><strong>ALBUM</strong></p>
                                        <p>deskripsi abcdefghijklmnopqrstuvwxyz </p>
                                        <p>Kategori : </p>
                                        <strong class="price">45000</strong> <br>
                                        </button>
                                        <button type="button" class="btn btn-add-to-cart" style="color: rgb(255, 255, 255); background-color: #7f4d8c;">Add to Cart</button>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body">
                                <p><strong> METODE PEMBAYARAN</strong></p>
                                <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg" alt="Visa" />
                                <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg" alt="American Express" />
                                <img class="me-2" width="45px" src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg" alt="Mastercard" />
                                <img class="me-2" width="45px" src="D:\Folder Fayyadh\PemWeb\hallyuin\assets\qris.jpg" alt="Qris" />

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">TOTAL HARGA</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Products
                                        <span id="products-total">0</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        Shipping
                                        <span id="total-amount">0</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <strong>HARGA TOTAL</strong>
                                        </div>
                                        <span id="total-amount">0</span>

                                    </li>
                                </ul>
                                <button type="button" class="btn btn-primary btn-lg btn-block" style="background-color: #7D009E" data-bs-toggle="modal" data-bs-target="#checkoutModal">
                                    CHECKOUT
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="checkoutModalLabel">Checkout Confirmation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Checkout sekarang?</p>
                            <p>Total Pembayaran: <span id="modal-total-price"></span></p>
                            <p>Saldo H-wallet anda adalah Rp. 100.000,00</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nanti saja</button>
                            <button type="button" class="btn btn-primary" id="top-up-button">Top up saldo</button>
                            <button type="button" class="btn btn-success" id="confirm-checkout">Iya</button>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <footer class="bg-dark text-center text-white">
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                    <!-- LinkedIn -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                    <!-- GitHub -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->

                <!-- Section: Text -->
                <section class="mb-4">
                    <p>
                        Hallyuin adalah aplikasi e-commerce khusus Kpopers yang menyediakan berbagai macam merchandise, album, dan
                        pernak-pernik Kpop. Kami berkomitmen untuk memberikan pengalaman belanja yang menyenangkan dan memuaskan
                        bagi para penggemar Kpop di seluruh dunia. Temukan produk favorit Anda dan dukung idola kesayangan Anda
                        bersama kami.
                </section>
                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Home</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">CART</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">MENU</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">PROFILE</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">KATEGORI</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">About Us</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">PARTNER</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">MEDIA</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">AFFILIATE</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
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
                                    <a href="#!" class="text-white">WHATSAPP</a>
                                </li>
                            </ul>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Products</h5>

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#!" class="text-white">EXO</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">BTS</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">BLACK PINK</a>
                                </li>
                                <li>
                                    <a href="#!" class="text-white">AESPA</a>
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


        <!-- Connect the JS file -->
        <script src="\hallyuin-native-main\js\cart.js"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hallyuin</title>
    <link href="/hallyuin-native-main/css/main-style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

        <section class="hero-section d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="display-4 fw-bold">We helps to find Your dreams</h1>
                        <p class="lead">Hallyuin, e-commerce khusus Kpopers yang menyediakan berbagai macam merchandise, album, dan pernak-pernik Kpop.</p>
                        <div>
                            <a href="#" class="btn btn-warning btn-lg me-2">Shop Now</a>
                            <a href="#" class="btn btn-outline-secondary btn-lg">Explore</a>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <img src="sofa.png" alt="Sofa" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section product-->
        <section>
            <div class="container py-5">
                <div class="container-container">
                    <div class="col-12">
                        <div class="row">
                            <div class="py-4 text-center">
                                <h1 class="fw-bold">Find What You Wanted</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="list"></div>
                    <div class="pagination d-flex justify-content-center mt-4" id="pagination"></div>
                </div>
            </div>
        </section>

        <!-- Carousel section -->
        <section id="card-carousel" class="py-4 overflow-hidden my-4">
            <div class=" text-center">
                <h1 class="fw-bold">New Releases</h1>
            </div>
            <div class="container">
                <div class="owl-carousel owl-theme">
                    <!-- Card contents (same as provided) -->
                    <div class="item card-carousel me-2 position-relative">
                        <img src="/hallyuin-native-main/assets/book-1.jpeg" alt="" />
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                <button>See product</button>
                            </div>
                        </div>
                    </div>
                    <!-- card content -->
                    <div class="item card-carousel me-2 position-relative">
                        <img src="/hallyuin-native-main/assets/book-2.jpeg" alt="" />
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                <button>See product</button>
                            </div>
                        </div>
                    </div>
                    <!-- card content -->
                    <div class="item card-carousel me-2 position-relative">
                        <img src="/hallyuin-native-main/assets/disc-1.jpeg" alt="" />
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                <button>See product</button>
                            </div>
                        </div>
                    </div>
                    <!-- card content -->
                    <div class="item card-carousel me-2 position-relative">
                        <img src="/hallyuin-native-main/assets/disc-2.jpeg" alt="" />
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                <button>See product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-center text-white">
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="social-media mb-4">
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
                    <p>Hallyuin adalah aplikasi e-commerce khusus Kpopers yang menyediakan berbagai macam merchandise, album, dan pernak-pernik Kpop. Kami berkomitmen untuk memberikan pengalaman belanja yang menyenangkan dan memuaskan bagi para penggemar Kpop di seluruh dunia. Temukan produk favorit Anda dan dukung idola kesayangan Anda bersama kami.</p>
                </section>
                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Home</h5>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!" class="text-white">CART</a></li>
                                <li><a href="#!" class="text-white">MENU</a></li>
                                <li><a href="#!" class="text-white">PROFILE</a></li>
                                <li><a href="#!" class="text-white">KATEGORI</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">About Us</h5>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!" class="text-white">PARTNER</a></li>
                                <li><a href="#!" class="text-white">MEDIA</a></li>
                                <li><a href="#!" class="text-white">AFFILIATE</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Contact Us</h5>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!" class="text-white">INSTAGRAM</a></li>
                                <li><a href="#!" class="text-white">GMAIL</a></li>
                                <li><a href="#!" class="text-white">FACEBOOK</a></li>
                                <li><a href="#!" class="text-white">WHATSAPP</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                            <h5 class="text-uppercase">Products</h5>
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!" class="text-white">EXO</a></li>
                                <li><a href="#!" class="text-white">BTS</a></li>
                                <li><a href="#!" class="text-white">BLACK PINK</a></li>
                                <li><a href="#!" class="text-white">AESPA</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- Section: Links -->
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2024 Copyright: <a class="text-white" href="#">hallyuin.com</a>
            </div>
        </footer>

        <!-- Connect the JS file -->
        <script src="\hallyuin-native-main\js\carousel.js"></script>
        <script src="\hallyuin-native-main\js\product.js"></script>
        <script src="\hallyuin-native-main\js\categories.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 3,
                    },
                    1000: {
                        items: 5,
                    },
                },
            });
        </script>
    </div>
</body>

</html>
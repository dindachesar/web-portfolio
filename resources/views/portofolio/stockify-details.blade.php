<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Stockify</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('/') }}template/assets/img/stock.jpg" rel="icon" />
    <link href="{{ asset('/') }}template/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Satisfy"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/') }}template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('/') }}template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('/') }}template/assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Stockify</h2>
                    <ol>
                        <li><a href="{{ url('/') }}#portfolio">Home</a></li>
                        <li>Portfolio Details</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- Breadcrumbs Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <img src="{{ asset('/') }}template/assets/img/stockify/post1.jpg"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('/') }}template/assets/img/stockify/post2.jpg"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('/') }}template/assets/img/stockify/post3.jpg"
                                        alt="" />
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('/') }}template/assets/img/stockify/post4.jpg"
                                        alt="" />
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Informasi Project</h3>
                            <ul>
                                <li><strong>Kategori</strong>: Web</li>
                                <li><strong>Framework</strong>: Laravel</li>
                                <li><strong>Tanggal</strong>: 3 Juni 2024</li>
                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>Stockify</h2>
                            <p style="text-align: justify">
                                "Stockify" adalah istilah yang merupakan gabungan dari kata
                                "stock" yang berarti stok atau persediaan, dan "ify" yang
                                sering digunakan sebagai akhiran dalam pembentukan kata dalam
                                bahasa Inggris, sering kali digunakan untuk menyatakan proses
                                atau tindakan. Jadi, "stockify" secara umum dapat diartikan
                                sebagai proses atau tindakan untuk mengelola stok atau
                                persediaan barang.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Details Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>Dinda Chesar</h3>
            <div class="social-links">
                <a href="https://www.facebook.com/dinda.chesar" class="facebook" title="Facebook"><i
                        class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/din.daaaaa_?igsh=MXNvc255N21ubDR4NQ==" class="instagram"
                    title="Instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/in/dinda-chesar-b6aba2239" class="linkedin" title="Linkedin"><i
                        class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" title="~"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/') }}template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('/') }}template/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/') }}template/assets/js/main.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KKM | İletişim</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid ">
        <div class="row border-top px-xl-5 mt-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Kategoriler</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <a href="" class="nav-item nav-link">Roman</a>
                        <a href="" class="nav-item nav-link">Hikaye</a>
                        <a href="" class="nav-item nav-link">Şiir</a>
                        <a href="" class="nav-item nav-link">Test Kitapları</a>
                        <a href="" class="nav-item nav-link">Öykü</a>
                        <a href="" class="nav-item nav-link">Kişisel Gelişim</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link ">Anasayfa</a>
                            <a href="shop.php" class="nav-item nav-link active">Tümünü Gör</a>
                            <a href="contact.php" class="nav-item nav-link">İletişim</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="" class="nav-item nav-link">Giriş Yap</a>
                            <a href="" class="nav-item nav-link">Kayıt Ol</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">İLETİŞİME GEÇ</h1>
            <div class="d-inline-flex">
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">İletişim Formu</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" action="iletisim_islem.php" method="post">
                    <div class="control-group">
                            <input type="text" name="isim" class="form-control" id="name" placeholder="İsim"
                                required="required" data-validation-required-message="Lütfen İsim Giriniz" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="E mail"
                                required="required" data-validation-required-message="Lütfen E mail Giriniz" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" name="konu" class="form-control" id="subject" placeholder="Konu"
                                required="required" data-validation-required-message="Lütfen Konu Giriniz" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea name="mesaj" class="form-control" rows="6" id="message" placeholder="Mesaj"
                                required="required"
                                data-validation-required-message="Lütfen Mesaj Giriniz"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="Send Message">Gönder</button>
                                <!-- <input type="submit" class="gonder" value="Gönder"> -->
                        </div>


                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">KKM Genel Müdürlük</h5>
                <p>Gazi Caddesi, Nilüfer/BURSA</p>
                <div class="d-flex flex-column mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Saray Mahallesi Zeryan SK. No:36</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@kkm.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+90 512 345 67 89</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p>Milyonlarca Kitap en uygun fiyat, hızlı kargo ve kapıda ödeme seçenekleriyle kkmkitap.com'da.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Gazi Caddesi, Nilüfer/BURSA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@kkm.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+90 512 345 67 89</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Linkler</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a href="index.php" class="nav-item nav-link active">Anasayfa</a>
                            <a href="shop.php" class="nav-item nav-link">Tümünü Gör</a>
                            <a href="detail.php" class="nav-item nav-link">Market Detayları</a>
                            <a href="contact.php" class="nav-item nav-link">İletişim</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>


</html>




<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="authour" content="BULLVİO TEKNOLOJİ VE YAZILIM TİC. LTD. ŞTİ.">
    <title>Document</title>
    <!-- Favicons -->
    <link href="#" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php include 'css.php' ?>
</head>

<body>
    <?php include 'header.php' ?>
    <!-- page top button start -->
    <button type="button" class="btn btn-black btn-floating" id="btn-back-to-top">
        <i class="bi bi-arrow-up"></i>
    </button>
    <!-- page top button end -->
    <!-- İmage and Breadcrumb Section Start -->
    <section class="iletisim-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  mt-5 mb-5 pt-5 pb-5">
                    <div class="mt-5 mb-5 pt-5 pb-5" data-aos="fade-left" data-aos-duration="1500">
                        <p style="font-weight:900; font-size:35pt; color:white">İLETİŞİM</p>
                        <nav aria-label="breadcrumb" style="color:white!important;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php" style=" font-size:16pt; color:white">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style=" font-size:16pt;">İletisim</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container mt-4 pt-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 mt-5 pt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <!--Header-->
                            <div class="form-header" style="background-color:#e7401c!important; color:white;">
                                <h4>Siteler Ofis</h4>
                            </div>
                        </div>
                    </div>
                    <!--Buttons-->
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a class="btn-floating black accent-1"><i class="bi bi-geo-alt-fill"></i></a>
                            <p>Deneme</p>
                            <p>Altındağ/Ankara</p>
                        </div>
                        <div class="col-md-4">
                            <a href="tel:+905550036868" class="btn-floating black accent-1"><i class="bi bi-telephone-fill"></i></a>
                            <p>+90 555 003 68 68</p>
                        </div>
                        <div class="col-md-4">
                            <a href="mailto:webmaster@example.com" class="btn-floating black accent-1"><i class="bi bi-envelope-fill"></i></a>
                            <p>info@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 mt-5 pt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <!--Header-->
                            <div class="form-header" style="background-color:#e7401c!important; color:white;">
                                <h4>Sincan Ofis</h4>
                            </div>
                        </div>
                    </div>
                    <!--Buttons-->
                    <div class="row text-center">
                        <div class="col-md-4">
                            <a class="btn-floating accent-1"><i class="bi bi-geo-alt-fill bv-bg-7" style="color:black;"></i></a>
                            <p>Deneme</p>
                            <p>Sincan/Ankara</p>
                        </div>
                        <div class="col-md-4">
                            <a href="tel:+905550036868" class="btn-floating accent-1"><i class="bi bi-telephone-fill bv-bg-7" style="color:black;"></i></a>
                            <p>+90 555 003 68 68</p>
                        </div>
                        <div class="col-md-4">
                            <a href="mailto:webmaster@example.com" class="btn-floating accent-1"><i class="bi bi-envelope-fill bv-bg-7" style="color:black;"></i></a>
                            <p>info@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container my-3 py-3">
            <!--Section: Contact v.1-->
            <section class="section py-5">
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-5">
                        <!--Form with header-->
                        <div class="card">
                            <div class="card-body px-5">
                                <!--Header-->
                                <div class="form-header black accent-1">
                                    <h3>İletişim Formu</h3>
                                </div>
                                <!--Body-->
                                <div class="md-form">
                                    <input type="text" id="form-name" class="form-control" placeholder="Ad">
                                    <label for="form-name"></label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="form-name" class="form-control" placeholder="Soyad">
                                    <label for="form-name"></label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="form-email" class="form-control" placeholder="E-Mail">
                                    <label for="form-email"></label>
                                </div>
                                <div class="md-form">
                                    <input type="text" id="form-Subject" class="form-control" placeholder="Konu başlığınızı yazınız!">
                                    <label for="form-Subject"></label>
                                </div>
                                <div class="md-form">
                                    <textarea id="form-text" class="form-control md-textarea" rows="4" placeholder="Mesajınızı yazınız!"></textarea>
                                    <label for="form-text"></label>
                                </div>
                                <div class="text-center mt-4">
                                    <button class="btn btn-black">Gönder</button>
                                </div>
                            </div>
                        </div>
                        <!--Form with header-->
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-lg-7">
                        <!--Google map-->
                        <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 590px">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1529.1381880474148!2d32.90823493159223!3d39.95757313934392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d353fa8a290eeb%3A0xd0d765aa97aa3610!2sDEKOMAKS%20AKSESUAR%20VE%20MOB%C4%B0LYA!5e0!3m2!1str!2str!4v1646824308201!5m2!1str!2str" frameborder="0" style="border:0" allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
            </section>
            <!--Section: Contact v.1-->
        </div>
    </section>
    <!-- İmage and Breadcrumb Section End -->
    <?php include 'footer.php' ?>
    <?php include 'js.php' ?>
    <!-- page top button start -->
    <script>
        //Get the button
        let mybutton = document.getElementById("btn-back-to-top");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 150 ||
                document.documentElement.scrollTop > 150
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- page top button end -->
    <script>
        AOS.init();
    </script>
</body>

</html>
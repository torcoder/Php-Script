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
                        <p style="font-weight:900; font-size:35pt; color:white">Ürünlerimiz</p>
                        <nav aria-label="breadcrumb" style="color:white!important;">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php" style=" font-size:16pt; color:white">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page" style=" font-size:16pt;">Ürünlerimiz</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="container my-5 py-5">
            <div class="row"> 
                <div class="col-4 py-3">
                    <div class="card text-center bv-shadow-2">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="assets/img/deneme.jpg" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                            </a>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Çerçeve Kapak Profilleri</h5>
                        </div>
                        <div>
                            <a href="urunler-ic-sayfa.php"><button type="button" class="btn btn-primary btn-block btn-md" style="width: 100%; background-color:#e7401c!important;">İncele</button></a>
                        </div>
                    </div>
                </div>
            </div>
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
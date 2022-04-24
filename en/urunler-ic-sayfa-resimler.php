<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
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
            <p style="font-weight:900; font-size:35pt; color:white">DM 2214</p>
            <nav aria-label="breadcrumb" style="color:white!important;">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" style=" font-size:16pt; color:white">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="urunlerimiz.php" style=" font-size:16pt; color:white">Ürünlerimiz</a></li>
                <li class="breadcrumb-item"><a href="urunler-ic-sayfa.php" style=" font-size:16pt; color:white">Çerçeve-Kapak-Profilleri</a></li>
                <li class="breadcrumb-item active" aria-current="page" style=" font-size:16pt;">DM-2214</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
  </section>





  <section>
    <div class="container">
      <div class="row py-5">
        <div class="col-12">
          <div class="card my-5">
            <div class="row g-0 py-5">
              <div class="col-md-6 d-flex justify-content-center py-3">
                <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img class="lazy" src="assets/img/kurumsal/1.jpg" class="swiper-lazy" /> 
                    </div>
                    <div class="swiper-slide">
                      <img data-src="assets/img/kurumsal/2.jpg" class="swiper-lazy" />
                    </div>
                    <div class="swiper-slide">
                      <img data-src="assets/img/kurumsal/3.jpg" class="swiper-lazy" />
                    </div>
                    <div class="swiper-slide">
                      <img data-src="assets/img/kurumsal/4.jpg" class="swiper-lazy" /> 
                    </div>
                    <div class="swiper-slide">
                      <img data-src="assets/img/kurumsal/5.jpg" class="swiper-lazy" />
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
              <div class="col-md-6 py-3">
                <div class="card-body">
                  <h5 class="card-title">Başlık Bu Alana Yazılacak</h5>

                  <hr>
                  <p class="card-text">
                    <strong>Model No:</strong> DM-2214
                  </p>
                  <p class="card-text">
                    <strong>Ürün Rengi:</strong> Ekosel, Parlak, Titan
                  </p>
                  <p class="card-text">
                    <strong>Deneme Başlık:</strong> Deneme, deneme
                  </p>
                  <p class="card-text">
                    <strong>Açıklama:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, iure magnam. Debitis ratione eveniet nesciunt placeat eum laudantium dignissimos vero!
                  </p>
                  <div>
                    <a href="online-teklif.php"><button type="button" class="btn btn-primary btn-block btn-md" style="width: 100%; background-color:#e7401c!important;">Teklif Al</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>







  <!-- İmage and Breadcrumb Section End -->
  <?php include 'footer.php' ?>
  <?php include 'js.php' ?>
  <!-- Initialize Swiper -->
  <script>
      var swiper = new Swiper(".mySwiper", {
        lazy: true,
        effect: "cube",
        grabCursor: true,
        autoplay: {
          delay: 4500,
          disableOnInteraction: false,
        },
        cubeEffect: {
          shadow: true,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94,
        },
        pagination: {
          el: ".swiper-pagination",
        },
      });
    </script>
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
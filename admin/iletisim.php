<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Bullvio Teknoloji ve Yazılım TIC. LTD. ŞTI.">

    <title>Dekomaks - Admin Paneli</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'sidenav.php'?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'header.php';
$query = $baglanti->prepare("SELECT * FROM seo WHERE id=1");
$query->execute();
$row = $query->fetch(PDO::FETCH_ASSOC);

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">İletişim SEO Ayarlamaları | TR</h6>
                                </div>
                                <div class="card-body">
                                    <p>Düzenleme firmamız tarafından yapılacaktır. Ekstra müdehale etmemeniz önerilir.
                                    </p>
                                </div>
                                <form id="postform1" name="iletisim_seo">
                                    <div class="card-body">
                                        <p>Description(Max 160 karakter uzunluğunda olmalıdır.)</p>
                                        <div class="mb-0">
                                            <textarea class="form-control" placeholder="Bu alana açıklama yazınız!"
                                                id="exampleFormControlTextarea1" rows="1" name="iletisim_desc"
                                                maxlength="160"><?php echo $row['iletisim_desc'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Keywords</p>
                                        <div class="mb-0">
                                            <input class="form-control" type="text" placeholder="Bu alana yazınız!"
                                                aria-label="default input example" name="iletisim_key"
                                                value="<?php echo $row['iletisim_key'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-dark">Güncelle</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="col-lg-6 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">İletişim SEO Ayarlamaları | EN</h6>
                                </div>
                                <div class="card-body">
                                    <p>Düzenleme firmamız tarafından yapılacaktır. Ekstra müdehale etmemeniz önerilir.
                                    </p>
                                </div>
                                <form id="postform2" name="iletisim_seo_en">
                                    <div class="card-body">
                                        <p>Description(Max 160 karakter uzunluğunda olmalıdır.)</p>
                                        <div class="mb-0">
                                            <textarea class="form-control" placeholder="Bu alana açıklama yazınız!"
                                                id="exampleFormControlTextarea1" name="iletisim_desc_en" rows="1"
                                                maxlength="160"><?php echo $row['iletisim_desc_en'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Keywords</p>
                                        <div class="mb-0">
                                            <input class="form-control" type="text" placeholder="Bu alana yazınız!"
                                                aria-label="default input example" name="iletisim_key_en"
                                                value="<?php echo $row['iletisim_key_en'] ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-dark">Güncelle</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">İletişim Ofis Ekleme </h6>
                                </div>
                                <div class="card-body">
                                    <p>İletişim sayfasına ofis eklemek için kullanın.</p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>TR | Ofis Adı</p>
                                            <div class="mb-0">
                                                <input class="form-control" type="text"
                                                    placeholder="Bu alana ofis adı yazınız!"
                                                    aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>EN | Ofis Adı</p>
                                            <div class="mb-0">
                                                <input class="form-control" type="text"
                                                    placeholder="Bu alana ofis adı yazınız!"
                                                    aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Adres</p>
                                    <div class="mb-0">
                                        <input class="form-control" type="text" placeholder="Bu alana adres yazınız!"
                                            aria-label="default input example">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>Telefon</p>
                                            <div class="mb-0">
                                                <input class="form-control" type="text"
                                                    placeholder="Bu alana telefon yazınız!"
                                                    aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>Mail</p>
                                            <div class="mb-0">
                                                <input class="form-control" type="text"
                                                    placeholder="Bu alana mail adresinizi yazınız!"
                                                    aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-dark">Ekle</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Google Map</h6>
                                </div>
                                <div class="card-body">
                                    <p>Bu alana firma adresiniz değiştiğinde google map ekleyebilirsiniz.</p>
                                </div>
                                <div class="card-body">
                                    <p>Google Map Düzenleme</p>
                                    <div class="mb-0">
                                        <input class="form-control" type="text"
                                            placeholder="Bu alana google map linkinizi yazınız!"
                                            aria-label="default input example">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-body">
                                            <button type="button" class="btn btn-dark">Güncelle</button>
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
    <!-- End of Main Content -->

    <?php include 'footer.php'?>

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <script>
    $(document).ready(function() {
        $('#postform1').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#postform1").attr("name"),
                type: 'POST',
                success: function(response) {
                    swal('Güncellendi!', response.message, response.status);
                },
                error: function(response) {
                    swal('Oops...', 'Sanırım bir hata yaptınız :(', 'error');
                }
            });
            e.preventDefault();

        });
        $('#postform2').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#postform2").attr("name"),
                type: 'POST',
                success: function(response) {
                    swal('Güncellendi!', response.message, response.status);
                },
                error: function(response) {
                    swal('Oops...', 'Sanırım bir hata yaptınız :(', 'error');
                }
            });
            e.preventDefault();
        });
    });
    </script>

</body>

</html>
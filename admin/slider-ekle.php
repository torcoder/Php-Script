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

                <?php include 'header.php'?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                            <form name="sliderAdd" id="sliderAdd">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Slider Görsel ve SEO Ekleme</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>Anasayfanızda slider bulunduğu bölümün düzenlemelerini aşağıdan
                                            yapabilirsiniz.
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <div class="card shadow mb-4">
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-dark">Slider - Görsel / SEO
                                                        </h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <p>1920x1080px boyutunda görsel yükleyiniz.</p>
                                                        <div class="mb-0">
                                                            <div class="file-upload-wrapper">
                                                                <input id="ckfinder-input-1" type="text" name="resim"
                                                                    style="width:50%">
                                                                <button id="ckfinder-popup-1" type="button"
                                                                    class="btn btn-warning">Sunucudan Resim
                                                                    Ekle</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p>TR | Görsel Açıklaması (SEO için önerilir!).</p>
                                                                <div class="mb-0">
                                                                    <input class="form-control" type="text"
                                                                        name="baslik"
                                                                        placeholder="Bu alana başlığı yazınız!"
                                                                        aria-label="default input example">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p>EN | Görsel Açıklaması (SEO için önerilir!).</p>
                                                                <div class="mb-0">
                                                                    <input class="form-control" type="text"
                                                                        name="en_baslik"
                                                                        placeholder="Bu alana başlığı yazınız!"
                                                                        aria-label="default input example">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <p>Görsel Sırası.</p>
                                                        <div class="mb-0">
                                                            <textarea class="form-control" name="sira"
                                                                placeholder="Bu alana sayı yazınız!"
                                                                id="exampleFormControlTextarea1" rows="1"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <p>Slider aktif olsun istiyorsanız tik atınız.</p>
                                                        <div class="mb-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="durum" id="flexCheckDefault">
                                                                <label class="form-check-label" for="flexCheckDefault">
                                                                    Aktif mi?
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-dark">Ekle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

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
        $('#sliderAdd').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#sliderAdd").attr("name"),
                type: 'POST',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Eklendi!',
                        text: `${response.message}`,
                    })
                },
                error: function(response) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: `${response.message}`,
                    })
                }
            });
            e.preventDefault();
            document.getElementById("sliderAdd").reset();
        });
    });
    var button1 = document.getElementById('ckfinder-popup-1');
    var button2 = document.getElementById('ckfinder-popup-2');

    button1.onclick = function() {
        selectFileWithCKFinder('ckfinder-input-1');
    };

    function selectFileWithCKFinder(elementId) {
        CKFinder.popup({
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function(finder) {
                finder.on('files:choose', function(evt) {
                    var file = evt.data.files.first();
                    var output = document.getElementById(elementId);
                    output.value = file.getUrl();
                });

                finder.on('file:choose:resizedImage', function(evt) {
                    var output = document.getElementById(elementId);
                    output.value = evt.data.resizedUrl;
                });
            }
        });
    }
    </script>

</body>

</html>
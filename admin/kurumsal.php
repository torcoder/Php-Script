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
$query = $baglanti->prepare("SELECT * FROM kurumsal WHERE id=1");
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
                                    <h6 class="m-0 font-weight-bold text-primary">Kurumsal SEO Ayarlamaları | TR</h6>
                                </div>
                                <div class="card-body">
                                    <p>Düzenleme firmamız tarafından yapılacaktır. Ekstra müdehale etmemeniz önerilir.
                                    </p>
                                </div>
                                <form name="description" id="kurumsalform1">
                                    <div class="card-body">
                                        <p>Description(Max 160 karakter uzunluğunda olmalıdır.)</p>
                                        <div class="mb-0">
                                            <textarea class="form-control" placeholder="Bu alana açıklama yazınız!"
                                                id="exampleFormControlTextarea1" placeholder="Bu alana yazınız!"
                                                name="description" rows="1" maxlength="160"><?php echo $row['description'] ?>
</textarea>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Keywords</p>
                                        <div class="mb-0">
                                            <input class="form-control" type="text" name="keywords"
                                                value="<?php echo $row['keywords'] ?>" placeholder="Bu alana yazınız!"
                                                aria-label="default input example">
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
                                    <h6 class="m-0 font-weight-bold text-primary">Kurumsal SEO Ayarlamaları | EN</h6>
                                </div>
                                <div class="card-body">
                                    <p>Düzenleme firmamız tarafından yapılacaktır. Ekstra müdehale etmemeniz önerilir.
                                    </p>
                                </div>
                                <form name="en_description" id="kurumsalform2">
                                    <div class="card-body">
                                        <p>Description(Max 160 karakter uzunluğunda olmalıdır.)</p>
                                        <div class="mb-0">
                                            <textarea class="form-control" name="en_description"
                                                placeholder="Bu alana açıklama yazınız!"
                                                id="exampleFormControlTextarea1" rows="1" maxlength="160"><?php echo $row['en_description'] ?>
</textarea>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Keywords</p>
                                        <div class="mb-0">
                                            <input class="form-control" type="text" name="en_keywords"
                                                value="<?php echo $row['en_keywords'] ?>"
                                                placeholder="Bu alana yazınız!" aria-label="default input example">
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
                        <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kurumsal Sayfası Düzenleme | TR</h6>
                                </div>
                                <div class="card-body">
                                    <p>Menüde bulunan kurumsal sayfasını aşağıdaki editörden düzenleyebilirsiniz.</p>
                                </div>
                                <form id="kurumsalform3" name="icerik">
                                    <div class="card-body">
                                        <textarea name="icerik" id="editor1" cols="20" rows="10" class="form-control"><?php echo $row['icerik'] ?>
</textarea>
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
                        <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kurumsal Sayfası Düzenleme | EN</h6>
                                </div>
                                <div class="card-body">
                                    <p>Menüde bulunan kurumsal sayfasını aşağıdaki editörden düzenleyebilirsiniz.</p>
                                </div>
                                <form id="kurumsalform4" name="en_icerik">
                                    <div class="card-body">
                                        <textarea name="en_icerik" id="editor2" cols="20" rows="10"
                                            class="form-control"><?php echo $row['en_icerik'] ?>
</textarea>
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
        $('#kurumsalform1').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#kurumsalform1").attr("name"),
                type: 'POST',
                success: function(response) {
                    swal('Güncellendi!', response.message, response.status);
                },
                error: function(response) {
                    swal('Oops...', 'Sanırım bir hata yaptınız :(', 'error');
                }
            });
            e.preventDefault();
            document.getElementById("kurumsalform1").reset();
        });
        $('#kurumsalform2').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#kurumsalform2").attr("name"),
                type: 'POST',
                success: function(response) {
                    swal('Güncellendi!', response.message, response.status);
                },
                error: function(response) {
                    swal('Oops...', 'Sanırım bir hata yaptınız :(', 'error');
                }
            });
            e.preventDefault();
            document.getElementById("kurumsalform2").reset();
        });
        $('#kurumsalform3').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#kurumsalform3").attr("name"),
                type: 'POST',
                success: function(response) {
                    swal('Güncellendi!', response.message, response.status);
                },
                error: function(response) {
                    swal('Oops...', 'Sanırım bir hata yaptınız :(', 'error');
                }
            });
            e.preventDefault();
            document.getElementById("kurumsalform3").reset();
        });
        $('#kurumsalform4').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#kurumsalform4").attr("name"),
                type: 'POST',
                success: function(response) {
                    swal('Güncellendi!', response.message, response.status);
                },
                error: function(response) {
                    swal('Oops...', 'Sanırım bir hata yaptınız :(', 'error');
                }
            });
            e.preventDefault();
            document.getElementById("kurumsalform4").reset();
        });
    });
    ClassicEditor
        .create(document.querySelector('#editor1'), {
            toolbar: ['ckfinder', 'heading', '|', 'bold', 'italic', 'link'],
            ckfinder: {
                openerMethod: 'popup'
            }
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(err => {
            console.error(err.stack);
        });
    ClassicEditor
        .create(document.querySelector('#editor2'), {
            toolbar: ['ckfinder', 'heading', '|', 'bold', 'italic', 'link'],
            ckfinder: {
                openerMethod: 'popup'
            }
        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(err => {
            console.error(err.stack);
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
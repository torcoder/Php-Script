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
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                                    <h6 class="m-0 font-weight-bold text-primary">Ürünler Sayfası SEO Ayarlamaları | TR
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <p>Düzenleme firmamız tarafından yapılacaktır. Ekstra müdehale etmemeniz önerilir.
                                    </p>
                                </div>
                                <form id="postform1" name="urunler_seo">
                                    <div class="card-body">
                                        <p>Description(Max 160 karakter uzunluğunda olmalıdır.)</p>
                                        <div class="mb-0">
                                            <textarea class="form-control" placeholder="Bu alana açıklama yazınız!"
                                                id="exampleFormControlTextarea1" rows="1" name="urunler_desc"
                                                maxlength="160"><?php echo $row['urunler_desc'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Keywords</p>
                                        <div class="mb-0">
                                            <input class="form-control" type="text" placeholder="Bu alana yazınız!"
                                                aria-label="default input example" name="urunler_key"
                                                value="<?php echo $row['urunler_key'] ?>">
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
                                    <h6 class="m-0 font-weight-bold text-primary">Ürünler Sayfası SEO Ayarlamaları | EN
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <p>Düzenleme firmamız tarafından yapılacaktır. Ekstra müdehale etmemeniz önerilir.
                                    </p>
                                </div>
                                <form id="postform2" name="urunler_seo_en">
                                    <div class="card-body">
                                        <p>Description(Max 160 karakter uzunluğunda olmalıdır.)</p>
                                        <div class="mb-0">
                                            <textarea class="form-control" placeholder="Bu alana açıklama yazınız!"
                                                id="exampleFormControlTextarea1" name="urunler_desc_en" rows="1"
                                                maxlength="160"><?php echo $row['urunler_desc_en'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>Keywords</p>
                                        <div class="mb-0">
                                            <input class="form-control" type="text" placeholder="Bu alana yazınız!"
                                                aria-label="default input example" name="urunler_key_en"
                                                value="<?php echo $row['urunler_key_en'] ?>">
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
                            <form name="categoryAdd" id="categoryAdd">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Ürün Kategori Görsel ve SEO Ekleme
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <p>Menüde bulunan ürünlere tıkladıktan sonra açılan bölümün düzenlemelerini
                                            aşağıdan
                                            yapabilirsiniz.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <div class="card shadow mb-4">
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-dark">Ürün Kategori Ekleme
                                                            -
                                                            Görsel / SEO</h6>
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
                                                                        name="resim_seo"
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
                                                                        name="en_resim_seo"
                                                                        placeholder="Bu alana başlığı yazınız!"
                                                                        aria-label="default input example">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p>TR | Ürün Kategori Adı.</p>
                                                                <div class="mb-0">
                                                                    <input class="form-control" type="text" name="name"
                                                                        placeholder="Bu alana başlığı yazınız!"
                                                                        aria-label="default input example">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p>EN | Ürün Kategori Adı.</p>
                                                                <div class="mb-0">
                                                                    <input class="form-control" type="text"
                                                                        name="en_name"
                                                                        placeholder="Bu alana başlığı yazınız!"
                                                                        aria-label="default input example">
                                                                </div>
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
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ürün Kategorileri</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Kategori Resim</th>
                                                    <th>Ürün Kategori | TR</th>
                                                    <th>Ürün Kategori | EN</th>
                                                    <th>Düzenle</th>
                                                    <th>Sil</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
$query = $baglanti->prepare("SELECT * FROM kategoriler");
$query->execute();
$kategoricek = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($kategoricek as $row) {
    ?>
                                                <tr>
                                                    <td><img src="<?php echo $row['resim']; ?>" width="200px" alt="">
                                                    </td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['en_name']; ?></td>
                                                    <td><a href="kategori-duzenle.php?id=<?php echo $row['id']; ?>"
                                                            class="btn btn-info"><i class="fa fa-check"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td><button type="button" id="delete_category"
                                                            data-id="<?php echo $row['id']; ?>"
                                                            class="btn btn-danger"><i class="fa fa-times"
                                                                aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
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
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

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
        $('#categoryAdd').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#categoryAdd").attr("name"),
                type: 'POST',
                success: function(response) {
                    swal('Eklendi!', response.message, response.status);
                },
                error: function(response) {
                    swal('Oops...', 'Sanırım bir hata yaptınız :(', 'error');
                }
            });
            e.preventDefault();
        });
    });

    $(document).ready(function() {
        $(document).on('click', '#delete_category', function(e) {
            var productId = $(this).data('id');
            swal.fire({
                title: 'Emin misin?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Kapat',
                confirmButtonText: 'Evet, Sil!',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                            url: 'islem.php',
                            type: 'POST',
                            data: 'id=' + productId + '&form_name=deleteCategory',
                            dataType: 'json'
                        })
                        .done(function(response) {
                            swal.fire('Silindi!', response.message, response.status);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        })
                        .fail(function() {
                            swal.fire('Oops...', 'Something went wrong with ajax !',
                                'error');
                        });
                }

            })

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
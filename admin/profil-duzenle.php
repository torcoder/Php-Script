<?php
error_reporting(0);
require_once '../config/db.php';

$id = $_REQUEST["id"];
$urunler = $baglanti->prepare("SELECT * FROM profil WHERE id=?");
$urunler->execute(array($id));
$fetch = $urunler->fetch(PDO::FETCH_ASSOC);

$glass = $baglanti->prepare("SELECT * FROM camlar WHERE profil_id=?");
$glass->execute(array($id));
$fetchGlass = $glass->fetch(PDO::FETCH_ASSOC);

$dimension = $baglanti->prepare("SELECT * FROM ebatlar WHERE profil_id=?");
$dimension->execute(array($id));
$fetchDimension = $dimension->fetch(PDO::FETCH_ASSOC);

$color = $baglanti->prepare("SELECT * FROM renkler WHERE profil_id=?");
$color->execute(array($id));
$fetchColor = $color->fetch(PDO::FETCH_ASSOC);

?>

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

                <?php include 'header.php';?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <form name="updateProfile" id="updateProfile">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Profil güncelleme</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>Profillerinizi tek tek güncelleme yapınız.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <p>TR | Profil Adı.</p>
                                                <div class="mb-3">
                                                    <input class="form-control" type="text" name="name"
                                                        value="<?php echo $fetch['name']; ?>"
                                                        placeholder="Bu alana profil adı yazınız!"
                                                        aria-label="default input example">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card-body">
                                                <p>EN | Profil Adı.</p>
                                                <div class="mb-3">
                                                    <input class="form-control" type="text" name="en_name"
                                                        value="<?php echo $fetch['en_name']; ?>"
                                                        placeholder="Bu alana profil adı yazınız!"
                                                        aria-label="default input example">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-dark">Güncelle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php if ($fetchColor['name']): ?>
                            <form name="updateColor" id="updateColor">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Renk güncelleme</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>Profillerinizi seçip tek tek renk güncelleme yapınız.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <p>TR | Renk Adı.</p>
                                                <div class="mb-3">
                                                    <input class="form-control" type="text" name="name"
                                                        value="<?php echo $fetchColor['name']; ?>"
                                                        placeholder="Bu alana renk adı yazınız!"
                                                        aria-label="default input example">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card-body">
                                                <p>EN | Renk Adı.</p>
                                                <div class="mb-3">
                                                    <input class="form-control" type="text" name="en_name"
                                                        value="<?php echo $fetchColor['en_name']; ?>"
                                                        placeholder="Bu alana renk adı yazınız!"
                                                        aria-label="default input example">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-dark">Güncelle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php endif;?>
                            <?php if ($fetchDimension['name']): ?>
                            <form name="updateDimension" id="updateDimension">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Ebat güncelleme</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>Profillerinizi seçip tek tek ebat güncelleme yapınız.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <p>TR | Ürün Ebat.</p>
                                                <div class="mb-3">
                                                    <input class="form-control" type="text"
                                                        placeholder="Bu alana ebat yazınız!" name="name"
                                                        value="<?php echo $fetchDimension['name']; ?>"
                                                        aria-label="default input example">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card-body">
                                                <p>EN | Ürün Ebat.</p>
                                                <div class="mb-3">
                                                    <input class="form-control" type="text" name="en_name"
                                                        value="<?php echo $fetchDimension['en_name']; ?>"
                                                        placeholder="Bu alana ebat yazınız!"
                                                        aria-label="default input example">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-dark">Güncelle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php endif;?>
                            <?php if ($fetchGlass['name']): ?>
                            <form name="updateGlass" id="updateGlass">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Cam Ekleme</h6>
                                    </div>
                                    <div class="card-body">
                                        <p>Profillerinizi seçip tek tek cam adı ekleme yapınız.</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card-body">
                                                <p>TR | Ürün Cam.</p>
                                                <div class="mb-3">
                                                    <input class="form-control" type="text"
                                                        placeholder="Bu alana cam adı yazınız!"
                                                        aria-label="default input example" name="name"
                                                        value="<?php echo $fetchGlass['name']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card-body">
                                                <p>EN | Ürün Cam.</p>
                                                <div class="mb-3">
                                                    <input class="form-control" type="text" name="en_name"
                                                        value="<?php echo $fetchGlass['en_name']; ?>"
                                                        placeholder="Bu alana cam adı yazınız!"
                                                        aria-label="default input example">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <button type="submit" class="btn btn-dark">Güncelle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php endif;?>
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
                                                    <th>ID</th>
                                                    <th>Profil Adı | TR</th>
                                                    <th>Profil Adı | EN</th>
                                                    <th>Düzenle</th>
                                                    <th>Sil</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
$query = $baglanti->prepare("SELECT * FROM profil");
$query->execute();
$kategoricek = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($kategoricek as $row) {
    ?>

                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['en_name']; ?></td>
                                                    <td><a href="profil-duzenle.php?id=<?php echo $row['id']; ?>"
                                                            class="btn btn-info"><i class="fa fa-check"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td><button type="button" id="delete_profile"
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
        $('#updateProfile').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#updateProfile").attr("name"),
                type: 'POST',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Güncellendi!',
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
            setTimeout(() => {
                window.location.reload();
            }, 500);
        });

        $('#updateColor').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#updateColor").attr("name"),
                type: 'POST',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Güncellendi!',
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
            setTimeout(() => {
                window.location.reload();
            }, 500);
        });
        $('#updateDimension').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#updateDimension").attr("name"),
                type: 'POST',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Güncellendi!',
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
            setTimeout(() => {
                window.location.reload();
            }, 500);
        });
        $('#updateGlass').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#updateGlass").attr("name"),
                type: 'POST',
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Güncellendi!',
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
            setTimeout(() => {
                window.location.reload();
            }, 500);
        });
        $(document).on('click', '#delete_profile', function(e) {
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
                            data: 'id=' + productId + '&form_name=deleteProfile',
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
    </script>

</body>

</html>
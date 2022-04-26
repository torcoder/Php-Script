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

                <?php include 'header.php'?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Slider Düzenleme</h6>
                            <!-- <button type="submit" class="btn btn-dark">Sırayı Güncelle</button> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sıra Numarası</th>
                                            <th>Resim</th>
                                            <th>Resim Açıklaması | TR</th>
                                            <th>Resim Açıklaması | EN</th>
                                            <th>Durum</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
$query = $baglanti->prepare("SELECT * FROM slider ORDER BY sira DESC");
$query->execute();
$slidercek = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($slidercek as $row) {
    ?>
                                        <tr class="row1" data-id="">
                                            <td><?php echo $row['sira']; ?></td>
                                            <td><img src="<?php echo $row['resim']; ?>" width="200px" alt=""></td>
                                            <td><?php echo $row['baslik']; ?>
                                            </td>
                                            <td><?php echo $row['en_baslik']; ?>
                                            </td>
                                            <td><?php echo $row['durum'] == 1 ? 'Aktif' : 'Pasif' ?></td>
                                            <td><a href="slider-guncelle.php?id=<?php echo $row['id']; ?>"
                                                    class="btn btn-info"><i class="fa fa-check"
                                                        aria-hidden="true"></i></a></td>
                                            <td><button type="button" id="delete_slider"
                                                    data-id="<?php echo $row['id']; ?>" class="btn btn-danger"><i
                                                        class="fa fa-times" aria-hidden="true"></i></button></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
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
        <script src="vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/datatables-demo.js"></script>

        <script>
        $(document).ready(function() {
            $(document).on('click', '#delete_slider', function(e) {
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
                                data: 'id=' + productId + '&form_name=deleteSlider',
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


        // function SwalDelete(productId) {
        //     swal({
        //         title: 'Silmek istediğinize emin misiniz?',
        //         text: "Sildikten sonra geri alamazsınız!",
        //         type: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Evet, Sil!',
        //     }).then(function() {
        //         $.ajax({
        //             url: 'islem.php',
        //             type: 'POST',
        //             data: 'id=' + productId + '&form_name=deleteSlider',
        //             dataType: 'json',
        //             success: function(response) {
        //                 swal('Silindi!', response.message, response.status);
        //                 setTimeout(() => {
        //                     window.location.reload();
        //                 }, 1000);
        //             },
        //             error: function() {
        //                 swal('Oops...', 'Sanırım bir hata yaptınız :(',
        //                     'error');
        //             }
        //         });

        //     })

        // }
        </script>
</body>

</html>
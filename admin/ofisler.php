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
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include 'sidenav.php' ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include 'header.php' ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Ofis Düzenleme</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sıra No</th>
                                            <th>Ofis Adı | TR</th>
                                            <th>Ofis Adı | EN</th>
                                            <th>Adres</th>
                                            <th>Telefon</th>
                                            <th>Mail</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Siteler Ofis</td>
                                            <td>Siteler Office</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nihil.</td>
                                            <td>555-555-55-55</td>
                                            <td>deneme@dekomaks.com.tr</td>
                                            <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                            <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Sincan Ofis</td>
                                            <td>Sincan Office</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nihil.</td>
                                            <td>555-555-55-55</td>
                                            <td>deneme@dekomaks.com.tr</td>
                                            <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                            <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Keçiören Ofis</td>
                                            <td>Keçiören Office</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nihil.</td>
                                            <td>555-555-55-55</td>
                                            <td>deneme@dekomaks.com.tr</td>
                                            <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                            <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Main Content -->

                <?php include 'footer.php' ?>

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

</body>

</html>
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
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Profil Ekleme</h6>
                                </div>
                                <div class="card-body">
                                    <p>Profillerinizi tek tek ekleme yapınız.</p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>TR | Profil Adı.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana profil adı yazınız!" aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>EN | Profil Adı.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana profil adı yazınız!" aria-label="default input example">
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
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Renk Ekleme</h6>
                                </div>
                                <div class="card-body">
                                    <p>Profillerinizi seçip tek tek renk ekleme yapınız.</p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <div class="col-4">
                                                <p>TR | Ürün Profil.</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-0">
                                                    <select class="custom-select" aria-label="Default select example">
                                                        <option selected>Seçiniz:</option>
                                                        <option value="1">Deneme1</option>
                                                        <option value="2">Deneme2</option>
                                                        <option value="3">Deneme3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <div class="col-4">
                                                <p>EN | Ürün Profil.</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-0">
                                                    <select class="custom-select" aria-label="Default select example">
                                                        <option selected>Seçiniz:</option>
                                                        <option value="1">Deneme1</option>
                                                        <option value="2">Deneme2</option>
                                                        <option value="3">Deneme3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>TR | Renk Adı.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana renk adı yazınız!" aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>EN | Renk Adı.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana renk adı yazınız!" aria-label="default input example">
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
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ebat Ekleme</h6>
                                </div>
                                <div class="card-body">
                                    <p>Profillerinizi seçip tek tek ebat ekleme yapınız.</p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <div class="col-4">
                                                <p>TR | Ürün Profil.</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-0">
                                                    <select class="custom-select" aria-label="Default select example">
                                                        <option selected>Seçiniz:</option>
                                                        <option value="1">Deneme1</option>
                                                        <option value="2">Deneme2</option>
                                                        <option value="3">Deneme3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <div class="col-4">
                                                <p>EN | Ürün Profil.</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-0">
                                                    <select class="custom-select" aria-label="Default select example">
                                                        <option selected>Seçiniz:</option>
                                                        <option value="1">Deneme1</option>
                                                        <option value="2">Deneme2</option>
                                                        <option value="3">Deneme3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>TR | Ürün Ebat.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana ebat yazınız!" aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>EN | Ürün Ebat.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana ebat yazınız!" aria-label="default input example">
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
                                            <div class="col-4">
                                                <p>TR | Ürün Profil.</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-0">
                                                    <select class="custom-select" aria-label="Default select example">
                                                        <option selected>Seçiniz:</option>
                                                        <option value="1">Deneme1</option>
                                                        <option value="2">Deneme2</option>
                                                        <option value="3">Deneme3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <div class="col-4">
                                                <p>EN | Ürün Profil.</p>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-0">
                                                    <select class="custom-select" aria-label="Default select example">
                                                        <option selected>Seçiniz:</option>
                                                        <option value="1">Deneme1</option>
                                                        <option value="2">Deneme2</option>
                                                        <option value="3">Deneme3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>TR | Ürün Cam.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana cam adı yazınız!" aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>EN | Ürün Cam.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana cam adı yazınız!" aria-label="default input example">
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
                                                    <th>Sıra No</th>
                                                    <th>Profil Adı | TR</th>
                                                    <th>Profil Adı | EN</th>
                                                    <th>Renk Adı | TR</th>
                                                    <th>Renk Adı | EN</th>
                                                    <th>Ürün Ebat | TR</th>
                                                    <th>Ürün Ebat | EN</th>
                                                    <th>Cam Adı | TR</th>
                                                    <th>Cam Adı| EN</th>
                                                    <th>Düzenle</th>
                                                    <th>Sil</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>deneme</td>
                                                    <td>deneme</td>
                                                    <td>Parlak</td>
                                                    <td>Parlak</td>
                                                    <td>20cm</td>
                                                    <td>20cm</td>
                                                    <td>Deneme</td>
                                                    <td>Deneme</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>deneme</td>
                                                    <td>deneme</td>
                                                    <td>Parlak</td>
                                                    <td>Parlak</td>
                                                    <td>20cm</td>
                                                    <td>20cm</td>
                                                    <td>Deneme</td>
                                                    <td>Deneme</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>deneme</td>
                                                    <td>deneme</td>
                                                    <td>Parlak</td>
                                                    <td>Parlak</td>
                                                    <td>20cm</td>
                                                    <td>20cm</td>
                                                    <td>Deneme</td>
                                                    <td>Deneme</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
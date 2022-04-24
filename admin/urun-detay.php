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
                        <div class="col-lg-6 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">İçerik Detay Sayfası SEO Ayarlamaları | TR</h6>
                                </div>
                                <div class="card-body">
                                    <p>Düzenleme firmamız tarafından yapılacaktır. Ekstra müdehale etmemeniz önerilir.</p>
                                </div>
                                <div class="card-body">
                                    <p>Description(Max 160 karakter uzunluğunda olmalıdır.)</p>
                                    <div class="mb-0">
                                        <textarea class="form-control" placeholder="Bu alana açıklama yazınız!" id="exampleFormControlTextarea1" rows="1" maxlength="160"></textarea>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Keywords</p>
                                    <div class="mb-0">
                                        <input class="form-control" type="text" placeholder="Bu alana yazınız!" aria-label="default input example">
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
                        <div class="col-lg-6 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">İçerik Detay Sayfası SEO Ayarlamaları | EN</h6>
                                </div>
                                <div class="card-body">
                                    <p>Düzenleme firmamız tarafından yapılacaktır. Ekstra müdehale etmemeniz önerilir.</p>
                                </div>
                                <div class="card-body">
                                    <p>Description(Max 160 karakter uzunluğunda olmalıdır.)</p>
                                    <div class="mb-0">
                                        <textarea class="form-control" placeholder="Bu alana açıklama yazınız!" id="exampleFormControlTextarea1" rows="1" maxlength="160"></textarea>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Keywords</p>
                                    <div class="mb-0">
                                        <input class="form-control" type="text" placeholder="Bu alana yazınız!" aria-label="default input example">
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
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">İçerik Detay Sayfası Görsel ve SEO Ekleme</h6>
                                </div>
                                <div class="card-body">
                                    <p>Ürünlerin detay sayfasına tıklandığında açılan bölümün düzenlemelerini aşağıdan yapabilirsiniz.</p>
                                </div>
                                <div class="card-body">
                                    <p>1920x1080px boyutunda görsel yükleyiniz.</p>
                                    <div class="mb-0">
                                        <div class="file-upload-wrapper">
                                            <input class="form-control" type="file" id="formFile">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>TR | Görsel Açıklaması (SEO için önerilir!).</p>
                                            <div class="mb-0">
                                                <input class="form-control" type="text" placeholder="Bu alana başlığı yazınız!" aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>EN | Görsel Açıklaması (SEO için önerilir!).</p>
                                            <div class="mb-0">
                                                <input class="form-control" type="text" placeholder="Bu alana başlığı yazınız!" aria-label="default input example">
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
                                    <h6 class="m-0 font-weight-bold text-primary">İçerik Detay Sayfası Açıklamalar</h6>
                                </div>
                                <div class="card-body">
                                    <p>Ürünlerin detay sayfasına tıklandığında açılan bölümün düzenlemelerini aşağıdan yapabilirsiniz.</p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <div class="col-4">
                                                <p>TR | Ürün Kategori.</p>
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
                                                <p>EN | Ürün Kategori.</p>
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
                                            <div class="col-4">
                                                <p>TR | Ürün Model No.</p>
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
                                                <p>EN | Ürün Model No.</p>
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
                                            <p>TR | Ürün Renk.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana ürün rengini yazınız!" aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>EN | Ürün Renk.</p>
                                            <div class="mb-3">
                                                <input class="form-control" type="text" placeholder="Bu alana ürün rengini yazınız!" aria-label="default input example">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>TR | Ürün Açıklama.</p>
                                            <div class="mb-3">
                                                <textarea class="form-control" placeholder="Bu alana açıklama yazınız!" id="exampleFormControlTextarea1" rows="1"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <p>EN | Ürün Açıklama.</p>
                                            <div class="mb-3">
                                                <textarea class="form-control" placeholder="Bu alana açıklama yazınız!" id="exampleFormControlTextarea1" rows="1"></textarea>
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
                                                    <th>Ürün Kategori | TR</th>
                                                    <th>Ürün Kategori | EN</th>
                                                    <th>İçerik Detay Resim</th>
                                                    <th>İçerik Model No | TR</th>
                                                    <th>İçerik Model No | EN</th>
                                                    <th>İçerik Renk | TR</th>
                                                    <th>İçerik Renk | EN</th>
                                                    <th>İçerik Detay Açıklama | TR</th>
                                                    <th>İçerik Detay Açıklama | EN</th>
                                                    <th>Düzenle</th>
                                                    <th>Sil</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
                                                    <td><button type="button" class="btn btn-info"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                                    <td><button type="button" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Servisler</td>
                                                    <td>Services</td>
                                                    <td>Resim</td>
                                                    <td>DM - 2221</td>
                                                    <td>DM - 2221</td>
                                                    <td>Parlak</td>
                                                    <td>Mat</td>
                                                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, doloremque!</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, dignissimos?</td>
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
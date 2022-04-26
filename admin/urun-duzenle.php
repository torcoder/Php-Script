<?php
error_reporting(0);
require_once '../config/db.php';
include 'class/seourl.php';

$id = $_REQUEST["id"];
$urunler = $baglanti->prepare("SELECT * FROM urunler WHERE id=?");
$urunler->execute(array($id));
$row = $urunler->fetch(PDO::FETCH_ASSOC);
print_r($id);
$error_message = '';
$success_message = '';
if (isset($_POST['submit'])) {
    $validation = 1;
    if (empty($_POST['name'])) {
        $validation = 0;
        $error_message .= 'Lütfen ürün adını boş bırakmayın!';
    }
    if ($validation == 1) {
        $statement = $baglanti->prepare("SHOW TABLE STATUS LIKE 'urunler'");
        $statement->execute();
        $result = $statement->fetchAll();
        foreach ($result as $row) {
            $ai_id = $row[10];
        }

        if (isset($_FILES['photo']["name"]) && isset($_FILES['photo']["tmp_name"])) {
            $photo = array();
            $photo = $_FILES['photo']["name"];
            $photo = array_values(array_filter($photo));

            $photo_temp = array();
            $photo_temp = $_FILES['photo']["tmp_name"];
            $photo_temp = array_values(array_filter($photo_temp));

            $statement = $baglanti->prepare("SHOW TABLE STATUS LIKE 'resimler'");
            $statement->execute();
            $result = $statement->fetchAll();
            foreach ($result as $row) {
                $next_id1 = $row[10];
            }
            $z = $next_id1;

            $m = 0;
            for ($i = 0; $i < count($photo); $i++) {
                $my_ext1 = pathinfo($photo[$i], PATHINFO_EXTENSION);
                if ($my_ext1 == 'jpg' || $my_ext1 == 'png' || $my_ext1 == 'jpeg' || $my_ext1 == 'gif' || $my_ext1 == 'PNG' || $my_ext1 == 'JPG' || $my_ext1 == 'JPEG') {
                    $final_name1[$m] = $z . '.' . $my_ext1;
                    move_uploaded_file($photo_temp[$i], "../assets/uploads/product_photos/" . $final_name1[$m]);
                    $m++;
                    $z++;
                }
            }

            if (isset($final_name1)) {
                for ($i = 0; $i < count($final_name1); $i++) {
                    $statement = $baglanti->prepare("INSERT INTO resimler (photo,urun_id) VALUES (?,?)");
                    $statement->execute(array($final_name1[$i], $ai_id));
                }
            }
        }

        $seo = SeoLink($_POST["name"]);
        $en_seo = SeoLink($_POST["en_name"]);

        $statement = $baglanti->prepare("UPDATE urunler SET
										name=?,
										en_name=?,
										resim=?,
										resim_seo=?,
										en_resim_seo=?,
                                        category_id=?,
                                        model=?,
                                        color=?,
                                        en_color=?,
										description=?,
										en_description=?,
										seo=?,
                                        en_seo=?
									 WHERE id=?");
        $statement->execute(array(
            $_POST['name'],
            $_POST['en_name'],
            $_POST['resim'],
            $_POST['resim_seo'],
            $_POST['en_resim_seo'],
            $_POST['category_id'],
            $_POST['model'],
            $_POST['color'],
            $_POST['en_color'],
            $_POST['description'],
            $_POST['en_description'],
            $seo,
            $en_seo,
            $id,
        ));

        $success_message = 'Ürün başarıyla güncellendi.';
        header("Refresh:1");
    }
}
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

                <?php include 'header.php'?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php if ($error_message): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error_message; ?>
                    </div>
                    <?php endif;?>
                    <?php if ($success_message): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $success_message; ?>
                    </div>
                    <?php endif;?>
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Approach -->
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Ürün İçerik Görsel ve SEO Ekleme
                                        </h6>
                                    </div>
                                    <div class="card-body">
                                        <p>Ürünlere tıklandığında açılan bölümün düzenlemelerini aşağıdan
                                            yapabilirsiniz.
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <div class="card shadow mb-4">
                                                    <div class="card-header py-3">
                                                        <h6 class="m-0 font-weight-bold text-dark">Ürün Ekleme -
                                                            Görsel / SEO</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <p>1920x1080px boyutunda görsel yükleyiniz.(Ana Görsel)</p>
                                                        <div class="mb-0">
                                                            <div class="file-upload-wrapper">
                                                                <input id="ckfinder-input-1" type="text" name="resim"
                                                                    value="<?php echo $row['resim']; ?>"
                                                                    style="width:50%">
                                                                <button id="ckfinder-popup-1" type="button"
                                                                    class="btn btn-warning">Sunucudan Resim
                                                                    Ekle</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <p>1920x1080px boyutunda görsel yükleyiniz.(Ürün Detay
                                                            Görselleri)
                                                        </p>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-0">
                                                                    <table id="ProductTable">
                                                                        <tbody>
                                                                            <?php
$statement = $baglanti->prepare("SELECT * FROM resimler WHERE urun_id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <img src="../assets/uploads/product_photos/<?php echo $row['name']; ?>"
                                                                                        alt=""
                                                                                        style="width:150px;margin-bottom:5px;">
                                                                                </td>
                                                                                <td>
                                                                                <td style="width:28px;">
                                                                                    <a onclick="return confirmDelete();"
                                                                                        href="product-other-photo-delete.php?id=<?php echo $row['id']; ?>&id1=<?php echo $_REQUEST['id']; ?>"
                                                                                        class="btn btn-danger btn-xs">X</a>
                                                                                </td>
                                                                            </tr>
                                                                            <?php }?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="action">
                                                                    <input type="button" id="btnAddNew"
                                                                        value="Yeni Resim"
                                                                        style="margin-top: 5px;margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;"
                                                                        class="btn btn-warning btn-xs">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="">TR Ürün Adı</label>
                                                                <input class="form-control" type="text" name="name"
                                                                    value="<?php echo $row['name']; ?>">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="">EN Ürün Adı</label>
                                                                <input class="form-control" type="text" name="en_name"
                                                                    value="<?php echo $row['en_name']; ?>">
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
                                                                        value="<?php echo $row['resim_seo']; ?>"
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
                                                                        value="<?php echo $row['en_resim_seo']; ?>"
                                                                        placeholder="Bu alana başlığı yazınız!"
                                                                        aria-label="default input example">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <div class="col-4">
                                                                    <p>Ürün Kategori.</p>
                                                                </div>
                                                                <div class="col-8">
                                                                    <div class="mb-0">
                                                                        <select class="custom-select" name="category_id"
                                                                            aria-label="Default select example">
                                                                            <option value="">Seçiniz</option>
                                                                            <?php
$statement = $baglanti->prepare("SELECT * FROM kategoriler");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $rows) {
    ?>
                                                                            <option value="<?php echo $rows["id"]; ?>"
                                                                                <?php echo $rows["id"] == $row['category_id'] ? 'selected' : "" ?>>
                                                                                <?php echo $rows['name']; ?>
                                                                            </option>
                                                                            <?php
}
?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p>TR | Ürün Model No.</p>
                                                                <div class="mb-0">
                                                                    <input class="form-control" type="text" name="model"
                                                                        value="<?php echo $row['model']; ?>"
                                                                        placeholder="Bu alana başlığı yazınız!"
                                                                        aria-label="default input example">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p>TR | Ürün Renk.</p>
                                                                <div class="mb-3">
                                                                    <input class="form-control" type="text" name="color"
                                                                        value="<?php echo $row['color']; ?>"
                                                                        placeholder="Bu alana başlığı yazınız!"
                                                                        aria-label="default input example">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p>EN | Ürün Renk.</p>
                                                                <div class="mb-3">
                                                                    <input class="form-control" type="text"
                                                                        value="<?php echo $row['en_color']; ?>"
                                                                        name="en_color"
                                                                        placeholder="Bu alana başlığı yazınız!"
                                                                        aria-label="default input example">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p>TR | Ürün Açıklama.</p>
                                                                <div class="mb-3">
                                                                    <textarea class="form-control" name="description"
                                                                        placeholder="Bu alana açıklama yazınız!"
                                                                        id="exampleFormControlTextarea1"
                                                                        rows="1"><?php echo $row['description']; ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card-body">
                                                                <p>EN | Ürün Açıklama.</p>
                                                                <div class="mb-3">
                                                                    <textarea class="form-control" name="en_description"
                                                                        placeholder="Bu alana açıklama yazınız!"
                                                                        id="exampleFormControlTextarea1"
                                                                        rows="1"><?php echo $row['en_description']; ?></textarea>
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
                                                <button type="submit" name="submit"
                                                    class="btn btn-dark">Güncelle</button>
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
                                                    <th>ID</th>
                                                    <th>Ürün Adı | TR</th>
                                                    <th>İçerik Resim</th>
                                                    <th>İçerik Model No | TR</th>
                                                    <th>Düzenle</th>
                                                    <th>Sil</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
$query = $baglanti->prepare("SELECT * FROM urunler");
$query->execute();
$kategoricek = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($kategoricek as $row) {
    ?>

                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['resim']; ?></td>
                                                    <td><?php echo $row['model']; ?></td>
                                                    <td><a href="urun-duzenle.php?id=<?php echo $row['id']; ?>"
                                                            class="btn btn-info"><i class="fa fa-check"
                                                                aria-hidden="true"></i></a>
                                                    </td>
                                                    <td><button type="button" id="delete_product"
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

    $(document).ready(function() {
        $('#categoryUpdate').on('submit', function(e) {
            $.ajax({
                url: 'islem.php',
                data: $(this).serialize() + '&form_name=' + $("#categoryUpdate").attr("name"),
                type: 'POST',
                success: function(response) {
                    swal('Güncellendi!', response.message, response.status);
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                },
                error: function(response) {
                    swal('Oops...', 'Sanırım bir hata yaptınız :(', 'error');
                }
            });
            e.preventDefault();

        });
    });

    function confirmDelete() {
        return confirm("Bu resmi silmek istediğinize emin misiniz?");
    }
    </script>
</body>

</html>
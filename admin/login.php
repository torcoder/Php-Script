<?php include '../config/db.php';
ob_start();
session_start();
print_r(md5(123456));
print_r($_SESSION["username"]);
if (isset($_POST["giris"])) {

    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim(md5($_POST["password"])));

    if (!$username || !$password) {
        header("Location: login.php?giris=bos");
    } else {
        $query = $baglanti->prepare("SELECT * FROM `admin` WHERE username=? AND password=?");
        $query->execute(array($username, $password));
        $admin_giris = $query->fetch(PDO::FETCH_ASSOC);

        if ($admin_giris) {
            $_SESSION["login"] = true;
            $_SESSION["username"] = $admin_giris["username"];
            $_SESSION["id"] = $admin_giris["id"];

            header("location:index.php");
        } else {
            header("location:login.php?giris=no");
        }
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

    <title>Dekomaks | Admin Giriş</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="brand/brand.png" class="img-fluid mt-5 pt-5 pl-5 ml-5" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Dekomaks, Hoşgeldiniz!</h1>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username"
                                                placeholder="Kullanıcı adı...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" id="exampleInputPassword" placeholder="Şifre">
                                        </div>
                                        <button class="btn btn-primary" name="giris" type="submit">giriş yap</button>
                                        <hr>

                                        <?php if (@$_GET["giris"] == "no") {?>
                                        <div class="col-xs-14">
                                            <a class="btn btn-block bg-red waves-effect">Giriş Bilgileriniz Hatalı !</a>
                                        </div>
                                        <?php } elseif (@$_GET["giris"] == "bos") {?>
                                        <div class="col-xs-14">
                                            <a class="btn btn-block bg-orange waves-effect">Lütfen Boş Alan Bırakmayınız
                                                !</a>
                                        </div>
                                        <?php }?>
                                    </form>
                                    <hr>
                                    <div class="text-center small">
                                        Yazılım ve Tasarım | <a href="https://www.bullviotech.com">Bullvio Teknoloji ve
                                            Yazılım</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
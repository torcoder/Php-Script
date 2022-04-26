<?php
session_start();
include '../config/db.php';
include 'class/seourl.php';
include "kontrol.php";
header('Content-type: application/json; charset=UTF-8');
$response = array();
$seo = "";
extract($_POST);
if (isset($_POST["ayarlar"])) {

    $id = $_GET["id"];

    if (!$site_title || !$site_url || !$site_desc || !$site_keyw || !$site_telefon || !$site_mail || !$site_adres) {
        header("Location: site-ayarlari.php?siteguncelle=bos");
    } else {
        $query = $baglanti->prepare("UPDATE `ayarlar` SET site_title=?, site_url=?, site_desc=?, site_keyw=?, site_telefon=?, site_mail=?, site_adres=?, sm_facebook=?, sm_instagram=? WHERE id=?");
        $update = $query->execute(array($site_title, $site_url, $site_desc, $site_keyw, $site_telefon, $site_mail, $site_adres, $sm_facebook, $sm_instagram, $id));

        if ($update) {
            header("Location: site-ayarlari.php?siteguncelle=yes");
        } else {
            header("Location: site-ayarlari.php?siteguncelle=no");
        }
    }
}

//Hakkımızda Update

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'description')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `kurumsal` SET description=?, keywords=? WHERE id=?");
    $update = $query->execute(array($description, $keywords, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'en_description')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `kurumsal` SET en_description=?, en_keywords=? WHERE id=?");
    $update = $query->execute(array($en_description, $en_keywords, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';

    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);

}

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'icerik')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `kurumsal` SET icerik=? WHERE id=?");
    $update = $query->execute(array($icerik, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';

    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);

}

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'en_icerik')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `kurumsal` SET en_icerik=? WHERE id=?");
    $update = $query->execute(array($en_icerik, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';

    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);

}

//Seo İşlemleri
extract($_POST);

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'anasayfa_seo')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `seo` SET anasayfa_desc=?, anasayfa_key=? WHERE id=?");
    $update = $query->execute(array($anasayfa_desc, $anasayfa_key, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'anasayfa_seo_en')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `seo` SET anasayfa_desc_en=?, anasayfa_key_en=? WHERE id=?");
    $update = $query->execute(array($anasayfa_desc_en, $anasayfa_key_en, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'urunler_seo')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `seo` SET urunler_desc=?, urunler_key=? WHERE id=?");
    $update = $query->execute(array($urunler_desc, $urunler_key, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'urunler_seo_en')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `seo` SET urunler_desc_en=?, urunler_key_en=? WHERE id=?");
    $update = $query->execute(array($urunler_desc_en, $urunler_key_en, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'galeri_seo')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `seo` SET galeri_desc=?, galeri_key=? WHERE id=?");
    $update = $query->execute(array($galeri_desc, $galeri_key, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'galeri_seo_en')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `seo` SET galeri_desc_en=?, galeri_key_en=? WHERE id=?");
    $update = $query->execute(array($galeri_desc_en, $galeri_key_en, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'iletisim_seo')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `seo` SET iletisim_desc=?, iletisim_key=? WHERE id=?");
    $update = $query->execute(array($iletisim_desc, $iletisim_key, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'iletisim_seo_en')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `seo` SET iletisim_desc_en=?, iletisim_key_en=? WHERE id=?");
    $update = $query->execute(array($iletisim_desc_en, $iletisim_key_en, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Slider Ekle
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'sliderAdd')) {
    $durum = 0;
    if (isset($_POST['durum'])) {
        $durum = 1;
    }
    $sira;
    if (isset($_POST['sira'])) {
        $sira = intval($_POST['sira']) + 1;
    }
    $query = $baglanti->prepare("INSERT INTO slider SET resim=?, baslik=?, en_baslik=?, durum=?, sira=?");
    $insert = $query->execute(array($resim, $baslik, $en_baslik, $durum, $sira));
    if ($insert) {
        $response['status'] = 'success';
        $response['message'] = 'Ekleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
// Slider Güncelle

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'sliderUpdate')) {
    $durum = 0;
    if (isset($_POST['durum'])) {
        $durum = 1;
    }
    $sira;
    if (isset($_POST['sira'])) {
        $sira = intval($_POST['sira']) + 1;
    }
    $query = $baglanti->prepare("UPDATE slider SET resim=?, baslik=?, en_baslik=?, durum=?, sira=? WHERE id=?");
    $update = $query->execute(array($resim, $baslik, $en_baslik, $durum, $sira, $id));
    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
// Slider Sil

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'deleteSlider')) {
    $id = intval($_POST['id']);
    $query = $baglanti->prepare("DELETE FROM slider WHERE id=?");
    $delete = $query->execute(array($id));

    if ($delete) {
        $response['status'] = 'success';
        $response['message'] = 'Slider başarıyla Silindi ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Bir hata oluştu ...';
    }
    echo json_encode($response);
}

// Tanıtım Sayfası Güncelleme

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'tanitimUpdate')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `tanitim` SET baslik=?, aciklama=?, hizmet_1_baslik=?, hizmet_2_baslik=?, hizmet_3_baslik=?, hizmet_1_text=?, hizmet_2_text=?, hizmet_3_text=?, en_baslik=?, en_aciklama=?, en_hizmet_1_baslik=?, en_hizmet_2_baslik=?, en_hizmet_3_baslik=?, en_hizmet_1_text=?, en_hizmet_2_text=?, en_hizmet_3_text=?, resim=?, seo=?, en_seo=? WHERE id=?");
    $update = $query->execute(array($baslik, $aciklama, $hizmet_1_baslik, $hizmet_2_baslik, $hizmet_3_baslik, $hizmet_1_text, $hizmet_2_text, $hizmet_3_text, $en_baslik, $en_aciklama, $en_hizmet_1_baslik, $en_hizmet_2_baslik, $en_hizmet_3_baslik, $en_hizmet_1_text, $en_hizmet_2_text, $en_hizmet_3_text, $resim, $seo, $en_seo, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Katalog Sayfası Güncelleme

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'katalogUpdate')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `katalog` SET resim=?, seo=?, en_seo=?, baslik=?, aciklama=?, en_baslik=?, en_aciklama=? WHERE id=?");
    $update = $query->execute(array($resim, $seo, $en_seo, $baslik, $aciklama, $en_baslik, $en_aciklama, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Kategori Ekleme

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'categoryAdd')) {
    $seo = SeoLink($_POST["name"]);
    $en_seo = SeoLink($_POST["en_name"]);
    $query = $baglanti->prepare("INSERT INTO kategoriler SET resim=?, resim_seo=?, en_resim_seo=?, seo=?, en_seo=?, name=?, en_name=?");
    $insert = $query->execute(array($resim, $resim_seo, $en_resim_seo, $seo, $en_seo, $name, $en_name));
    if ($insert) {
        $response['status'] = 'success';
        $response['message'] = 'Ekleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
// Kategori Güncelle
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'categoryUpdate')) {
    $seo = $name;
    $en_seo = $en_name;
    $seo = SeoLink($_POST["name"]);
    $en_seo = SeoLink($_POST["en_name"]);
    $id = $_POST['id'];
    $query = $baglanti->prepare("UPDATE `kategoriler` SET resim=?, resim_seo=?, en_resim_seo=?, seo=?, en_seo=?, name=?, en_name=? WHERE id=?");
    $update = $query->execute(array($resim, $resim_seo, $en_resim_seo, $seo, $en_seo, $name, $en_name, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
// Kategori Sil

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'deleteCategory')) {
    $id = $_POST['id'];
    $statement = $baglanti->prepare("SELECT * FROM urunler WHERE category_id=?");
    $statement->execute(array($id));
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $p_ids[] = $row['id'];
    }

    for ($i = 0; $i < count($p_ids); $i++) {
        // Getting other photo ID to unlink from folder
        $statement = $baglanti->prepare("SELECT * FROM resimler WHERE urun_id=?");
        $statement->execute(array($p_ids[$i]));
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $photo = $row['name'];
            unlink('../assets/uploads/product_photos/' . $photo);
        }

        $statement = $baglanti->prepare("DELETE FROM urunler WHERE id=?");
        $statement->execute(array($p_ids[$i]));

        // Delete from tbl_product_photo
        $statement = $baglanti->prepare("DELETE FROM resimler WHERE urun_id=?");
        $statement->execute(array($p_ids[$i]));
    }

    $query = $baglanti->prepare("DELETE FROM kategoriler WHERE id=?");
    $delete = $query->execute(array($id));

    if ($delete) {
        $response['status'] = 'success';
        $response['message'] = 'Kategori başarıyla Silindi ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Bir hata oluştu ...';
    }
    echo json_encode($response);
}

// Ürün Sil

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'deleteProduct')) {
    $id = intval($_POST['id']);
    $query = $baglanti->prepare("DELETE FROM urunler WHERE id=?");
    $delete = $query->execute(array($id));

    if ($delete) {
        $response['status'] = 'success';
        $response['message'] = 'Kategori başarıyla Silindi ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Bir hata oluştu ...';
    }
    echo json_encode($response);
}

// Profil Ekleme

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'addProfile')) {
    $query = $baglanti->prepare("INSERT INTO profil SET name=?, en_name=?");
    $insert = $query->execute(array($name, $en_name));

    if ($insert) {
        $response['status'] = 'success';
        $response['message'] = 'Ekleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
// Renk Ekleme
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'addColor')) {
    $query = $baglanti->prepare("INSERT INTO renkler SET name=?, en_name=?, profil_id=?");
    $insert = $query->execute(array($name, $en_name, $profil_id));

    if ($insert) {
        $response['status'] = 'success';
        $response['message'] = 'Ekleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Renk Güncelle
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'updateColor')) {
    $id = $_POST['id'];
    $query = $baglanti->prepare("UPDATE `renkler` SET name=?, en_name=? WHERE profil_id=?");
    $update = $query->execute(array($name, $en_name, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Ebat Ekleme

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'addDimension')) {
    $query = $baglanti->prepare("INSERT INTO ebatlar SET name=?, en_name=?, profil_id=?");
    $insert = $query->execute(array($name, $en_name, $profil_id));

    if ($insert) {
        $response['status'] = 'success';
        $response['message'] = 'Ekleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Ebat Güncelle
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'updateDimension')) {
    $id = $_POST['id'];
    $query = $baglanti->prepare("UPDATE `ebatlar` SET name=?, en_name=? WHERE profil_id=?");
    $update = $query->execute(array($name, $en_name, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Cam Ekleme

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'addGlass')) {
    $query = $baglanti->prepare("INSERT INTO camlar SET name=?, en_name=?, profil_id=?");
    $insert = $query->execute(array($name, $en_name, $profil_id));

    if ($insert) {
        $response['status'] = 'success';
        $response['message'] = 'Ekleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Cam Güncelle
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'updateGlass')) {
    $id = $_POST['id'];
    $query = $baglanti->prepare("UPDATE `camlar` SET name=?, en_name=? WHERE profil_id=?");
    $update = $query->execute(array($name, $en_name, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Profil Sil

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'deleteProfile')) {
    $id = intval($_POST['id']);
    $query = $baglanti->prepare("DELETE FROM profil WHERE id=?");
    $delete = $query->execute(array($id));

    if ($delete) {
        $response['status'] = 'success';
        $response['message'] = 'Profil başarıyla Silindi ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Bir hata oluştu ...';
    }
    echo json_encode($response);
}

// Profil Güncelle
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'updateProfile')) {
    $id = $_POST['id'];
    $query = $baglanti->prepare("UPDATE `profil` SET name=?, en_name=? WHERE id=?");
    $update = $query->execute(array($name, $en_name, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Ofis Ekleme

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'addOffice')) {
    $query = $baglanti->prepare("INSERT INTO ofis SET ofis=?, en_ofis=?, adres=?, telefon=?, email=?");
    $insert = $query->execute(array($ofis, $en_ofis, $adres, $telefon, $email));

    if ($insert) {
        $response['status'] = 'success';
        $response['message'] = 'Ekleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Ofis Güncelle
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'updateOffice')) {
    $id = $_POST['id'];
    $query = $baglanti->prepare("UPDATE `ofis` SET ofis=?, en_ofis=?, adres=?, telefon=?, email=? WHERE id=?");
    $update = $query->execute(array($ofis, $en_ofis, $adres, $telefon, $email, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Google Map Güncelle
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'updateMap')) {
    $id = 1;
    $query = $baglanti->prepare("UPDATE `map` SET name=? WHERE id=?");
    $update = $query->execute(array($name, $id));

    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}

// Galeri Ekle
if (isset($_POST['form_name']) & ($_POST['form_name'] == 'galleryAdd')) {
    $durum = 0;
    if (isset($_POST['durum'])) {
        $durum = 1;
    }
    $sira;
    if (isset($_POST['sira'])) {
        $sira = intval($_POST['sira']) + 1;
    }
    $query = $baglanti->prepare("INSERT INTO galeri SET resim=?, seo=?, en_seo=?, durum=?, sira=?");
    $insert = $query->execute(array($resim, $seo, $en_seo, $durum, $sira));
    if ($insert) {
        $response['status'] = 'success';
        $response['message'] = 'Ekleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
// Galeri Güncelle

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'galleryUpdate')) {
    $durum = 0;
    if (isset($_POST['durum'])) {
        $durum = 1;
    }
    $sira;
    if (isset($_POST['sira'])) {
        $sira = intval($_POST['sira']) + 1;
    }
    $query = $baglanti->prepare("UPDATE galeri SET resim=?, seo=?, en_seo=?, durum=?, sira=? WHERE id=?");
    $update = $query->execute(array($resim, $seo, $en_seo, $durum, $sira, $id));
    if ($update) {
        $response['status'] = 'success';
        $response['message'] = 'Güncelleme İşleminiz Başarılı ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Güncelleme İşleminizde Hata Oluştu!';
    }
    echo json_encode($response);
}
// Galeri Sil

if (isset($_POST['form_name']) & ($_POST['form_name'] == 'deleteGallery')) {
    $id = intval($_POST['id']);
    $query = $baglanti->prepare("DELETE FROM galeri WHERE id=?");
    $delete = $query->execute(array($id));

    if ($delete) {
        $response['status'] = 'success';
        $response['message'] = 'Galeri başarıyla Silindi ...';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Bir hata oluştu ...';
    }
    echo json_encode($response);
}

// Giriş İşlemi

// // Admin Bilgi Güncelleme

// extract($_POST);

// if (isset($admin_guncelle)) {

//     $admin_id = $_GET["id"];
//     $eski_sifre = md5($_POST["eski_sifre"]);
//     $yeni_sifre = md5($_POST["yeni_sifre"]);
//     $kullanicisor = $baglanti->prepare("SELECT * FROM admin WHERE admin_sifre=:admin_sifre");
//     $kullanicisor->execute(array('admin_sifre' => $eski_sifre));

//     if (!$admin_kadi || !$yeni_sifre) {
//         header("location: hizmet_duzenle.php?duzenle=bos");
//     } else {
//         $adminguncelle = $baglanti->prepare("UPDATE admin SET admin_kadi=?, admin_sifre=? WHERE id=?");

//         $adminupdate = $adminguncelle->execute(array($admin_kadi, $yeni_sifre, $admin_id));

//         if ($adminupdate) {
//             header("Location: admin_duzenle.php?update-up=yes");
//         } else {
//             header("Location: admin_duzenle.php?update-up=no");
//         }
//     }
// }

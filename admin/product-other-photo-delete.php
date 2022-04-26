<?php require_once 'header.php';?>

<?php
if (!isset($_REQUEST['id']) || !isset($_REQUEST['id1'])) {
    header('location: logout.php');
    exit;
} else {
    // Check the id is valid or not
    $statement = $baglanti->prepare("SELECT * FROM resimler WHERE id=?");
    $statement->execute(array($_REQUEST['id']));
    $total = $statement->rowCount();
    if ($total == 0) {
        header('location: logout.php');
        exit;
    }
}
?>

<?php

// Getting photo ID to unlink from folder
$statement = $baglanti->prepare("SELECT * FROM resimler WHERE id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    $photo = $row['name'];
}

// Unlink the photo
if ($photo != '') {
    unlink('../assets/uploads/product_photos/' . $photo);
}

// Delete from tbl_testimonial
$statement = $baglanti->prepare("DELETE FROM resimler WHERE id=?");
$statement->execute(array($_REQUEST['id']));

header('location: urun-duzenle.php?id=' . $_REQUEST['id1']);
?>
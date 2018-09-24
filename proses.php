<?php
    session_start();

    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    $dir_foto = "photos/";
    $target_foto = $dir_foto . $nama_foto;

    if (!move_uploaded_file($tmp_foto, $target_foto))
        die("Foto gagal di upload..!!");
        
    $_SESSION['hobi'] = $_POST['hobi'];
    $_SESSION['foto'] = $target_foto;


    $_SESSION['data'] = array();

    $newisi = array( "Hobi" => $_POST['hobi'], "Foto" => $target_foto);
    array_push($_SESSION['data'], $newisi);

    header("Location: halamanakhir.php");
?>

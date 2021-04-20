<?php
require_once '../config/koneksi.php';
require_once '../models/Pegawai.php';
$pegawai = new Pegawai();

if ($_POST) {
    $action = $_POST['action'];

    if ($action == "hapus" && $_POST['id']) {
        $id[] = $_POST['id'];
        $pegawai->deletePegawai($id);
        echo "<script>alert('data berhasil dihapus')</script>";
        echo "<script>window.location.href = '../index.php?page=data-pegawai'</script>";
    }
}

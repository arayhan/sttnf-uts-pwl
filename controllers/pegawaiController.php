<?php
require_once '../config/koneksi.php';
require_once '../models/Pegawai.php';
$pegawai = new Pegawai();

if ($_POST) {
    $action = $_POST['action'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $agama = $_POST['agama'];
    $divisi = $_POST['divisi'];
    $foto = $_POST['foto'];

    $data = [$nip, $nama, $email, $agama, $divisi, $foto];

    if ($action == "hapus" && $_POST['id']) {
        $id = $_POST['id'];
        $pegawai->deletePegawai($id);
        echo "<script>alert('data berhasil dihapus')</script>";
    } else if ($action == "edit" && $_POST['id']) {
        $id = $_POST['id'];
        $pegawai->updatePegawai($id, $data);
    }

    echo "<script>window.location.href = '../index.php?page=data-pegawai'</script>";
}

<?php
require_once 'models/Pegawai.php';
$pegawai = new Pegawai();
$result = $pegawai->getPegawai();
?>

<h3>Data Pegawai</h3>

<a href="index.php?page=form-pegawai" class="btn btn-primary">Tambah Data</a>
<div class="my-3"></div>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Agama</th>
            <th scope="col">Divisi</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($result as $data) {
        ?>
            <tr>
                <td scope="row"><?= $no; ?></td>
                <td><?= $data['nip']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['email']; ?></td>
                <td><?= $data['agama']; ?></td>
                <td><?= $data['divisi']; ?></td>
                <td>
                    <a href="index.php?page=detail-pegawai" class="badge badge-success">Detail</a>
                    <a href="index.php?page=form-pegawai&action=edit" class="badge badge-warning">Edit</a>
                    <a href="index.php?page=data-pegawai" class="badge badge-danger">Hapus</a>
                </td>
            </tr>
            <?php $no++; ?>
        <?php } ?>
    </tbody>
</table>
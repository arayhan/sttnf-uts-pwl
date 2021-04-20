<?php
if ($_REQUEST['id']) {
    $id = $_REQUEST['id'];
    require_once 'models/Pegawai.php';
    $pegawai = new Pegawai();
    $result = $pegawai->getDetailPegawai($id);
}
?>

<a class="btn btn-dark mb-3" href="index.php?page=data-pegawai">Kembali</a>
<div class="card">
    <div class="card-body">
        <table border="0">
            <?php foreach ($result as $data) { ?>
                <tr>
                    <td>NIP</td>
                    <td class="px-3">:</td>
                    <td><?= $data['nip'] ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td class="px-3">:</td>
                    <td><?= $data['nama'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td class="px-3">:</td>
                    <td><?= $data['email'] ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td class="px-3">:</td>
                    <td><?= $data['agama'] ?></td>
                </tr>
                <tr>
                    <td>Divisi</td>
                    <td class="px-3">:</td>
                    <td><?= $data['divisi'] ?></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td class="px-3">:</td>
                    <td>
                        <?php if ($data['foto'] && file_exists('assets/images/foto/' . $data['foto'])) { ?>
                            <img src="<?= 'assets/images/foto/' . $data['foto'] ?>" alt="">
                        <?php } else { ?>
                            <span class="text-danger font-italic">Tidak ada foto </span>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
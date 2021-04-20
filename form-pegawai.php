<?php
require_once('models/Divisi.php');

$divisiObj = new Divisi();
$divisiData = $divisiObj->getDivisi();

define('AGAMA', ['islam', 'kristen katolik', 'kristen protestan', 'hindu', 'buddha', 'kong hu chu']);
?>

<div>
    <h3>Tambah Data Pegawai</h3>

    <div class="mt-3 mb-5"></div>

    <form method="post" action="controllers/pegawaiController.php">
        <div class="form-group row">
            <label class="col-sm-2" for="nip">NIP</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="ion-card"></i></div>
                    </div>
                    <input required maxlength="5" type="text" class="form-control" name="nip" id="nip" placeholder="NIP">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="nama">Nama</label>
            <div class="col-sm-10">
                <input required required type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="email">Email</label>
            <div class="col-sm-10">
                <input required type="text" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="Agama">Agama</label>
            <div class="col-sm-10">
                <?php foreach (AGAMA as $agama) : ?>
                    <div class="form-check">
                        <input required class="form-check-input" type="radio" name="agama" id="<?= $agama ?>" value="<?= $agama ?>">
                        <label class="form-check-label" for="<?= $agama ?>"><?= $agama ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="divisi">Divisi</label>
            <div class="col-sm-10">
                <select required name="divisi" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option>-- Pilih Divisi --</option>
                    <?php foreach ($divisiData as $divisi) { ?>
                        <option value="<?= $divisi['id'] ?>"><?= $divisi['nama'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="foto">Foto</label>
            <div class="col-sm-10 input-group mb-3">
                <div class="custom-file">
                    <input type="file" name="foto" class="custom-file-input" id="foto">
                    <label class="custom-file-label" for="foto">Choose file</label>
                </div>
            </div>
        </div>
        <button type="submit" name="action" value="tambah" class="btn btn-primary float-right">Tambah</button>
    </form>
</div>
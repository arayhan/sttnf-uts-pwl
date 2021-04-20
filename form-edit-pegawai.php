<?php
if ($_REQUEST['id']) {
    $id = $_REQUEST['id'];

    require_once('models/Pegawai.php');
    require_once('models/Divisi.php');

    $pegawaiObj = new Pegawai();
    $divisiObj = new Divisi();

    $divisiData = $divisiObj->getDivisi();
    $pegawaiData = $pegawaiObj->getDetailPegawai($id);

    define('AGAMA', ['islam', 'kristen katolik', 'kristen protestan', 'hindu', 'buddha', 'kong hu chu']);
?>

    <div>
        <h3>Edit Data Pegawai</h3>

        <div class="mt-3 mb-5"></div>

        <form method="post" action="controllers/pegawaiController.php">
            <div class="form-group row">
                <label class="col-sm-2" for="nip">NIP</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="ion-card"></i></div>
                        </div>
                        <input required type="text" value="<?= $pegawaiData[0]['nip'] ?>" class="form-control" name="nip" id="nip" placeholder="NIP">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2" for="nama">Nama</label>
                <div class="col-sm-10">
                    <input required type="text" value="<?= $pegawaiData[0]['nama'] ?>" class="form-control" name="nama" id="nama" placeholder="Nama">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2" for="email">Email</label>
                <div class="col-sm-10">
                    <input required type="text" value="<?= $pegawaiData[0]['email'] ?>" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2" for="Agama">Agama</label>
                <div class="col-sm-10">
                    <?php foreach (AGAMA as $agama) : ?>
                        <div class="form-check">
                            <input required <?= $pegawaiData[0]['agama'] == $agama ? 'checked' : '' ?> class="form-check-input" type="radio" name="agama" id="<?= $agama ?>" value="<?= $agama ?>">
                            <label class="form-check-label" for="<?= $agama ?>"><?= $agama ?></label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2" for="divisi">Divisi</label>
                <div class="col-sm-10">
                    <select required name="divisi" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option <?= $pegawaiData[0]['divisi'] == "" ? "selected" : "" ?>>-- Pilih Divisi --</option>
                        <?php foreach ($divisiData as $divisi) { ?>
                            <option <?= $pegawaiData[0]['divisi'] == $divisi['nama'] ? "selected" : "" ?> value="<?= $divisi['id'] ?>"><?= $divisi['nama'] ?></option>
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
            <input type="hidden" name="id" value="<?= $id ?>">
            <button type="submit" name="action" value="edit" class="btn btn-primary float-right">Edit</button>
        </form>
    </div>
<?php } ?>
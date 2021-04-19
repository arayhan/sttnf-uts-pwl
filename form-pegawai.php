<?php
require_once('models/Divisi.php');
$divisi = new Divisi();
$result = $divisi->getDivisi();
?>

<div>
    <h3>Tambah Data Pegawai</h3>

    <div class="mt-3 mb-5"></div>

    <form>
        <div class="form-group row">
            <label class="col-sm-2" for="nip">NIP</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="nama">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="email">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="Agama">Agama</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="agama" id="islam" value="islam">
                    <label class="form-check-label" for="islam">
                        Islam
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="agama" id="kristes katolik" value="kristes katolik">
                    <label class="form-check-label" for="kristes katolik">
                        Kristen Katolik
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="agama" id="kristes protestan" value="kristes protestan">
                    <label class="form-check-label" for="kristes protestan">
                        Kristen Protestan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="agama" id="hindu" value="hindu">
                    <label class="form-check-label" for="hindu">
                        Hindu
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="agama" id="buddha" value="buddha">
                    <label class="form-check-label" for="buddha">
                        Buddha
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="agama" id="kong hu chu" value="kong hu chu">
                    <label class="form-check-label" for="kong hu chu">
                        Kong Hu Chu
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="divisi">Divisi</label>
            <div class="col-sm-10">
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>-- Pilih Divisi --</option>
                    <?php foreach ($result as $data) { ?>
                        <option value="<?= $data['divisi'] ?>"><?= $data['divisi'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2" for="foto">Foto</label>
            <div class="col-sm-10 input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="foto">
                    <label class="custom-file-label" for="foto">Choose file</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
</div>
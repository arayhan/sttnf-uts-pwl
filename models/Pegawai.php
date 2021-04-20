<?php
class Pegawai
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getPegawai()
    {
        $sql = "SELECT tb_pegawai.*, tb_divisi.nama AS divisi FROM tb_pegawai
                INNER JOIN tb_divisi ON tb_pegawai.id_divisi = tb_divisi.id
                ORDER BY tb_pegawai.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getDetailPegawai($id)
    {
        $sql = "SELECT tb_pegawai.*, tb_divisi.nama as divisi FROM tb_pegawai INNER JOIN tb_divisi ON tb_pegawai.id_divisi = tb_divisi.id WHERE tb_pegawai.id=$id";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function insertPegawai($data)
    {
        $sql = "INSERT INTO tb_pegawai(nip,nama,email,agama,id_divisi,foto) VALUES (?,?,?,?,?,?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function deletePegawai($id)
    {
        $sql = "DELETE FROM tb_pegawai WHERE id=$id";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
    }

    public function updatePegawai($id, $data)
    {
        $sql = "UPDATE tb_pegawai SET nip=?,nama=?,email=?,agama=?, id_divisi=?,foto=? WHERE id=$id";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

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
}

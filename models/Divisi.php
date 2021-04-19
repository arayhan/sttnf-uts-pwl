<?php
class Divisi
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function getDivisi()
    {
        $sql = "SELECT tb_divisi.nama AS divisi FROM tb_divisi";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

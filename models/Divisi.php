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
        $sql = "SELECT * FROM tb_divisi";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

<?php
class Pegawai
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function dataPegawai()
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori FROM produk
                INNER JOIN jenis ON jenis.id = produk.idjenis
                ORDER BY produk.id DESC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getProduk($id)
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori FROM produk
                INNER JOIN jenis ON jenis.id = produk.idjenis
                WHERE produk.id = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function dataJenis()
    {
        $sql = "SELECT * FROM jenis ";

        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO produk(kode,nama,kondisi,harga,stok,idjenis,foto)
                VALUES (?,?,?,?,?,?,?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {
        $sql = "UPDATE produk SET kode=?,nama=?,kondisi=?,harga=?,
                stok=?,idjenis=?,foto=? WHERE id=?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM produk WHERE id=?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($id);
    }
}

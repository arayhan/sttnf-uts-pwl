<?php

class Member
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function handleLogin($data)
    {
        $sql = "SELECT * FROM tb_member WHERE username = ? AND password = MD5(?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}

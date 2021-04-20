<?php
session_start();
require_once('../config/koneksi.php');
require_once('../models/Member.php');

$memberObj = new Member();

if ($_POST) {
    if ($_POST['action']) {
        $action = $_POST['action'];

        if ($action == "login") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $data = [$username, $password];

            $authData = $memberObj->handleLogin($data);

            if ($authData) {
                $_SESSION['MEMBER'] = $authData;

                echo "<script>alert('login berhasil!')</script>";
                echo "<script>window.location.href = '../index.php'</script>";
            } else {
                echo "<script>alert('username atau password salah')</script>";
                echo "<script>window.location.href = '../login.php'</script>";
            }
        } else if ($action == "logout") {
            session_destroy();
            echo "<script>window.location.href = '../index.php'</script>";
        }
    }
}

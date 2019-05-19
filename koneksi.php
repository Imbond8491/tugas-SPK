<?php

$server = "localhost";
$user = "Ali";
$password = "ali7";
$nama_database = "ali";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
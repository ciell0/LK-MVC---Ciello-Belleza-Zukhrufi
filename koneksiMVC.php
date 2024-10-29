<?php
$mysqli = new mysqli('localhost', 'root', '', 'pemweb');

if ($mysqli->connect_errno) {
    die("Gagal terhubung ke MySQL: " . $mysqli->connect_error);
}
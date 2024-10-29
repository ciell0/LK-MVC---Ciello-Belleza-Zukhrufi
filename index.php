<?php
include_once("c_programKerja.php");

$controller = new c_programKerja();
$controller->invoke();


if (isset ($_POST['create'])) {
    $nama = $_POST['nama'];
    $surat = $_POST['surat'];
    $controller->model->setProgramKerja($nama, $surat);

} elseif (isset($_POST['update'])) {
    $index = $_POST['index'];
    $nama = $_POST['nama'];
    $surat = $_POST['surat'];
    $controller->model->update($index, $nama, $surat);

}elseif (isset($_POST['delete'])) {
    $index = $_POST['index'];
    $controller->model->delete($index);
}

// header("Location: index.php");
//     exit();
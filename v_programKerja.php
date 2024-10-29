<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Program Kerja BEM</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Selamat Datang !</h1>
        <h3>Tata Cara Mengolah Tabel :</h3>
        <ul><p>1. Jika ingin <b>menambahkan</b> data baru, silahkan masukkan nama proker dan surat keterangan</p></ul>
        <ul><p>2. Jika ingin <b>mengupdate</b> data dalam tabel, silahkan masukkan nama program proker yang akan diubah pada inputan "Cari Nama"</p></ul>
        <ul>  dan masukkan data baru pada input Nama Program kerja dan Surat keterangan</ul>
        <ul><p>3. Jika ingin <b>menghapus</b> data dalam tabel, silahkan masukkan nama program ang akan dihapus pada inputan "cari"</p></ul>
        ----------------------------------------------------------------------------------------------------------------------------------
        <br><br>
        Cari Nama : <input type="text" name="index" require>
        <br><br><br>
        Nama Program Kerja : <input type="text" name="nama" require>
        <br><br>
        Surat Keterangan : <input type="text" name="surat" require>
        <br><br>
        <input type="submit" name="create" value="Tambah">
        <input type="submit" name="delete" value="Hapus">
        <input type="submit" name="update" value="Update">
    </form>
----------------------------------------------------------------------------------------------------------------------------------
    <h2>Daftar Program Kerja BEM</h2>
    <table border="1" >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Program Kerja</th>
                <th>Surat Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proker as $p): ?>
                <tr>
                    <td><?php echo $p->nomorProgram?></td>
                    <td><?php echo $p->namaProgram?></td>
                    <td><?php echo $p->suratKeterangan?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>

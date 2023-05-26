<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>

<body>
    <h3>Input Data Buku</h3>
    <form action="simpan.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Kode Buku</td>
                <td><input type="text" name="kodebuku"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><input type="text" name="pengarang"></td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td><input type="text" name="tahunterbit"></td>
            </tr>
            <tr>
                <td>Jumlah Halaman</td>
                <td><input type="text" name="jumlahhalaman"></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td><input type="text" name="kategori"></td>
            </tr>
            <tr>
                <td>Cover</td>
                <td><input type="file" name="file" id="file"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <h3>Data</h3>
    <form action="read.php" method="post">
        <input type="submit" name="read" value="Show Data">
    </form>
</body>

</html>

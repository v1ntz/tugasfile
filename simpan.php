<?php
if (isset($_POST['submit'])) {
    $kodebuku = $_POST['kodebuku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahunterbit = $_POST['tahunterbit'];
    $jumlahhalaman = $_POST['jumlahhalaman'];
    $penerbit = $_POST['penerbit'];
    $kategori = $_POST['kategori'];
    $targetDir = "C:/xampp/htdocs/FILES/image/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            $data = "Kode Buku: " . $kodebuku . "\n";
            $data .= "Judul: " . $judul . "\n";
            $data .= "Pengarang: " . $pengarang . "\n";
            $data .= "Tahun Terbit: " . $tahunterbit . "\n";
            $data .= "Jumlah Halaman: " . $jumlahhalaman . "\n";
            $data .= "Penerbit: " . $penerbit . "\n";
            $data .= "Kategori: " . $kategori . "\n";
            $data .= "Cover: " . basename($_FILES["file"]["name"]) . "\n\n";

            $file = "C:/xampp/htdocs/FILES/databuku.txt";
            file_put_contents($file, $data, FILE_APPEND);

            echo "Data has been saved to databuku.txt file.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
echo '<a href="form.php"><button>Back</button></a>';
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $file = "C:/xampp/htdocs/FILES/databuku.txt";
    $data = file_get_contents($file);
    $pattern = '/([^:\n]+):\s*([^\n]+)/';
    preg_match_all($pattern, $data, $matches, PREG_SET_ORDER);

    $index = -1;
    for ($i = 0; $i < count($matches); $i += 8) {
        if ($matches[$i][2] === $id) {
            $index = $i;
            break;
        }
    }

    if ($index !== -1) {
        $kodeBuku = $matches[$index][2];
        $judul = $matches[$index + 1][2];
        $pengarang = $matches[$index + 2][2];
        $tahunTerbit = $matches[$index + 3][2];
        $jumlahHalaman = $matches[$index + 4][2];
        $penerbit = $matches[$index + 5][2];
        $kategori = $matches[$index + 6][2];
        $cover = $matches[$index + 7][2];

        // Display the edit form with pre-filled values
        echo '
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="' . $id . '">
            <label for="kodeBuku">Kode Buku:</label>
            <input type="text" name="kodeBuku" value="' . $kodeBuku . '"><br>
            <label for="judul">Judul:</label>
            <input type="text" name="judul" value="' . $judul . '"><br>
            <label for="pengarang">Pengarang:</label>
            <input type="text" name="pengarang" value="' . $pengarang . '"><br>
            <label for="tahunTerbit">Tahun Terbit:</label>
            <input type="text" name="tahunTerbit" value="' . $tahunTerbit . '"><br>
            <label for="jumlahHalaman">Jumlah Halaman:</label>
            <input type="text" name="jumlahHalaman" value="' . $jumlahHalaman . '"><br>
            <label for="penerbit">Penerbit:</label>
            <input type="text" name="penerbit" value="' . $penerbit . '"><br>
            <label for="kategori">Kategori:</label>
            <input type="text" name="kategori" value="' . $kategori . '"><br>
            <label for="cover">Cover:</label>
            <input type="text" name="cover" value="' . $cover . '"><br>
            <input type="submit" value="Update">
        </form>
        ';
    } else {
        echo "Book not found.";
    }
} else {
    echo "Invalid request.";
}
?>
<button onclick="location.href='form.php'">Back to Form</button>
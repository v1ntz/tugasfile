<?php
$file = "C:/xampp/htdocs/FILES/databuku.txt";
$data = file_get_contents($file);

$pattern = '/([^:\n]+):\s*([^\n]+)/';

echo '<table style="border-collapse: collapse; border: 1px solid black;">';
echo '<tr><th style="border: 1px solid black;">Kode Buku</th><th style="border: 1px solid black;">Judul</th><th style="border: 1px solid black;">Pengarang</th><th style="border: 1px solid black;">Tahun Terbit</th><th style="border: 1px solid black;">Jumlah Halaman</th><th style="border: 1px solid black;">Penerbit</th><th style="border: 1px solid black;">Kategori</th><th style="border: 1px solid black;">Cover</th><th style="border: 1px solid black;">Actions</th></tr>';

preg_match_all($pattern, $data, $matches, PREG_SET_ORDER);

for ($i = 0; $i < count($matches); $i += 8) {
    echo '<tr>';
    echo '<td style="border: 1px solid black;">' . $matches[$i][2] . '</td>';
    echo '<td style="border: 1px solid black;">' . $matches[$i + 1][2] . '</td>';
    echo '<td style="border: 1px solid black;">' . $matches[$i + 2][2] . '</td>';
    echo '<td style="border: 1px solid black;">' . $matches[$i + 3][2] . '</td>';
    echo '<td style="border: 1px solid black;">' . $matches[$i + 4][2] . '</td>';
    echo '<td style="border: 1px solid black;">' . $matches[$i + 5][2] . '</td>';
    echo '<td style="border: 1px solid black;">' . $matches[$i + 6][2] . '</td>';
    echo '<td style="border: 1px solid black;">' . $matches[$i + 7][2] . '</td>';
    echo '<td style="border: 1px solid black;">';
    echo '<a href="edit.php?id=' . $matches[$i][2] . '">Edit</a> ';
    echo '</td>';
    echo '</tr>';
}

echo '</table>';
?>

<button onclick="location.href='form.php'">Back to Form</button>

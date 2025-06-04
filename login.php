<?php
// Contoh kode PHP sederhana

// 1. Deklarasi variabel
$nama = "John Doe";
$umur = 25;
$pekerjaan = "Developer";

// 2. Fungsi sederhana
function sapa($nama) {
    return "Halo, " . $nama . "! Selamat datang.";
}

// 3. Penggunaan if-else
if ($umur >= 18) {
    $status = "Dewasa";
} else {
    $status = "Anak-anak";
}

// 4. Array
$hobi = array("Membaca", "Bersepeda", "Memancing");

// 5. Perulangan foreach
echo "<h2>Hobi:</h2>";
echo "<ul>";
foreach ($hobi as $h) {
    echo "<li>" . $h . "</li>";
}
echo "</ul>";

// 6. Menampilkan output
echo "<h1>" . sapa($nama) . "</h1>";
echo "<p>Nama: " . $nama . "</p>";
echo "<p>Umur: " . $umur . " (" . $status . ")</p>";
echo "<p>Pekerjaan: " . $pekerjaan . "</p>";

// 7. Form sederhana
echo '
<h2>Form Kontak</h2>
<form method="post" action="">
    <label>Nama:</label>
    <input type="text" name="nama"><br>
    <label>Email:</label>
    <input type="email" name="email"><br>
    <label>Pesan:</label>
    <textarea name="pesan"></textarea><br>
    <input type="submit" value="Kirim">
</form>
';

// 8. Menangani form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNama = $_POST["nama"];
    $inputEmail = $_POST["email"];
    $inputPesan = $_POST["pesan"];
    
    echo "<h3>Terima kasih, $inputNama!</h3>";
    echo "<p>Pesan Anda telah diterima.</p>";
}
?>
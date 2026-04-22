<?php
// MATERI FUNCTION

echo "<h2 style='color:blue;'>Materi 3: Function PHP</h2>";
echo "<hr>";

// function sapa
function sapa($nama) {
    return "Halo, selamat datang $nama <br>";
}

// function tambah
function tambah($a, $b) {
    return $a + $b;
}

// function cek bilangan
function cekBilangan($angka) {
    return ($angka % 2 == 0) ? "Genap" : "Ganjil";
}
?>

<!-- FORM INPUT -->
<h3>Form Input</h3>
<form method="post">
    Nama: <input type="text" name="nama">
    <br><br>

    Angka 1: <input type="number" name="angka1">
    <br><br>

    Angka 2: <input type="number" name="angka2">
    <br><br>

    Cek Angka: <input type="number" name="cek">
    <br><br>

    <button type="submit" name="kirim">Kirim</button>
</form>

<?php
// CEK JIKA TOMBOL DIKLIK
if (isset($_POST['kirim'])) {

    $nama = $_POST['nama'];
    $a = $_POST['angka1'];
    $b = $_POST['angka2'];
    $cek = $_POST['cek'];

    echo "<hr>";
    echo "<h3 style='color:green;'>Hasil:</h3>";

    if (!empty($nama)) {
        echo sapa($nama);
    }

    if ($a !== "" && $b !== "") {
        echo "Hasil tambah: " . tambah($a, $b) . "<br>";
    }

    if ($cek !== "") {
        echo "Angka $cek adalah: " . cekBilangan($cek) . "<br>";
    }
}
?>
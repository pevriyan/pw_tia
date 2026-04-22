<form method ="POST">
    Masukkan Angka : <input type="number" name="angka"><br>
    <input type="submit" value="kirim">
</form>

<?php
if(isset($_POST['angka'])){
    $data = $_POST['angka'];

    // FOR
    echo "<br> Perulangan FOR <br>";
    for ($i = 1; $i <= $data; $i++) {
        echo "Angka ke $i <br>";
    }

    // GENAP / GANJIL
    if ($data % 2 == 0) {
        echo "angka $data adalah bilangan genap <br>";
    } else { 
        echo "angka $data adalah bilangan ganjil <br>";
    }

    // WHILE
    echo "<br> Perulangan WHILE <br>";
    $i = 1;
    while($i <= $data) {
        echo "Angka ke $i <br>";
        $i++;
    }

    // DO WHILE
    echo "<br> Perulangan DO WHILE <br>";
    $i = 1;
    do {
        echo "Angka ke $i <br>";
        $i++;
    } while ($i <= $data); // <- jangan lupa titik koma
}
?>
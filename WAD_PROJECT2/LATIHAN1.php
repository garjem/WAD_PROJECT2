<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator PHP</title>
</head>
<body>
    <form method="post" action="">
        <label for="angka">Masukkan Angka:</label>
        <input type="number" name="angka" id="angka" required><br><br>

        <label for="operasi">Pilih Operasi:</label>
        <select name="operasi" id="operasi">
            <option value="tambah">Penjumlahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
        </select><br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    
    if (isset($_POST['hitung'])) {
        
        $angka = $_POST['angka'];
        $operasi = $_POST['operasi'];

        
        if ($operasi == 'tambah') {
            $hasil = $angka + $angka;
        } elseif ($operasi == 'kurang') {
            $hasil = $angka - $angka;
        } elseif ($operasi == 'kali') {
            $hasil = $angka * $angka;
        } elseif ($operasi == 'bagi') {
            $hasil = $angka / $angka;
        }

        
        echo "Hasil perhitungan: $angka $operasi $angka = $hasil";
    }
    ?>
</body>
</html>
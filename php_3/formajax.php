<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Form Contoh</h2>
    <form id="myForm">
        <label for="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br><br>

        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">
        <!-- Hasil akan ditampilkan di sini -->
    </div>

    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (e) {
                e.preventDefault(); // Mencegah pengiriman form secara default

                // Mengumpulkan data form
                var formData = $("#myForm").serialize();

                // Kirim data ke server PHP (ke file yang sama)
                $.ajax({
                    url: "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>",
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        // Tampilkan hasil dari server di div "hasil"
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];

    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = [];
    }

    $selectedJenisKelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';

    // Output HTML untuk ditampilkan di div #hasil
    echo "<h3>Hasil Pilihan Anda:</h3>";
    echo "<p><strong>Buah:</strong> " . htmlspecialchars($selectedBuah) . "</p>";

    if (!empty($selectedWarna)) {
        echo "<p><strong>Warna Favorit:</strong> " . htmlspecialchars(implode(", ", $selectedWarna)) . "</p>";
    } else {
        echo "<p><strong>Warna Favorit:</strong> Tidak ada yang dipilih</p>";
    }

    if (!empty($selectedJenisKelamin)) {
        echo "<p><strong>Jenis Kelamin:</strong> " . htmlspecialchars($selectedJenisKelamin) . "</p>";
    } else {
        echo "<p><strong>Jenis Kelamin:</strong> Tidak dipilih</p>";
    }
    
    // Penting: exit agar tidak menampilkan HTML form lagi
    exit;
}
?>
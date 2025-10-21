<!DOCTYPE html>
<html>
<head>
    <title>Soal 7.3 - Form Validasi dengan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Soal 7.3 - Form Input dengan Validasi AJAX</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil">
        <!-- Hasil akan ditampilkan di sini -->
    </div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah submit normal

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Validasi Client-Side
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Kirim via AJAX jika validasi lolos
                if (valid) {
                    $.ajax({
                        url: "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>",
                        type: "POST",
                        data: $("#myForm").serialize(),
                        success: function(response) {
                            $("#hasil").html(response);
                        }
                    });
                }
            });
        });
    </script>

    <br><br>
   
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $errors = array();

    // Validasi Server-Side
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Output hasil
    if (!empty($errors)) {
        echo "<br><br><strong>Error:</strong><br>";
        foreach ($errors as $error) {
            echo "- " . $error . "<br>";
        }
    } else {
        echo "<br><br><strong>Data berhasil dikirim!</strong><br>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Email: " . htmlspecialchars($email);
    }
    
    exit; // Penting untuk AJAX
}
?>

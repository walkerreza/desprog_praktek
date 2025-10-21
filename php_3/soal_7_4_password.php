<!DOCTYPE html>
<html>
<head>
    <title>Soal 7.4 - Form Validasi dengan Password</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Soal 7.4 - Form Input dengan Validasi Password</h1>
    <form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>
        <small style="color: gray;">Minimal 8 karakter</small><br><br>

        <input type="submit" value="Submit">
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Validasi Nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                // Validasi Email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                // Validasi Password (minimal 8 karakter)
                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                // Mencegah submit jika validasi gagal
                if (!valid) {
                    event.preventDefault();
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
    $password = $_POST["password"];
    $errors = array();

    // Validasi Nama
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

    // Validasi Email
    if (empty($email)) {
        $errors[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    // Validasi Password (minimal 8 karakter)
    if (empty($password)) {
        $errors[] = "Password harus diisi.";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter.";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) {
        echo "<br><br><strong>Error:</strong><br>";
        foreach ($errors as $error) {
            echo "- " . $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        echo "<br><br><strong>Data berhasil dikirim!</strong><br>";
        echo "Nama: " . htmlspecialchars($nama) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Password: " . str_repeat("*", strlen($password)) . " (tersembunyi untuk keamanan)";
    }
}
?>

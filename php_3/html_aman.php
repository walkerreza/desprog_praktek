<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>html aman</title>
        
    </head>
    <body>

<form action="" method="post">
    <label>input : </label>
    <textarea name="input" id=""></textarea>

    <label>email : </label>
    <textarea name="email" id=""></textarea>
    <button type="submit">submit</button>



</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['input'])) {
        $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
        echo "<p>Input Aman: " . $input . "</p>";
        $email  =  $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email valid: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            echo "<p>Email tidak valid!</p>";
        }
}

    ?>

</body>
</html>
<?php
// cek apakah tombol login sudah diklik atau belum
if (isset($_POST ["submit"])) {
    //cek apakah username dan password benar
    if (
        $_POST["username"] == "admin"
        && $_POST["password"] == "12345"
    ) {
        // jika benar, lempar ke halaman admin.php
        header("Location: admin.php");
        exit; // kode setelahnya tidak akan dieksekusi
    } else {
        // jika salah tampilkan error
    } $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form LOgin</title>
</head>
<body>
    <h1>Login Form</h1>

    <?php if(isset($error)) : ?>
        <p style="color: red">username dan password salah, silahkan cobalagi!</p>
    <?php endif ?>

    <form method="post">
        <table>
        <tr>
            <td><label for="username">Username : </label></td>
            <td><input type="text" id="username" name="username" ></td>         
        </tr>
        <tr>
            <td><label for="password">Password : </label></td>
            <td><input type="password" id="password" name="password"></td>    
        </tr>    
        </table>
        <button type="submit" name="submit">Login</button>
        </tr>
    </form>

</body>
</html>
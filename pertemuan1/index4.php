<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program menentukan tahun Kabisat</title>
</head>
<body>
    <?php
    // Menentukan tahun Kabisat
    $tahun = 1900;

    if($tahun % 400 === 0){
        echo "<p>$tahun adalah tahun Kabisat</p>";
    }else if ($tahun % 100 === 0){
        echo "<p>$tahun adalah bukan tahun kabisat</p>";
    }else if ($tahun % 4 === 0){
        echo "<p>$tahun adalah tahun Kabisat</p>";
    }
    ?>
</body>
</html>
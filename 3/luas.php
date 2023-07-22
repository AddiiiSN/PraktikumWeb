<!-- luas.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Hitung Luas ½ Lingkaran</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 20px;
    }

    h2 {
        color: #333;
        text-align: center;
    }

    .result {
        background-color: #fff;
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 4px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    }

    .result p {
        margin: 0;
    }

    .result span {
        font-weight: bold;
    }
    </style>
</head>

<body>
    <h2>Hitung Luas ½ Lingkaran</h2>
    <div class="result">
        <?php
function luasLingkaran($diameter)
{
    $r = $diameter / 2;

    $phi = 3.14;
    $luas = $phi * pow($r, 2);

    return $luas;
}

        $diameter = 10;
        $luas_lingkaran = luasLingkaran($diameter);
        echo "<p>Luas ½ lingkaran dengan diameter <span>$diameter</span> CM adalah <span>$luas_lingkaran</span> CM<sup>2</sup></p>";
        ?>
    </div>
</body>

</html>